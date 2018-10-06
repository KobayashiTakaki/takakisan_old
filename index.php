<?php get_header(); ?>

    <div id="main" class="main row bg-light justify-content-center pt-2">
      <div class="col-lg-8">
        <?php
          while( have_posts() ): the_post();
          get_template_part( 'content','card' );
        endwhile;
        ?>
        <?php if(function_exists("pagination")) pagination($wp_query->max_num_pages); ?>
      </div>
      <?php get_sidebar(); ?>
    </div>

<!-- footer -->
<?php get_footer(); ?>
