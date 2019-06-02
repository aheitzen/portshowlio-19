<?php 
/* Template Name: Home Page */ 
?>

<?php get_header(); ?>
<div id="jumbotron">
	<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/06/404_Portshowlio.png" />
</div>
<?php get_template_part( 'template-parts/works' ); ?>

<?php get_footer(); ?>