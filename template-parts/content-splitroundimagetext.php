<?php
/**
* Displays the section content for split text image round section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="split-text-image-round-section section" style="
	background-color:<?php the_sub_field('section_colour');?>;
	color: <?php the_sub_field('section_text_colour');?>;
	">
	<?php if( get_sub_field('select_to_show_image_left') ): ?>
	<div class="section-inner">
		<div class="half-section left hidden-left">
			<?php if( get_sub_field('splitimagetextround_split_section_image_title') ): ?>
			<div class="multi-image-title-container" style="top:<?php the_sub_field('mi-title-top');?>px;left:<?php the_sub_field('mi-title-left');?>px;">
			<h3 class="multi-image-title"><?php the_sub_field('splitimagetextround_split_section_image_title');?></h3>
		    </div>
			<?php endif; ?>
			<div class="layered-image-container">
				<!-- bottom image -->
				<img style="border-color: <?php the_sub_field('section_colour');?>;left:<?php the_sub_field('split_section_round_image_left_px_copy');?>px;border-radius:<?php the_sub_field('split_section_round_image_border_radius_px_copy');?>px;width:<?php the_sub_field('split_section_round_image_size_px_copy');?>px; top:<?php the_sub_field('split_section_round_image_pos_px_copy');?>px;margin-bottom:<?php the_sub_field('split_section_round_image_pos_px_copy');?>px;" class="content-image-round left" src="<?php the_sub_field('split_section_round_image_copy');?>">
				<!-- bottom image end-->
				<!-- top image -->
				<img style="border-color: <?php the_sub_field('section_colour');?>;left:<?php the_sub_field('split_section_round_image_left_px');?>px;border-radius:<?php the_sub_field('split_section_round_image_border_radius_px');?>px;width:<?php the_sub_field('split_section_round_image_size_px');?>px; top:<?php the_sub_field('split_section_round_image_pos_px');?>px;margin-bottom:<?php the_sub_field('split_section_round_image_pos_px');?>px;" class="content-image-round left" src="<?php the_sub_field('split_section_round_image');?>">
				<!-- top image end-->
				<!-- orange box -->
				<div class="image-deco-box" style="top:<?php the_sub_field('orange_box_top');?>px;left:<?php the_sub_field('orange_box_left');?>px;"></div>
				<!-- orange box ends -->
			</div>
		</div>
		<div class="half-section right hidden-right">
			<?php if( get_sub_field('splitimagetextround_split_section_title') ): ?>
			<h2><?php the_sub_field('splitimagetextround_split_section_title');?></h2>
			<?php endif; ?>
			<?php if( get_sub_field('splitimagetextround_split_section_text') ): ?>
			<p><?php the_sub_field('splitimagetextround_split_section_text');?></p>
			<?php endif; ?>
			<?php if( get_sub_field('splitimagetextround_split_section_link') ): ?>
			<div class="content-cta-button">
				<a href="<?php the_sub_field('splitimagetextround_split_section_link');?>"><span><?php the_sub_field('splitimagetextround_split_section_button_text');?></span></a>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php else : ?>
	<div class="section-inner">
		<div class="half-section left hidden-left">
			<?php if( get_sub_field('splitimagetextround_split_section_title') ): ?>
			<h2><?php the_sub_field('splitimagetextround_split_section_title');?></h2>
			<?php endif; ?>
			<?php if( get_sub_field('splitimagetextround_split_section_text') ): ?>
			<p><?php the_sub_field('splitimagetextround_split_section_text');?></p>
			<?php endif; ?>
			<?php if( get_sub_field('splitimagetextround_split_section_link') ): ?>
			<div class="content-cta-button">
				<a href="<?php the_sub_field('splitimagetextround_split_section_link');?>"><span><?php the_sub_field('splitimagetextround_split_section_button_text');?></span></a>
			</div>
			<?php endif; ?>
		</div>
		<div class="half-section right hidden-right">
			<?php if( get_sub_field('splitimagetextround_split_section_image_title') ): ?>
			<div class="multi-image-title-container" style="top:<?php the_sub_field('mi-title-top');?>px;left:<?php the_sub_field('mi-title-left');?>px;">
			<h3 class="multi-image-title"><?php the_sub_field('splitimagetextround_split_section_image_title');?></h3>
		</div>
			<?php endif; ?>
			<div class="layered-image-container">
				<!-- top image -->
				<img style="border-color: <?php the_sub_field('section_colour');?>;left:<?php the_sub_field('split_section_round_image_left_px_copy');?>px;border-radius:<?php the_sub_field('split_section_round_image_border_radius_px_copy');?>px;width:<?php the_sub_field('split_section_round_image_size_px_copy');?>px; top:<?php the_sub_field('split_section_round_image_pos_px_copy');?>px;margin-bottom:<?php the_sub_field('split_section_round_image_pos_px_copy');?>px;" class="content-image-round left" src="<?php the_sub_field('split_section_round_image_copy');?>">
				<!-- top image end-->
				<!-- bottom image -->
				<img style="border-color: <?php the_sub_field('section_colour');?>;left:<?php the_sub_field('split_section_round_image_left_px');?>px;border-radius:<?php the_sub_field('split_section_round_image_border_radius_px');?>px;width:<?php the_sub_field('split_section_round_image_size_px');?>px; top:<?php the_sub_field('split_section_round_image_pos_px');?>px;margin-bottom:<?php the_sub_field('split_section_round_image_pos_px');?>px;" class="content-image-round right" src="<?php the_sub_field('split_section_round_image');?>">
				<!-- bottom image end-->
			</div>
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
</div>
<!-- END Section content -->