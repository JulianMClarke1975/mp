<?php
/**
* Displays the section content for client logos section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="gl-client-logo-section section" style="
	background-color:<?php the_sub_field('section_colour');?>;
	color: <?php the_sub_field('section_text_colour');?>;
	">
	<div class="section-inner">
		<?php if( get_sub_field('clint_section_title') ): ?>
		<h2><?php the_sub_field('clint_section_title'); ?></h2>
		<?php endif; ?>
		<div class="clients-center hidden-fade">
			<?php
			$loop = new WP_Query(
			array(
			'post_type' => 'client_logos', // This is the name of your post type - change this as required,
			'posts_per_page' => 100 // This is the amount of posts per page you want to show
			)
			); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php if( get_field('client_logo') ): ?>
			<div class="client-image-holder">
				<img src="<?php the_field('client_logo');?>">
			</div>
			<?php endif; ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			
			<!-- Clients CTA buttons -->

			<div class="client-cta">
			<div class="client-cta-inner">
			<div class="client-cta-1">	
			<?php $link = get_sub_field('client_cta_link_1');
            if( $link ): ?>
            <a class="button banner-split-button" href="<?php echo esc_url( $link ); ?>">
            <?php the_sub_field('client_cta_text_1');?>
            </a>
            <?php endif; ?>
			</div>
			<div class="client-cta-2">	
			<?php $link = get_sub_field('client_cta_link_2');
            if( $link ): ?>
            <a class="button banner-split-button" href="<?php echo esc_url( $link ); ?>">
            <?php the_sub_field('client_cta_text_2');?>
            </a>
            <?php endif; ?>
			</div>
			</div>
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