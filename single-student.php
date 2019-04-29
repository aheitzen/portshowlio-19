<?php get_header(); ?>
	
	<!-- HEADSHOT -->
	<img class="single-post-headshot" src="<?php the_field('headshot'); ?>" />
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

	
</div>
<div class="bottom-student-navigation">

		<h4 class="student-post-links">
			&larr;  <?php previous_post_link('%link'); ?> 
		</h4>  
		<h4 class="student-post-links">
			<?php next_post_link('%link'); ?>  &rarr;
		</h4> 

		
</div>





<?#php get_footer(); ?>