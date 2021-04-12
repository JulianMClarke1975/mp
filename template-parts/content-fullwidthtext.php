<?php
/**
* Displays the section content for full widthtext section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div id="fade-up-text" class="fw-text-section section <?php the_sub_field('section_colour');?>" style="
background-color:<?php the_sub_field('section_colour');?>;
color: <?php the_sub_field('section_text_colour');?>;
">
<div class="img-gl-logo-overlay-orange left"></div>
	<div class="section-inner hidden-down">
		<?php if( get_sub_field('full_width_title') ): ?>
		<p><?php the_sub_field('full_width_title'); ?></p>
		<?php endif; ?>
		<?php if( get_sub_field('full_width_text_section') ): ?>
		<h2><?php the_sub_field('full_width_text_section'); ?></h2>
		<?php endif; ?>

		<?php if( get_sub_field('full_width_text_section_cta_link') ): ?>

		<a href="<?php the_sub_field('full_width_text_section_cta_link'); ?>">
		<span class="button banner-split-button">
		<?php the_sub_field('full_width_text_section_cta_text'); ?>
	   </span>
		</a>

		<?php else: ?>

		<a href="#inline_content" class="inline cboxElement">
		<span class="button banner-split-button">
		<?php the_sub_field('full_width_text_section_cta_text'); ?>
	    </span>	
		</a>

		<?php endif; ?>
	</div>
<div class="img-gl-logo-overlay-orange right"></div>
<div style="display:none">
<div id="inline_content" class="popup-contact">
<?php echo do_shortcode('[contact-form-7 id="492" title="Contact form 1_copy"]'); ?>

</div>
</div>
</div>
<!-- END Section content -->