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
					<div class="works-container" onmouseover="onWorkHover('<?php the_title(); ?>', '<?php the_field('headshot_hover'); ?>')" onmouseleave="onWorkLeave()">
						<a href="<?php the_permalink(); ?>">
							<img class="works-images" src="<?php the_field('featured_image'); ?>" />
							<h2 class="project-title"><?php the_field('project_title'); ?></h2>
							<p class="project-type"><?php the_field('project_type'); ?></p>
							<div class="black-bar"></div>
						</a>
						<span id="program" hidden><?php the_field('select_your_program'); ?></span>
						<span id="student-name" hidden><?php the_title(); ?></span>
						<span id="project-name" hidden><?php the_field('project_title'); ?></span>
						<span id="project-type" hidden><?php the_field('project_type'); ?></span>
					</div>
				</div>
			</div>
			<?php wp_reset_query(); ?>
		<?php endwhile; ?>
    </div>

    <div class="search-filter">
        <p>
            Search: <input type="search" id="searchInput" size="30">
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


<script>
	var originalWorks = []
    var currentWorks = []
    var worksGrid

    // run this when all the html has loaded
    $(document).ready(function () {
        // get our list of original students
        originalWorks = $('.works-grid-inner-container')
        // get a list of current students
        currentWorks = $(originalWorks.slice())
        // get the student grid container
        worksGrid = $('.works-grid-container');
        // load the view with students
        loadWorks();
    })

    // when filter is clicked run this
    $('.radio').click(function () {
        // reset the current works to none
        currentWorks = []
        // get which filter has been selected
        var filter = $(this).val();
        // if all has been selected
        if (filter == 0) {
            // get all the works
            currentWorks = $(originalWorks.slice())
        // if graphic design has been selected
        } else if (filter == 1) {
            // go through each student and add the graphic design works to the list of current works
            $(originalWorks.slice()).each(function (index) {
                if ($(this).find('#program').text() === 'graphic-design') {
                    currentWorks.push(this);
                }
            });
        // if visual media has been selected
        } else if (filter == 2) {
            // go through each student and add the visual media works to the list of current works
            $(originalWorks.slice()).each(function (index) {
                if ($(this).find('#program').text() === 'visual-media') {
                    currentWorks.push(this);
                }
            });
        }

        loadWorks();
    });

    // when search data has been entered run this
    $('#searchInput').change(function () {
        // reset the current works to none
        currentWorks = []
        // get the search val and make it lowercase
        var searchQuery = $(this).val().toLowerCase()
        // loop through each work
        $(originalWorks.slice()).each(function () {
            var work = this
            // get values we are going to search through
            var studentName = $(work).find('#student-name').text()
            var projectName = $(work).find('#project-name').text()
            var projectType = $(work).find('#project-type').text()
            var program = $(work).find('#program').text()
            // put all into an array
            var searchData = [studentName, projectName, projectType, program]

            // loop through array of search data
            for (var i=0; i<searchData.length; i++) {
                // if the search query matches the search data
                if (searchData[i].toLowerCase().includes(searchQuery)) {
                    // add the work to current works
                    currentWorks.push(work)
                    // end the for loop
                    break;
                }
            }
        })

        // load works
        loadWorks()
    })

    function loadWorks() {
        if (worksGrid) {
            $(worksGrid).empty();

            $(currentWorks).each(function (index) {
                $(worksGrid).append(this)
            })
        }

        $('html, body').animate({
            scrollTop: ($(worksGrid).offset().top)
        }, 200);
    }
</script>
