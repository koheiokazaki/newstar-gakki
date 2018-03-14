<?php

function check_cur_page(){
  $page = get_page_link();
  if ( strpos($page, 'company') !== false ) {
    $arr = array("bg_2", "会社概要", "Company");
  }elseif ( strpos($page, 'event') !== false ) {
    $arr = array("bg_4", "イベント", "Event");
  }elseif ( strpos($page, 'contact') !== false ) {
    $arr = array("bg_5", "お問い合わせ", "Contact");
  }elseif ( strpos($page, 'access') !== false ) {
    $arr = array("bg_3", "アクセス", "Access");
  }

  return $arr;
}

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
    'revisions'  // リビジョン
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
    'revisions'  // リビジョン
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
  'instrument_taxonomy',  // 追加するタクソノミー名（英小文字とアンダースコアのみ）
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
    'revisions'  // リビジョン
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
    'revisions'  // リビジョン
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
  'instrument_taxonomy',  // 追加するタクソノミー名（英小文字とアンダースコアのみ）
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
    'revisions'  // リビジョン
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
  'instrument_taxonomy',  // 追加するタクソノミー名（英小文字とアンダースコアのみ）
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


 ?>
