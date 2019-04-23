<?php 
/* Template Name: Construction */ 
?>

<?php get_header(); ?>

	<div class="construction-center">
	<img class="construction-image" src="<?php the_field('construction-image'); ?>" />
	</div>
	<h2>June 12 & 13 | 5-9pm</h2>
	<h2>Everyone is welcome both nights</h2>
	<h2>1701 Broadway, Seattle, WA 98122 | Fifth floor</h2>
	<h2>A day in the life</h2>
	<!-- VIDEO -->
	<h2>Day in the Life Videos | Portshowlio 2019</h2>
	<div class="construction-video-grid">
	<div class="embed-container">
		<?php the_field('dilv-one'); ?>
		<h3>Video Title One</h3>
	</div>
	<div class="placeholder-video-two">
		<div class="embed-container">
			<?php the_field('dilv-two'); ?>
		</div> 
		<h3>Video Title Two</h3>
	</div>
	<div class="placeholder-video-three">
		<h2 class="placeholder-video-text">Video Three</h2>
		<!-- <div class="embed-container">
			<?php the_field('dilv-three'); ?>
		</div> -->
		<h3>Video Title Three</h3>
	</div>
	<div class="placeholder-video-four">
		<h2 class="placeholder-video-text">Video Four</h2>
		<!-- <div class="embed-container">
			<?php the_field('dilv-four'); ?>
		</div> -->
		<h3>Video Title Four</h3>
	</div>
	</div>




<?#php get_footer(); ?>