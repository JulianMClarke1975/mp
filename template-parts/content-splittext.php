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
			<?php if( get_sub_field('split_text_section_left') ): ?>
			<h2><?php the_sub_field('split_text_section_left');?></h2>
			<?php endif; ?>

			<?php if( have_rows('split_left_arrowed_content') ):
			while( have_rows('split_left_arrowed_content') ) : the_row(); ?>
			<div class="arrowed-section-content">
				<?php if( get_sub_field('title_arrowed_content') ): ?>
				<h5><?php the_sub_field('title_arrowed_content');?></h5>
				<?php endif; ?>
				<?php if( get_sub_field('text_arrowed_content') ): ?>
				<p><?php the_sub_field('text_arrowed_content');?></p>
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
		<div class="half-section">
			<?php if( get_sub_field('split_text_section_right') ): ?>
			<p><?php the_sub_field('split_text_section_right');?></p>
			<?php endif; ?>
			<?php if( have_rows('split_right_arrowed_content') ):
			while( have_rows('split_right_arrowed_content') ) : the_row(); ?>
			<div class="arrowed-section-content">
				<?php if( get_sub_field('title_right_arrowed_content') ): ?>
				<h5><?php the_sub_field('title_right_arrowed_content');?></h5>
				<?php endif; ?>
				<?php if( get_sub_field('text_right_arrowed_content') ): ?>
				<p><?php the_sub_field('text_right_arrowed_content');?></p>
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