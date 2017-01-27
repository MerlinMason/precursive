<?php

namespace Statamic\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Statamic\API\Entry;
use Statamic\API\Config;
use Statamic\API\Helper;
use Statamic\API\Content;
use Statamic\API\Collection;
use Statamic\Presenters\PaginationPresenter;

/**
 * Controller for the entry listing
 */
class EntriesController extends CpController
{
    /**
     * List folders containing entries
     *
     * The view for /cp/entries
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return redirect()->route('entries');
    }

    /**
     * List the entries for a collection
     *
     * The view for /cp/entries/{collection}
     *
     * @param string $collection
     * @return \Illuminate\View\View
     */
    public function show($collection)
    {
        $this->access("collections:$collection:edit");

        if (! Collection::handleExists($collection)) {
            abort(404, "Collection [$collection] does not exist.");
        }

        $collection = Collection::whereHandle($collection);

        $sort = 'title';
        $sort_order = 'asc';
        if ($collection->order() === 'date') {
            $sort = 'datestamp';
            $sort_order = $collection->get('sort_dir', 'desc');
        } elseif ($collection->order() === 'number') {
            $sort = 'order';
        }

        $reorderable = $collection->order() === 'number' && $collection->count() <= Config::get('cp.pagination_size');

        return view('entries.index', [
            'collection' => $collection,
            'title' => $collection->title(),
            'sort' => $sort,
            'sort_order' => $sort_order,
            'reorderable' => $reorderable,
            'new_entry_link' => route('entry.create', $collection->path())
        ]);
    }

    /**
     * Get the entries as JSON
     *
     * Used for injecting into the Vue templates
     *
     * @param string $folder
     * @return mixed
     */
    public function get($folder)
    {
        $collection = Collection::whereHandle($folder);

        $entries = $collection->entries()->supplement('checked', function() {
            return false;
        });

        if ($collection->order() === 'date') {
            $format = Config::get('cp.date_format');

            $entries->supplement('date_col_header', function ($entry) use ($format) {
                return $entry->date()->format($format);
            });
        }

        $entries = $entries->values();

        $columns = array_get($collection->data(), 'columns', ['title', 'slug']);

        if ($collection->order() === 'date') {
            $entries->reverse();
            $columns[] = ['label' => 'date_col_header', 'field' => 'datestring', 'actual' => 'datestamp'];
        } elseif ($collection->order() === 'number') {
            $columns[] = 'order';
            // also actually sort by order
            $entries = $entries->multisort('order');
        }

        if ($customSort = $this->request->sort) {
            $entries = $entries->multisort($customSort);
        }

        if ($this->request->order == 'desc') {
            $entries = $entries->reverse();
        }

        // Set up the paginator, since we don't want to display all the assets.
        $totalEntryCount = $entries->count();
        $perPage = Config::get('cp.pagination_size');
        $currentPage = (int) $this->request->page ?: 1;
        $offset = ($currentPage - 1) * $perPage;
        $entries = $entries->slice($offset, $perPage);
        $paginator = new LengthAwarePaginator($entries, $totalEntryCount, $perPage, $currentPage);

        return [
            'columns' => $columns,
            'items' => $entries->toArray(),
            'pagination' => [
                'totalItems' => $totalEntryCount,
                'itemsPerPage' => $perPage,
                'totalPages'    => $paginator->lastPage(),
                'currentPage'   => $paginator->currentPage(),
                'prevPage'      => $paginator->previousPageUrl(),
                'nextPage'      => $paginator->nextPageUrl(),
                'segments'      => array_get($paginator->render(new PaginationPresenter($paginator)), 'segments')
            ]
        ];
    }

    /**
     * Delete an entry
     *
     * @return array
     */
    public function delete()
    {
        $ids = Helper::ensureArray($this->request->input('ids'));

        $entries = [];

        // Gather all the entries to be deleted, but before deleting, check if
        // there are any authorization issues before attempting to continue.
        foreach ($ids as $id) {
            $entry = Entry::find($id);
            $entries[] = $entry;

            $this->authorize("collections:{$entry->collection()->path()}:delete");
        }

        // All good? Commence deleting.
        foreach ($entries as $entry) {
            $entry->delete();
        }

        return ['success' => true];
    }

    public function reorder()
    {
        $ids = $this->request->input('ids');

        foreach ($ids as $key => $id) {
            $entry = Entry::find($id);

            $entry->order($key + 1);

            $entry->save();
        }

        return ['success' => true];
    }
}
