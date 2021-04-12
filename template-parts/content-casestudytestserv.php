<?php
/**
* Displays the section content for home services thirds text & images section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="casestudytestserv-section section" style="
	min-height:200px;
	background-color:<?php the_sub_field('section_colour');?>;
	color: <?php the_sub_field('section_text_colour');?>;
	">
	<div class="section-inner">
		<div class="half-section one-third services-text-box hidden-fade">
			<div class="services-thirds-section-content">
				
				<?php
				$test_case_studies = get_sub_field('cs_sec_testimonial');
				if( $test_case_studies ): ?>
				<?php foreach( $test_case_studies as $post ):
				setup_postdata($post); ?>
				<?php if( get_field('cs_testimonial_title') ): ?>
				<h2 class="cs-test"><?php the_field('cs_testimonial_title');?></h2>
				<?php endif; ?>
				<?php if( get_field('testimonial_text_comment') ): ?>
				<span class="testimonials"><?php the_field('testimonial_text_comment');?></span>
				<?php endif; ?>
				<?php if( get_field('testimonial_author') ): ?>
				<p class="test-cs-auth"><?php the_field('testimonial_author');?></p>
				<?php endif; ?>
				<?php if( get_field('testimonial_author_credentials') ): ?>
				<p class="test-cs-cred"><?php the_field('testimonial_author_credentials');?></p>
				<?php endif; ?>
				<?php endforeach; ?>
				<?php
					// Reset the global post object so that the rest of the page works correctly.
				wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>


		<div class="half-section one-third services-text-box hidden-fade">
			<div class="services-thirds-section-content">
				
				<?php
				$test_case_studies = get_sub_field('cs_sec_serv1');
				if( $test_case_studies ): ?>
				<?php foreach( $test_case_studies as $post ):
				setup_postdata($post); ?>

				<?php if( get_field('cs_home_service_img') ): ?>
				<div class="cs-home-image">
					<img src="<?php the_field('cs_home_service_img');?>">
				</div>
				<?php elseif( get_field('cs_home_page_img') ): ?>
				<div class="cs-home-image">
					<img src="<?php the_field('cs_home_page_img');?>">
				</div>
				<?php endif; ?>

				<?php if( get_field('cs_home_service_title') ): ?>
				<h2 class="cs-home-con-title"><?php the_field('cs_home_service_title');?></h2>
				<?php elseif( get_field('cs_home_page_title') ): ?>
				<h2 class="cs-home-con-title"><?php the_field('cs_home_page_title');?></h2>
				<?php endif; ?>

				<?php if( get_field('cs_home_service_excerpt') ): ?>
				<span><?php the_field('cs_home_service_excerpt');?></span>
				<a href="<?php the_permalink(); ?>"><span class="other-serv-link"></span></a>
				<?php elseif( get_field('cs_home_page_excerpt') ): ?>
				<span><?php the_field('cs_home_page_excerpt');?></span>
				<a href="<?php the_permalink(); ?>"><span class="other-serv-link"></span></a>
				<?php endif; ?>
				
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			</div>
		</div>


		<div class="half-section one-third services-text-box hidden-fade">
			<div class="services-thirds-section-content">

				<?php
				$test_case_studies = get_sub_field('cs_sec_serv2');
				if( $test_case_studies ): ?>
				<?php foreach( $test_case_studies as $post ):
				setup_postdata($post); ?>

				<?php if( get_field('cs_home_service_img') ): ?>
				<div class="cs-home-image">
					<img src="<?php the_field('cs_home_service_img');?>">
				</div>
				<?php elseif( get_field('cs_home_page_img') ): ?>
				<div class="cs-home-image">
					<img src="<?php the_field('cs_home_page_img');?>">
				</div>
				<?php endif; ?>

				<?php if( get_field('cs_home_service_title') ): ?>
				<h2 class="cs-home-con-title"><?php the_field('cs_home_service_title');?></h2>
				<?php elseif( get_field('cs_home_page_title') ): ?>
				<h2 class="cs-home-con-title"><?php the_field('cs_home_page_title');?></h2>
				<?php endif; ?>

				<?php if( get_field('cs_home_service_excerpt') ): ?>
				<span><?php the_field('cs_home_service_excerpt');?></span>
				<a href="<?php the_permalink(); ?>"><span class="other-serv-link"></span></a>
				<?php elseif( get_field('cs_home_page_excerpt') ): ?>
				<span><?php the_field('cs_home_page_excerpt');?></span>
				<a href="<?php the_permalink(); ?>"><span class="other-serv-link"></span></a>
				<?php endif; ?>
				
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

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