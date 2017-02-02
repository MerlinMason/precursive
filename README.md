# Precursive Public Site

Live Server IP: `46.101.16.196`

## Getting started

- Clone the repo to your machine
- Fire up a LAMP server pointed at the project root (no MySQL needed)
- Load dev/js dependencies `$ npm install`
- For CSS / JS changes run `$ grunt watch`
- Change cache settings in `/site/settings/caching.yaml` to `stache_always_update: true static_caching_enabled: false`

## Basics

- Site is built on Statamic (https://statamic.com)
- Flatfile CMS (no database)
- Everything version controlled (including content)
- Content changes on production are committed to version control with Spock (https://github.com/statamic/spock)
- Deployments managed with Forge (https://forge.laravel.com)
- Pushing to `master` automatically deploys to production
- All theme content lives in `/site/themes/precursive`
- Theme JS written in ES6 and transformed with Babel (https://babeljs.io)
- Hosted on Digital Ocean (https://www.digitalocean.com)
- Social icons generated with Icomoon (http://icomoon.io/app), this project can be edited by uploading the `selection.json` file to Icomoon
