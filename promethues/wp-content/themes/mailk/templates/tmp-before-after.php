<?php
/**

 * Template Name: Before After
 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage Twenty_Twenty_One

 */
get_header(); ?>

<section class="custom-bef-aft custom-pad"> 
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="custom-heading text-center">
            <span class="sub-heading"><?php echo get_field('ba_sub_heading'); ?></span>
            <h3 class="section-heading"><?php echo get_field('before_after_sub_heading'); ?></h3>
          </div>
        </div>
      </div>
      <div class="custom-bef-aft-content">
        <div class="row">
          <?php
            $args = array(
             'numberposts' => -1,
             'offset' => 0,
             'orderby' => 'post_date',
             'order' => 'ASC',
             'post_type' => 'cpt_beforeafter',
             'post_status' => 'publish',
             'suppress_filters' => true
            );
            $all_beforeafter = wp_get_recent_posts( $args, ARRAY_A );
            foreach ( $all_beforeafter as $each_beforeafter ) {
              if (has_post_thumbnail( $post->ID ) ):
             $image = wp_get_attachment_image_src( get_post_thumbnail_id( $each_beforeafter[ 'ID' ] ), 'single-post-thumbnail' );
             //print_r($image);
        ?>

          <div class="col-lg-6 ">
            <div class="gallery-box-wrap">
              <div class="gallery-img-box">
                <div class="gal-img-heading">
                  <h5><?php echo get_field('ba_heading',$each_beforeafter[ 'ID' ]); ?></h5>
                </div>
                <div class="gal-age-text">
                  <p class="demo"><?php echo get_field('ba_sub_heading',$each_beforeafter[ 'ID' ]); ?></p>
                </div>
                <div class="gal-img-btn">
                  <a href="javascript:void(0)" class="custom-button gallery-a-btn">I agree</a>
                </div>
                <div class="gal-img-btn-yn cus-hide">
                  <a href="javascript:void(0)"  class="gal-img-button-y custom-button" onclick="yesClicked()">Yes</a>
                  <a href="javascript:void(0)" class="gal-img-button-n custom-button">No</a>
                </div>
              </div>
              <div class="gallery-image cus-hide">
                <img src="<?php echo $image[0]; ?>" alt="">
              </div>
            </div>            
          </div>
          <?php
           endif;
               }
          ?>
<!--           <div class="col-lg-6 ">
            <div class="gallery-box-wrap">
              <div class="gallery-img-box">
                <div class="gal-img-heading">
                  <h5>Gallery Images Contain Nudity</h5>
                </div>
                <div class="gal-age-text">
                  <p class="demo">I am at least 18 years of age</p>
                </div>
                <div class="gal-img-btn">
                  <a href="javascript:void(0)" class="custom-button gallery-a-btn">I agree</a>
                </div>
                <div class="gal-img-btn-yn cus-hide">
                  <a href="javascript:void(0)"  class="gal-img-button-y custom-button">Yes</a>
                  <a href="javascript:void(0)" class="gal-img-button-n custom-button">No</a>
                </div>
              </div>
              <div class="gallery-image cus-hide">
                <img src="images/gallery-image.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="gallery-box-wrap">
              <div class="gallery-img-box">
                <div class="gal-img-heading">
                  <h5>Gallery Images Contain Nudity</h5>
                </div>
                <div class="gal-age-text">
                  <p class="demo">I am at least 18 years of age</p>
                </div>
                <div class="gal-img-btn">
                  <a href="javascript:void(0)" class="custom-button gallery-a-btn">I agree</a>
                </div>
                <div class="gal-img-btn-yn cus-hide">
                  <a href="javascript:void(0)"  class="gal-img-button-y custom-button">Yes</a>
                  <a href="javascript:void(0)" class="gal-img-button-n custom-button">No</a>
                </div>
              </div>
              <div class="gallery-image cus-hide">
                <img src="images/gallery-image.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="gallery-box-wrap">
              <div class="gallery-img-box">
                <div class="gal-img-heading">
                  <h5>Gallery Images Contain Nudity</h5>
                </div>
                <div class="gal-age-text">
                  <p class="demo">I am at least 18 years of age</p>
                </div>
                <div class="gal-img-btn">
                  <a href="javascript:void(0)" class="custom-button gallery-a-btn">I agree</a>
                </div>
                <div class="gal-img-btn-yn cus-hide">
                  <a href="javascript:void(0)"  class="gal-img-button-y custom-button">Yes</a>
                  <a href="javascript:void(0)" class="gal-img-button-n custom-button">No</a>
                </div>
              </div>
              <div class="gallery-image cus-hide">
                <img src="images/gallery-image.jpg" alt="">
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
  </section>


<?php
get_footer();