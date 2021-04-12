<?php
/**
* Template Name: Basic page
* Template Post Type: post, page
*
* @package WordPress
* @subpackage Growth_labs_2021
* @since Growth Labs 0.1
*/
get_header();
?>
<main id="site-content" role="main" <?php body_class(); ?>>

	<?php if( get_field('basic_page_title') ): ?>
	<div class="basic-small-hero">
			<div class="basic-small-hero-inner">
		<h1 class="basic-page-title"><?php the_field('basic_page_title');?></h1>
	</div>
</div>
	<?php endif; ?>

	<!-- page sections -->
	<div class="section">
		<div class="section-inner">

	<?php if( get_field('basic_page_content') ): ?>
	<div class="basic-page-text">
	<div class="basic-page-text-inner">

		<?php the_field('basic_page_content');?>
			
	</div>
	</div>

	<?php endif; ?>
		</div>
</div>

	<!-- END page sections -->
	</main><!-- #site-content -->
	<!-- footer -->
	<?php get_footer(); ?>