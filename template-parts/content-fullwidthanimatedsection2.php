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
		<h2><?php the_sub_field('split_animations_section_title_full_fourths');?></h2>
		<?php
		// Check rows exists.
		if( have_rows('split_animations_section_animations_full_2') ):
		// Loop through rows.
		while( have_rows('split_animations_section_animations_full_2') ) : the_row(); ?>
		<?php if( get_sub_field('split_animations_section_animation_icons_full_2') ): ?>
		<div class="block-content split-anims-full-fourths">
			
			<img src="<?php the_sub_field('split_animations_section_animation_icons_full_2');?>">
		</div>
		<?php endif; ?>
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
<!-- END section content -->