<?php
/**
* Displays the section content for team section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section content -->
<div class="team-section section hidden-fade" style="
min-height:200px;
background-color:<?php the_sub_field('section_colour');?>;
color: <?php the_sub_field('section_text_colour');?>;
">
	<div class="section-inner">
        <div class="for-team-three">
	<?php if( get_sub_field('team_section_title') ): ?>
		<h2><?php the_sub_field('team_section_title');?></h2>
	<?php endif; ?>
		<?php
		// Check rows exists.
		if( have_rows('meet_the_team_profile_links') ):
		// Loop through rows.
		while( have_rows('meet_the_team_profile_links') ) : the_row(); ?>
		<div class="team-mem-container">
			<?php if( get_sub_field('team_member_link') ): ?>
    <a href="<?php the_sub_field('team_member_link');?>" class="inline fw-box-link"></a>
        <!-- This contains the hidden content for inline calls -->
		<div style='display:none'>
			<div id="inline_content" class="popup-contact">
			<?php if( get_sub_field('team_member_popup_content') ): ?>
<?php echo do_shortcode('[contact-form-7 id="'.get_sub_field('team_member_popup_content').'"]');?>
		<?php endif; ?>
			</div>
		</div>
    <?php endif; ?>

			<?php if( get_sub_field('team_member_profile_image') ): ?>
			<div class="team-profs-section-singles" style="background-image: url('<?php the_sub_field('team_member_profile_image');?>');">
			</div>
			<?php else:?>
			<div class="team-profs-section-singles" style="background-image:url(/wp-content/themes/growthlabs/assets/images/team-placeholder.svg);">
			</div>
		<?php endif; ?>
			<div class="team-details">
				<?php if( get_sub_field('team_member_name') ): ?>
				<p class="team-name"><?php the_sub_field('team_member_name');?></p>
				<?php endif; ?>
				<?php if( get_sub_field('team_member_name_surname') ): ?>
				<p class="team-name surname"><?php the_sub_field('team_member_name_surname');?></p>
				<?php endif; ?>
				<?php if( get_sub_field('team_member_job_title') ): ?>
				<p class="team-job"><?php the_sub_field('team_member_job_title');?></p>
				<?php endif; ?>
				<?php if( get_sub_field('team_member_email_address') ): ?>
				<p class="team-email"><a href="<?php the_sub_field('team_member_email_address');?>"><?php the_sub_field('team_member_email_address');?></a></p>
				<?php endif; ?>
			</div>
		</div>


		
		<?php
		// End loop.
		endwhile;
		// No value.
		else :
		// Do something...
		endif;
		?>
	</div>
	</div>
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