<?php
/**
* Displays the section content for scroll gallery with link section.
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
    <h2><?php the_sub_field('scrolling_carousel_2_title');?></h2>
    <?php if(get_sub_field('scrolling_gallery_2_slides')): ?>
    <div class="slidertext">
        <ul class="slides">
            <?php while(has_sub_field('scrolling_gallery_2_slides')): ?>
            <li>
                <div class="section-inner">
                    <a href="<?php the_sub_field('carousel_item_link');?>">
                        <div class="scrollgal-section-singles section"> 
                            <div class="carousel-images" style="background-image: url('<?php the_sub_field('carousel_item_image');?>');">
                            <div class="carousel-details">
                                <p><?php the_sub_field('carousel_item_title');?></p>
                                <p><?php the_sub_field('carousel_item_text');?></p>
                            </div>
                        </div>
                        </div>
                    </a>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>
</div>
<!-- END Section content -->