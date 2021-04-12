<?php
/**
* Displays the section content for Hero/Banner sections.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Banner Section content -->
<?php if(get_sub_field('banner_slides')): ?>
<div class="split-banner-container">
<?php while(has_sub_field('banner_slides')): ?>
<div class="half-section">
    <div class="banner-section section" style="
        background-image: url('<?php the_sub_field('banner_slide_image');?>');
        color: <?php the_sub_field('section_text_colour');?>;
        ">
        <div class="section-inner split-tint-banner" style="color: <?php the_sub_field('banner_text_colour');?>;">
            <div class="banner-content-container">
            <?php if( get_sub_field('banner_strapline') ): ?>
            <p class="banner-pre-text"><?php the_sub_field('banner_strapline');?></p>
            <?php endif; ?>
            <?php if( get_sub_field('banner_title') ): ?>
            <h1 class="banner-split-title"><?php the_sub_field('banner_title');?></h1>
            <?php endif; ?>
            <?php if( get_sub_field('banner_content_text') ): ?>
            <p class="banner-split-text"><?php the_sub_field('banner_content_text');?></p>
            <?php endif; ?>
            <?php if( get_sub_field('banner_link_1') ): ?>
            <div class="button banner-split-button">
                <a href="<?php the_sub_field('banner_link_1');?>"><?php the_sub_field('banner_link_3');?></a>
            </div>
            <?php endif; ?>
            <?php if( get_sub_field('banner_link_2') ): ?>
            <div class="button banner-split-button">
                <a href="<?php the_sub_field('banner_link_2');?>"><?php the_sub_field('banner_link_4');?></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
            <div class="img-gl-logo-overlay"></div>
        <div class="img-color-overlay" style="background-color: <?php the_sub_field('banner_ov_col');?>"></div>
    </div>
</div>
<?php endwhile; ?>
</div>
<?php endif; ?>
<!-- END Banner Section content -->