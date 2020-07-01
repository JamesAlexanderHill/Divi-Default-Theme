<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
      <div>
        <h1><a href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'main-menu',
            'fallback_cb' => false,
            'container' => 'nav',
            'container_id' => 'main-menu'
          )
        );
        ?>
      </div>
    </header>
