<?php get_template_part('template-parts/header'); ?>
<main>
  <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
    endif;
  ?>
</main>
<?php get_template_part('template-parts/footer'); ?>
