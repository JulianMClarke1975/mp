<?php
/**
* Template Name: Contact page Template
* Template Post Type: post, page
*
* @package WordPress
* @subpackage Growth_labs_2021
* @since Growth Labs 0.1
*/
get_header();
?>
<main id="site-content" role="main" <?php body_class(); ?>>
	<!-- page sections -->
	<?php
	if( have_rows('add_page_section') ):
	while( have_rows('add_page_section') ) : the_row();
	if( get_sub_field('page_section_type') == 'bannerfullwidth' ) {
		get_template_part( 'template-parts/content-bannerfullwidth' );
	}
	endwhile;
	else :
	endif;
	?>
	<!-- END page sections -->
<div class="section contact-page-form">
	<div class="section-inner">
		<div class="half-section hidden-left">
			<div class="cp-cf">
			<?php if( get_field('contact_form_id') ): ?>
<?php echo do_shortcode('[contact-form-7 id="'.get_field('contact_form_id').'"]');?>
		<?php endif; ?>
		</div>
	</div>
	    <div class="half-section gmap hidden-right">
			<div class="map-bg-contain">

  <head>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe0Q4C-AIN2P8P3-sgJF2zJt93S_Glr84&map_ids=67bbba53434c1174&callback=initMap"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 650px;
      }
      .gm-style img{
      }
    </style>
    <script>
      "use strict";

      function initMap() {
        const myLatLng = {
          lat: 51.532229069730825,
          lng: 0.7847036000094026
        };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          mapId: '67bbba53434c1174',
          center: myLatLng,
          fullscreenControl: true,
          zoomControl: true,
          streetViewControl: false
        });
        new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: "Mulberry and Pier",
          icon: '/mp/wp-content/themes/growthlabs/assets/images/map-marker.svg'
        });
      }
    </script>
  </head>
    <div id="map"></div>

			</div>
	    	    <div class="contact-page-bg"></div>
	</div>
	</div>
</div>

	<!-- page sections -->
	<?php
	if( have_rows('add_page_section') ):
	while( have_rows('add_page_section') ) : the_row();
	if( get_sub_field('page_section_type') == 'contactdetails' ) {
		get_template_part( 'template-parts/content-contactdetails' );
	}
	endwhile;
	else :
	endif;
	?>
	
	</main><!-- #site-content -->
	<!-- footer -->
	<?php get_footer(); ?>