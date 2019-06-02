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
				<div class="header-404">
					<div class="mouse-warp-404">
						<h2 class="title-404" data-blotter>OOPS</h2>
					</div>
				</div>

				<div class="page-content-404">
					<p>We can’t seem to find the page you’re looking for.</p>
					<div class="buttonWrapper">
						<a href="<?php echo get_site_url(); ?>/home">Take Me Home</a>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

	<script src='<?php echo get_site_url(); ?>/wp-content/themes/portshowlio19-master/js/blotter.min.js'></script>
	<script src='<?php echo get_site_url(); ?>/wp-content/themes/portshowlio19-master/js/liquidDistortMaterial.js'></script>
	<script src='<?php echo get_site_url(); ?>/wp-content/themes/portshowlio19-master/js/liquidinteract.js'></script>
	<script src='<?php echo get_site_url(); ?>/wp-content/themes/portshowlio19-master/js/three.min.js'></script>
	<script src='<?php echo get_site_url(); ?>/wp-content/themes/portshowlio19-master/js/underscore-min.js'></script>
	<script src='<?php echo get_site_url(); ?>/wp-content/themes/portshowlio19-master/js/GLManager.js'></script>
	<script src='<?php echo get_site_url(); ?>/wp-content/themes/portshowlio19-master/js/shaders.js'></script>
<?php
