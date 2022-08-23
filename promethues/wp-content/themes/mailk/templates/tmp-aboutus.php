<?php
/**

 * Template Name: About Us

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage Twenty_Twenty_One

 */
get_header(); ?>


<?php $hero_about = get_field('about_prometheus'); ?>
<section class="inner-about-section custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
              <div class="inner-about-left">
                <div class="custom-heading">
                  <span class="sub-heading"><?php echo $hero_about['about_sub_title']; ?></span>
                  <h3 class="section-heading"><?php echo $hero_about['about_title']; ?></h3>
                </div>
                <div class="content">
                  <p class="demo"><?php echo $hero_about['about_details']; ?></p>
                </div>
                <div class="icon-wrap">
                  <div class="row">
                    <?php 
                    $hero_magic = $hero_about['medical_box'];
                    for($j=1; $j<=2; $j++) {
                    ?>
                    <div class="col-md-12 col-sm-6 col-12">
                      <div class="single-promo-box">
                        <span class="promo-icon">
                          <img src="<?php echo $hero_magic['c_image_'.$j]; ?>" alt="<?php echo $hero_magic['c_title_'.$j]; ?>">
                        </span>
                        <h4 class="promo-title"><?php echo $hero_magic['c_title_'.$j]; ?></h4>
                        <div class="promo-desc last-p-0">
                          <p><?php echo $hero_magic['c_sub_title_'.$j]; ?></p>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <div class="button-wrapper">
                  <a href="<?php echo $hero_about['about_button']; ?>" class="custom-button">Click Here</a>
              </div>
              </div>
            </div>

            <div class="col-md-6 col-12 my-auto">
                <div class="inner-about-right">
                    <div class="img-caption-wrapper secondary-font">
                        <div class="caption-images">
                            <div class="caption-img-one cover-bg" style="background-image: url(<?php echo $hero_about['inner_about_image_1']; ?>);"></div>
                            <div class="caption-img-two cover-bg" style="background-image: url(<?php echo $hero_about['inner_about_image_2']; ?>);"></div>

                            <div class="img-caption">
                                <?php echo $hero_about['inner_about_image_captions']; ?>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</section>

<section class="counter-section-two">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="counter-up-wrapper">
                  <div class="row">
                    <?php
                    $hero_counter = get_field('counter_section');
                    for($k=1; $k<=4; $k++) {
                    ?>
                      <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                          <div class="counter-box">
                              <div class="counter-content">
                                  <span class="count-icon">
                                      <img src="<?php echo $hero_counter['p_image_'.$k]; ?>" alt="<?php echo $hero_counter['p_numbers_'.$k]; ?>">
                                  </span>

                                  <div class="count-number-and-unit secondary-font">
                                      <span class="count-number"><?php echo $hero_counter['p_numbers_'.$k]; ?></span>+
                                  </div>

                                  <div class="count-title"><?php echo $hero_counter['p_title_'.$k]; ?></div>
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
<?php $why_choose = get_field('why_choose'); ?>
<section class="inner-why-choose" style="background-image: url(<?php echo $why_choose['choose_background_banner']; ?>);">
  <div class="container">
    <div class="row">
      <div class="custom-heading text-center mb-md-5 mb-3">
        <span class="sub-heading"><?php echo $why_choose['choose_sub_title']; ?></span>
        <h3 class="section-heading"><?php echo $why_choose['choose_title']; ?></h3>
      </div>
    </div>

    <div class="row">
      <?php 
           $all_choose = $why_choose['choosebox'];
            foreach( $all_choose as $each_choose ) { 
      ?>
      <div class="col-lg-4 col-md-6">
          <div class="service-style-two-wrapper">
              <div class="service-style-two-item">
                  <div class="service-two-icon primary-color">
                      <img src="<?php echo get_field('practice_icon',$each_choose); ?>" alt="<?php echo get_the_title($each_choose); ?>">
                  </div>

                  <a href="<?php echo get_the_permalink($each_choose); ?>" class="service-two-title secondary-font"><?php echo get_the_title($each_choose); ?></a>

                  <div class="service-two-desc">
                      <p class="demo"><?php echo wp_trim_words( get_the_excerpt($each_choose), 10 ); ?></p>
                  </div>

                  <div class="service-two-details-btn">
                      <a class="text-button" href="<?php echo get_the_permalink($each_choose); ?>">Read More <i class="fas fa-angle-double-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
    <?php } ?>     
  </div>
  </div>
</section>

<!-- duplicate section -->
<?php $hero_procedure = get_field('custom_procedure'); ?>
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
<?php $expert_doctors = get_field('expert_doctors'); ?>
<section class="doctors-slider-section custom-pad">
  <div class="team-one-wrapper">
      <div class="container">
          <div class="row">
            <div class="custom-heading text-center mb-md-5">
              <span class="sub-heading"><?php echo $expert_doctors['expert_doctors_title']; ?></span>
              <h3 class="section-heading"><?php echo $expert_doctors['expert_doctors_sub_title']; ?></h3>
            </div>
          </div>
          <div class="row">
            <?php $all_doctors = $expert_doctors['all_doctors']; ?>
            <?php foreach ($all_doctors as $doctors) { ?>

              <div class="col-xl-4 col-lg-4 col-md-4">
                  <div class="single-team-member">
                      <div class="member-image-wrapper">
                              <div class="member-details-url member-image">
                                  <img src="<?php echo get_the_post_thumbnail_url($doctors); ?>" alt="<?php echo get_the_title($doctors); ?>">
                              </div>
                      </div>
                      <div class="member-content">
                              <h3 class="member-name"><?php echo get_the_title($doctors); ?></h3>
                          <span class="member-designation secondary-font"><?php echo get_field('designation',$doctors); ?></span>
                      </div>
                  </div>
              </div>
            <?php } ?>
          </div>
      </div>
  </div>
</section>

<?php
get_footer();