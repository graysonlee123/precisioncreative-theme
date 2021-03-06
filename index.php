<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package PrecisionCreative
 */

get_header();

$container   = get_theme_mod('understrap_container_type');
?>

<?php get_header(); ?>
<div id="index" class="<?php echo $container; ?>">
	<div class="row">
		<div class="col-sm-8 blog-main">
			<?php if (have_posts()) : while (have_posts()) : the_post();
					get_template_part('content', get_post_format());
				endwhile;
			endif;
			?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>