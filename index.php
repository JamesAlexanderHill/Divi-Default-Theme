<?php get_template_part('template-parts/header'); ?>
<main>
  <div class="page-width">
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
          the_content();
        endwhile;
      endif;
    ?>
  </div>
</main>
<?php get_template_part('template-parts/footer'); ?>
