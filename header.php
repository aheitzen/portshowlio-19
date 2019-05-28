<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portshowlio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" type="image" href="<?php the_field('favicon'); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>
            <div class="primary-navigation" id="sidebar-nav">
                <a href=""><img id="logo" src="<?php the_field('portshowlio_logo'); ?>" /></a>
                <hr>
                <div id="show-details">
                    <h3 class="">June 12th & 13th</h3>
                    <h4 class="subhead">5:00pm - 9:00pm</h4>
                </div>
                <hr>
                <nav>

                    <div class="navItem" id="navWork">
                        <a href="<?php bloginfo("template_url")?>/home" id="navWorklink"><h2 class="primary-nav-items">Work</h2></a>
                    </div>
                    <div class="navItem" id="navStudents">
                        <a href="<?php bloginfo("template_url")?>/student-grid-page" id="navStudentslink"><h2 class="primary-nav-items">Students</h2></a>
                    </div>
                    <div class="navItem" id="navEvent">
                        <a href="<?php bloginfo("template_url")?>/event-page" id="navEventlink"><h2 class="primary-nav-items">Event</h2></a>
                    </div>
                </nav>
                <div id="works-student" class="hideNav">
                    <img id="headshot" src="" />
                    <p id="name"></p>
                </div>
                <div id="student" class="hideNav">
                    <img class="single-post-headshot-sidenav" src="<?php the_field('headshot_hover'); ?>" />
                   <!--  <br> -->
                    <p class="portfolio-site-link-style-sidenav"><a class='siteLink' href="http://<?php the_field('portfolio_site'); ?>" target='_blank'><?php the_field('portfolio_site'); ?></a></p>
                    <div class='socialSection-side-nav'>
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
                    <div id="side-nav-project-links">
                        <ul class="ultra-small-side-nav"></ul>
                    </div>
                </div>
                
            </div>


        </header>

        <div id="content" class="site-content">
