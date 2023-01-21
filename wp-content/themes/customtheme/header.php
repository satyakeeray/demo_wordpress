<?php
/**
 * The template for displaying website header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom Theme
 * @since   1.0.0
 */

// Global variables
global $option_fields;
global $pID;
global $fields;
$pID = get_the_ID();

//Advanced custom fields variables
$option_fields      = get_fields( 'option' );
$tracking_code      = $option_fields['tracking_code'] ?? null;
$custom_css         = $option_fields['custom_css'] ?? null;
$head_scripts       = $option_fields['head_scripts'] ?? null;
$body_scripts       = $option_fields['body_scripts'] ?? null;

// Social Media Links
$social_media_links = $option_fields['social_media_links'] ?? false;


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">    
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="<?php echo IMAGES_PATH; ?>favicon.ico" rel="icon">
    <?php
    //Tracking code get from the theme options
    echo !empty($tracking_code) ? html_entity_decode($tracking_code, ENT_QUOTES) : '';

    // Custom CSS
    echo !empty($custom_css) ? '<style type="text/css">' . html_entity_decode($custom_css, ENT_QUOTES) . '</style>' : '';

    wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
                </div>
            </div>
            <?php if($social_media_links): ?>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <?php foreach($social_media_links as $social_link): 
                            $social_links       = $social_link['social_links']['url'];
                            $social_class_name  = $social_link['social_link_class_name'];
                            $link_target        =  $social_link['social_links']['target'];
                            ?>
                            <a class="text-white px-2" href="<?php echo $social_links; ?>" target="<?php echo $link_target; ?>">
                                <i class="fab <?php echo $social_class_name; ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-truck mr-2"></i>Faster</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="price.html" class="nav-item nav-link">Price</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary py-2 px-4 d-none d-lg-block">Get A Quote</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->