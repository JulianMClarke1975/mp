<?php
/**
* Displays the section content for events section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="contact-us-section section" style="
background-color:<?php the_sub_field('section_colour');?>;
color: <?php the_sub_field('section_text_colour');?>;
">
	<div class="section-inner">

<?php if( get_sub_field('show_upcoming_events_on_this_page') ): ?>

<?php if( get_sub_field('upcoming_events_section_title') ): ?>
			<h2><?php the_sub_field('upcoming_events_section_title');?></h2>
<?php endif; ?>

<?php if( get_sub_field('upcoming_events_section_text') ): ?>
			<p><?php the_sub_field('upcoming_events_section_text');?></p>
<?php endif; ?>


<?php
$loop = new WP_Query(
    array(
        'post_type' => 'upcoming_events', // This is the name of your post type - change this as required,
        'posts_per_page' => 20 // This is the amount of posts per page you want to show
    )
);
while ( $loop->have_posts() ) : $loop->the_post();
// The content you want to loop goes in here:
?>
 
<div class="section-inner">

<div class="learning-resource-container">

<?php if( get_field('event_pt_title') ): ?>
			<h3><?php the_field('event_pt_title');?></h3>
<?php endif; ?>

<?php if( get_field('event_pt_date') ): ?>
			<p><?php the_field('event_pt_date');?></p>
<?php endif; ?>

<?php if( get_field('event_pt_overview') ): ?>
			<p><?php the_field('event_pt_overview');?></p>
<?php endif; ?>

<?php if( get_field('event_pt_register_link') ): ?>
			<p><a href="<?php the_field('event_pt_register_link');?>">Read on</a></p>
<?php endif; ?>


</div>

</div>
 
<?php endwhile;
wp_reset_postdata();
?>

	<?php endif; ?>

	</div>
</div>
<!-- END Section content -->