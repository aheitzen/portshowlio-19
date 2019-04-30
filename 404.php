<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package portshowlio
 */

get_header();
?>
	<div class="content-404">
		<main class="site-main">
			<section class="error-404">
				<header class="header-404">
					<h1 class="big-404">404</h1>
				</header><!-- .page-header -->

				<div class="page-content-404">
					<h2 class="title-404">The page you're looking for doesn't exist</h1>
					<p>This is awkward... We searched high and low, but it looks like this link is pretty broken. Let's find a better place for you to go.</p>
					<div class="buttonWrapper">
						<a href="index.php">Go Home</a>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
