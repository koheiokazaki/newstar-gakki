<?php get_header(); ?>
<?php
$the_query = new WP_Query( array(
    'paged'     => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
    'post_type' => 'blog',
    'posts_per_page' => 10
));

if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<section>
  <ul>
    <li><?php the_title(); ?></li>
  </ul>
</section>
<?php endwhile; endif;  ?>
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
<?php get_footer(); ?>
