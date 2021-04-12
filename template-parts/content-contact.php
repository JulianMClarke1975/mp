<?php
/**
* Displays the section content for contact section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="contact-us-section section" style="
background-color:<?php the_sub_field('section_colour');?>;
color: <?php the_sub_field('section_text_colour');?>;
">
	<div class="section-inner">
		<?php echo do_shortcode('[contact-form-7 id="14" title="Contact form 1"]'); ?>
	</div>
</div>
<!-- END Section content -->