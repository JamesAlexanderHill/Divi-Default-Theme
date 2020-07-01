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
      <div class="page-width">
        <?php
        if(has_custom_logo()){
          the_custom_logo();
          // echo '<a href="' . home_url() . '"><img src="' . esc_url($logo) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
        } else {
          echo '<h1><a href="' . home_url() . '">' . get_bloginfo( 'name' ) .'</a></h1>';
        }
        ?>
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
