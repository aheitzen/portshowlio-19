<script>
	function onWorkHover(name, headshot) {
		var sidebar = $('#sidebar-nav #works-student');
		sidebar.removeClass('hideNav');
		sidebar.addClass('showNav');

		var headshotElement = sidebar.find('#headshot');
		var nameElement = sidebar.find('#name');

		headshotElement.attr('src', headshot);
		nameElement.text(name);
	}

	function onWorkLeave() {
		var sidebar = $('#sidebar-nav #works-student');
		sidebar.removeClass('showNav');
		sidebar.addClass('hideNav');

		var headshot = sidebar.find('#headshot');
		var name = sidebar.find('#name');

		headshot.attr('src', '');
		name.text = '';
	}
</script>

<div id="works">
	<?php
        //remove_all_filters('posts_orderby');
        $args = array(
            'post_type' => array('student'),
            'posts_per_page' => 100,
            'orderby'        => 'rand',
        );
        $query = new WP_Query($args);
    ?>
	
	<div class="works-grid-container">
		<?php while ($query->have_posts()) : $query->the_post(); ?>
			<div class="works-grid-inner-container">
				<div class="works-grid">
					<div class="works-container" onmouseover="onWorkHover('<?php the_title(); ?>', '<?php the_field('headshot'); ?>')" onmouseleave="onWorkLeave()">
						<a href="<?php the_permalink(); ?>">
							<img class="works-images" src="<?php the_field('featured_image'); ?>" />
							<h2 class="project-title"><?php the_field('project_title'); ?></h2>
							<p class="project-type"><?php the_field('project_type'); ?></p>
							<div class="black-bar"></div>
						</a>
					</div>
				</div>
			</div>
			<?php wp_reset_query(); ?>
		<?php endwhile; ?>
    </div>

    <div class="search-filter">
    	
    </div>
</div>

