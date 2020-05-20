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
        <h1><?php the_title(); ?>教室について</h1>
        <?php echo get_the_post_thumbnail($post->ID, 'post'); ?>
        <?php the_content(); ?>
        <?php
          endwhile;
          endif;
        ?>
        <?php
          $pageTitle = get_the_title();
          $instruments = array(
            'numberposts' => 100,
            'post_type' => 'review',
            'order' => desc,
          );
          $posts = get_posts( $instruments );
          $review_arr = array();

          foreach ($posts as $post) {
            $type = post_custom('type');
            if(strpos($type, $pageTitle) !== false){
              array_push($review_arr, $post);
            }
          }
        ?>
        <?php if(!empty($review_arr)):$i = 0; ?>
          <h2>お客様の声</h2>
          <?php foreach($review_arr as $post):setup_postdata( $post ); ?>
            <?php if($i < 3):$i++; ?>
              <div class="review">
                <?php if (post_custom('adultor') == "おとな"): ?>
                  <span class="which adult"><?php echo post_custom('adultor'); ?></span>
                <?php else: ?>
                  <span class="which child"><?php echo post_custom('adultor'); ?></span>
                <?php endif; ?>
                <p class="review-status"><?php echo post_custom('type'); ?>/<?php echo post_custom('age'); ?>歳/<?php echo post_custom('sex'); ?></p>
                <?php echo the_content(); ?>
              </div>
            <?php else:break; ?>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <div class="center">
          <a href="<?php echo home_url(); ?>/contact/">
            <div class="btn">
              無料体験レッスンはこちら
            </div>
          </a>
        </div>
      </div>
      </div>
      <?php get_sidebar(); ?>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
<?php get_footer(); ?>
