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
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if(has_custom_logo()){
          echo '<a href="' . get_bloginfo('url') . '"><img src="' . $logo . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
        } else {
          echo '<h1><a href="' . get_bloginfo('url') . '">' . get_bloginfo( 'name' ) .'</a></h1>';
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
