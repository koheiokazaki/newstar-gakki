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
        <h2 class="blue"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/letshavefun.png"><div class="gray bar"></div>ニュースター楽器で<br>音楽を始めてみませんか？</h2>
        <div id="intro">
          <div class="intro_right">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/piano-back.png">
          </div>
          <div class="intro_left">
            <p>西荻窪、阿佐ヶ谷、鷺ノ宮、武蔵関、東所沢の皆さんこんにちは！<br>ニュースター楽器の音楽教室では、ヤマハ音楽教室のグループレッスン（ドレミらんど・おんがくなかよし・幼児科）の他ピアノ、エレクトーン、ヴァイオリン、チェロ、フルート、サックス、クラリネット、トランペット、トロンボーン、ギター、ウクレレ、オカリナ、ドラム、声楽（うた、ボーカルレッスン、ボイストレーニング）三味線のレッスンをしています。<br>子供の習い事としてはもちろん、最近では楽器を演奏することで指先を使うので老化防止にも役に立つとの声も！７０歳以上になってから初めて楽器をはじめる方も多数！ 無料体験レッスン実施中！杉並区子育て応援券もご利用になれます！楽器レンタルシステム「音レント」やってます！管楽器・弦楽器・大型キーボードレンタルができます！</p>
          </div>
          <div class="clear"></div>
        </div>
        <?php include "notice.php"; ?>
        <?php include "review.php"; ?>
        <?php include "ticket.php"; ?>
        <?php
          $blog = array(
            'numberposts' => 6,
            'post_type' => 'blog',
            'order' => asc,
          );
          $posts = get_posts( $blog );
        ?>
        <h2 class="blue">ブログ<div class="gray bar"></div></h2>
        <div id="blog">
          <?php foreach($posts as $post): setup_postdata( $post );?>
            <a href="<?php the_permalink(); ?>">
              <div class="blog">
                <span class="date"><?php echo the_modified_date(); ?></span>
                <h3><?php the_title(); ?></h3>
                <p><?php echo mb_substr(strip_tags($post-> post_content),0,37).'...'; ?></p>
              </div>
            </a>
          <?php
            endforeach;
            wp_reset_postdata();
          ?>
          <div class="clear"></div>
          <div class="center">
            <a href="<?php echo home_url(); ?>/archives/blog/">
              <div class="btn">
                ブログをもっと見る
              </div>
            </a>
          </div>
        </div>
      </div>
      <?php get_sidebar(); ?>
      <div class="clear"></div>
    </div>
  </div>
  <?php get_footer(); ?>
