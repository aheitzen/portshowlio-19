<div id="students">
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
    <div class="students-grid">
        <?php while ($query->have_posts()) : $query->the_post(); ?>

        <div class="students-test">
            <h2 class="students-names"><?php echo get_the_title( $post_id ); ?></h2>
            <img class="students-images" src="<?php the_field('headshot'); ?>" />
            <p class="students-focus"><?php the_field('focus'); ?></p>
            <div class="black-bar-long"></div>
        </div>

        <?php wp_reset_query(); ?>

        <?php endwhile; ?>
    </div>


    <h1>This is h1</h1>
    <h2>This is h2</h2>
    <h3>This is h3</h3>
    <h4>This is h4</h4>
    <h5>This is h5</h5>
    <h6>This is h6</h6>
    <p class="caption">This is caption</p>
    <p>this is p</p>



    <div class="search-filter">

    </div>
</div>
