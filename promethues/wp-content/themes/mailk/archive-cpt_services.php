<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<?php $hero_services = get_field('services_section',12);  ?>
<section class="custom-services-section custom-pad">
  <div class="container">
    <div class="row">
      <div class="custom-heading text-center mb-md-3 mb-2">
        <span class="sub-heading"><?php echo $hero_services['services_title']; ?></span>
        <h3 class="section-heading"><?php echo $hero_services['services_sub_title']; ?></h3>
      </div>
    </div>

    <div class="row">

      <?php
            $args = array(
             'numberposts' => -1,
             'offset' => 0,
             'orderby' => 'post_date',
             'order' => 'ASC',
             'post_type' => 'cpt_services',
             'post_status' => 'publish',
             'suppress_filters' => true
            );
            $all_services = wp_get_recent_posts( $args, ARRAY_A );
            foreach ( $all_services as $each_services ) {
              if (has_post_thumbnail( $post->ID ) ):
             $image = wp_get_attachment_image_src( get_post_thumbnail_id( $each_services[ 'ID' ] ), 'single-post-thumbnail' );
             //print_r($image);
      ?>
      <div class="col-lg-4 col-md-6">
          <div class="services-main-wrap">
            <a class="services-image-wrap">
              <img src="<?php echo $image[0]; ?>" alt="<?php echo $each_services[ 'post_title' ] ; ?>">
            </a>
              <div class="services-item">
                  <div class="services-icon ">
                      <img src="<?php echo get_field('service_icon',$each_services['ID']); ?>" alt="<?php echo $each_services[ 'post_title' ] ; ?>">
                  </div>
                  <a href="<?php echo get_the_permalink($each_services['ID']); ?>" class="services-title secondary-font"><?php echo $each_services[ 'post_title' ] ; ?></a>
                  <div class="services-desc">
                      <p class="demo"><?php echo wp_trim_words( $each_services[ 'post_excerpt' ], 12 ); ?></p>
                  </div>
                  <div class="services-details-btn">
                      <a class="text-button" href="<?php echo get_the_permalink($each_services['ID']); ?>">Read More <i class="fas fa-angle-double-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <?php
       endif;
           }
      ?>
    </div>
  </div>
</section>

<!-- duplicate section -->
<?php $hero_procedure = get_field('custom_procedure_service',12); ?>
<section class="custom-procedure inner-watch-video custom-pad" style="background-image: url(<?php echo $hero_procedure['procedure_background_image']; ?>);">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-12 ms-0">
        <div class="procedure-wrap">
          <div class="custom-heading">
            <h3 class="section-heading"><?php echo $hero_procedure['procedure_title']; ?></h3>
          </div>
          <div class="sub-info">
            <h5><?php echo $hero_procedure['procedure_sub_title']; ?></h5>
          </div>
          <div class="content">
            <p class="demo"><?php echo $hero_procedure['procedure_content']; ?> </p>
          </div>
          <a href="<?php echo $hero_procedure['procedure_button']; ?>" class="custom-button"><?php echo $hero_procedure['procedure_button_name']; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="counter-section-two services-counter-section custom-pad">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="counter-up-wrapper">
                  <div class="row">
                    <?php
                    $counter_section = get_field('counter_section_service',12);
                    for($k=1; $k<=4; $k++) {
                    ?>
                      <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                          <div class="counter-box">
                              <div class="counter-content">
                                  <span class="count-icon">
                                      <img src="<?php echo $counter_section['k_image_'.$k]; ?>" alt="<?php echo $counter_section['k_title_'.$k]; ?>">
                                  </span>

                                  <div class="count-number-and-unit secondary-font">
                                      <span class="count-number"><?php echo $counter_section['k_numbers_'.$k]; ?></span>+
                                  </div>

                                  <div class="count-title"><?php echo $counter_section['k_title_'.$k]; ?></div>
                              </div>
                          </div>
                      </div>
                    <?php } ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>



<?php get_footer(); ?>
