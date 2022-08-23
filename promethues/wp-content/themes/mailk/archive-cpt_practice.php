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
        <span class="sub-heading">Why Choose Us</span>
        <h3 class="section-heading">Best Male Enhancement Practice</h3>
      </div>
    </div>

    <div class="row">

      <?php
            $args = array(
             'numberposts' => -1,
             'offset' => 0,
             'orderby' => 'post_date',
             'order' => 'ASC',
             'post_type' => 'cpt_practice',
             'post_status' => 'publish',
             'suppress_filters' => true
            );
            $all_practice = wp_get_recent_posts( $args, ARRAY_A );
            foreach ( $all_practice as $each_practice ) {
              if (has_post_thumbnail( $post->ID ) ):
             $image = wp_get_attachment_image_src( get_post_thumbnail_id( $each_practice[ 'ID' ] ), 'single-post-thumbnail' );
             //print_r($image);
      ?>
      <div class="col-lg-4 col-md-6">
          <div class="services-main-wrap">
            <a class="services-image-wrap">
              <img src="<?php echo $image[0]; ?>" alt="<?php echo $each_practice[ 'post_title' ] ; ?>">
            </a>
              <div class="services-item">
                  <div class="services-icon ">
                      <img src="<?php echo get_field('practice_icon',$each_practice[ 'ID' ]); ?>" alt="<?php echo $each_practice[ 'post_title' ] ; ?>">
                  </div>
                  <a href="<?php echo get_the_permalink($each_practice['ID']); ?>" class="services-title secondary-font"><?php echo $each_practice[ 'post_title' ] ; ?></a>
                  <div class="services-desc">
                      <p class="demo"><?php echo wp_trim_words( $each_practice[ 'post_excerpt' ], 12 ); ?></p>
                  </div>
                  <div class="services-details-btn">
                      <a class="text-button" href="<?php echo get_the_permalink($each_practice['ID']); ?>">Read More <i class="fas fa-angle-double-right"></i></a>
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


<?php get_footer(); ?>
