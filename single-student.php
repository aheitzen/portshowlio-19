<?php get_header(); ?>
	<div class="student-post-page-grid">
	
		<!-- HEADSHOT -->
		<img class="single-post-headshot" src="<?php the_field('headshot'); ?>" />
		<div class="secondary">
		<!-- NAME -->
		<h2><?php the_title(); ?></h2>
		<!-- WEBSITE LINK -->
		<a class='siteLink' href="http://<?php the_field('portfolio_site'); ?>" target='_blank'><?php the_field('portfolio_site'); ?></a>
		<!-- SOCIAL MEDIA -->
		<i class="fab fa-instagram"></i>
		<!-- THREE CATEGORIES OF FOCUS -->
		<div class="three-categories-focus">
		<?php $focus = get_field('focus');
				if( $focus ): ?>
				<?php foreach( $focus as $focus ): ?>
						<span class='focus'><?php echo $focus; ?></span>
				<?php endforeach; ?>
			<?php endif; ?>

		</div>
		</div>
	</div>
<div class="black-divider-line"></div>

<?php if( have_rows('projects') ): ?>
	<?php while ( have_rows('projects') ) : the_row(); ?>
		<?php if( get_row_layout() == 'project' ): ?>

			<h3><?php the_sub_field('project_title'); ?></h3>
			<?php if( have_rows('project_images') ): ?>
				<?php while ( have_rows('project_images') ) : the_row(); ?>

					<!--3 COLUMN PORTRAIT -->
					<?php if( get_row_layout() == 'portrait_3_column' ): ?>
						<div class="rowProject grid-three">
							<?php if( have_rows('images') ): ?>
								<?php  while( have_rows('images') ) : the_row(); ?>
									<div class="imageThird imageGrid">
										<?php $imageurl = get_sub_field('image'); ?>
										<img src="<?php echo $imageurl; ?>" />
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>

					<!--2 COLUMN PORTRAIT -->
				    <?php elseif( get_row_layout() == 'portrait_2_column' ): ?>
						<div class="rowProject grid-two">
				        	<?php if(get_sub_field('images')): ?>
								<?php while(has_sub_field('images')): ?>
									<div class="imageHalf">
										<?php $imageurl = get_sub_field('image'); ?>
										<img src="<?php echo $imageurl; ?>" />
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
								
					<!--1 COLUMN PORTRAIT -->
					<?php elseif( get_row_layout() == 'portrait_1_column' ): ?>
						<div class="rowProject">
							<div class="">
								<?php $imageurl = get_sub_field('image'); ?>
								<img src="<?php echo $imageurl; ?>" />
							</div>
						</div>			

					<!--Landscape -->
				    <?php elseif( get_row_layout() == 'landscape_image' ): ?>
						<div class="rowProject">
				       		<div class="">
								<?php $imageurl = get_sub_field('image'); ?>
								<img src="<?php echo $imageurl; ?>" />
							</div>
						</div>
		
					<!--Video -->
				    <?php elseif( get_row_layout() == 'video' ): ?>
						<div class="rowProject">
							<div class="video">
				        		<?php the_sub_field('video'); ?>
				   			</div>
				   		</div>
				   	<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<div class="bottom-student-navigation">

		<h4 class="student-post-links">
			&larr;  <?php previous_post_link('%link'); ?> 
		</h4>  
		<h4 class="student-post-links">
			<?php next_post_link('%link'); ?>  &rarr;
		</h4> 

		
</div>





<?#php get_footer(); ?>