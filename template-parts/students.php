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
            <a href="<?php the_permalink();?>">
                <h2 class="students-names"><?php echo get_the_title( $post_id ); ?></h2>
                <img class="students-images" src="<?php the_field('headshot'); ?>" />
            </a>
            <p class="students-focus subhead"><?php the_field('focus'); ?></p>
            <div class="black-bar-long"></div>
        </div>

        <?php wp_reset_query(); ?>

        <?php endwhile; ?>
    </div>

    <div style="margin: 10em;">
        <h1 class="text-large">This is large</h1>
        <h1>This is h1</h1>
        <h2>This is h2</h2>
        <h3>This is h3</h3>
        <p class="subhead">This is date / time / subhead</p>
        <p>this is p</p>
        <p class="text-small">This is small</p>
    </div>

    <div class="search-filter">
        <p>
            Search: <input type="search" id="searchInput">
        </p>
        <p>
            Filter: 
            <input class="radio" type="radio" id="filterAll" name="filter" value="0">
            <label for="filterAll">All</label>

            <input class="radio" type="radio" id="filterGraphicDesign" name="filter" value="1">
            <label for="filterGraphicDesign">Graphic Design</label>

            <input class="radio" type="radio" id="filterVisualMedia" name="filter" value="2">
            <label for="filterVisualMedia">Visual Media</label>
        </p>
    </div>

</div>
