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
<div class="quality-standard section" style="
	min-height:200px;
	background-color:<?php the_sub_field('section_colour');?>;
	color: <?php the_sub_field('section_text_colour');?>;
	">
	<div class="section-inner">
		<?php if( have_rows('thirds_section_content') ):
		while( have_rows('thirds_section_content') ) : the_row(); ?>

		<div class="half-section one-third services-text-box hidden-fade">
		<div class="services-thirds-section-content">

		<?php if( get_sub_field('thirds_title') ): ?>
		<h2 class="services-thirds-title"><?php the_sub_field('thirds_title');?></h2>

		<div class="content-serv-txt">
		<span><?php the_sub_field('thirds_text');?></span>
	    </div>

		<?php elseif( get_sub_field('thirds_text') ): ?>
		<div class="content-serv-txt-only">
		<span><?php the_sub_field('thirds_text');?></span>
	    </div>

		<?php elseif( get_sub_field('thirds_image') ): ?>
		<div class="q-thirds-image">
		<img src="<?php the_sub_field('thirds_image');?>">
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