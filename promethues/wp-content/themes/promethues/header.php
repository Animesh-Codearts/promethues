<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage promethues
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> <?php promethues_the_html_classes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="<?php bloginfo( 'html_type' ); ?>">
  <title><?php echo get_bloginfo( 'name' ); ?></title>
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
          <iframe  src="https://www.youtube.com/embed/LXb3EKWsInQ" title="YouTube video player"   allowfullscreen></iframe>
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
                  <span class="demo"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/header-call-icon.png" alt="Header Call Icon"></span>
                  <p class="demo d-none d-md-block"><?php echo get_option('consult_number'); ?></p>
                </a>
                <a class="custom-button" href="javascript:void(0)">SCHEDULE CONSULT</a>
                <button class="navbar-toggler custom-navbar-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
                  <div class="offcanvas-header">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/header-logo.png" alt="Prometheus by Dr. Malik Logo">
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