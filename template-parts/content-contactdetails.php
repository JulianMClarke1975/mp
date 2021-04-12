<?php
/**
* Displays the section content for contect page details section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div id="fade-up-text" class="contect-details section <?php the_sub_field('section_colour');?>" style="
background-color:<?php the_sub_field('section_colour');?>;
">
	<div class="section-inner hidden-down">
		<div class="contact-thirds">
		<?php if( get_field('mp_telephone_1' , 'option') ): ?>
		<a class="details-ul" href="tel:<?php the_field('mp_telephone_1' , 'option'); ?>">
		<p class="cp-tel"><?php the_field('mp_telephone_1' , 'option'); ?></p></a>
		<?php endif; ?>
		<?php if( get_field('mp_telephone_2' , 'option') ): ?>
		<a href="tel:<?php the_field('mp_telephone_2' , 'option'); ?>">
		<p class="cp-tel"><?php the_field('mp_telephone_2' , 'option'); ?></p></a>
		<?php endif; ?>
		</div>
		<div class="contact-thirds">
		<?php if( get_field('global_email_address' , 'option') ): ?>
		<a class="details-ul" href="mailto:<?php the_field('global_email_address' , 'option'); ?>">
		<p class="cp-email"><?php the_field('global_email_address' , 'option'); ?></p></a>
		<?php endif; ?>
		<?php if( get_field('global_email_address_2' , 'option') ): ?>
		<a href="mailto:<?php the_field('global_email_address_2' , 'option'); ?>">
		<p class="cp-email"><?php the_field('global_email_address_2' , 'option'); ?></p></a>
		<?php endif; ?>
		</div>
		<div class="contact-thirds">
		<?php if( have_rows('global_address_lines' , 'option') ):
		while( have_rows('global_address_lines' , 'option') ) : the_row(); ?>
		<?php if( get_sub_field('address_line') ): ?>
		<p class="cp-addy"><?php the_sub_field('address_line'); ?></p>
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

		                <!-- overlayed logo in section -->
    <?php if( get_sub_field('section_overlay_logo') ):
    if( get_sub_field('section_overlay_position') == 'ovleft' ) {
                echo '<div class="img-gl-logo-overlay-dark left"></div>';
    }
    if( get_sub_field('section_overlay_position') == 'ovcenter' ) {
            echo '<div class="img-gl-logo-overlay-dark center"></div>';
    }
    if( get_sub_field('section_overlay_position') == 'ovright' ) {
            echo '<div class="img-gl-logo-overlay-dark right"></div>';
    }
    endif; ?>

</div>
<!-- END Section content -->