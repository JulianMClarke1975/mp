<?php
/**
* Displays the section content for services thirds text section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="services-split-text-section section" style="
	min-height:200px;
	background-color:<?php the_sub_field('section_colour');?>;
	color: <?php the_sub_field('section_text_colour');?>;
	">
	<div class="section-inner">
		<?php if( have_rows('services_thirds_content') ):
		while( have_rows('services_thirds_content') ) : the_row(); ?>
		<div style="width:<?php the_sub_field('service_text_custom_width');?>%;" class="half-section one-third services-text-box hidden-fade">
		<div class="services-thirds-section-content">

		<?php if( get_sub_field('services_thirds_content_text_title') ): ?>
		<h2 class="services-thirds-title"><?php the_sub_field('services_thirds_content_text_title');?></h2>
		<?php endif; ?>
		<?php if( get_sub_field('services_thirds_content_text_text') ): ?>
		<div class="content-serv-txt">
		<p><?php the_sub_field('services_thirds_content_text_text');?></p>
	    </div>
		<?php endif; ?>

		</div>
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