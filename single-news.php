<?php
/**
* Template Name: Blog Page Template
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

	if( get_sub_field('blog_section_type') == 'bannerfullwidth' ) {
	get_template_part( 'template-parts/content-bannerfullwidth-news' );
	}
	if( get_sub_field('blog_section_type') == 'servicetextthirds' ) {
		get_template_part( 'template-parts/content-servicetextthirds' );
	}
	if( get_sub_field('blog_section_type') == 'workshops' ) {
		get_template_part( 'template-parts/content-blog' );
	}
	if( get_sub_field('blog_section_type') == 'fullwidthtext' ) {
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