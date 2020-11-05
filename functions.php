<?php

    add_theme_support( 'title-tag' ); // <title>タグを<head>タグに挿入

    function register_my_menus() { 
        register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
        //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
        'nav-menu' => 'ナビゲーションメニュー',
        'footer-menu'  => 'フッターメニュー',
        ) );
    }
    add_action( 'after_setup_theme', 'register_my_menus' );
    // ナビゲーションメニューの登録・有効化（参考URL：https://www.webdesignleaves.com/pr/wp/wp_nav_menus.html）


    function emotion_script() {
        wp_enqueue_style( 'Noto Sans JP','Roboto', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto&display=swap', array() );
        wp_enqueue_style( 'ress', 'https://unpkg.com/ress/dist/ress.min.css', array() ); // リセットcssの読込 必ず自作cssより前に書く 後で書くと自作cssもリセットされる


        // slickのcssファイルの読込
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/js/slick-1.8.1/slick/slick.css', array(), date('YmdGis', filemtime(get_template_directory().'/js/slick-1.8.1/slick/slick.css')));
        wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/js/slick-1.8.1/slick/slick-theme.css', array(), date('YmdGis', filemtime(get_template_directory().'/js/slick-1.8.1/slick/slick-theme.css')));
        wp_enqueue_style( 'slickEdit', get_template_directory_uri() . '/css/slickEdit.css', array(), date('YmdGis', filemtime(get_template_directory().'/css/slickEdit.css')));

        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/17emotion.css', array(), date('YmdGis', filemtime(get_template_directory().'/css/17emotion.css'))); // 自作cssの読込
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), date('YmdGis', filemtime(get_template_directory().'/style.css')));


        wp_deregister_script( 'jquery'); //WordPress 本体の jQuery を登録解除
        wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' , "", "3.5.1", true ); // Google提供のCDNの読込（Google Hosted Libraries URL：https://developers.google.com/speed/libraries）


        wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/22e109cfd0.js', "", "", true );


        // slickのjsファイルの読込
        wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick-1.8.1/slick/slick.min.js', array(), date('YmdGis', filemtime(get_template_directory().'/js/slick-1.8.1/slick/slick.min.js')), true );
        wp_enqueue_script( 'slick-config', get_template_directory_uri() . '/js/slick-config.js', array(), date('YmdGis', filemtime(get_template_directory().'/js/slick-config.js')), true );
        wp_enqueue_script( 'hamburger-menu', get_template_directory_uri() . '/js/hamburger-menu.js', array(), date('YmdGis', filemtime(get_template_directory().'/js/hamburger-menu.js')), true );
        // 自作のスクリプトを読み込ませる時は、スクリプトの識別名に注意（参考URL：https://works.coldsleep.jp/blog/wp_enqueue_script/）
    }
    add_action( 'wp_enqueue_scripts', 'emotion_script' );


    add_theme_support( 'post-thumbnails' ); // アイキャッチ画像を表示


    // アイキャッチ画像のimgタグへのサイズ指定を削除
    add_filter( 'post_thumbnail_html', 'custom_attribute' );
    function custom_attribute( $html ){
        $html = preg_replace('/(width|height)="\d*"\s/', '', $html); // width height を削除する
        return $html;
    }



    // デフォルトの投稿のアーカイブ機能を有効化・スラッグを指定 他（参考URL：https://chot.design/wordpress-basic/8df7750c2c24/）
    function post_has_archive( $args, $post_type ) {

        if ( 'post' == $post_type ) {
            $args['rewrite'] = true;
            $args['has_archive'] = 'news'; // スラッグ名の指定
            $args['label'] = 'News'; // 「投稿」を「News」に変更
        }
        return $args;

    }
    add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


    // カスタム投稿タイプで「Event Report」の作成
    function create_post_type() {
        register_post_type( 'eventreport', [ // 投稿タイプ名の定義
            'labels' => [
                'name'          => 'Event Report', // 管理画面上で表示する投稿タイプ名
                'singular_name' => 'eventreport',    // カスタム投稿の識別名
            ],
            'public'        => true,  // 投稿タイプをpublicにするか
            'has_archive'   => true, // アーカイブ機能ON/OFF
            'menu_position' => 5,     // 管理画面上での配置場所
            'show_in_rest'  => true,  // エディタ「Gutenberg」を有効にする
            'supports'  => ['title', 'editor', 'thumbnail', 'excerpt'],
        ]);
    }
    add_action( 'init', 'create_post_type' );


    remove_filter( 'pre_term_description', 'wp_filter_kses' ); // カテゴリー、タグの説明文でhtmlを使えるようにする
    

    // Gutenberg用のCSSを読み込み、ビジュアルエディターを見やすくする
    add_action( 'enqueue_block_editor_assets', 'gutenberg_stylesheets_custom_demo' );
    function gutenberg_stylesheets_custom_demo() {
        //現在適用しているテーマのeditor-style.cssを読み込む
        $editor_style_url = get_theme_file_uri('/css/editor-style.css');
        wp_enqueue_style( 'theme-editor-style', $editor_style_url );
    }


    // テーマチェック：コンテンツの幅が定義されていません。
    if ( ! isset( $content_width ) ) $content_width = 525;


    // テーマチェック→「見つかりません」のエラー
    add_theme_support( 'automatic-feed-links' ) ;

    