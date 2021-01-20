<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background: <?php the_field('background_colour_2', 'option' ); ?>; color: <?php the_field('font_colour_2', 'option' ); ?>">

<header>
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'option' ); ?>" rel="home" style="color: <?php the_field('font_colour_2', 'option' ); ?>">
        Persia
      </a>
    </h1>
    <p class="emoji">
   <?php the_field('emoji_picker' , 'option'); ?>
  </p>
</header><!--/.header-->

