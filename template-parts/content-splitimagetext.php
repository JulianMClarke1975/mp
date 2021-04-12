<?php
/**
* Displays the section content for split image and text section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="split-image-text-section section" style="
min-height:200px;
background-color:<?php the_sub_field('section_colour');?>;
color: <?php the_sub_field('section_text_colour');?>;
">
	<div class="section-inner">
		<div class="half-section one-third">
			<img class="content-image" src="<?php the_sub_field('split_section_image');?>">
		</div>
		<div class="half-section two-third">
			<?php
			// Check rows exists.
			if( have_rows('split_section_text_blocks') ):
			// Loop through rows.
			while( have_rows('split_section_text_blocks') ) : the_row(); ?>
			<div class="block-content">
				<?php if( get_sub_field('split_section_block_title') ): ?>
				<p><?php the_sub_field('split_section_block_title');?></p>
				<?php endif; ?>
				<?php if( get_sub_field('split_section_block_subtitle') ): ?>
				<p><?php the_sub_field('split_section_block_subtitle');?></p>
				<?php endif; ?>
				<?php if( get_sub_field('split_section_block_text') ): ?>
				<p><?php the_sub_field('split_section_block_text');?></p>
				<?php endif; ?>
			</div>
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
<!-- END Section content -->