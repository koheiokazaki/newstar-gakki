<footer style="display:block;">
  <div class="container">
    <div class="left">
      <div class="fb-page" data-href="https://www.facebook.com/newstargakki/" data-tabs="timeline" data-width="300" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/newstargakki/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/newstargakki/">音楽大好き！株式会社ニュースター楽器</a></blockquote></div>
    </div>
    <div class="left">
      <div class="footer-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-white.png" />
        <div class="white-line"></div>
        <ul>
          <a href="<?php echo home_url(); ?>/company/"><li>会社概要</li></a>
          <a href="<?php echo home_url(); ?>/vision/"><li>ビジョン</li></a>
          <a href="<?php echo home_url(); ?>/company-guideline/"><li>企業倫理ガイドライン</li></a>
          <a href="<?php echo home_url(); ?>/access/"><li>アクセス</li></a>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <p>&copy; Copyright <script>document.write(new Date().getFullYear())</script><a href="<?php echo home_url(); ?>">ニュースター楽器</a> all rights reserved.</p>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/function.js"></script>
<?php wp_enqueue_script( 'function', get_template_directory_uri() .'/assets/js/function.js', array( 'jquery') ); ?>
<?php wp_footer(); ?>
</body>
</html>
