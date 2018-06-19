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
      <div class="main_content">
        <h1 class="blog_title">ブログ投稿一覧</h1>
        <ul class="blog_list">
          <?php
            $the_query = new WP_Query( array(
                'paged'     => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
                'post_type' => 'blog',
                'posts_per_page' => 10
            ));
            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
              <a href="<?php echo the_permalink(); ?>">
                <li>
                  <small><?php the_modified_date('Y/m/d') ?></small>
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_excerpt(); ?></p>
                </li>
              </a>
            <?php endwhile; endif;  ?>
        </ul>
        <?php
          $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
          $args = array (
              'prev_text' => '',
              'next_text' => '',
              'show_all'  => false,
              'mid_size'  => 1,
              'type'      => 'list'
          );
          the_posts_pagination($args);
         ?>
         <div class="clear"></div>
       </div>
       <?php get_sidebar(); ?>
       <div class="clear"></div>
    </div>
 </div>
</body>
<?php get_footer(); ?>
