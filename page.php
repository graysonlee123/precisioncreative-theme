<?php get_header(); ?>
<div id="page" class="<?php echo get_theme_mod('container_width'); ?>">
  <div class="row">
    <div class="col-12">
      <?php if (have_posts()) : while (have_posts()) : the_post();
          get_template_part('content', get_post_format());
        endwhile;
      endif;
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>