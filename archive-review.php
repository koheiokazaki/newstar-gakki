<?php get_header(); ?>
<?php
  $instruments = array(
    'numberposts' => 1000,
    'post_type' => 'review',
    'order' => desc,
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
        <h1>お客様の声</h1>
        <a href="<?php echo home_url(); ?>/archives/review?is=adult">
          <div class="half-btn adult">
            <p>おとなの投稿を見る</p>
          </div>
        </a>
        <a href="<?php echo home_url(); ?>/archives/review?is=child">
          <div class="half-btn child">
            <p>こどもの投稿を見る</p>
          </div>
        </a>
        <div class="clear"></div>
        <?php foreach($posts as $post): setup_postdata( $post );?>
          <?php if (isset($_GET["is"])): $is = $_GET["is"]; ?>
            <?php if($is == "adult"): ?>
              <?php if(post_custom('adultor') == "おとな"): ?>
                <div class="review">
                  <?php if (post_custom('adultor') == "おとな"): ?>
                    <span class="which adult"><?php echo post_custom('adultor'); ?></span>
                  <?php else: ?>
                    <span class="which child"><?php echo post_custom('adultor'); ?></span>
                  <?php endif; ?>
                  <p class="review-status"><?php echo post_custom('type'); ?>/<?php echo post_custom('age'); ?>歳/<?php echo post_custom('sex'); ?></p>
                  <?php echo the_content(); ?>
                </div>
              <?php endif; ?>
            <?php elseif(($is == "child")): ?>
              <?php if(post_custom('adultor') == "こども"): ?>
                <div class="review">
                  <?php if (post_custom('adultor') == "おとな"): ?>
                    <span class="which adult"><?php echo post_custom('adultor'); ?></span>
                  <?php else: ?>
                    <span class="which child"><?php echo post_custom('adultor'); ?></span>
                  <?php endif; ?>
                  <p class="review-status"><?php echo post_custom('type'); ?>/<?php echo post_custom('age'); ?>歳/<?php echo post_custom('sex'); ?></p>
                  <?php echo the_content(); ?>
                </div>
              <?php endif; ?>
            <?php endif;?>
          <?php else: ?>
            <div class="review">
              <?php if (post_custom('adultor') == "おとな"): ?>
                <span class="which adult"><?php echo post_custom('adultor'); ?></span>
              <?php else: ?>
                <span class="which child"><?php echo post_custom('adultor'); ?></span>
              <?php endif; ?>
              <p class="review-status"><?php echo post_custom('type'); ?>/<?php echo post_custom('age'); ?>歳/<?php echo post_custom('sex'); ?></p>
              <?php echo the_content(); ?>
            </div>
          <?php endif; ?>
        <?php
          endforeach;
          wp_reset_postdata();
         ?>
      </div>
      <?php get_sidebar(); ?>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
<?php get_footer(); ?>
