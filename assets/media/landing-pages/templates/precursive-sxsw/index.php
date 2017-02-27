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

$space_between = lp_get_value($post, $key, 'space-between');
$intro_copy = lp_get_value($post, $key, 'intro-copy');
$main_heading = lp_get_value($post, $key, 'main-heading');
$book_copy = lp_get_value($post, $key, 'book-copy');

$book_button_text = lp_get_value($post, $key, 'book-button-text');
$book_info_copy = lp_get_value($post, $key, 'book-info-copy');
$book_contact_details = lp_get_value($post, $key, 'book-contact-details');

$diary_heading = lp_get_value($post, $key, 'diary-heading');
$diary_day_1 = lp_get_value($post, $key, 'diary-day-1');
$diary_day_2 = lp_get_value($post, $key, 'diary-day-2');
$diary_day_3 = lp_get_value($post, $key, 'diary-day-3');
$diary_day_4 = lp_get_value($post, $key, 'diary-day-4');
$diary_day_5 = lp_get_value($post, $key, 'diary-day-5');

$sxsw_sessions = lp_get_value($post, $key, 'sxsw-sessions');




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
    <link rel="stylesheet" href="/media/landing-pages/templates/precursive-sxsw/assets/css/styles.css">

    <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">

    <script src="/media/landing-pages/templates/precursive-sxsw/assets/js/jquery.min.js"></script>

    <style type="text/css">
        @media only screen and (min-width: 768px) {
        .landing .img-graphic {
            margin-top: <?= $space_between != '' ? $space_between : '20'; ?>px;
        }
    }
    </style>

 
<!-- Load Normal WordPress wp_head() function -->
<?php wp_head(); ?>
<!-- Load Landing Pages's custom pre-load hook for 3rd party plugin integration -->
<?php do_action('lp_head'); ?>
 
</head>
 
<!-- lp_body_class(); Defines Custom Body Classes for Advanced User CSS Customization -->
<body <?php body_class(); ?>>
<div style="display:none"><?= $space_between ?></div>

    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    <img src="/media/landing-pages/templates/precursive-sxsw/assets/img/navbar-brand.png" alt="Precursive">
                </a>
            </div>
        </div>
    </nav>
    <section class="alt landing">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                <img src="/media/landing-pages/templates/precursive-sxsw/assets/img/sxsw-logo.png" alt="" class="img-responsive center-block">
                    <img src="/media/landing-pages/templates/precursive-sxsw/assets/img/sxsw-brixton.png" alt="" class="img-graphic img-responsive center-block">
                </div>
                <div class="col-xs-12 col-sm-8">
                    <?= $intro_copy ?>
                    <?= $main_heading ?>
                    <div class="row">
                        <div class="col-sm-10 col-md-8 col-lg-6">
                            <?= $book_copy ?>
                            <a href="#book" class="btn btn-primary" id="book_button"><?= $book_button_text ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Trusted by:</h3>
                    <ul class="list-inline text-center">
                        <li><img src="/media/landing-pages/templates/precursive-sxsw/assets/img/trusted-fujitsu.png" alt="" class="img-responsive"></li>
                        <li><img src="/media/landing-pages/templates/precursive-sxsw/assets/img/trusted-daily-mail.png" alt="" class="img-responsive"></li>
                        <li><img src="/media/landing-pages/templates/precursive-sxsw/assets/img/trusted-survey-monkey.png" alt="" class="img-responsive"></li>
                        <li><img src="/media/landing-pages/templates/precursive-sxsw/assets/img/trusted-wpp.png" alt="" class="img-responsive"></li>
                        <li><img src="/media/landing-pages/templates/precursive-sxsw/assets/img/trusted-bright-north.png" alt="" class="img-responsive"></li>
                        <li><img src="/media/landing-pages/templates/precursive-sxsw/assets/img/trusted-salesforce.png" alt="" class="img-responsive"></li>
                    </ul>
                </div>
            </div><!-- end .row -->
        </div><!-- end .container -->
    </section>
    <section class="section-highlight" id="book">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="/media/landing-pages/templates/precursive-sxsw/assets/img/james.png" alt="" class="img-responsive center-block" width="283" height="283">
                            <h4>James Gasteen</h4>
                            <p>
                                Founder and CEO of Precursive Ltd
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <?= $book_info_copy ?>
                            <?= $book_contact_details ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="alt-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2><span><?= $diary_heading ?></span></h2>
                    <ul class="list-unstyled">
                        <li>
                            <?= $diary_day_1 ?>
                        </li>
                        <li>
                            <?= $diary_day_2 ?>
                        </li>
                        <li>
                            <?= $diary_day_3 ?>
                        </li>
                        <li>
                            <?= $diary_day_4 ?>
                        </li>
                        <li>
                            <?= $diary_day_5 ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center">
        <?= $sxsw_sessions ?>
    </section>

    <script src="/media/landing-pages/templates/precursive-sxsw/assets/js/landing.js"></script>

<?php
break;
endwhile; endif;
do_action('lp_footer'); // Load custom landing footer hook for 3rd party extensions
wp_footer(); // Load normal wordpress footer
?>
</body>
</html>