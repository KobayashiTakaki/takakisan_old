<div class="article-card py-2 mb-2">
  <div class="article-img px-2">
    <a href="<?php the_permalink(); ?>">
      <img src="<?php the_post_thumbnail_url(‘large’); ?>">
    </a>
  </div>
  <div class="article-info pb-1">
    <div class="mb-3 mt-1 mx-2">
      <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="ml-2 post-date">
      <p><?php the_time("Y年m月j日"); ?></p>
    </div>
    <ul class="category ml-2">
      <?php
      $categories = get_the_category();
      $output = '';
      if ( $categories ) {
        foreach( $categories as $category ) {
          $output .= '<li>';
          $output .= '<a class="badge badge-secondary" href="'. get_category_link( $category->term_id ).'"">';
          $output .=  $category->name.'</a>';
          $output .= '</li>';
        }
        echo $output;
      }
      ?>
    </ul>
  </div>
</div>
