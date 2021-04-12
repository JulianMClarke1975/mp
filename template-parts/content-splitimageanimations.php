<?php
/**
* Displays the section content for split text section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="scrollgal-section section" style="
min-height:200px;
background-color:<?php the_sub_field('section_colour');?>;
color: <?php the_sub_field('section_text_colour');?>;
">
	<div class="section-inner">
		
		<div class="half-section">
			<?php if( get_sub_field('split_animations_section_title') ): ?>
			<h3><?php the_sub_field('split_animations_section_title');?></h3>
			<?php endif; ?>
			<?php if( get_sub_field('split_animations_section_text') ): ?>
			<p><?php the_sub_field('split_animations_section_text');?></p>
			<?php endif; ?>
		</div>
		<div class="half-section">
			<?php if( get_sub_field('split_animations_section_title_right') ): ?>
			<h4><?php the_sub_field('split_animations_section_title_right');?></h4>
			<?php endif; ?>
			<?php
			// Check rows exists.
			if( have_rows('split_animations_section_animations') ):
			// Loop through rows.
			while( have_rows('split_animations_section_animations') ) : the_row(); ?>
			<div class="block-content split-anims">
				<?php if( get_sub_field('split_animations_section_animation_icons') ): ?>
				<img src="<?php the_sub_field('split_animations_section_animation_icons');?>">
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