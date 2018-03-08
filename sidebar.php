<?php
  $instruments = array(
    'numberposts' => 100,
    'post_type' => 'instrument',
    'order' => asc,
  );
  $posts = get_posts( $instruments );
?>
<div class="sidebar">
  <h2 class="blue">コースの紹介<br><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sidebar-title.png" /></h2>
  <ul class="side-cources">
    <?php foreach($posts as $post): setup_postdata( $post );?>
      <a href="<?php the_permalink(); ?>"><li><?php the_title(); ?></li></a>
    <?php
      endforeach;
      wp_reset_postdata();
     ?>
  </ul>
</div>
