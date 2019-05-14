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
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>
            <div class="primary-navigation" id="sidebar-nav">
                <a href=""><img id="logo" src="<?php the_field('portshowlio_logo'); ?>" /></a>
                <hr>
                <div id="show-details">
                    <h3 class="">June 13th & 14th</h3>
                    <h4 class="subhead">6:00pm - 9:00pm</h4>
                </div>
                <hr>
                <nav>
                    <a href="">
                        <h2>Work</h2>
                    </a>
                    <a href="">
                        <h2>Students</h2>
                    </a>
                    <a href="">
                        <h2>Event</h2>
                    </a>
                </nav>
            </div>


        </header>

        <div id="content" class="site-content">
