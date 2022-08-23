<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>
<?php twentytwentyone_the_html_classes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="<?php bloginfo( 'html_type' ); ?>">
    <title>
        <?php echo get_bloginfo( 'name' ); ?>
    </title>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="modal custom-modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header me-2">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php $hero_benefits = get_field('benefits_to_work');  ?>
                    <iframe src="<?php echo $hero_benefits['benefits_working_video']; ?>" title="YouTube video player"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <header class="custom-header">
        <div class="container-fluid ps-0">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar">
                        <a class="navbar-brand sw-brand ms-0" href="<?php echo site_url();?>">
                            <img src="<?php echo get_option('logo'); ?>" alt="Prometheus by Dr. Malik Logo">
                        </a>
                        <div class="custom-navbar-right me-0">
                            <a class="custom-navbar-tel" href="tel:<?php echo get_option('consult_number'); ?>">
                                <span class="demo"><img
                                        src="<?php echo get_theme_file_uri(); ?>/assets/images/header-call-icon.png"
                                        alt="Header Call Icon"></span>
                                <p class="demo d-none d-md-block">
                                    <?php echo get_option('consult_number'); ?>
                                </p>
                            </a>
                            <a class="custom-button" href="/promethues/contact/">SCHEDULE CONSULT</a>
                            <button class="navbar-toggler custom-navbar-toggle" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
                                <div class="offcanvas-header">
                                    <img src="<?php echo get_option('logo'); ?>" alt="Prometheus by Dr. Malik Logo">
                                </div>
                                <div class="offcanvas-body">
                                    <?php 

                                        wp_nav_menu( array(
                                                 'menu'              => "header_menu",
                                                 'menu_class'        => "navbar-nav  pe-3",
                                                 'container_class'   => '',
                                                ) );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <?php 
  if( 'cpt_services' == get_post_type() || 'cpt_practice' == get_post_type() || 'cpt_testimonials' == get_post_type())
    { ?>
    <section class="custom-inner-banner"
        style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/inner-banner-image.jpg);">
        <div class="container ">
            <div class="row align-self-center">
                <div class="col-lg-12 my-auto text-center">
                    <div class="banner-content">
                        <?php
                                if('cpt_services' == get_post_type())
                                {
                                  echo '<h3 class="banner-title">Services</h3>';
                                }
                                else if('cpt_practice' == get_post_type())
                                {
                                  echo '<h3 class="banner-title">Practice</h3>';
                                }
                                else if('cpt_testimonials' == get_post_type())
                                {
                                  echo '<h3 class="banner-title">Testimonials</h3>';
                                }
                        ?>
                        <div class="breadcrumb-container">
                            <span><a href="<?php echo site_url(); ?>">Home</a></span>
                            //
                            <span class="previous-item">
                                <?php
                                        if('cpt_services' == get_post_type())
                                        {
                                          echo "Services";
                                        }
                                        else if('cpt_practice' == get_post_type())
                                        {
                                          echo "Practice";
                                        }
                                        else if('cpt_testimonials' == get_post_type())
                                        {
                                          echo "Testimonials";
                                        }
                                ?>
                            </span>
                                //
                                <?php if(is_single()) { ?>
                                <span>
                                    <?php echo get_the_title(); ?>
                                </span>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } else if(!is_front_page()) { ?>
    <?php if(get_the_post_thumbnail_url()!='') {?>
    <section class="custom-inner-banner" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
        <?php } else { ?>
        <section class="custom-inner-banner"
            style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/inner-banner-image.jpg);">
            <?php } ?>
            <div class="container ">
                <div class="row align-self-center">
                    <div class="col-lg-12 my-auto text-center">
                        <div class="banner-content">
                            <h2 class="banner-title">
                                <?php echo get_the_title(); ?>
                            </h2>
                            <div class="breadcrumb-container">
                                <span><a href="<?php echo site_url(); ?>">Home</a></span>
                                //
                                <span class="previous-item">
                                    <?php echo get_the_title(); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>