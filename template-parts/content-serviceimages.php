<?php
/**
* Displays the section content for services images section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="section hidden-down" style="
    background-color:<?php the_sub_field('section_colour');?>;
    color: <?php the_sub_field('section_text_colour');?>;
    ">
    <div class="section-inner services-img-sec">
        <h2>We are complete paint finishes for industry.</h2>
        <?php if( have_rows('services_page_images_section') ):
        while( have_rows('services_page_images_section') ) : the_row(); ?>
        <div class="half-section one-third hidden-fade">
            <?php if( get_sub_field('service_page_section_image') ): ?>
            <div class="content-serv-page-image">
                <a class="hide-overlay" data-rel="lightbox" href="<?php the_sub_field('service_page_section_image');?>">
                    <img src="<?php the_sub_field('service_page_section_image');?>">
                    <div class="intro-image-overlay"></div>
                </a>
            </div>
            <?php endif; ?>
        </div>
        <?php
        // End loop.
        endwhile;
        // No value.
        else :
        // Do something...
        endif;
        ?>
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