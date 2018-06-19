<?php get_header(); ?>
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
        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>
        <span class="date"><?php echo the_modified_date(); ?></span>
        <h1><?php the_title(); ?></h1>
        <?php echo get_the_post_thumbnail($post->ID, 'post'); ?>
        <?php the_content(); ?>
        <?php
          endwhile;
          endif;
          wp_reset_postdata();
        ?>
        <div class="center">
          <a href="<?php echo home_url(); ?>/contact/">
            <div class="btn">
              無料体験レッスンはこちら
            </div>
          </a>
        </div>
      </div>
      <?php get_sidebar(); ?>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
<?php get_footer(); ?>
