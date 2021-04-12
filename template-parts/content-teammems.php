<?php
/**
* Displays the section content for team post-type section.
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

<?php if( get_sub_field('show_team_members_on_this_page') ): ?>

<?php
$loop = new WP_Query(
    array(
        'post_type' => 'team_members', // This is the name of your post type - change this as required,
        'posts_per_page' => 20 // This is the amount of posts per page you want to show
    )
);
while ( $loop->have_posts() ) : $loop->the_post();
// The content you want to loop goes in here:
?>

<div class="team-mem-container">

<?php if( get_field('team_member_image') ): ?>
	<div class="team-profs-section-singles">
			<img src="<?php the_field('team_member_image');?>">
		</div>
<?php endif; ?>

<div class="team-details">
<?php if( get_field('team_member_name') ): ?>
			<p><?php the_field('team_member_name');?></p>
<?php endif; ?>

<?php if( get_field('team_member_work_role') ): ?>
			<p><?php the_field('team_member_work_role');?></p>
<?php endif; ?>

<?php if( get_field('team_member_email') ): ?>
			<p><?php the_field('team_member_email');?></p>
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