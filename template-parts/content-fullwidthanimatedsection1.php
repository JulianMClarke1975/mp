<?php
/**
* Displays the section content for section.
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
		
		<?php
		// Check rows exists.
		if( have_rows('split_animations_section_animations_full_1') ):
		// Loop through rows.
		while( have_rows('split_animations_section_animations_full_1') ) : the_row(); ?>
		<div class="block-content split-anims-full-thirds">
			<?php if( get_sub_field('split_animations_section_animation_icons_full_1') ): ?>
			<img src="<?php the_sub_field('split_animations_section_animation_icons_full_1');?>">
			<?php endif; ?>
			<?php if( get_sub_field('animations_text_full_1') ): ?>
			<div class="anims-text">
				<p><?php the_sub_field('animations_text_full_1');?></p>
			</div>
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
<!-- END Section content -->