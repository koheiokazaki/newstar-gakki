<?php get_header(); ?>
<?php
  //カテゴリー別にデータ取得
  $keyboards = teacher_cat_query('keyboard');
  $winds = teacher_cat_query('wind');
  $strings = teacher_cat_query('string');
  $etcs = teacher_cat_query('etc');
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
        <h1>講師の紹介</h1>
        <?php if($keyboards -> have_posts()): ?>
          <h2>鍵盤楽器の講師</h2>
            <?php while($keyboards -> have_posts()): $keyboards->the_post();?>
              <a href="<?php echo the_permalink(); ?>">
                <div class="teacher">
                  <?php the_post_thumbnail('thumbnail'); ?>
                  <p class="name"><?php echo esc_html( $post->名前 ); ?></p>
                  <p class="subject"><?php echo esc_html( $post->科目 ); ?></p>
                </div>
              </a>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="clear"></div>

        <?php if($winds -> have_posts()): ?>
          <h2>管楽器の講師</h2>
            <?php while($winds -> have_posts()): $winds->the_post();?>
              <a href="<?php echo the_permalink(); ?>">
                <div class="teacher">
                  <?php the_post_thumbnail('thumbnail'); ?>
                  <p class="name"><?php echo esc_html( $post->名前 ); ?></p>
                  <p class="subject"><?php echo esc_html( $post->科目 ); ?></p>
                </div>
              </a>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="clear"></div>

        <?php if($strings -> have_posts()): ?>
          <h2>弦楽器の講師</h2>
            <?php while($strings -> have_posts()): $strings->the_post();?>
              <a href="<?php echo the_permalink(); ?>">
                <div class="teacher">
                  <?php the_post_thumbnail('thumbnail'); ?>
                  <p class="name"><?php echo esc_html( $post->名前 ); ?></p>
                  <p class="subject"><?php echo esc_html( $post->科目 ); ?></p>
                </div>
              </a>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="clear"></div>

        <?php if($etcs -> have_posts()): ?>
          <h2>その他の講師</h2>
            <?php while($etcs -> have_posts()): $etcs->the_post();?>
              <a href="<?php echo the_permalink(); ?>">
                <div class="teacher">
                  <?php the_post_thumbnail('thumbnail'); ?>
                  <p class="name"><?php echo esc_html( $post->名前 ); ?></p>
                  <p class="subject"><?php echo esc_html( $post->科目 ); ?></p>
                </div>
              </a>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php get_sidebar(); ?>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
<?php get_footer(); ?>
