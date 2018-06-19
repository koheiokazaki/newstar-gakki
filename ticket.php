<?php
  $tickets = array(
    'numberposts' => 100,
    'post_type' => 'tickets',
    'order' => desc,
  );
  $posts = get_posts( $tickets );
?>
<h2 class="blue">お得なチケット<div class="gray bar"></div></h2>
<div id="tickets">
  <ul>
    <?php foreach($posts as $post): setup_postdata( $post );?>
      <a href="<?php echo the_permalink(); ?>">
        <div class="ticket">
          <h2><?php the_title(); ?></h2>
        </div>
      </a>
    <?php
      endforeach;
      wp_reset_postdata();
     ?>
  </ul>
  <div class="clear"></div>
</div>
