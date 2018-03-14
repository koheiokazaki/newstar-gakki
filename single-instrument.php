<?php get_header(); ?>
<body>
  <?php include "menu.php"; ?>
  <div class="thumbnail-bk">
    <h1>Blog</h1>
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
