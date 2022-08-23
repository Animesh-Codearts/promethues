<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage celldrix
 */
get_header(); ?>


  <section class="banner-section" >
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 col-12  ms-0">
          <div class="banner-left-wrap">
            <div class="top-text">
              <p class="demo"><?php echo get_option('title'); ?></p>
            </div>
            <div class="banner-socials">
              <ul>
                <li><a href="<?php echo get_option('facebook_url'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="<?php echo get_option('twitter_url'); ?>"><i class="fab fa-twitter"></i></a></li>
                <li><a href="<?php echo get_option('google_url'); ?>"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="<?php echo get_option('linkedin_url'); ?>"><i class="fab fa-linkedin-in"></i></a></li>
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
        <div class="col-md-11 col-12 ps-0 pe-0">
          <div class="banner-right-wrap">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="container-fluid">
                <div class="carousel-indicators">
                  <ul class="custom-carousel-indicator">
                    <li><button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>01</li>
                    <li> <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>02</li>
                    <li><button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>03</li>
                  </ul>
                </div>
              </div>
              
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/banner-1.jpg" class="d-block w-100" alt="A man in blue suit">
                  <div class="carousel-caption custom-carousel-caption ">
                    <h5>Ignite Your Confidence Permanently.</h5>
                    <p>The Minimally Invasive Procedure for Maximum Penis Enlargement</p>
                    <a href="" class="custom-button">SCHEDULE A CONSULTATION</a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/banner-1.jpg" class="d-block w-100" alt="A man in blue suit">
                  <div class="carousel-caption custom-carousel-caption ">
                    <h5>Ignite Your Confidence Permanently.</h5>
                    <p>The Minimally Invasive Procedure for Maximum Penis Enlargement</p>
                    <a href="" class="custom-button">SCHEDULE A CONSULTATION</a>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/banner-1.jpg" class="d-block w-100" alt="A man in blue suit">
                  <div class="carousel-caption custom-carousel-caption ">
                    <h5>Ignite Your Confidence Permanently.</h5>
                    <p>The Minimally Invasive Procedure for Maximum Penis Enlargement</p>
                    <a href="" class="custom-button">SCHEDULE A CONSULTATION</a>
                  </div>
                </div>
              </div>
              <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button> -->
            </div>
          </div>
        </div>
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
            <div class="item feature-logo-item">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/featured-logo-1.png" alt="">
            </div>
            <div class="item feature-logo-item">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/featured-logo-2.png" alt="">
            </div>
            <div class="item feature-logo-item">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/featured-logo-3.png" alt="">
            </div>
            <div class="item feature-logo-item">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/featured-logo-4.png" alt="">
            </div>
            <div class="item feature-logo-item">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/featured-logo-5.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="custom-benefits-to-work custom-pad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="custom-benefits-left">
            <div class="image-w">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us-img.jpg" alt="A woman explaining the benefits of working with us">
            </div>
            <div class="watch-video-section d-flex align-items-center">
              <h4 class="ms-0">Benefits of <br> Working With Us</h4>
              <h4 class="video me-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Watch Video <span class="demo"><i class="fas fa-play"></i></span></h4>
            </div>            
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="custom-benefits-right">
            <div class="custom-heading">
              <span class="sub-heading"></span>
              <h3 class="section-heading">Atlanta's No. 1 Nonsurgical Penis Eniargement Specialists</h3>
            </div>
            <div class="custom-benefits-content">
              <h4>Experience You Need. Results You Want.</h4>
              <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. </p>
              <a href="" class="custom-button">Learn more</a>
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
            <span class="sub-heading">Why Choose Prometheus</span>
            <h3 class="section-heading">Best Male Enhancement Practice</h3>
          </div>
        </div>
      </div>
      <div class="row child-select">
        <div class="col-lg-4 col-md-6 col-12 pe-sm-0 px-3">
          <div class="why-choose-us-box">
            <div class="cus-icon">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/why-choose-icon-1.png" alt="">
            </div>
            <div class="cu-title">
              <h4>Nonsurgical, permanent <br> penis enlargement</h4>
            </div>
            <div class="cu-body">
              <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 p-sm-0 px-3">
          <div class="why-choose-us-box">
            <div class="cus-icon">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/why-choose-icon-2.png" alt="">
            </div>
            <div class="cu-title">
              <h4>Guaranteed Size and Girth <br>
                Gain with 3XL Procedure</h4>
            </div>
            <div class="cu-body">
              <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 ps-sm-0 px-3">
          <div class="why-choose-us-box">
            <div class="cus-icon">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/why-choose-icon-3.png" alt="">
            </div>
            <div class="cu-title">
              <h4>Natural look and feel when <br>
                flaccid and erect</h4>
            </div>
            <div class="cu-body">
              <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 pe-sm-0 px-3">
          <div class="why-choose-us-box">
            <div class="cus-icon">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/why-choose-icon-4.png" alt="">
            </div>
            <div class="cu-title">
              <h4>Impressive size <br>
                increase within 2 hours</h4>
            </div>
            <div class="cu-body">
              <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 p-sm-0 px-3">
          <div class="why-choose-us-box">
            <div class="cus-icon">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/why-choose-icon-5.png" alt="">
            </div>
            <div class="cu-title">
              <h4>Most advanced <br>
                technology for treatment</h4>
            </div>
            <div class="cu-body">
              <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 ps-sm-0 px-3">
          <div class="why-choose-us-box">
            <div class="cus-icon">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/why-choose-icon-6.png" alt="">
            </div>
            <div class="cu-title">
              <h4>Performed by a prominent, <br>
                board-certified doctor.</h4>
            </div>
            <div class="cu-body">
              <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="custom-procedure custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/procedure-banner-bg.jpg);">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 ms-0">
          <div class="procedure-wrap">
            <div class="custom-heading">
              <h3 class="section-heading">The Prometheus Procedure:
                A Big Increase in Size
                A Natural Look and Feel</h3>
            </div>
            <div class="sub-info">
              <h5>OVER 15,000 SATIFIED PATIENTS</h5>
            </div>
            <div class="content">
              <p class="demo">Our permanent patented filler is injected just under the penile skin, where your body absorbs it and uses it to stimulate collagen production.</p>
              <p class="demo pt-3">This additional collagen leads to new growth of blood vessels, nerves, and other tissues, resulting in a natural, permanent, impressive increase in size and practically no downtime.</p>
            </div>
            <a href="javascript:void(0)" class="custom-button">GUARANTEED RESULTS - LEARN MORE</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- duplicate section -->
  <section class="custom-why-choose-us custom-results custom-pad">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="custom-heading text-center">
            <span class="sub-heading">our Results</span>
            <h3 class="section-heading">Personalized Solutions for Impressive Results</h3>
          </div>
        </div>
      </div>
      <div class="row child-select">
        <div class="col-lg-4 col-md-6 col-12 pe-0">
          <div class="why-choose-us-box">
            <div class="cus-icon">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/result-icon-1.png" alt="">
            </div>
            <div class="cu-title">
              <h4>Girth <br>
                Enlargement</h4>
            </div>
            <div class="cu-body">
              <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 p-0">
          <div class="why-choose-us-box">
            <div class="cus-icon">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/result-icon-2.png" alt="">
            </div>
            <div class="cu-title">
              <h4>Scrotal <br>
                Enlargement</h4>
            </div>
            <div class="cu-body">
              <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12  ps-0">
          <div class="why-choose-us-box">
            <div class="cus-icon">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/result-icon-3.png" alt="">
            </div>
            <div class="cu-title">
              <h4>Glans <br>
                Enlargement</h4>
            </div>
            <div class="cu-body">
              <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, </p>
            </div>
          </div>
        </div>
      </div>
      <div class="dr-farhan-wrap">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="dr-farhan-left">
              <div class="dr-farhan-image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/dr-farhan-img.jpg" alt="An image of Dr. Farhan Malik, MD">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="dr-farhan-right">
              <div class="custom-heading">
                <h3 class="section-heading">DR. Farhan Malik, MD</h3>
              </div>
              <div class="content">
                <p class="demo">Dr. Malik is double board-certified physician specializing in male enhancement, sports medicine, and sexual health. Practicing for over 20 years, Dr. Malik’s reputation as an honest, compassionate doctor who delivers incredible penis enhancement results has earned Prometheus recognition in the field of sexual health and aesthetics. He was recently selected as Best Male Enhancement Doctor by Best Self Atlanta magazine.</p>
                <p class="demo mt-3">Dr. Malik has also acted as a consulting physician for the Georgia Athletic and Entertainment Commission, covering boxing and mixed martial arts events.</p>
              </div>
              <a href="javascript:void(0)" class="custom-button">schedule a CONSULTATION</a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
  <section class="custom-bef-aft custom-pad" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/before-after-bg.jpg);"> 
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="custom-heading text-center">
            <span class="sub-heading">OUR GALLERY</span>
            <h3 class="section-heading">See The Before and After</h3>
          </div>
        </div>
      </div>
      <div class="custom-bef-aft-content">
        <div class="row">
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
                  <a href="javascript:void(0)"  class="gal-img-button-y custom-button" onclick="yesClicked()">Yes</a>
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
        </div>
      </div>
    </div>
  </section>
  <section class="custom-testimonials custom-pad">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="custom-heading text-center">
            <span class="sub-heading">TESTIMONIALS</span>
            <h3 class="section-heading">Verified Reviews</h3>
          </div>
        </div>
      </div>
      <div class="custom-tes-wrap">
        <div class="row">
          <div class="col-md-10 offset-md-1">

            <div id="custom-owl" class="owl-carousel owl-theme">
              <div class="item custom-item">
                <div class="d-flex flex-md-row flex-column align-items-center">
                  <div class="flex-shrink-0">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/tes-client-img-1.png" alt="...">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <div class="content">
                      <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus.</p>
                      <span class="client-name">Laura L from Rome, GA</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item custom-item">
                <div class="d-flex flex-md-row flex-column align-items-center">
                  <div class="flex-shrink-0">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/tes-client-img-1.png" alt="...">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <div class="content">
                      <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus.</p>
                      <span class="client-name">Laura L from Rome, GA</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item custom-item">
                <div class="d-flex flex-md-row flex-column align-items-center">
                  <div class="flex-shrink-0">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/tes-client-img-1.png" alt="...">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <div class="content">
                      <p class="demo">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus.</p>
                      <span class="client-name">Laura L from Rome, GA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>

<?php
get_footer();