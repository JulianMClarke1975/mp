<?php
/**
* Displays the section content for team members section.
*
* @package WordPress
* @subpackage Growth Labs 2021
* @since Growth Labs 0.1
*/
?>
<!-- Section team members content -->
<div class="team-section section" style="
    min-height:200px;
    background-color:<?php the_sub_field('section_colour');?>;
    color: <?php the_sub_field('section_text_colour');?>;
    ">
    <div class="section-inner">
        <?php
        // Check rows exists.
        if( have_rows('meet_the_team_profile_links') ):
        // Loop through rows.
        while( have_rows('meet_the_team_profile_links') ) : the_row(); ?>
        <span class="team-profs-section-singles section" style="
            background-size: cover;
            background-position: center;
            background-image: url('<?php the_sub_field('team_member_profile_image');?>');
            width: 200px;
            height: 200px;
            border-radius: 50%;
            display: inline-block;
            ">
            <li class="team-details">
                <?php if( get_sub_field('team_member_name') ): ?>
                <p><?php the_sub_field('team_member_name');?></p>
                <?php endif; ?>
                <?php if( get_sub_field('team_member_job_title') ): ?>
                <p><?php the_sub_field('team_member_job_title');?></p>
                <?php endif; ?>
                <?php if( get_sub_field('team_member_email_address') ): ?>
                <p><?php the_sub_field('team_member_email_address');?></p>
                <?php endif; ?>
            </li>
        </span>
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
<!-- END Section content -->