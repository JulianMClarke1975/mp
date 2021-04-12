<?php
/**
* Displays the section content for video section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="gallery-section section" style="
	min-height:200px;
	background-color:<?php the_sub_field('section_colour');?>;
	color: <?php the_sub_field('section_text_colour');?>;
	">
	<div class="section-inner hidden-fade">
		<h2>Photos</h2>
		<div class="gallery">
			<?php echo do_shortcode('[isotope type="gallery_items" items="100" tax="category" id="gallery-grid"]'); ?>
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
<?php wp_reset_postdata(); ?>
<!-- END Section content -->