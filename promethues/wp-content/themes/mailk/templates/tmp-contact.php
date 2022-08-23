<?php
/**

 * Template Name: Contact Us

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage Twenty_Twenty_One

 */
get_header(); ?>


<section class="inner-contact-us-info custom-pad">
  <div class="container">
    <div class="row">
      <div class="custom-heading text-center">
        <span class="sub-heading">Get IN Touch</span>
        <h3 class="section-heading">Feel Free To Contact</h3>
      </div>
    </div>
    <div class="inner-contact-details mt-md-5 mt-3">
      <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="contact-details-box transition">
            <div class="contact-details-box-icon transition primary-color">
              <i class="fas fa-phone"></i>
            </div>

            <h4 class="contact-box-title transition">Phone:</h4>

            <ul>
                <li><a href="tel:<?php echo get_option('consult_number'); ?>"><?php echo get_option('consult_number'); ?></a></li>
                <li><a href="tel:<?php echo get_option('secondary_consult_number'); ?>"><?php echo get_option('secondary_consult_number'); ?></a></li>
            </ul>
        </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="contact-details-box transition">
            <div class="contact-details-box-icon transition primary-color">
              <i class="fas fa-map-marker-alt"></i>
            </div>

            <h4 class="contact-box-title transition">Address:</h4>
            <p class="demo"><?php echo get_option('address'); ?></p>
        </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="contact-details-box transition">
            <div class="contact-details-box-icon transition primary-color">
              <i class="fas fa-envelope"></i>
            </div>
            <h4 class="contact-box-title transition">Email:</h4>
            <ul>
              <li><a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a></li>
              <li><a href="mailto:<?php echo get_option('secondary_email'); ?>"><?php echo get_option('secondary_email'); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $book_now = get_field('book_now'); ?>
<section class="contact-form-two-section">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-xl-5 col-lg-5 col-md-12 form-img-col">
              <div class="form-left-image">
                <img src="<?php echo $book_now['book_now_image']; ?>" alt="Two doctors in their robes">
              </div>
          </div>

          <div class="col-xl-7 col-lg-7 col-md-12 form-col">
              <div class="contact-form-container form-style-two">
                  <div class="form-icon">
                      <i class="flaticon-nurse"></i>
                  </div>

                  <div class="section-title-wrapper left">
                    <div class="custom-heading">
                      <span class="sub-heading"><?php echo $book_now['book_now_title']; ?></span>
                      <h3 class="section-heading"><?php echo $book_now['book_now_sub_title']; ?></h3>
                    </div>
                  </div>

                  <div class="wrapdiv-contact-form-container">
                    <?php 
                         $hero_form = $book_now['book_now_form'];
                         echo do_shortcode($hero_form);
                    ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="custom-map mb-lg-4 mb-3">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php echo get_field('promethues_address'); ?>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();