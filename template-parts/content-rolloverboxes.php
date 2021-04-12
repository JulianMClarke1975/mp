<?php
/**
* Displays the section content for large boxed content section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- large boxed content Section content -->
<div class="large-boxed-content-section section" style="
	min-height:200px;
	background-color:<?php the_sub_field('section_colour');?>;
	color: <?php the_sub_field('section_text_colour');?>;
	">
	<div class="section-inner hidden-right">
	<?php if( get_sub_field('large_boxed_section_title') ): ?>
		<h2><?php the_sub_field('large_boxed_section_title');?></h2>
		<?php endif; ?>
		<?php
		// Check rows exists.
		if( have_rows('large_boxed_content') ):
		// Loop through rows.
		while( have_rows('large_boxed_content') ) : the_row(); ?>
		<a href="<?php the_sub_field('large_box_section_link');?>">
		<div class="boxed-content box-halves">
			<div class="boxed-overlay" style="background-image: url('<?php the_sub_field('large_box_background_image');?>');"> </div>
			<div class="img-color-overlay" style="background-color: <?php the_sub_field('large_box_background_color');?>"></div>
			<div class="lrg-boxed-inner">
				<?php if( get_sub_field('large_box_section_title') ): ?>
				<p><?php the_sub_field('large_box_section_title');?></p>
				<?php endif; ?>
				<?php if( get_sub_field('large_box_section_text') ): ?>
				<h4><?php the_sub_field('large_box_section_text');?></h4>
				<?php endif; ?>
			</div>

		</div>
	</a>
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
<!-- END Section content -->