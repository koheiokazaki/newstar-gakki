<?php get_header(); ?>
<body>
  <?php include "menu.php"; ?>
  <div class="slider">
    <?php echo do_shortcode('[metaslider id="56"]'); ?>
  </div>
  <div class="content clearfix">
    <div class="container">
      <div class="main_content">
        <h2 class="blue"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/letshavefun.png"><div class="gray bar"></div>ニュースター楽器で<br>音楽を始めてみませんか？</h2>
        <div id="intro">
          <div class="intro_left">
            <p>西荻窪、阿佐ヶ谷、鷺ノ宮、武蔵関、東所沢の皆さんこんにちは！<br>ニュースター楽器の音楽教室では、ヤマハ音楽教室のグループレッスン（ドレミらんど・おんがくなかよし・幼児科）の他ピアノ、エレクトーン、ヴァイオリン、チェロ、フルート、サックス、クラリネット、トランペット、トロンボーン、ギター、ウクレレ、オカリナ、ドラム、声楽（うた、ボーカルレッスン、ボイストレーニング）三味線のレッスンをしています。<br>子供の習い事としてはもちろん、最近では楽器を演奏することで指先を使うので老化防止にも役に立つとの声も！７０歳以上になってから初めて楽器をはじめる方も多数！ 無料体験レッスン実施中！杉並区子育て応援券もご利用になれます！楽器レンタルシステム「音レント」やってます！管楽器・弦楽器・大型キーボードレンタルができます！</p>
          </div>
          <div class="intro_right">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/piano-back.png">
          </div>
          <div class="clear"></div>
        </div>
        <?php include "notice.php"; ?>
        <h2 class="blue">お客様の声<div class="gray bar"></div></h2>
        <div id="experience">
          <div class="ex-content">
            <h3>今回の体験だけでも楽器の新しさが感じられた！</h3>
            <p>文字が入ります文字が入ります文字が入ります文字が入ります文字が入ります文字が入ります文字が入ります</p>
          </div>
          <div class="ex-content">
            <h3>今回の体験だけでも楽器の新しさが感じられた！</h3>
            <p>文字が入ります文字が入ります文字が入ります文字が入ります文字が入ります文字が入ります文字が入ります</p>
          </div>
          <div class="center">
            <div class="btn">
              体験談をもっと見る
            </div>
          </div>
        </div>
        <?php
          $instruments = array(
            'numberposts' => 6,
            'post_type' => 'post',
            'order' => desc,
          );
          $posts = get_posts( $instruments );
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
            <div class="btn">
              ブログをもっと見る
            </div>
          </div>
        </div>
      </div>
      <?php get_sidebar(); ?>
      <div class="clear"></div>
    </div>
  </div>
  <?php get_footer(); ?>
