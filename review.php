<?php
  $instruments = array(
    'numberposts' => 2,
    'post_type' => 'review',
    'order' => asc,
  );
  $posts = get_posts( $instruments );
?>
<h2 class="blue">お客様の声<div class="gray bar"></div></h2>
<div id="experience">
  <?php foreach($posts as $post): setup_postdata( $post );?>
  <div class="ex-content">
    <p class="review-status"><?php echo post_custom('type'); ?>/<?php echo post_custom('age'); ?>歳/<?php echo post_custom('sex'); ?></p>
    <p><?php echo the_excerpt(10000); ?></p>
  </div>
  <?php
    endforeach;
    wp_reset_postdata();
   ?>
  <div class="center">
    <a href="<?php echo home_url(); ?>/archives/review/">
      <div class="btn">
        お客様の声をもっと見る
      </div>
    </a>
  </div>
</div>
