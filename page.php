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
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php
          endwhile;
          endif;
        ?>
      </div>
      <?php get_sidebar(); ?>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
<?php get_footer(); ?>
