<?php
/**
* Template Name: Page Template
* Template Post Type: post, page
*
* @package WordPress
* @subpackage Growth_labs_2021
* @since Growth Labs 0.1
*/
get_header();
?>
<main id="site-content" role="main" <?php body_class(); ?>>
	<!-- page sections -->
	<?php
	if( have_rows('add_page_section') ):
	while( have_rows('add_page_section') ) : the_row();
	if( get_sub_field('page_section_type') == 'bannerfullwidth' ) {
	get_template_part( 'template-parts/content-bannerfullwidth' );
	}
	endwhile;
	else :
	endif;
	?>
	<div class="section qs-section">
		<div class="section-inner">
			<div id="qs-gal" class="half-section qs-sec one-third hidden-left">
				<?php if( get_field('qs_gallery_title') ): ?>
				<h2 class="qs-gal-title"><?php the_field('qs_gallery_title');?></h2>
				<?php endif; ?>
			</div>
			<div class="half-section qs-sec two-third hidden-right">
				<?php
				// Check rows exists.
				if( have_rows('qs_gallery_images') ):
				// Loop through rows.
				while( have_rows('qs_gallery_images') ) : the_row(); ?>
				<div class="qs-gal-img">
					<img class="gal-lrg-img" src="<?php the_sub_field('qs_gallery_image');?>">
				</div>
				<span class="qs-gal-img-button">
					<span class="btn-overlay"></span>
					<span class="qs-gal-img-button-inner"></span>
					<img class="small-click-image" src="<?php the_sub_field('qs_gallery_image');?>">
				</span>
				<?php
				// End loop.
				endwhile;
				// No value.
				else :
				// Do something...
				endif;
				?>
			</div>
		</div>
	</div>
	<?php
	if( have_rows('add_page_section') ):
	while( have_rows('add_page_section') ) : the_row();
	if( get_sub_field('page_section_type') == 'contentthirds' ) {
		get_template_part( 'template-parts/content-contentthirds' );
	}
	if( get_sub_field('page_section_type') == 'fullwidthtext' ) {
		get_template_part( 'template-parts/content-fullwidthtext' );
	}
	endwhile;
	else :
	endif;
	?>
	<!-- END page sections -->
	</main><!-- #site-content -->
	<!-- footer -->
	<?php get_footer(); ?>