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
<div class="case-study-section section cs-slider" style="
	background-color:<?php the_sub_field('section_colour');?>;
	color: <?php the_sub_field('section_text_colour');?>;
	">
	<div class="section-inner home-slides">
		<?php if( get_sub_field('upcoming_events_section_title') ): ?>
		<h2><?php the_sub_field('upcoming_events_section_title');?></h2>
		<?php endif; ?>
		<?php if( get_sub_field('show_cs_on_this_page') ): ?>
		<?php
		$loop = new WP_Query(
		array(
		'post_type' => 'home_page_slider', // This is the name of your post type - change this as required,
		'posts_per_page' => 3 // This is the amount of posts per page you want to show
		)
		); ?>
		<div class="flexslider">
			<ul class="slides">
				<?php while ( $loop->have_posts() ) : $loop->the_post();
				// The content you want to loop goes in here:
				?>
				<li class="home-slider-items">
					<div class="half-section left">
						<div class="cs-slider-image-container">
							<?php if( get_field('home_slide_image') ): ?>
							<img style="border-color: <?php the_sub_field('section_colour');?>;width:<?php the_field('home_slide_img_top_width');?>px;top:<?php the_field('home_slide_img_top_top');?>px;left:<?php the_field('home_slide_img_top_left');?>px;" src="<?php the_field('home_slide_image');?>">
							<?php endif; ?>
							<?php if( get_field('home_slide_bottom_image') ): ?>
							<img style="border-color: <?php the_sub_field('section_colour');?>;width:<?php the_field('home_slide_img_bottom_width');?>px;top:<?php the_field('home_slide_img_bottom_top');?>px;left:<?php the_field('home_slide_img_bottom_left');?>px;" src="<?php the_field('home_slide_bottom_image');?>">
							<?php endif; ?>
						</div>
					</div>
					<div class="half-section right">
						<div class="team-details">
							<div class="cs-sum-container">
								<?php if( get_field('home_slide_text') ): ?>
								<span><?php the_field('home_slide_text');?></span>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</li>
				
				<?php endwhile; ?>
			</ul>
		</div>
		<?php wp_reset_postdata();
		?>
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