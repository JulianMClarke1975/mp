<?php
/**
* Displays the section content for case studies post-type section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="c-study-section section" style="
	background-color:<?php the_sub_field('section_colour');?>;
	color: <?php the_sub_field('section_text_colour');?>;
	">
	<div class="section-inner cs">
		<?php
		$case_studies = get_sub_field('choose_case_studies');
		if( $case_studies ): ?>
		<?php foreach( $case_studies as $post ):
		// Setup this post for WP functions (variable must be named $post).
		setup_postdata($post); ?>
		<div class="half-section one-quarter cs hidden-left">
			<div class="cs-container">
				<div class="cs-overlay"></div>
				<div class="cs-img-container">
				<span class="cs-img-inner" style="background-image:url(<?php the_field('case_study_image');?>);"></span>
				</div>
				<div class="cs-text-container">
				<h4 style="color:<?php the_field('cs-title-color');?>" class="cs-title"><?php the_title(); ?></h4>

					<?php if( get_field('project_location') ): ?>
					<h4 class="cs-pl"><?php the_field('project_location');?></h4>
					<?php endif; ?>

					<?php if( get_field('project_value') ): ?>
					<h4 class="cs-pv"><span class="pv">Project value:</span> <?php the_field('project_value');?></h4>
					<?php endif; ?>

					<?php if( get_field('case_study_summary') ): ?>
					<p class="cs-sum"><?php the_field('case_study_summary');?></p>
					<?php endif; ?>
				</div>
					<div class="content-cta-button">
					<span class="cs-link"><a href="/mp/gallery/">Click to view</a></span>
					</div>					
			</div>
			</div>
			<?php endforeach; ?>
			<?php
			// Reset the global post object so that the rest of the page works correctly.
			wp_reset_postdata(); ?>
			<?php endif; ?>
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