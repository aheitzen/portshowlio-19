<?php get_header(); ?>

	<div class="student-post-page-grid">
	
		<!-- HEADSHOT -->
		<img class="single-post-headshot" src="<?php the_field('headshot_hover'); ?>" />
		<div class="secondary">
			<!-- NAME -->
			<h2 class="single-post-h2"><?php the_title(); ?></h2>
			<!-- THREE CATEGORIES OF FOCUS -->
			<div class="three-categories-focus">
			<?php $focus = get_field('focus');
					if( $focus ): 
						$numItems = count($focus);
						$i = 0;
					?>
					<?php foreach( $focus as $focus ): ?>
							<p class='focus'><!-- &nbsp; -->
								<?php 
									echo $focus;
									// if(++$i !== $numItems) {
		    			// 				echo "&nbsp;&#8212;";
		  					// 		}
		  						?>
	  						</p>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<!-- WEBSITE LINK -->
			<p class="portfolio-site-link-style"><a class='siteLink' href="http://<?php the_field('portfolio_site'); ?>" target='_blank'><?php the_field('portfolio_site'); ?></a></p>

			<!-- SOCIAL MEDIA -->
			<div class='socialSection'>
				<?php if( get_field('facebook_page') ): ?>
					<a class='socialIcon' href='<?php the_field('facebook_page')?>' target='_blank'><i class="fab fa-facebook-f"></i></a>
				<?php endif; ?>
				<?php if( get_field('linkedin_page') ): ?>
					<a class='socialIcon' href='<?php the_field('linkedin_page')?>' target='_blank'><i class="fab fa-linkedin-in"></i></a>
				<?php endif; ?>
				<?php if( get_field('twitter_page') ): ?>
					<a class='socialIcon' href='<?php the_field('twitter_page')?>' target='_blank'><i class="fab fa-twitter"></i></a>
				<?php endif; ?>
				<?php if( get_field('instagram_page') ): ?>
					<a class='socialIcon' href='<?php the_field('instagram_page')?>' target='_blank'><i class="fab fa-instagram"></i></a>
				<?php endif; ?>
				<?php if( get_field('tumblr_page') ): ?>
					<a class='socialIcon' href='<?php the_field('tumblr_page')?>' target='_blank'><i class="fab fa-tumblr"></i></a>
				<?php endif; ?>
				<?php if( get_field('pinterest_page') ): ?>
					<a class='socialIcon' href='<?php the_field('pinterest_page')?>' target='_blank'><i class="fab fa-pinterest"></i></a>
				<?php endif; ?>
				<?php if( get_field('youtube_page') ): ?>
					<a class='socialIcon' href='<?php the_field('youtube_page')?>' target='_blank'><i class="fab fa-youtube"></i></a>
				<?php endif; ?>
				<?php if( get_field('vimeo_page') ): ?>
					<a class='socialIcon' href='<?php the_field('vimeo_page')?>' target='_blank'><i class="fab fa-vimeo-v"></i></a>
				<?php endif; ?>
			</div>
		</div>
		<div id='project-links'>
			<!-- <h3 class="projects-h3-style">Projects</h3> -->
			<ul class="small-nav-student-post-page">
				
			</ul>
		</div>
	</div>
<div class="projects">
	<?php if( have_rows('projects') ): ?>
		<?php $row=0; ?>
		<?php while ( have_rows('projects') ) : the_row(); $row++; ?>
			<div class="black-divider-line"></div>
			<?php if( get_row_layout() == 'project' ): ?>
				<div class="featured-project" id="project-<?php echo $row; ?>">
					<div class="featured-project-type">
						<h3 class="project-title-student-single"><?php the_sub_field('project_title'); ?></h3>
						<p class="paragraph-project-type"><?php the_sub_field('project_type'); ?></p>
						<div class="black-bar-collab"></div>
						<div class="projectDescription"><?php the_sub_field('project_description'); ?></div>
						<?php if( get_sub_field('collaborators') ): ?>
							<p class="collaboratortitle">Collaborators:</p>
			 			<?php endif; ?>
						<?php 
							$post_objects = get_sub_field('collaborators'); 
							if( $post_objects ): 
								$c=0;
						?>
							<?php foreach( $post_objects as $post): ?>
								<?php setup_postdata($post); ?>
									<a class="collaborators siteLink" href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
										<?php if($c+1<count($post_objects)): ?>
											&nbsp;|&nbsp;
										<?php endif; $c++; ?>
									</a>
							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
				</div>	
				<div class="project-images">
					
					

					<!--2 COLUMN HORIZONTAL LAYOUT -->
					<div class="rowProject grid-horizontal-two">
						<?php if (have_rows('add_horizontal_images')) : ?>
							<?php while ( have_rows('add_horizontal_images') ) : the_row(); ?>
								<div class="imageGrid">
									<?php $imageurl = get_sub_field('horizontal_image'); ?>
									<img src="<?php echo $imageurl; ?>" />
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<!--2 COLUMN VERTICAL LAYOUT -->
					<div class="rowProject grid-verticle-two">
						<?php if (have_rows('add_vertical_images')) : ?>
							<?php while ( have_rows('add_vertical_images') ) : the_row(); ?>
								<div class="imageThird imageGrid">
									<?php $imageurl = get_sub_field('add_vertical_image'); ?>
									<img src="<?php echo $imageurl; ?>" />
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					
					<!-- Single full width image -->
					<div class="rowProject grid-full-width">
						<?php if (have_rows('add_full_width_image')) : ?>
							<?php while ( have_rows('add_full_width_image') ) : the_row(); ?>
								<div class="imageGrid">
									<?php $imageurl = get_sub_field('full_width_image'); ?>
									<img src="<?php echo $imageurl; ?>" />
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
										
					<!--Landscape -->
					<div class="rowProject grid-landscape">
						<?php if (have_rows('add_landscape_images')) : ?>
							<?php while ( have_rows('add_landscape_images') ) : the_row(); ?>
								<div class="landscape">
									<?php $imageurl = get_sub_field('landscape_image'); ?>
									<img src="<?php echo $imageurl; ?>" />
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>

					<!--Video -->
					<div class="rowProject grid-video">
						<?php if (have_rows('add_videos')) : ?>
							<?php while ( have_rows('add_videos') ) : the_row(); ?>
								<div class="video">
					        		<?php the_sub_field('add_video'); ?>
					   			</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>

					<!-- END OF LAYOUTS -->
				</div>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<script>
	$(document).scroll(function() {
	  var y = $(this).scrollTop();
	  if (y > 300) {
		  $('#sidebar-nav #student').removeClass('hideNav');
		  $('#sidebar-nav #student').addClass('showNav');
		 
	  } else {
		  $('#sidebar-nav #student').removeClass('showNav');
		$('#sidebar-nav #student').addClass('hideNav');
		  
	  }
	});

	function projectLinkClicked(project) {
		$('html, body').animate({
            scrollTop: ($(project).offset().top)
        }, 500);
	}

	$(document).ready(function () {
		var projects = $('.featured-project');
		var projectLinkContainer = $('#project-links ul');
		var sideNavLinkContainer = $('#student #side-nav-project-links ul');
	
		projects.each(function (index) {
			var projectTitle = $(this).find('.project-title-student-single').text();
			var newLink = '<li onclick="projectLinkClicked(\'#' + this.id + '\')">' + projectTitle + '</li>';
			projectLinkContainer.append(newLink);
			sideNavLinkContainer.append(newLink);
		});
	})
</script>

<div class="bottom-student-navigation">
	<h3 class="student-post-links">
		<?php if (previous_post_link('%link')): ?>
			<?php previous_post_link('%link'); ?>
		<?php endif; ?>
	</h3>
	<h3 class="student-post-links">
		<?php if (next_post_link('%link')): ?>
			<?php next_post_link('%link'); ?>
		<?php endif; ?>
	</h3> 

		
</div>




<?#php get_footer(); ?>