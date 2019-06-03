<?php 
/* Template Name: Home Page */ 
?>

<?php get_header(); ?>
<!-- <div id="jumbotron"> -->
	<!-- <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/06/404_Portshowlio.png" /> -->
	<!-- <video width="100%" height="100%" autoplay loop="true">
	  <source src="http://localhost:8888/wp-content/uploads/2019/06/media.io_MERGED.mp4" type="video/mp4">
	</video>
</div> -->
<?php get_template_part( 'template-parts/works' ); ?>

<?php get_footer(); ?>