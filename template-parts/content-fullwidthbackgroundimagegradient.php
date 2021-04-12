<?php
/**
* Displays the section content for image gradient + text sections.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="image-text-gradient-section section" style="
    background-image: url('<?php the_sub_field('image_grad_image');?>');
    color: <?php the_sub_field('section_text_colour');?>;
    ">
    <div class="img-grad-overlay"></div>
    <?php if( get_sub_field('image_grad_link') ): ?>
    <a href="<?php the_sub_field('image_grad_link');?>" class="fw-box-link"></a>
    <?php endif; ?>
    <div class="section-inner">
        <div class="full-width-overlayed hidden-left">
            <?php if( get_sub_field('image_grad_title') ): ?>
            <h2><?php the_sub_field('image_grad_title');?></h2>
            <?php endif; ?>
            <?php if( get_sub_field('image_grad_text') ): ?>
            <p><?php the_sub_field('image_grad_text');?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- END Section content -->