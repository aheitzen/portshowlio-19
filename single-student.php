<?php get_header(); ?>

	<div class="student-post-page-grid">
	
		<!-- HEADSHOT -->
		<img class="single-post-headshot" src="<?php the_field('headshot'); ?>" />
		<div class="secondary">
		<!-- NAME -->
		<h2 class="single-post-h2"><?php the_title(); ?></h2>
		<!-- WEBSITE LINK -->
		<h3><a class='siteLink' href="http://<?php the_field('portfolio_site'); ?>" target='_blank'><?php the_field('portfolio_site'); ?></a></h3>
		<!-- SOCIAL MEDIA -->
		
		<i class="fab fa-instagram"></i>
		<i class="fab fa-facebook"></i>
		<i class="fab fa-linkedin"></i>

		<!-- THREE CATEGORIES OF FOCUS -->
		<div class="three-categories-focus">
		<?php $focus = get_field('focus');
				if( $focus ): ?>
				<?php foreach( $focus as $focus ): ?>
						<p class='focus'><em><?php echo $focus; ?></em></p>
				<?php endforeach; ?>
			<?php endif; ?>

		</div>
		</div>
	</div>
<div class="black-divider-line"></div>

<?php if( have_rows('projects') ): ?>
	<?php while ( have_rows('projects') ) : the_row(); ?>
		<?php if( get_row_layout() == 'project' ): ?>
		<div class="featured-project">
			<h3><?php the_sub_field('project_title'); ?></h3>
			<h3><?php the_sub_field('project_type'); ?></h3>
			
			<?php if( get_sub_field('collaborators') ): ?>
				<p class="collaboratortitle">Collaborators</p>
 			<?php endif; ?>
			<?php 
				$post_objects = get_sub_field('collaborators'); 
				if( $post_objects ): 
			?>
				<?php foreach( $post_objects as $post): ?>
					<?php setup_postdata($post); ?>
						<a class="collaborators siteLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>	
		<div class="project-images">
			<?php if (have_rows('project_images')) : ?>
				<?php while ( have_rows('project_images') ) : the_row(); ?>
					<!--2 COLUMN VERTICAL LAYOUT -->
					<?php if( get_row_layout() == 'two_vertical_images' ): ?>
						<div class="rowProject grid-verticle-two">
							<?php if( have_rows('images') ): ?>
								<?php  while( have_rows('images') ) : the_row(); ?>
									<div class="imageThird imageGrid">
										<?php $imageurl = get_sub_field('image'); ?>
										<img src="<?php echo $imageurl; ?>" />
									</div>
								<?php endwhile; wp_reset_postdata(); ?>

							<?php endif; ?>
						</div>

					<!--2 COLUMN HORIZONTAL LAYOUT -->
					<?php elseif( get_row_layout() == 'two_horizontal_images' ): ?>
						<div class="rowProject grid-horizontal-two">
							<?php if( have_rows('images') ): ?>
								<?php  while( have_rows('images') ) : the_row(); ?>
									<div class="imageGrid">
										<?php $imageurl = get_sub_field('image'); ?>
										<img src="<?php echo $imageurl; ?>" />
									</div>
								<?php endwhile; wp_reset_postdata(); ?>

							<?php endif; ?>
						</div>
								
					<!--2 COLUMN HORIZONTAL AND VERTICAL LAYOUT -->
					<?php elseif( get_row_layout() == 'horizontal_then_vertical' ): ?>
						<div class="rowProject grid-horizontal-then-vertical">
							<?php if( have_rows('images') ): ?>
								<?php  while( have_rows('images') ) : the_row(); ?>
									<div class="imageGrid">
										<?php $imageurl = get_sub_field('image'); ?>
										<img src="<?php echo $imageurl; ?>" />
									</div>
								<?php endwhile; wp_reset_postdata(); ?>

							<?php endif; ?>
						</div>			

					<!--2 COLUMN VERICAL AND HORIZONTAL LAYOUT -->
					<?php elseif( get_row_layout() == 'vertical_then_horizontal' ): ?>
						<div class="rowProject grid-vertical-then-horizontal">
							<?php if( have_rows('images') ): ?>
								<?php  while( have_rows('images') ) : the_row(); ?>
									<div class="imageGrid">
										<?php $imageurl = get_sub_field('image'); ?>
										<img src="<?php echo $imageurl; ?>" />
									</div>
								<?php endwhile; wp_reset_postdata(); ?>

							<?php endif; ?>
						</div>
		
					<!--Landscape -->
				    <?php elseif( get_row_layout() == 'landscape_image' ): ?>
						<div class="rowProject grid-landscape">
							<div class="landscape">
								<?php $imageurl = get_sub_field('image'); ?>
								<img src="<?php echo $imageurl; ?>" />
							</div>
						</div>

				   	<!--Video -->
				   	<?php elseif( get_row_layout() == 'video' ): ?>
						<div class="rowProject grid-video">
							<div class="video">
				        		<?php the_sub_field('video'); ?>
				   			</div>
						</div>

					<!-- END OF LAYOUTS -->	
				   	<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<div class="bottom-student-navigation">
	<h3 class="student-post-links">
		&larr;  <?php previous_post_link('%link'); ?> 
	</h3>  
	<h3 class="student-post-links">
		<?php next_post_link('%link'); ?>  &rarr;
	</h3> 

		
</div>




<?#php get_footer(); ?>