<?php get_header(); ?>
<?php
  $instruments = array(
    'numberposts' => 100,
    'post_type' => 'class',
    'order' => asc,
  );
  $posts = get_posts( $instruments );
?>
<body>
  <?php include "menu.php"; ?>
  <div class="container">
    <?php $arr = check_cur_page(); ?>
    <div class="thumbnail-bk <?php echo $arr[0]; ?>">
      <p><?php echo $arr[1]; ?><br><span><?php echo $arr[2]; ?></span></p>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="pages main_content">
        <h1>教室の一覧</h1>
        <ul class="classes">
        <?php foreach($posts as $post): setup_postdata( $post );?>
          <a href="<?php echo the_permalink(); ?>">
            <li><span class="class"><?php the_title(); ?></span><br><small><?php echo esc_html( $post->address );　?></small></li>
          </a>
        <?php
          endforeach;
          wp_reset_postdata();
         ?>
       </ul>
      </div>
      <?php get_sidebar(); ?>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
<?php get_footer(); ?>
