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
        <p class="balloon1"><?php echo post_custom('コメント'); ?></p>
        <div class="circle">
          <?php the_post_thumbnail('thumbnail'); ?>
        </div>
        <table class="teacher-table">
          <tr>
            <th>名前</th>
            <td><?php echo post_custom('名前'); ?></td>
          </tr>
          <tr>
            <th>所属センター</th>
            <td>
              <?php
                $values = post_custom("所属センター");
                if (count($values) == 1) {
                  echo $values;
                }else{
                  foreach ($values as $value) {
                    if ($value !== end($values)) {
                      echo $value."<br>";
                    }else{
                      echo $value;
                    }
                  }
                }
              ?>
            </td>
          </tr>
          <tr>
            <th>経歴</th>
            <td><?php echo post_custom('経歴'); ?></td>
          </tr>
          <tr>
            <th>科目</th>
            <td><?php echo post_custom('科目'); ?></td>
          </tr>
        </table>
        <?php the_content(); ?>
        <?php
          endwhile;
          endif;
        ?>
        <p><a href="<?php echo home_url(); ?>/archives/teacher/">← 講師一覧へ戻る</a></p>
        <div class="center">
          <a href="<?php echo home_url(); ?>/contact/">
            <div class="btn">
              無料レッスンの申し込み
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
