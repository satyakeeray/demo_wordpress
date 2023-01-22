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
global $pID;
global $fields;
global $option_fields;
$pID = get_the_ID();

//Advanced custom fields variables
$option_fields      = get_fields( 'option' );
$tracking_code      = $option_fields['tracking_code'] ?? null;
$custom_css         = $option_fields['custom_css'] ?? null;
$head_scripts       = $option_fields['head_scripts'] ?? null;
$body_scripts       = $option_fields['body_scripts'] ?? null;




//Contact Details - Phone Number
$show_contact_number_from_contact_details   = $option_fields['show_contact_number_from_contact_details'] ?? false;
$header_section_contact_number              = $option_fields['header_section_contact_number'] ?? '';
$phone_number                               = ($show_contact_number_from_contact_details === true) ? $option_fields['phone_number'] : $header_section_contact_number;

//Contact Details - Email Id
$show_email_id_from_contact_details         = $option_fields['show_email_id_from_contact_details'] ?? false;
$header_section_email_id                    = $option_fields['header_section_email_id'] ?? '';
$email_id                                   = ($show_email_id_from_contact_details === true) ? $option_fields['email_id'] : $header_section_email_id;

//Contact Details Address
$show_address_from_contact_details          = $option_fields['show_address_from_contact_details'] ?? false;
$header_section_address                     = $option_fields['header_section_address'] ?? '';
$address                                    = ($show_address_from_contact_details === true) ? $option_fields['address'] : $header_section_address;


$contact_details_array[] = $phone_number ? '<small><i class="fa fa-phone-alt mr-2"></i>'.$phone_number.'</small>' : '';
$contact_details_array[] = $email_id ? '<small><i class="fa fa-envelope mr-2"></i>'.$email_id.'</small>' : '';
$contact_details_array[] = $address ? '<small><i class="fa fa-map-marker-alt mr-2"></i>'.$address.'</small>' : '';
$contact_details_array   = array_filter($contact_details_array);

//Social Media Links
$show_social_links_from_social_media_media_tab = $option_fields['show_social_links_from_social_media_media_tab'] ?? false;
$social_media_links = ($show_social_links_from_social_media_media_tab === true) ? $option_fields['social_media_links'] : $option_fields['social_media_links_header'];
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
                <?php if($contact_details_array): ?>
                    <div class="d-inline-flex align-items-center text-white">
                        <?php echo implode('<small class="px-3">|</small>', $contact_details_array);?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($social_media_links): ?>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <?php foreach($social_media_links as $social_link): 
                            $social_links       = $social_link['social_links']['url'];
                            $social_class_name  = $social_link['social_link_class_name'];
                            $link_target        =  $social_link['social_links']['target'];
                            $link_target        = $link_target ? 'target='.$link_target : '';
                            ?>
                            <a class="text-white px-2" href="<?php echo $social_links; ?>" <?php echo $link_target; ?>>
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