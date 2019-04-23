<?php get_header(); ?>
	
	<!-- HEADSHOT -->
	<img src="<?php the_field('headshot'); ?>" />
	<!-- NAME -->
	<h2><?php the_title(); ?></h2>
	<!-- WEBSITE LINK -->
	<a class='siteLink' href="http://<?php the_field('portfolio_site'); ?>" target='_blank'><?php the_field('portfolio_site'); ?></a>
	<!-- SOCIAL MEDIA -->

	<!-- THREE CATEGORIES OF FOCUS -->
	<?php $focus = get_field('focus');
			if( $focus ): ?>
			<?php foreach( $focus as $focus ): ?>
					<span class='focus'><?php echo $focus; ?></span>
			<?php endforeach; ?>
		<?php endif; ?>

		<?php previous_post_link(); ?>    <?php next_post_link(); ?>







<?#php get_footer(); ?>