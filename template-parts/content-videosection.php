<?php
/**
* Displays the section content for video section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<?php if( get_sub_field('show_video_gallery_on_this_page') ): ?>
<!-- Section content -->
<div class="video-section section" style="
	min-height:200px;
	background-color:<?php the_sub_field('section_colour');?>;
	color: <?php the_sub_field('section_text_colour');?>;
	">
	<div class="section-inner hidden-fade">
		<h2 style="color: <?php the_sub_field('section_text_colour');?>;">Videos</h2>

<!-- Videos desktop -->


		<div class="videos">
			<?php
			$loop = new WP_Query(
			array(
			'post_type' => 'videos', // This is the name of your post type - change this as required,
			'posts_per_page' => 100 // This is the amount of posts per page you want to show
			)
			); ?>
			<div class="slider">
				<ul class="slides">
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li class="video-scroll-item">

						<!-- Video from media library -->
						<?php if( get_field('add_video_ml') ): ?>
						<div class="vid-embed-container">

							<?php
							// Get the Video Fields
							$video_mp4 =  get_field('add_video_ml'); // MP4 Field Name
							$video_poster  = get_field('vid_poster_image'); // Poster Image Field Name
							
							// Build the  Shortcode
							$attr =  array(
							'mp4'      => $video_mp4,
							'poster'   => $video_poster,
							'preload'  => 'auto',
							'class' => 'mp-video',
							'id' => 'mp-video',
							print '<div class="mp-video-overlay">',
							print '<button id="playpause" class="active">',
							print '</button>',
							print '</div>',
							);
							// Display the Shortcode
							echo wp_video_shortcode(  $attr );
							?>
						</div>

						<?php endif; ?>
						<!-- END Video from media library -->
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>


<!-- Videos mobile -->


		<div class="videos-mobile">
			<?php
			$loop = new WP_Query(
			array(
			'post_type' => 'videos', // This is the name of your post type - change this as required,
			'posts_per_page' => 100 // This is the amount of posts per page you want to show
			)
			); ?>
			<div class="mobile-vid-slider">
				<ul class="slides">
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li class="video-scroll-item">

						<!-- Video from media library -->
						<?php if( get_field('add_video_ml') ): ?>
						<div class="vid-embed-container">

							<?php
							// Get the Video Fields
							$video_mp4 =  get_field('add_video_ml'); // MP4 Field Name
							$video_poster  = get_field('vid_poster_image'); // Poster Image Field Name
							
							// Build the  Shortcode
							$attr =  array(
							'mp4'      => $video_mp4,
							'poster'   => $video_poster,
							'preload'  => 'auto',
							'class' => 'mp-video',
							'id' => 'mp-video',
							print '<div class="mp-video-mobile">',
							print '<button id="playpause" class="active">',
							print '</button>',
							print '</div>',
							);
							// Display the Shortcode
							echo wp_video_shortcode(  $attr );
							?>
						</div>

						<?php endif; ?>
						<!-- END Video from media library -->
					</li>
					<?php endwhile; ?>
				</ul>
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
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<!-- END Section content -->