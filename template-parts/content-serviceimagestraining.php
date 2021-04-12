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
        <?php if( have_rows('training_images') ):
        while( have_rows('training_images') ) : the_row(); ?>
        <div style="width:10%;max-width: 10%;" class="half-section one-third hidden-fade">
            <?php if( get_sub_field('training_c_image') ): ?>
            <div class="content-serv-page-image">
                <a href="<?php the_sub_field('training_c_link');?>">
                    <img style="width:100%;max-width: 100%;" src="<?php the_sub_field('training_c_image');?>">
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