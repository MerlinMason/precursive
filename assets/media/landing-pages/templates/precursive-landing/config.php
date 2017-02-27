<?php
/**
* WordPress Landing Page Config File
* Template Name:    Precursive Landing
* @package  WordPress Landing Pages
* @author   Inbound Now
*
* This is a demo template for developers and designers to use as a reference for building landing page templates
* for Wordpress Landing Pages Plugin http://wordpress.org/plugins/landing-pages/
*
*/

do_action('lp_global_config'); // The lp_global_config function is for global code added by 3rd party extensions

//gets template directory name to use as identifier - do not edit - include in all template files
$key = lp_get_parent_directory(dirname(__FILE__));
$path = (preg_match("/uploads/", dirname(__FILE__))) ? LANDINGPAGES_UPLOADS_URLPATH . $key .'/' : LANDINGPAGES_URLPATH.'templates/'.$key.'/'; // This defines the path to your template folder. /wp-content/uploads/landing-pages/templates by default

/**
 * Landing Page Main Setup Params
 *
    $lp_data[$key]['info'] Parameters

    'version' => (string) (required)
    - Version Number. default = "1.0"

    'label' => (string) (required)
    - Custom Nice Name for templates. default = template file folder name

    'description' => (string) (required)
    - Landing page description.

    'category' => (string) (required)
    - Category for template. default = "all"

    'demo' => (string) (required)
    - Link to demo url.
*/

/* DEMO TEMPLATE INFO SETUP */
$lp_data[$key]['info'] =
array(
    'data_type' => "template", // Template
    'version' => "1.0.0", // Version Number
    'label' => "Precursive Landing", // Nice Name
    'category' => 'Demo', // Template Category
    'demo' => 'http://demo.inboundnow.com/go/demo-template-preview/', // Demo Link
    'description'   => 'The Demo theme is here to help developers and designs implment thier own designs into the landing page plugin. Study this template to learn about Landing Page Plugin\'s templating system and to assist in building new templates.' // template description
);


/**
 * $lp_data[$key]['settings']
 * Landing Page Main Setting Params
 * - Creates template metaboxes
    $lp_data[$key]['settings'] Parameters

    'label' => (string) (required)
    - Label for Meta Fields.

    'description' => (string) (required)
    - Description for meta Field

    'id' => (string) (required)
    - unprefixed-meta-key. The $key (template file path name) is appended in the loop this array is used in.

    'type' => (string) (required)
    - Meta box type. default = 'text'

    'default' => (string) (optional)
    - Default Field Value.  default = ''

    'options' => (array) (required for metaboxes with multiple options)
    - example: 'options' => array('value' => 'label','value_2'=>'label 2')
    - For dropdowns, checkboxes, etc.

    'context' => (string) (optional)
    - where this box will go, will be used for advanced placement/styling.  default = normal

*/

/* DEMO TEMPLATE Metabox SETUP */
// These values are returned in the template's index.php file with the lp_get_value($post, $key, 'text-box-id')
$lp_data[$key]['settings'] =
array(
    array(
        'label' => 'turn-off-editor', /* Turns off main content */
        'description' => 'Turn off editor',
        'id'    => 'turn-off-editor',
        'type'  => 'custom-css',
        'default'   => '#postdivrich, #lp_2_form_content {display:none !important;}'
        ),
    array(
        'label' => 'Main Heading',
        'description' => 'The main heading',
        'id' => 'main-heading',
        'type' => 'text',
        'default' => 'Scheduling'
        ),
    array(
        'label' => 'Subheading',
        'description' => 'The subheading',
        'id' => 'sub-heading',
        'type' => 'text',
        'default' => 'Made beautifully simple'
        ),
    array(
        'label' => 'Features Copy 1',
        'description' => '',
        'id' => 'features-copy-1',
        'type' => 'wysiwyg',
        'default' => ''
        ),
    array(
        'label' => 'Features Copy 2',
        'description' => '',
        'id' => 'features-copy-2',
        'type' => 'wysiwyg',
        'default' => ''
        ),
    array(
        'label' => 'Features Copy 3',
        'description' => '',
        'id' => 'features-copy-3',
        'type' => 'wysiwyg',
        'default' => ''
        ),
    array(
        'label' => 'Features Copy 4',
        'description' => '',
        'id' => 'features-copy-4',
        'type' => 'wysiwyg',
        'default' => ''
        ),
    array(
        'label' => 'Centered Image',
        'description' => '',
        'id' => 'centered-image',
        'type' => 'wysiwyg',
        'default' => ''
        ),
    array(
        'label' => 'Centered Image Position',
        'description' => 'The vertical position of the centered landing page image',
        'id' => 'centered-image-pos',
        'type' => 'dropdown',
        'options' => array('middle' => 'Middle', 'bottom' => 'Fixed to bottom'),
        'default' => ''
        ),
    array(
        'label' => 'Contact Form Heading',
        'description' => '',
        'id' => 'contact-form-heading',
        'type' => 'text',
        'default' => ''
        ),
    array(
        'label' => 'Contact Form Copy',
        'description' => '',
        'id' => 'contact-form-copy',
        'type' => 'wysiwyg',
        'default' => ''
        ),
    array(
        'label' => 'Contact Form Shortcode',
        'description' => '',
        'id' => 'contact-form-shortcode',
        'type' => 'text',
        'default' => ''
        )
    );