<?php
/**
* Displays the section content for blog section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="image-text-gradient-section section testimons hidden-down" style="
    background-color:<?php the_sub_field('section_colour');?>;
    color: <?php the_sub_field('section_text_colour');?>;
    ">
    <?php if( get_sub_field('show_workshops_on_this_page') ): ?>

    <?php if( get_sub_field('blog_section_title') ): ?>
        <h4><?php get_sub_field('blog_section_title');?></h4>
    <?php else: ?>
            <h4>See what we have to say</h4>
    <?php endif; ?>

    <div class="section-inner">
        <?php
        $loop = new WP_Query(
        array(
        'post_type' => 'news', // This is the name of your post type - change this as required,
        'posts_per_page' => 3 // This is the amount of posts per page you want to show
        )
        );
        while ( $loop->have_posts() ) : $loop->the_post();
        // The content you want to loop goes in here:
        ?>
            <div class="news-thirds">
                <div class="news-bg-image" style="background-image: url(<?php the_field('gl_article_featured_image');?>);"></div>
                <div class="news-item-container">
                    <?php if( get_field('gl_article_title') ): ?>
                    <h4 class="news-title"><?php the_field('gl_article_title');?></h4>
                    <?php else: ?>
                    <h4 class="news-title"><?php the_title(); ?></h4>
                    <?php endif; ?>

                    <?php if( get_field('gl_article_subtitle') ): ?>
                    <h4 class="news-subtitle"><?php the_field('gl_article_subtitle');?></h4>
                    <?php endif; ?>

                    <div class="serv-prov-container">
                        <?php
                        foreach((get_the_category()) as $category);
                        $my_date = the_date();
                        {                    
                        echo $my_date;
                        }
                        ?>
                    </div>

                    <?php if( get_field('gl_article_summary') ): ?>
                    <p class="news-sum"><?php the_field('gl_article_summary');?></p>
                    <?php endif; ?>
                    <div class="content-cta-button">
                    <span class="cs-link"><a href="<?php the_permalink(); ?>">Click to view</a></span>
                    </div>  
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </div>
    <?php endif; ?>
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