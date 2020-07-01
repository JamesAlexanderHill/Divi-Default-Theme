    <footer>
      <div class="page-width">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer-menu',
            'fallback_cb' => false,
            'container' => 'nav',
            'container_id' => 'footer-menu'
          )
        );
        ?>
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'social-menu',
            'fallback_cb' => false,
            'container' => 'nav',
            'container_id' => 'social-menu'
          )
        );
        ?>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
