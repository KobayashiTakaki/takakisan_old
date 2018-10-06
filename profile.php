<?php
/*
Template Name: PROFILE
*/
?>

<?php get_header(); ?>

    <div  id="main" class="main row bg-light justify-content-center pt-2">
      <div class="col-lg-8">
        <?php
        while( have_posts() ): the_post();
        get_template_part( 'content','page' );
        endwhile;
        ?>
      </div>
      <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
