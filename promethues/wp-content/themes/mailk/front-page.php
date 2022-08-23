<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 */
get_header(); ?>


<section class="banner-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 col-12  ms-0">
                <div class="banner-left-wrap">
                    <div class="top-text">
                        <p class="demo">
                            <?php echo get_option('title'); ?>
                        </p>
                    </div>
                    <div class="banner-socials">
                        <ul>
                            <li><a href="<?php echo get_option('facebook_url'); ?>"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo get_option('twitter_url'); ?>"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="<?php echo get_option('google_url'); ?>"><i
                                        class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="<?php echo get_option('linkedin_url'); ?>"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="bottom-text">
                        <a href="#custom-feature">
                            <span class="demo"><i class="fas fa-arrow-left"></i></span>
                            Scroll down
                        </a>
                    </div>
                </div>
            </div>
            <?php 
             $j=0;
             $all_banners = get_field('banner_section');
             $hero_banners =$all_banners['all_banners'];
            ?>
            <div class="col-md-11 col-12 ps-0 pe-0">
                <div class="banner-right-wrap">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="container-fluid">
                            <div class="carousel-indicators">

                                <ul class="custom-carousel-indicator">
                                    <?php $j=0;
                                    foreach ($hero_banners as $banners) { ?>
                                    <li><button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="<?php echo $j; ?>"
                                            class="<?php if($j == 0){ echo 'active';} ?>"
                                            aria-current="<?php if($j == 1){ echo 'true';} ?>"
                                            aria-label="Slide <?php echo $j+1; ?>"></button>
                                        <?php
                                               $num = $j+1;
                                               $num_padded = sprintf("%02d", $num);
                                               echo $num_padded;
                                         ?>
                                    </li>
                                    <?php $j++; } ?>
                                </ul>
                            </div>
                        </div>

                        <div class="carousel-inner">
                            <?php
                               $j=0;
                               foreach ($hero_banners as $banners) { 
                                print_r($banners);
                            ?>
                            <div class="carousel-item <?php if($j == 0){ echo 'active';} ?>">
                                <img src="<?php echo get_the_post_thumbnail_url($banners); ?>" class="d-block w-100"
                                    alt="<?php echo get_the_title($banners); ?>">
                                <div class="carousel-caption custom-carousel-caption ">
                                    <h5><?php echo get_the_title($banners); ?></h5>
                                    <p><?php echo get_field('banner_sub_title',$banners); ?></p>
                                    <a href="<?php echo get_field('banner_button',$banners); ?>" class="custom-button">SCHEDULE A CONSULTATION</a>
                                </div>
                            </div>
                            <?php  $j++; } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $j++; ?>
        </div>

    </div>
</section>
<section id="custom-feature" class="custom-feature custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature-heading">
                    <h3>Procedure Featured in</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 m-auto">
                <div id="custom-feature-owl" class="owl-carousel owl-theme">
                  <?php 
                       $hero_bulletin = get_field('bulletin_section');
                       $all_bulletin = $hero_bulletin['all_bulletin'];
                        foreach( $all_bulletin as $bulletin ) { 
                  ?>
                    <div class="item feature-logo-item">
                        <img src="<?php echo get_the_post_thumbnail_url($bulletin); ?>" alt="">
                    </div>

                  <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="custom-benefits-to-work custom-pad">
  <?php $hero_benefits = get_field('benefits_to_work');  ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="custom-benefits-left">
                    <div class="image-w">
                        <img src="<?php echo $hero_benefits['benefits_working_image']; ?>"
                            alt="A woman explaining the benefits of working with us">
                    </div>
                    <div class="watch-video-section d-flex align-items-center">
                        <h4 class="ms-0">Benefits of <br> Working With Us</h4>
                        <h4 class="video me-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Watch Video <span
                                class="demo"><i class="fas fa-play"></i></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="custom-benefits-right">
                    <div class="custom-heading">
                        <span class="sub-heading"></span>
                        <h3 class="section-heading"><?php echo $hero_benefits['benefits_working_title']; ?></h3>
                    </div>
                    <div class="custom-benefits-content">
                        <h4><?php echo $hero_benefits['benefits_working_sub_title']; ?></h4>
                        <p class="demo"><?php echo $hero_benefits['benefits_working_details']; ?> </p>
                        <a href="<?php echo $hero_benefits['benefits_working_button']; ?>" class="custom-button">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="custom-why-choose-us custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="custom-heading text-center">
                  <?php $hero_choose = get_field('why_choose_prometheus'); ?>
                    <span class="sub-heading"><?php echo $hero_choose['why_choose_prometheus_sub_title']; ?></span>
                    <h3 class="section-heading"><?php echo $hero_choose['why_choose_prometheus_title']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row child-select">
            <?php for($i=1; $i<=6; $i++) { ?>
            <div class="col-lg-4 col-md-6 col-12 pe-sm-0 px-3">
                <div class="why-choose-us-box">
                    <div class="cus-icon">
                        <img src="<?php echo $hero_choose['a_image_'.$i]; ?>" alt="<?php echo $hero_choose['a_title_'.$i]; ?>">
                    </div>
                    <div class="cu-title">
                        <h4><?php echo $hero_choose['a_title_'.$i]; ?></h4>
                    </div>
                    <div class="cu-body">
                        <p class="demo"><?php echo $hero_choose['a_sub_title_'.$i]; ?> </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php $hero_procedure = get_field('procedure_section'); ?>
<section class="custom-procedure custom-pad"
    style="background-image: url(<?php echo $hero_procedure['procedure_background_banner']; ?>);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 ms-0">
                <div class="procedure-wrap">
                    <div class="custom-heading">
                        <h3 class="section-heading"><?php echo $hero_procedure['procedure_title']; ?></h3>
                    </div>
                    <div class="sub-info">
                        <h5><?php echo $hero_procedure['procedure_sub_title']; ?></h5>
                    </div>
                    <div class="content">
                      <?php echo $hero_procedure['procedure_details']; ?>
                    </div>
                    <a href="<?php echo $hero_procedure['procedure_button']; ?>" class="custom-button">GUARANTEED RESULTS - LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- duplicate section -->

<?php $hero_result = get_field('our_results_section'); ?>
<section class="custom-why-choose-us custom-results custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="custom-heading text-center">
                    <span class="sub-heading"><?php echo $hero_result['our_results_sub_title']; ?></span>
                    <h3 class="section-heading"><?php echo $hero_result['our_results_title']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row child-select">
             <?php for($j=1; $j<=3; $j++) { ?>
            <div class="col-lg-4 col-md-6 col-12 pe-0">
                <div class="why-choose-us-box">
                    <div class="cus-icon">
                        <img src="<?php echo $hero_result['b_image_'.$j]; ?>" alt="<?php echo $hero_result['b_title_'.$j]; ?>">
                    </div>
                    <div class="cu-title">
                        <h4><?php echo $hero_result['b_title_'.$j]; ?></h4>
                    </div>
                    <div class="cu-body">
                        <p class="demo"><?php echo $hero_result['b_sub_title_'.$j]; ?> </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php $dr_farhan = get_field('dr_farhan'); ?>
        <div class="dr-farhan-wrap">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="dr-farhan-left">
                        <div class="dr-farhan-image">
                            <img src="<?php echo $dr_farhan['dr_farhan_image']; ?>"
                                alt="<?php echo $dr_farhan['dr_farhan_name']; ?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="dr-farhan-right">
                        <div class="custom-heading">
                            <h3 class="section-heading"><?php echo $dr_farhan['dr_farhan_name']; ?></h3>
                        </div>
                        <div class="content">
                            <?php echo $dr_farhan['dr_farhan_details']; ?>
                        </div>
                        <a href="<?php echo $dr_farhan['dr_farhan_button_link']; ?>" class="custom-button">schedule a CONSULTATION</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php $before_after = get_field('before_and_after'); ?>
<section class="custom-bef-aft custom-pad"
    style="background-image: url(<?php echo $before_after['before_and_after_background_image']; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="custom-heading text-center">
                    <span class="sub-heading"><?php echo $before_after['before_and_after_sub_title']; ?></span>
                    <h3 class="section-heading"><?php echo $before_after['before_and_after_title']; ?></h3>
                </div>
            </div>
        </div>
        <div class="custom-bef-aft-content">
            <div class="row">
                <?php 
                      $all_box = $before_after['all_boxes'];
                      foreach ($all_box as $box) {
               ?>
                <div class="col-lg-6 ">
                    <div class="gallery-box-wrap">
                        <div class="gallery-img-box">
                            <div class="gal-img-heading">
                                <h5><?php echo get_field('ba_heading',$box); ?></h5>
                            </div>
                            <div class="gal-age-text">
                                <p class="demo"><?php echo get_field('ba_sub_heading',$box); ?></p>
                            </div>
                            <div class="gal-img-btn">
                                <a href="javascript:void(0)" class="custom-button gallery-a-btn">I agree</a>
                            </div>
                            <div class="gal-img-btn-yn cus-hide">
                                <a href="javascript:void(0)" class="gal-img-button-y custom-button"
                                    onclick="yesClicked()">Yes</a>
                                <a href="javascript:void(0)" class="gal-img-button-n custom-button">No</a>
                            </div>
                        </div>
                        <div class="gallery-image cus-hide">
                            <img src="<?php echo get_the_post_thumbnail_url($box); ?>" alt="">
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php $hero_testimonials = get_field('testimonials'); ?>
<section class="custom-testimonials custom-pad">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="custom-heading text-center">
                    <span class="sub-heading"><?php echo $hero_testimonials['testimonials_sub_title']; ?></span>
                    <h3 class="section-heading"><?php echo $hero_testimonials['testimonials_title']; ?></h3>
                </div>
            </div>
        </div>
        <div class="custom-tes-wrap">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div id="custom-owl" class="owl-carousel owl-theme">
                        <?php  $all_testimonials= $hero_testimonials['all_testimonials']; ?>
                            <?php foreach ($all_testimonials as $testimonials) { ?>
                        <div class="item custom-item">
                            <div class="d-flex flex-md-row flex-column align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="<?php echo get_the_post_thumbnail_url($testimonials); ?>"
                                        alt="<?php echo get_the_title($testimonials); ?>">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <div class="content">
                                        <?php
                                        $post = get_post($testimonials);
                                        $content = apply_filters('the_content', $post->post_content);  
                                        the_content(); 
                                        ?>
                                        <span class="client-name"><?php echo get_the_title($testimonials); ?></span>
                                    </div>
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

<?php
get_footer();