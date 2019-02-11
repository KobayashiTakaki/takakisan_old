<?php get_header(); ?>

    <div id="main" class="main row bg-light justify-content-center pt-2">
      <div class="col-lg-8">
          <?php
          while( have_posts() ): the_post();
          get_template_part( 'content','article' );
          endwhile;
          ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?skin=sons-of-obsidian"></script>

<?php get_footer(); ?>
