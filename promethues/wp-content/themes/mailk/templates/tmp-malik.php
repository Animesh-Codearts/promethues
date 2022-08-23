<?php
/**

 * Template Name: Dr. Malik

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage Twenty_Twenty_One

 */
get_header(); ?>

<section class="custom-why-choose-us custom-results custom-pad">
    <div class="container">
        <?php $dr_farhan = get_field('dr_farhan',8); ?>
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
                        <!-- <a href="<?php echo $dr_farhan['dr_farhan_button_link']; ?>" class="custom-button">schedule a CONSULTATION</a> -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<?php
get_footer();