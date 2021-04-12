<?php
/**
 * Template Name: Cover Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Growth Labs 2021
 * @since Growth Labs 0.1
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-cover' );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
