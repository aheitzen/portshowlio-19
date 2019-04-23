<div id="works">
	<div class="primary-nav">
			<img src="<?php the_field('image'); ?>" />
	</div>
	<?php
        //remove_all_filters('posts_orderby');
        $args = array(
            'post_type' => array('student'),
            'posts_per_page' => 100,
            'orderby'        => 'rand',
        );
        $query = new WP_Query($args);
    ?>
	<div class="works-grid">
	 <?php while ($query->have_posts()) : $query->the_post(); ?>
	
<!-- 	<div class="works-container"> -->
		<a class="works-container" href="<?php the_permalink(); ?>">
	<img class="works-images" src="<?php the_field('featured_image'); ?>" />
	<h2 class="project-title"><?php the_field('project_title'); ?></h2>
	<p class="project-type"><?php the_field('project_type'); ?></p>
	<div class="black-bar"></div>
	</a>
	<!-- </div> -->
		
	
	<?php wp_reset_query(); ?>

        <?php endwhile; ?>
    </div>

    <div class="search-filter">
    	
    </div>
</div>