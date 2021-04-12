<?php
/**
* Displays the section content for services intro section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="section almosty testimons" style="
    color: <?php the_sub_field('section_text_colour');?>;
    ">
    <div class="section-inner almost">
        <div class="section-back-almost" style="background-color:<?php the_sub_field('section_colour');?>;"></div>
        <div class="section-back-almost-icon" style="background-image: url(<?php the_field('services_icon_image');?>);"></div>
        <div class="section-back-almost-inner">
            <div class="half-section hidden-left">
                <?php if( get_sub_field('services_intro_title') ): ?>
                <h3 class="services-intro-title"><?php the_sub_field('services_intro_title');?></h3>
                <?php endif; ?>
                <?php if( get_sub_field('services_intro_subtitle') ): ?>
                <h3 class="services-intro-subtitle"><?php the_sub_field('services_intro_subtitle');?></h3>
                <?php endif; ?>
                <?php if( get_sub_field('services_intro_text') ): ?>
                <span class="services-intro-text"><?php the_sub_field('services_intro_text');?></span>
                <?php endif; ?>
            </div>
            <div class="half-section hidden-right">
                <?php if( have_rows('services_intro_images') ): ?>
                <div class="intro-image-container-holder">
                    <?php while( have_rows('services_intro_images') ) : the_row(); ?>
                    <?php if( get_sub_field('services_intro_image') ): ?>
                    <div class="intro-image-container">
                        <a data-rel="lightbox" href="<?php the_sub_field('services_intro_image');?>">
                        <img src="<?php the_sub_field('services_intro_image');?>">
                        <span class="intro-image-overlay"></span>
                        </a>
                    </div>
                    <?php endif; ?>
                    <?php
                    // End loop.
                    endwhile;?>
                </div>
                <?php else :
                // Do something...
                endif;
                ?>
            </div>
        </div>
    </div>
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