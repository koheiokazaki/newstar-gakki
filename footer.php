<footer style="display:block;">
  <p>&copy; Copyright <script>document.write(new Date().getFullYear())</script><a href="<?php echo home_url(); ?>">ニュースター楽器</a> all rights reserved.</p>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/function.js"></script>
<?php wp_enqueue_script( 'function', get_template_directory_uri() .'/assets/js/function.js', array( 'jquery') ); ?>
<?php wp_footer(); ?>
</body>
</html>
