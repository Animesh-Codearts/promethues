<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage promethues
 */

?>
<footer class="custom-footer"> 
    <div class="custom-footer-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-12 align-self-center">
            <div class="footer-content mt-0">
              <a href="<?php echo site_url();?>">
              <div class="footer-logo">
                <img src="<?php echo get_option('footer_logo'); ?>" alt="Prometheus by Dr. Malik Logo">
              </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="footer-content">
              <div class="footer-heading">
                <h4>Quick links</h4>
              </div>
              <ul class="footer-text-w quick-link-list">
                <li><a href="javascript:void(0)">Introduction To Male Enhancement</a></li>
                <li><a href="javascript:void(0)">Penis Girth Enlargement</a></li>
                <li><a href="javascript:void(0)">Penis Head Enlargement</a></li>
                <li><a href="javascript:void(0)">Scrotal Enhancement</a></li>
                <li><a href="javascript:void(0)">Before And After Photos</a></li>
                <li><a href="javascript:void(0)">Testimonials</a></li>
                <li><a href="javascript:void(0)">Meet Dr. Malik</a></li>
                <li><a href="javascript:void(0)">Why We’re The Best Choice</a></li>
                <li><a href="javascript:void(0)">Cost and Financing</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <div class="footer-content ms-md-5">
              <div class="footer-heading">
                <h4>Social</h4>
              </div>
              <ul class="footer-text-w">
                <li><a href="<?php echo get_option('facebook_url'); ?>">Facebook</a></li>
                <li><a href="<?php echo get_option('youtube_url'); ?>">YouTube</a></li>
                <li><a href="<?php echo get_option('twitter_url'); ?>">Twitter</a></li>
                <li><a href="<?php echo get_option('instagram_url'); ?>">Instagram</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-12">
            <div class="footer-content">
              <div class="footer-heading">
                <h4>Contact us </h4>
              </div>
              <ul class="footer-text-w footer-contact-us">
                <li>
                  <a href="tel:<?php echo get_option('consult_number'); ?>">
                    <span class="demo"><i class="fas fa-phone"></i></span> 
                    <p class="demo">Schedule a Consult <?php echo get_option('consult_number'); ?></p>
                  </a>
                </li>
                <li>
                  <a href="mailto:<?php echo get_option('email'); ?>">
                    <span class="demo"><i class="fas fa-envelope"></i></span>
                    <p class="demo"><?php echo get_option('email'); ?></p>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0)">
                    <span class="demo"><i class="fas fa-clock"></i></span>
                    <p class="demo"><?php echo get_option('address'); ?></p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="text-center">
        <div class="footer-copyright">
          <p class="demo"><?php echo get_option('copyright'); ?></p>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>
