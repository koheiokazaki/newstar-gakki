<?php
add_theme_support( 'post-thumbnails' );

function check_cur_page(){
  $page = $_SERVER["REQUEST_URI"];
  if ( strpos($page, 'company') !== false ) {
    $arr = array("bg_4", "会社概要", "Company");
  }elseif ( strpos($page, 'tickets') !== false ) {
    $arr = array("bg_4", "お得なチケット", "Ticket");
  }elseif ( strpos($page, 'contact') !== false ) {
    $arr = array("bg_5", "お問い合わせ", "Contact");
  }elseif ( strpos($page, 'access') !== false ) {
    $arr = array("bg_3", "アクセス", "Access");
  }elseif ( strpos($page, 'teacher') !== false ) {
    $arr = array("bg_2", "講師の紹介", "Teachers");
  }elseif ( strpos($page, 'price') !== false ) {
    $arr = array("bg_5", "レッスン料金", "Price");
  }elseif ( strpos($page, 'review') !== false ) {
    $arr = array("bg_3", "お客様の声", "Voice");
  }elseif ( strpos($page, 'notice') !== false ) {
    $arr = array("bg_2", "お知らせ", "Notice");
  }elseif ( strpos($page, 'instrument') !== false ) {
    $arr = array("bg_1", "コースの紹介", "Course");
  }elseif ( strpos($page, 'rhythm') !== false ) {
    $arr = array("bg_1", "調律", "Rhythm");
  }elseif ( strpos($page, 'event') !== false ) {
    $arr = array("bg_4", "イベント", "Event");
  }elseif ( strpos($page, 'class') !== false ) {
    $arr = array("bg_4", "教室の紹介", "Class");
  }

  return $arr;
}

function teacher_cat_query( $category ){
  $teachers = new WP_Query(
    array(
      'post_type' => 'teacher',
      'numberposts' => 100,
      'order' => asc,
      'tax_query' => array(
        array(
          'taxonomy' => 'teacher_taxonomy',
          'field' => 'slug',
          'terms' => $category,
        ),
      ),
    )
  );

  return $teachers;
}

//概要（抜粋）の文字数調整
function my_excerpt_length($length) {
	return 140;
}
add_filter('excerpt_length', 'my_excerpt_length');

function register_jquery() {
    wp_deregister_script('jquery'); /* 同梱のJQueryを読み込ませない */
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), NULL, true); /* Google CDNのJQueryの登録 */
    wp_enqueue_script('jquery'); /* 登録したJQueryをフックさせる */
}
add_action('wp_enqueue_scripts', 'register_jquery'); /* 実際のフック */

function create_post_instrument() {
  $exampleSupports = array(
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions',  // リビジョン
    'custom-fields', //カスタムフィールド
  );
  register_post_type( 'instrument',  // カスタム投稿名
    array(
      'label' => '楽器',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
    )
  );
}
add_action( 'init', 'create_post_instrument' ); // アクションに上記関数をフックします

register_taxonomy(
  'instrument_taxonomy',  // 追加するタクソノミー名（英小文字とアンダースコアのみ）
  'instrument',  // どのカスタム投稿タイプに追加するか
  array(
    'label' => '楽器カテゴリー',  // 管理画面上に表示される名前（投稿で言うカテゴリー）
    'labels' => array(
      'all_items' => '楽器一覧',  // 投稿画面の右カラムに表示されるテキスト（投稿で言うカテゴリー一覧）
      'add_new_item' => '楽器カテゴリーを追加'  // 投稿画面の右カラムに表示されるカテゴリ追加リンク
    ),
    'hierarchical' => true  // タクソノミーを階層化するか否か（子カテゴリを作れるか否か）
  )
);

function create_post_teachers() {
  $exampleSupports = array(
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions',  // リビジョン
    'custom-fields', //カスタムフィールド
  );
  register_post_type( 'teacher',  // カスタム投稿名
    array(
      'label' => '講師',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
    )
  );
}
add_action( 'init', 'create_post_teachers' ); // アクションに上記関数をフックします

register_taxonomy(
  'teacher_taxonomy',  // 追加するタクソノミー名（英小文字とアンダースコアのみ）
  'teacher',  // どのカスタム投稿タイプに追加するか
  array(
    'label' => '講師カテゴリー',  // 管理画面上に表示される名前（投稿で言うカテゴリー）
    'labels' => array(
      'all_items' => '講師一覧',  // 投稿画面の右カラムに表示されるテキスト（投稿で言うカテゴリー一覧）
      'add_new_item' => '講師カテゴリーを追加'  // 投稿画面の右カラムに表示されるカテゴリ追加リンク
    ),
    'hierarchical' => true  // タクソノミーを階層化するか否か（子カテゴリを作れるか否か）
  )
);

function create_post_notice() {
  $exampleSupports = array(
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions',  // リビジョン
    'custom-fields', //カスタムフィールド
  );
  register_post_type( 'notice',  // カスタム投稿名
    array(
      'label' => 'お知らせ',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
    )
  );
}
add_action( 'init', 'create_post_notice' ); // アクションに上記関数をフックします

function create_post_review() {
  $exampleSupports = array(
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions',  // リビジョン
    'custom-fields', //カスタムフィールド
  );
  register_post_type( 'review',  // カスタム投稿名
    array(
      'label' => '体験談',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
    )
  );
}
add_action( 'init', 'create_post_review' ); // アクションに上記関数をフックします

register_taxonomy(
  'review_taxonomy',  // 追加するタクソノミー名（英小文字とアンダースコアのみ）
  'review',  // どのカスタム投稿タイプに追加するか
  array(
    'label' => '体験談カテゴリー',  // 管理画面上に表示される名前（投稿で言うカテゴリー）
    'labels' => array(
      'all_items' => '体験談一覧',  // 投稿画面の右カラムに表示されるテキスト（投稿で言うカテゴリー一覧）
      'add_new_item' => '体験談カテゴリーを追加'  // 投稿画面の右カラムに表示されるカテゴリ追加リンク
    ),
    'hierarchical' => true  // タクソノミーを階層化するか否か（子カテゴリを作れるか否か）
  )
);

function create_post_class() {
  $exampleSupports = array(
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions',  // リビジョン
    'custom-fields', //カスタムフィールド
  );
  register_post_type( 'class',  // カスタム投稿名
    array(
      'label' => '教室',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
    )
  );
}
add_action( 'init', 'create_post_class' ); // アクションに上記関数をフックします

register_taxonomy(
  'class_taxonomy',  // 追加するタクソノミー名（英小文字とアンダースコアのみ）
  'class',  // どのカスタム投稿タイプに追加するか
  array(
    'label' => '教室カテゴリー',  // 管理画面上に表示される名前（投稿で言うカテゴリー）
    'labels' => array(
      'all_items' => '教室一覧',  // 投稿画面の右カラムに表示されるテキスト（投稿で言うカテゴリー一覧）
      'add_new_item' => '教室カテゴリーを追加'  // 投稿画面の右カラムに表示されるカテゴリ追加リンク
    ),
    'hierarchical' => true  // タクソノミーを階層化するか否か（子カテゴリを作れるか否か）
  )
);


function create_post_blog() {
  $exampleSupports = array(
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions',  // リビジョン
    'custom-fields', //カスタムフィールド
  );
  register_post_type( 'blog',  // カスタム投稿名
    array(
      'label' => 'ブログ',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'menu_position' => 2,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
    )
  );
}
add_action( 'init', 'create_post_blog' ); // アクションに上記関数をフックします

register_taxonomy(
  'blog_taxonomy',  // 追加するタクソノミー名（英小文字とアンダースコアのみ）
  'blog',  // どのカスタム投稿タイプに追加するか
  array(
    'label' => 'ブログカテゴリー',  // 管理画面上に表示される名前（投稿で言うカテゴリー）
    'labels' => array(
      'all_items' => 'ブログ一覧',  // 投稿画面の右カラムに表示されるテキスト（投稿で言うカテゴリー一覧）
      'add_new_item' => 'ブログカテゴリーを追加'  // 投稿画面の右カラムに表示されるカテゴリ追加リンク
    ),
    'hierarchical' => true  // タクソノミーを階層化するか否か（子カテゴリを作れるか否か）
  )
);

function create_post_tickets() {
  $exampleSupports = array(
    'title',  // 記事タイトル
    'editor',  // 記事本文
    'thumbnail',  // アイキャッチ画像
    'revisions',  // リビジョン
    'custom-fields', //カスタムフィールド
  );
  register_post_type( 'tickets',  // カスタム投稿名
    array(
      'label' => 'チケット',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか今回の場合は「投稿」の下に配置
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
    )
  );
}
add_action( 'init', 'create_post_tickets' ); // アクションに上記関数をフックします

register_taxonomy(
  'ticket_taxonomy',  // 追加するタクソノミー名（英小文字とアンダースコアのみ）
  'tickets',  // どのカスタム投稿タイプに追加するか
  array(
    'label' => 'チケットカテゴリー',  // 管理画面上に表示される名前（投稿で言うカテゴリー）
    'labels' => array(
      'all_items' => 'チケット一覧',  // 投稿画面の右カラムに表示されるテキスト（投稿で言うカテゴリー一覧）
      'add_new_item' => 'チケットカテゴリーを追加'  // 投稿画面の右カラムに表示されるカテゴリ追加リンク
    ),
    'hierarchical' => true  // タクソノミーを階層化するか否か（子カテゴリを作れるか否か）
  )
);

 ?>
