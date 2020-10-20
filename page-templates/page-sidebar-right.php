<?php

/**
 * Template Name: Right Sidebar Page
 *
 * @package PrecisionCreative
 */

$container = get_theme_mod('understrap_container_type');
?>

<?php get_header(); ?>
<div id="page-sidebar-right" class="<?php echo $container; ?>">
  <div class="row">
    <div class="col-sm-8">
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