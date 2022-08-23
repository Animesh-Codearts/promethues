<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One

 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
  the_post();
?>

<section class="custom-services-details custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="service-details-left-wrap">
                    <div class="left-services-menu">
                        <ul>
                            <?php
                                $page_ID = get_the_ID();
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
                            ?>
                            <li class="<?php if($page_ID == $each_services['ID']){ echo 'active';}?>">
                                <a href="<?php echo get_the_permalink($each_services['ID']); ?>">
                                    <?php echo $each_services[ 'post_title' ] ; ?>
                                </a>
                                <span class="demo"><i class="fas fa-angle-double-right"></i></span>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="left-online-help-wrap">
                        <div class="left-online-help">
                            <span class="icon-sb"><i class="fas fa-headset"></i></span>
                            <h5>Online Help!</h5>
                            <a href="tel:<?php echo get_option('consult_number'); ?>">
                                <?php echo get_option('consult_number'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="service-details-right-wrap">
                    <div class="details-right-content">
                        <div class="main-image-wrap">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/services-details-main-image.jpg"
                                alt="A group of doctors">
                        </div>
                        <div class="custom-heading mb-md-3 mb-2">
                            <h3 class="section-heading">
                                <?php the_title(); ?>
                            </h3>
                        </div>
                        <?php the_content(); ?>
                        <div class="custom-imglist">
                            <div class="row">
                                <?php

                                 $service_gallary = CFS()->get( 'add_new_image' );
                                 //print_r($service_gallary);
                                 if($service_gallary == 0){
                                  echo '';
                                 }else{
                                  foreach( $service_gallary as $gallary){ 
                                ?>
                                <div class="col-lg-4  col-md-6 col-12">
                                    <a class="imglist-image-link" href="<?php echo $gallary['image']; ?>"
                                        data-fancybox="images">
                                        <img src="<?php echo $gallary['image']; ?>" alt="Service gallery image" />
                                    </a>
                                </div>
                                <?php  } }  ?>
                            </div>
                        </div>
                        <div class="text-wrap">
                            <?php echo get_field('extra_service_details'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
endwhile; // End of the loop.

get_footer();