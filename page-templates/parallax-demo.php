<?php

/**
 * Template Name: Parallax Demo Template
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package PrecisionCreative
 */
?>

<?php get_header(); ?>
<div id="parallax-demo" class="<?php echo get_theme_mod('container_width'); ?>">
	<div class="row">
		<div class="col-12">
			<div class="tall"></div>
			<div class="tall"></div>
			<div class="parallax-window" data-parallax="scroll" data-image-src="https://via.placeholder.com/300x200?text=I Am The Parallax"></div>
			<div class="tall"></div>
			<div class="tall"></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>