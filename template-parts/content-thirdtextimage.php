		<div class="half-section one-third services-text-box hidden-fade">
		<div class="services-thirds-section-content">

		<?php if( get_sub_field('thirds_image') ): ?>
		<div class="q-thirds-image">
		<img src="<?php the_sub_field('thirds_image');?>">
	    </div>
		<?php endif; ?>

		<?php if( get_sub_field('thirds_title') ): ?>
		<h2 class="services-thirds-title"><?php the_sub_field('thirds_title');?></h2>
		<?php endif; ?>

		<?php if( get_sub_field('thirds_text') ): ?>
		<div class="content-serv-txt">
		<span><?php the_sub_field('thirds_text');?></span>
	    </div>
		<?php endif; ?>

		</div>
		</div>	