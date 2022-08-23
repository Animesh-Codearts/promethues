<?php
/**

 * Template Name: Testimonials

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage Twenty_Twenty_One

 */
get_header(); ?>

<section class="inner-testimonials custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-heading text-center">
                    <span class="sub-heading"><?php echo get_field('testimonials_heading'); ?></span>
                    <h3 class="section-heading"><?php echo get_field('testimonials_sub_heading'); ?></h3>
                </div>
            </div>
        </div>
        <div class="row row pt-lg-5 pt-md-4 pt-4">
            <?php
                    $args = array(
                     'numberposts' => -1,
                     'offset' => 0,
                     'orderby' => 'post_date',
                     'order' => 'ASC',
                     'post_type' => 'cpt_testimonials',
                     'post_status' => 'publish',
                     'suppress_filters' => true
                    );
                    $all_testimonials = wp_get_recent_posts( $args, ARRAY_A );
                    foreach ( $all_testimonials as $each_testimonials ) {
                      if (has_post_thumbnail( $post->ID ) ):
                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $each_testimonials[ 'ID' ] ), 'single-post-thumbnail' );
                     //print_r($each_testimonials);
            ?>
            <div class="col-lg-6 col-12 tes-col">
                <div class="tes-wrap">
                    <div class="tes-img">
                        <img src="<?php echo $image[0]; ?>" alt="<?php echo $each_testimonials[ 'post_title' ] ; ?>">
                    </div>
                    <div class="tes-content">
                      <p class="demo"> <?php echo $each_testimonials[ 'post_content' ] ; ?></p>
                        <span class="tes-client-name"><?php echo $each_testimonials[ 'post_title' ] ; ?></span>
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

<?php
get_footer();