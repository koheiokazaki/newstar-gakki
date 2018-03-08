<?php
  $instruments = array(
    'numberposts' => 10,
    'post_type' => 'notice',
    'order' => desc,
  );
  $posts = get_posts( $instruments );
?>
<h2 class="blue">お知らせ<div class="gray bar"></div></h2>
<div id="notice">
  <ul>
    <?php foreach($posts as $post): setup_postdata( $post );?>
      <a href="<?php the_permalink(); ?>"><li><span class="date"><?php echo the_modified_date(); ?></span><?php the_title(); ?></li></a>
    <?php
      endforeach;
      wp_reset_postdata();
     ?>
    <!-- <li><span class="date">2018/2/14</span>文字が入ります文字が入ります文字が入ります文字が入ります</li>
    <li><span class="date">2018/2/14</span>文字が入ります文字が入ります文字が入ります文字が入ります</li>
    <li><span class="date">2018/2/14</span>文字が入ります文字が入ります文字が入ります文字が入ります</li>
    <li><span class="date">2018/2/14</span>文字が入ります文字が入ります文字が入ります文字が入ります</li>
    <li><span class="date">2018/2/14</span>文字が入ります文字が入ります文字が入ります文字が入ります</li>
    <li><span class="date">2018/2/14</span>文字が入ります文字が入ります文字が入ります文字が入ります</li> -->
  </ul>
</div>
