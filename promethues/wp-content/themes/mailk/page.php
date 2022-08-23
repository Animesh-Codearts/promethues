<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<section class="custom-inner-banner">
    <div class="container ">
      <div class="row align-self-center">
        <div class="col-lg-12 my-auto text-center">
          <div class="banner-content">
            <?php if ( have_posts() ) : 
					while ( have_posts() ) : the_post();
						if(get_the_content() != '')
						{
							the_content();
						}
						else
						{
							echo "<h2><span>Content Coming Soon ...</span></h2>
							<p>See You!!</p>";
						}
					endwhile; ?>
				<?php endif; ?>
          </div>
        </div>
      </div>
    </div>
</section>



<?php
get_footer();
