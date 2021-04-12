<?php
/**
* Header file for the Growth Labs WordPress default theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Growth_Labs
* @since Growth Labs 0.1
*/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel='shortcut icon' href='/favicon.ico' type='image/x-icon'/ >
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php
        wp_body_open();
        ?>
        <header id="site-header" class="header-footer-group clearHeader" role="banner">
            <div class="header-inner section-inner">
                <div class="header-titles-wrapper">
                    <div class="header-titles">
                        <?php if( get_field('site_logo' , 'option') ): ?>
                        <div class="header-logo">
                            <a href="<?php echo get_home_url(); ?>
                            "><img src="<?php the_field('site_logo' , 'option');?>"></a>
                        </div>
                        <?php endif; ?>
                        </div><!-- .header-titles -->
                        </div><!-- .header-titles-wrapper -->
                        <div class="header-navigation-wrapper">
                            <button id="menu-toggle" aria-controls="primary-menu" aria-expanded="false" class="main-hamburger-menu" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle"><span class="bar"></span>
                            </button>
                            <?php
                            if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
                            ?>
                            <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">
                                <ul class="primary-menu reset-list-style">
                                    <?php
                                    if ( has_nav_menu( 'primary' ) ) {
                                    wp_nav_menu(
                                    array(
                                    'container'  => '',
                                    'items_wrap' => '%3$s',
                                    'theme_location' => 'primary',
                                    )
                                    );
                                    } elseif ( ! has_nav_menu( 'expanded' ) ) {
                                    wp_list_pages(
                                    array(
                                    'match_menu_classes' => true,
                                    'show_sub_menu_icons' => true,
                                    'title_li' => false,
                                    'walker'   => new TwentyTwenty_Walker_Page(),
                                    )
                                    );
                                    }
                                    ?>
                                </ul>
                                </nav><!-- .primary-menu-wrapper -->
                                <?php
                                }
                                if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
                                ?>
                                <div class="header-toggles hide-no-js">
                                    <?php
                                    if ( has_nav_menu( 'expanded' ) ) {
                                    ?>
                                    <div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">
                                        </div><!-- .nav-toggle-wrapper -->
                                        <?php
                                        }
                                        ?>
                                        </div><!-- .header-toggles -->
                                        <?php
                                        }
                                        ?>
                                        </div><!-- .header-navigation-wrapper -->
                                        </div><!-- .header-inner -->
                                        <?php
                                        // Output the search modal (if it is activated in the customizer).
                                        if ( true === $enable_header_search ) {
                                        get_template_part( 'template-parts/modal-search' );
                                        }
                                        ?>
                                        <div class="home-hero-menu">
                                            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                                        </div>
                                        </header><!-- #site-header -->
                                        <?php
                                        // Output the menu modal.
                                        get_template_part( 'template-parts/modal-menu' );