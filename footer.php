<?php
/**
* The template for displaying the footer
*
* Contains the opening of the #site-footer div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Growth_Labs
* @since Growth Labs 0.1
*/
?>
<footer id="site-footer" role="contentinfo" class="footer header-footer-group">
	<!--<div class="mask-holder"></div>-->
	<div class="section-inner">
		<div class="content-container">
			<div class="contact-form-container">
				<?php echo do_shortcode('[contact-form-7 id="14" title="Contact form 1"]'); ?>
				
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
					<?php
					wp_nav_menu( array(
					'theme_location' => 'footer',
					'container_class' => 'footer-menu' ) );
					?>
				</div>
				</div><!-- .content-container -->
				</div><!-- .section-inner -->
				<?php if( get_field('footer_background_image' , 'option') ): ?>
				<div class="footer-dock">
					<img src="<?php the_field('footer_background_image' , 'option'); ?>">
				</div>
				<?php endif; ?>
		</footer><!-- #site-footer -->
	</body>
		</html>