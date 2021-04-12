<?php
/**
* Displays the section content for Hero/Banner full width sections.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Banner Section content -->
<?php if(get_sub_field('banner_slides_fw')): ?>
<?php while(has_sub_field('banner_slides_fw')): ?>
<div class="banner-section section" style="
    background-image: url('<?php the_sub_field('banner_slide_image_fw');?>');
    ">
    <div class="section-inner split-tint-banner" style="color: <?php the_sub_field('banner_text_colour_fw');?>;">
        <div class="footer-soical">
            <?php if( have_rows('global_socials' , 'option') ):
            while( have_rows('global_socials'  , 'option') ) : the_row(); ?>
            
            <div class="footer-social-container">
                
                <?php $icon = get_sub_field( 'global_social_image' );
                if ( !empty( $icon ) ):
                $url = $icon['url'] ;
                $ext = pathinfo( $url, PATHINFO_EXTENSION ); ?>
                <a href="<?php the_sub_field('global_social_link');?>">
                    <div id="footer-socials">
                        <?php if ( $ext == 'svg' ):
                        echo file_get_contents( $url ) ;
                        // Non SVG Fallback
                        else: ?>
                        <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>"> <?php
                        endif; ?>
                    </div>
                </a>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="banner-content-container">
            <?php if( get_sub_field('banner_title_fw') ): ?>
            <h1 class="banner-split-title"><?php the_sub_field('banner_title_fw');?></h1>
            <?php endif; ?>
            <?php if( get_sub_field('banner_content_text_fw') ): ?>
            <p class="banner-split-text"><?php the_sub_field('banner_content_text_fw');?></p>
            <?php endif; ?>
            <?php if( get_sub_field('banner_link_1_fw') ): ?>
            <div class="button banner-split-button">
                <a href="<?php the_sub_field('banner_link_1_fw');?>"><?php the_sub_field('banner_link_3_fw');?></a>
            </div>

        <?php else: ?>
        <?php if( get_sub_field('banner_link_3_fw') ): ?>
        <a href="#inline_content" class="inline cboxElement">
        <span class="button banner-split-button">
        <?php the_sub_field('banner_link_3_fw');?>
        </span> 
        </a>
            <?php endif; ?>
            <?php endif; ?>
            <?php if( get_sub_field('banner_link_2_fw') ): ?>
            <div class="button banner-split-button">
                <a href="<?php the_sub_field('banner_link_2_fw');?>"><?php the_sub_field('banner_link_4_fw');?></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="fw-banner img-gl-logo-overlay"></div>
    <div class="img-color-overlay" style="background-color: <?php the_sub_field('banner_ov_col_fw');?>"></div>
    <div style="display:none">
<div id="inline_content" class="popup-contact">
<?php echo do_shortcode('[contact-form-7 id="492" title="Contact form 1_copy"]'); ?>

</div>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_sub_field('show_home_banner_services_feature') ): ?>
<div class="banner-services-feature">
    <div class="banner-services-feature-inner">
        <?php
        $loop = new WP_Query(
        array(
        'post_type' => 'mpservices', // This is the name of your post type - change this as required,
        'posts_per_page' => 5 // This is the amount of posts per page you want to show
        )
        );
        while ( $loop->have_posts() ) : $loop->the_post();
        // The content you want to loop goes in here:
        ?>
        <div class="serv-fifths">
            <div class="serv-icon-image" style="background-image: url(<?php the_field('services_icon_image_grey');?>);"></div>
            <h4 class="services-box-title"><?php the_title(); ?></h4>
            <div class="banner-serv-button">
                <a href="<?php the_permalink(); ?>"><span class="other-serv-link"></span></a>
            </div>
        </div>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>
<?php else: ?>
<?php endif; ?>
<!-- END Banner Section content -->