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
<div class="tabbedcontent-section section" style="
min-height:200px;
background-color:<?php the_sub_field('section_colour');?>;
color: <?php the_sub_field('section_text_colour');?>;
">
	<div class="section-inner">
		<h2><?php the_sub_field('tabbed_content_title');?></h2>


		<?php

// Check rows exists.
if( have_rows('tabbed_content_slides') ):

    // Loop through rows.
    while( have_rows('tabbed_content_slides') ) : the_row(); ?>


<div class="tabbed-content">

<div class="tabbed-content-inner">
	<h4><?php the_sub_field('single_tabs_titles');?></h4>
	<p><?php the_sub_field('single_tabs_text');?></p>
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