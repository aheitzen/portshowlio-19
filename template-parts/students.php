<?php 
/* Template Name: Student Grid Page */ 
?>
<?php get_header(); ?>

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

        <div class="students">
            <a href="<?php the_permalink();?>">
                <h2 class="students-names"><?php echo get_the_title( $post_id ); ?></h2>
                <div>
                    <img class="students-images headshot" onmouseover="onHoverStudent(this, '<?php the_field('headshot_hover'); ?>')" onmouseleave="onLeaveStudent(this, '<?php the_field('headshot'); ?>')" src="<?php the_field('headshot'); ?>" />
                </div>
            </a>
            <p class="students-focus subhead"><?php the_field('focus'); ?></p>
            <div class="black-bar-long"></div>
            <span id="program" hidden><?php the_field('select_your_program'); ?></span>
        </div>

        <?php wp_reset_query(); ?>

        <?php endwhile; ?>
    </div>

    <div class="search-filter">
        <p>
            Search: <input type="search" id="searchInput" placeholder="Search by name, focus or progam then hit enter" size="30">
        </p>
        <p>
            Filter:
            <input class="radio" type="radio" id="filterAll" name="filter" value="0" checked="checked">
            <label for="filterAll">All</label>

            <input class="radio" type="radio" id="filterGraphicDesign" name="filter" value="1">
            <label for="filterGraphicDesign">Graphic Design</label>

            <input class="radio" type="radio" id="filterVisualMedia" name="filter" value="2">
            <label for="filterVisualMedia">Visual Media</label>
        </p>
    </div>

</div>

<script type="text/javascript">
    function onHoverStudent(element, hoverImage) {
        if (!hoverImage || hoverImage === '') {
            return
        }

        $(element).attr('src', hoverImage);
    }

    function onLeaveStudent(element, headshot) {
        $(element).attr('src', headshot);
    }

    var originalStudents = []
    var currentStudents = []
    var studentGrid

    // run this when all the html has loaded
    $(document).ready(function () {
        // get our list of original students
        originalStudents = $('.students')
        // get a list of current students
        currentStudents = $(originalStudents.slice())
        // get the student grid container
        studentGrid = $('.students-grid');
        // load the view with students
        loadStudents();
    })

    // when filter is clicked run this
    $('.radio').click(function () {
        // reset the current students to none
        currentStudents = []
        // get which filter has been selected
        var filter = $(this).val();
        // if all has been selected
        if (filter == 0) {
            // get all the students
            currentStudents = $(originalStudents.slice())
        // if graphic design has been selected
        } else if (filter == 1) {
            // go through each student and add the graphic design students to the list of current students
            $(originalStudents.slice()).each(function (index) {
                if ($(this).find('#program').text() === 'graphic-design') {
                    currentStudents.push(this);
                }
            });
        // if visual media has been selected
        } else if (filter == 2) {
            // go through each student and add the visual media students to the list of current students
            $(originalStudents.slice()).each(function (index) {
                if ($(this).find('#program').text() === 'visual-media') {
                    currentStudents.push(this);
                }
            });
        }

        loadStudents();
    });

    // when search data has been entered run this
    $('#searchInput').change(function () {
        // reset the current students to none
        currentStudents = []
        // get the search val and make it lowercase
        var searchQuery = $(this).val().toLowerCase()
        // loop through each student
        $(originalStudents.slice()).each(function () {
            var student = this
            // get values we are going to search through
            var studentName = $(student).find('.students-names').text()
            var focuses = $(student).find('.students-focus').text().split(',')
            var program = $(student).find('#program').text()
            // put all into an array
            var searchData = focuses.concat([studentName, program])

            // loop through array of search data
            for (var i=0; i<searchData.length; i++) {
                // if the search query matches the search data
                if (searchData[i].toLowerCase().includes(searchQuery)) {
                    // add the student to current students
                    currentStudents.push(student)
                    // end the for loop
                    break;
                }
            }
        })

        // load students
        loadStudents()
    })

    function loadStudents() {
        if (studentGrid) {
            $(studentGrid).empty();

            $(currentStudents).each(function (index) {
                $(studentGrid).append(this)
            })
        }

        $('html, body').animate({
            scrollTop: ($(studentGrid).offset().top)
        }, 200);
    }
</script>

<?php get_footer(); ?>
