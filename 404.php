<?php get_header(); ?>
<body>
  <?php include "menu.php"; ?>
  <div class="slider">
    <?php echo do_shortcode('[metaslider id="56"]'); ?>
  </div>
  <div class="sp course-slider">
    <div id="course-slider-btn">コース一覧を見る</div>
    <div  id="course-slider">
      <ul>
        <li class="agenda">鍵盤楽器</li>
        <a href="<?php echo home_url(); ?>/archive/instrument/piano"><li>ピアノ</li></a>
        <a href="<?php echo home_url(); ?>/archive/instrument/electone"><li>エレクトーン</li></a>
        <li class="agenda">管楽器</li>
        <a href="<?php echo home_url(); ?>/archive/instrument/saxphone"><li>サックス</li></a>
        <a href="<?php echo home_url(); ?>/archive/instrument/trumpet"><li>トランペット</li></a>
        <a href="<?php echo home_url(); ?>/archive/instrument/trombone"><li>トロンボーン</li></a>
        <a href="<?php echo home_url(); ?>/archive/instrument/flute"><li>フルート</li></a>
        <a href="<?php echo home_url(); ?>/archive/instrument/clarinet"><li>クラリネット</li></a>
        <li class="agenda">弦楽器</li>
        <a href="<?php echo home_url(); ?>/archive/instrument/violin"><li>ヴァイオリン</li></a>
        <a href="<?php echo home_url(); ?>/archive/instrument/cello"><li>チェロ</li></a>
        <a href="<?php echo home_url(); ?>/archive/instrument/guiter"><li>ギター</li></a>
        <a href="<?php echo home_url(); ?>/archive/instrument/ukulele"><li>ウクレレ</li></a>
        <li class="agenda">その他</li>
        <a href="<?php echo home_url(); ?>/archive/instrument/drum"><li>ドラム</li></a>
        <a href="<?php echo home_url(); ?>/archive/instrument/ocarina"><li>オカリナ</li></a>
        <a href="<?php echo home_url(); ?>/archive/instrument/recorder"><li>リコーダー</li></a>
        <a href="<?php echo home_url(); ?>/archive/instrument/song"><li>うた</li></a>
        <a href="<?php echo home_url(); ?>/archive/instrument/shamisen"><li>三味線</li></a>
      </ul>
    </div>
  </div>
  <div class="content clearfix">
    <div class="container">
      <div class="main_content">
        <h2>404エラー</h2>
        <p class="center" style="margin-top:30px;">お探しのページはありません。<br>前の画面に戻るか、<a href="<?php echo home_url(); ?>">コチラ</a>を押してください。</p>
      </div>
      <?php get_sidebar(); ?>
      <div class="clear"></div>
    </div>
  </div>
  <?php get_footer(); ?>
