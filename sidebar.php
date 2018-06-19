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
  <a href="http://xn--b9jyfxb0k2a3519e.com/" target="_blank">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png" style="margin-bottom: 30px;">
  </a>
  <a href="http://rental.yamahamusicjapan.co.jp/rental/default.aspx" target="_blank">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/otorento_bana.gif">
  </a>
  <a class="twitter-timeline"  href="https://twitter.com/newstargakki" data-widget-id="296115511413047296">@newstargakkiさんのツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
