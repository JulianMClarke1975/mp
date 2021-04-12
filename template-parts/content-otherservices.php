<?php
/**
* Displays the section content for other services section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="section testimons hidden-down" style="
    background-color:<?php the_sub_field('section_colour');?>;
    color: <?php the_sub_field('section_text_colour');?>;
    ">
    <?php if( get_sub_field('show_other_services') ): ?>
    <h4>More Services</h4>
    <div class="section-inner">

<!-- Begin Post object content for other services -->

<?php if( get_sub_field('choose_other_services') ): ?>

        <?php
        $other_services = get_sub_field('mp_other_services');
        if( $other_services ): ?>
        <?php foreach( $other_services as $post ):
        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>

        <div class="news-thirds services hidden-left">
            <div class="news-item-container">
                <div class="logo-bg-serv">
                    <div class="serv-icon-image" style="background-image: url(<?php the_field('services_icon_image');?>);"></div>
                    <h4 class="services-box-title"><?php the_title(); ?></h4>
                    <a href="<?php the_permalink(); ?>"><span class="other-serv-link"></span></a>
                    
                </div>
            </div>
        </div>


        <?php endforeach; ?>
        <?php
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
        <?php endif; ?>


<!-- End Post object content for other services -->

<?php else: ?>

<!-- Begin services loop if not selected in admin -->

        <?php
        $loop = new WP_Query(
        array(
        'post_type' => 'mpservices', // This is the name of your post type - change this as required,
        'posts_per_page' => 3 // This is the amount of posts per page you want to show
        )
        );
        while ( $loop->have_posts() ) : $loop->the_post();
        // The content you want to loop goes in here:
        ?>
        <div class="news-thirds services hidden-left">
            <div class="news-item-container">
                <div class="logo-bg-serv">
                    <div class="serv-icon-image" style="background-image: url(<?php the_field('services_icon_image');?>);"></div>
                    <h4 class="services-box-title"><?php the_title(); ?></h4>
                    <a href="<?php the_permalink(); ?>"><span class="other-serv-link"></span></a>
                    
                </div>
            </div>
        </div>
        <?php endwhile;
        wp_reset_postdata();
        ?>

<?php endif; ?>

<!-- End services loop if not selected in admin -->

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