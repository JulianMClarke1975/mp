<?php
/**
* Displays the section content for contact section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- scrollgal Section content -->
<div class="scrollgal-section section" style="
    min-height:200px;
    background-color:<?php the_sub_field('section_colour');?>;
    color: <?php the_sub_field('section_text_colour');?>;
    ">
    <h2><?php the_sub_field('scrolling_carousel_1_title');?></h2>
    <?php if(get_sub_field('scrolling_gallery_1_slides')): ?>
    <div class="slider">
        <ul class="slides">
            <?php while(has_sub_field('scrolling_gallery_1_slides')): ?>
            <li>
                <div class="section-inner">
                    <div class="scrollgal-section-singles section">
                        <a href="<?php the_sub_field('carousel_style_1_link');?>">
                            <div class="scrollgal-section-singles section">
                                <div class="carousel-images" style="
                                    background-image: url('<?php the_sub_field('carousel_style_1_image');?>');">
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>
</div>
<!-- END scrollgal Section content -->