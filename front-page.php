<?php
/**
* Template Name: Home Template
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

	if( get_sub_field('page_section_type') == 'banner' ) {
	get_template_part( 'template-parts/content-banner' );
	}
	if( get_sub_field('page_section_type') == 'bannerfullwidth' ) {
	get_template_part( 'template-parts/content-bannerfullwidth' );
	}
	if( get_sub_field('page_section_type') == 'scrollgal' ) {
	get_template_part( 'template-parts/content-scrollgal' );
	}
	if( get_sub_field('page_section_type') == 'scrollgalllink' ) {
		get_template_part( 'template-parts/content-scrollgalllink' );
	}
	if( get_sub_field('page_section_type') == 'splittext' ) {
		get_template_part( 'template-parts/content-splittext' );
	}
	if( get_sub_field('page_section_type') == 'splitimagetext' ) {
		get_template_part( 'template-parts/content-splitimagetext' );
	}
	if( get_sub_field('page_section_type') == 'splitroundimagetext' ) {
		get_template_part( 'template-parts/content-splitroundimagetext' );
	}
	if( get_sub_field('page_section_type') == 'splitimageanimations' ) {
		get_template_part( 'template-parts/content-splitimageanimations' );
	}
	if( get_sub_field('page_section_type') == 'fullwidthanimatedsection1' ) {
		get_template_part( 'template-parts/content-fullwidthanimatedsection1' );
	}
	if( get_sub_field('page_section_type') == 'fullwidthanimatedsection2' ) {
		get_template_part( 'template-parts/content-fullwidthanimatedsection2' );
	}
	if( get_sub_field('page_section_type') == 'rolloverboxes' ) {
		get_template_part( 'template-parts/content-rolloverboxes' );
	}
	if( get_sub_field('page_section_type') == 'rolloverboxessmall' ) {
		get_template_part( 'template-parts/content-rolloverboxessmall' );
	}
	if( get_sub_field('page_section_type') == 'tabbedcontent' ) {
		get_template_part( 'template-parts/content-tabbedcontent' );
	}
	if( get_sub_field('page_section_type') == 'colorcontentblocks' ) {
		get_template_part( 'template-parts/content-colorcontentblocks' );
	}
	if( get_sub_field('page_section_type') == 'colorcontentblockscircles' ) {
		get_template_part( 'template-parts/content-colorcontentblockscircles' );
	}
	if( get_sub_field('page_section_type') == 'meettheteam' ) {
		get_template_part( 'template-parts/content-meettheteam' );
	}
	if( get_sub_field('page_section_type') == 'dropdowncontentsection' ) {
		get_template_part( 'template-parts/content-dropdowncontentsection' );
	}
	if( get_sub_field('page_section_type') == 'workshopcategorysection' ) {
		get_template_part( 'template-parts/content-workshopcategorysection' );
	}
	if( get_sub_field('page_section_type') == 'videosection' ) {
		get_template_part( 'template-parts/content-videosection' );
	}
	if( get_sub_field('page_section_type') == 'contactformsection' ) {
		get_template_part( 'template-parts/content-contact' );
	}
	if( get_sub_field('page_section_type') == 'fullwidthtext' ) {
		get_template_part( 'template-parts/content-fullwidthtext' );
	}
	if( get_sub_field('page_section_type') == 'fullwidthbackgroundimagegradient' ) {
		get_template_part( 'template-parts/content-fullwidthbackgroundimagegradient' );
	}
	if( get_sub_field('page_section_type') == 'learningresources' ) {
		get_template_part( 'template-parts/content-testimonials' );
	}
	if( get_sub_field('page_section_type') == 'teammemspt' ) {
		get_template_part( 'template-parts/content-teammems' );
	}
	if( get_sub_field('page_section_type') == 'upcomingevents' ) {
		get_template_part( 'template-parts/content-casestudies' );
	}
	if( get_sub_field('page_section_type') == 'casestudiesmain' ) {
		get_template_part( 'template-parts/content-casestudiespage' );
	}
	if( get_sub_field('page_section_type') == 'glclients' ) {
		get_template_part( 'template-parts/content-glclients' );
	}
	if( get_sub_field('page_section_type') == 'workshops' ) {
		get_template_part( 'template-parts/content-blog' );
	}

	endwhile;
	else :
	endif;
	?>
	<!-- END page sections -->
	</main><!-- #site-content -->
	<!-- footer -->
	<?php get_footer(); ?>