<?php
/**
* Displays the section content for small boxed content section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="rolloverboxessmall-section section" style="
min-height:200px;
background-color:<?php the_sub_field('section_colour');?>;
color: <?php the_sub_field('section_text_colour');?>;
">
	<div class="section-inner">

			<h2><?php the_sub_field('small_boxed_section_title');?></h2>


		<?php

// Check rows exists.
if( have_rows('small_boxed_content') ):

    // Loop through rows.
    while( have_rows('small_boxed_content') ) : the_row(); ?>


<div class="boxed-content box-squares" style="background-color:<?php the_sub_field('small_rollover_box_background_color');?>">

<div class="boxed-overlay" style="background-image: url('<?php the_sub_field('small_rollover_box_background_image');?>');"> </div>

<div class="lrg-boxed-inner">
	<h4><?php the_sub_field('small_rollover_box_section_title');?></h4>
	<p><?php the_sub_field('small_rollover_box_section_text');?></p>
	<p class="find-out-more-link"><a href="<?php the_sub_field('small_rollover_box_section_link');?>">FIND OUT MORE</a></p>

	</div>

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