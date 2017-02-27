<?php
/**
* Template Name:    Demo Template
*
* @package  WordPress Landing Pages
* @author   David Wells
* @link http://www.inboundnow.com
* @version  1.0
*/

/* Step 1: Declare Template Key. This will be automatically detected for you */
$key = lp_get_parent_directory(dirname(__FILE__));
$path = (preg_match("/uploads/", dirname(__FILE__))) ? LANDINGPAGES_UPLOADS_URLPATH . $key .'/' : LANDINGPAGES_URLPATH.'templates/'.$key.'/'; // This defines the path to your template folder. /wp-content/uploads/landing-pages/templates by default

/* Define Landing Pages's custom pre-load hook for 3rd party plugin integration */
do_action('lp_init');

/* Load Regular WordPress $post data and start the loop */
if (have_posts()) : while (have_posts()) : the_post();

/**
 * Step 2: Pre-load meta data into variables.
 * - These are defined in this templates config.php file
 * - The config.php values create the metaboxes visible to the user.
 * - We define those meta-keys here to use them in the template.
 */


$main_heading = lp_get_value($post, $key, 'main-heading');
$sub_heading = lp_get_value($post, $key, 'sub-heading');

$features_copy_1 = lp_get_value($post, $key, 'features-copy-1');
$features_copy_2 = lp_get_value($post, $key, 'features-copy-2');
$features_copy_3 = lp_get_value($post, $key, 'features-copy-3');
$features_copy_4 = lp_get_value($post, $key, 'features-copy-4');

$centered_image = lp_get_value($post, $key, 'centered-image');
$centered_image_pos = lp_get_value($post, $key, 'centered-image-pos');

$contact_form_heading = lp_get_value($post, $key, 'contact-form-heading');
$contact_form_copy = lp_get_value($post, $key, 'contact-form-copy');
$contact_form_shortcode = lp_get_value($post, $key, 'contact-form-shortcode');




// alternatively you can use default wordpress get_post_meta.
// You will need to add your template $key to the meta id. Example "text-box-id" becomes "demo-text-box-id"
// example: $text_box_id = get_post_meta($post->ID, 'demo-text-box-id', true);
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>  <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>  <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <!--    Define page title -->
    <title><?php wp_title(); ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
 
    <!-- Included CSS Files -->
    <link rel="stylesheet" href="/media/landing-pages/templates/precursive-landing/assets/css/styles.css">

    <link href="http://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
 
    <!-- Included JS Files -->
    <script src="/media/landing-pages/templates/precursive-landing/assets/js/modernizr.js"></script>
 
 
<!-- Load Normal WordPress wp_head() function -->
<?php wp_head(); ?>
<!-- Load Landing Pages's custom pre-load hook for 3rd party plugin integration -->
<?php do_action('lp_head'); ?>
 
</head>
 
<!-- lp_body_class(); Defines Custom Body Classes for Advanced User CSS Customization -->
<body <?php body_class(); ?>>
 

 

    <div class="">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand">
                        <img src="/media/landing-pages/templates/precursive-landing/assets/img/navbar-brand.png" alt="Precursive">
                    </a>
                </div>
                <p class="navbar-text">
                    <span class="hidden">Questions? </span>
                    Call us at <a href="tel:+442033082525">+44 203 308 2525</a>
                </p>
            </div>
        </nav>

        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h2><?= $main_heading ?></h2>
                        <h3><?= $sub_heading ?></h3>
                        <ul class="list-unstyled">
                            <li>
                                <?= $features_copy_1 ?>
                            </li>
                            <li>
                                <?= $features_copy_2 ?>
                            </li>
                            <li>
                                <?= $features_copy_3 ?>
                            </li>
                            <li>
                                <?= $features_copy_4 ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-img<?= $centered_image_pos == 'bottom' ? ' img-overlap' : '' ?>">
                        <?= $centered_image; ?>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="widget-home">
                            <h2><?= $contact_form_heading ?></h2>
                            <p><?= $contact_form_copy ?></p>
                            <?= $contact_form_shortcode ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Trusted by:</h3>
                        <ul class="list-inline text-center">
                            <li><img src="/media/landing-pages/templates/precursive-landing/assets/img/trusted-fujitsu.png" alt="" class="img-responsive"></li>
                            <li><img src="/media/landing-pages/templates/precursive-landing/assets/img/trusted-daily-mail.png" alt="" class="img-responsive"></li>
                            <li><img src="/media/landing-pages/templates/precursive-landing/assets/img/trusted-survey-monkey.png" alt="" class="img-responsive"></li>
                            <li><img src="/media/landing-pages/templates/precursive-landing/assets/img/trusted-wpp.png" alt="" class="img-responsive"></li>
                            <li><img src="/media/landing-pages/templates/precursive-landing/assets/img/trusted-bright-north.png" alt="" class="img-responsive"></li>
                            <li><img src="/media/landing-pages/templates/precursive-landing/assets/img/trusted-salesforce.png" alt="" class="img-responsive"></li>
                        </ul>
                    </div>
                </div><!-- end .row -->
            </div><!-- end .container -->
        </footer>
    </div>

<?php
break;
endwhile; endif;

?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/media/landing-pages/templates/precursive-landing/assets/js/app.js"></script>

<?php
do_action('lp_footer'); // Load custom landing footer hook for 3rd party extensions
wp_footer(); // Load normal wordpress footer
?>
</body>
</html>