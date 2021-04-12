<?php
/**
* Displays the section content for testimonial section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="section testimons" style="
    background-color:<?php the_sub_field('section_colour');?>;
    color: <?php the_sub_field('section_text_colour');?>;
    ">
    <?php if( get_sub_field('testimonials_section_title') ): ?>
    <h2 class="test-title-main"><?php the_sub_field('testimonials_section_title');?></h2>
    <?php endif; ?>
    <?php if( get_sub_field('testimonials_section_introduction_text') ): ?>
    <p class="test-text-main"><?php the_sub_field('testimonials_section_introduction_text');?></p>
    <?php endif; ?>
    <?php if( get_sub_field('learning_resources') ): ?>
    <div class="section-inner">

        <?php echo do_shortcode('[isotope type="testimonials" items="100" tax="category" id="gallery-grid"]'); ?>

        <?php wp_reset_postdata(); ?>
    </div>
    <?php endif; ?>
            <!-- overlayed logo in section -->
        <?php if( get_sub_field('section_overlay_logo') ):
        if( get_sub_field('section_overlay_position') == 'ovleft' ) {
        echo '<div class="img-gl-logo-overlay-dark left"></div>';
        }
        if( get_sub_field('section_overlay_position') == 'ovcenter' ) {
        echo '<div class="img-gl-logo-overlay-dark center"></div>';
        }
        if( get_sub_field('section_overlay_position') == 'ovright' ) {
        echo '<div class="img-gl-logo-overlay-dark right"></div>';
        }
        endif; ?>
</div>
<!-- END Section content -->