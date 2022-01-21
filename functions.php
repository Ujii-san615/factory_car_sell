<?php

    //テーマサポート
    register_nav_menus();
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-header' );
    add_theme_support( "custom-background");
    if ( ! isset( $content_width ) ) {
        $content_width = 960;
    }

    //タイトル出力
    function wpbeg_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'wpbeg_title' );

    function wpbeg_script() {
        wp_enqueue_style( 'title-style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'base-style', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.0.0' );
        wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/common.css', array(), '1.0.0' );
        wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
        wp_enqueue_style( 'Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
        wp_enqueue_style( 'font-awesome', '/assets/css/fontawesome.css', array(), '4.7.0' );
        // wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '4.5.0' );
        // wp_enqueue_style( 'wpbeg', get_template_directory_uri() . '/css/wpbeg.css', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'wpbeg_script' );

    function wpbeg_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'カテゴリーウィジェット',
                'id'            => 'category_widget',
                'description'   => 'カテゴリー用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
                'after_title'   => "</h2>\n",
            )
        );
        register_sidebar(
            array(
            'name'          => 'タグウィジェット',
            'id'            => 'tag_widget',
            'description'   => 'タグ用ウィジェットです',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><i class="fa fa-tags" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
            )
        );
        register_sidebar(
            array(
            'name'          => 'アーカイブウィジェット',
            'id'            => 'archive_widget',
            'description'   => 'アーカイブ用ウィジェットです',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2><i class="fa fa-archive" aria-hidden="true"></i>',
            'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'wpbeg_widgets_init' );

    function wpbeg_theme_add_editor_styles() {
        add_editor_style( get_template_directory_uri() . "/css/editor-style.css" );
    }
    add_action( 'admin_init', 'wpbeg_theme_add_editor_styles' );

    function wpbeg_theme_setup(){
        load_theme_textdomain( 'wpbeg', get_template_directory() . '/languages' );
        }
    add_action( 'after_setup_theme', 'wpbeg_theme_setup' );

    /*navmenu */
    function register_my_menus() { 
        register_nav_menus(
            array(
            'headernav' => 'ヘッダーナビ',
            'sidenav' => 'サイドナビ',
            'footernav_l' => 'フッターナビ(左)',
            'footerna_r' => 'フッターナビ(右)'
            )
        );
        }
        add_action( 'after_setup_theme', 'register_my_menus' );
    
    // 親テーマのテーマフォルダのパスを取得するショートコード
    function gettmplurl($atts, $content = null) {
    return get_template_directory_uri();
    }
    add_shortcode('tmplurl', 'gettmplurl');
    
    // 子テーマのテーマフォルダのパスを取得するショートコード
    function getchildtmplurl($atts, $content = null) {
    return get_stylesheet_directory_uri();
    }
    add_shortcode('childtmplurl', 'getchildtmplurl');
    
    // 子テーマのstyle.cssを読み込む 
    add_action( 'wp_enqueue_scripts', 'my_enqueue_style_child' ); 
    function my_enqueue_style_child() { 
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
    }

    // メディアフォルダのパスを取得するショートコード
    function getmediaurl($atts, $content = null) {
    $wp_upload_dir = wp_upload_dir();
    return $wp_upload_dir['baseurl'];
    }
    add_shortcode('mediaurl', 'getmediaurl');
    
    /*main js 読み込み */
    function twpp_enqueue_scripts() {
        wp_enqueue_script( 
            'main-script', 
            get_template_directory_uri() . '/assets/js/main.js' 
        );
    }
    
    add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );

    // function js_header(){
    //     wp_enqueue_script( 
    //             'slick.min.js', 
    //             get_template_directory_uri() . '/assets/js/slick.min.js',
    //             array( 'jquery', 'slick.min.js' ),
    //             false,
    //             true // ヘッダーなのでtrue
    //     );
    // }
        
    // add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );

    // function javascript() {
    //     wp_enqueue_script( ‘jquery-js’, ‘https://code.jquery.com/jquery-3.5.1.min.js’, [], ”, true );
    //     wp_enqueue_script( ‘script’, get_theme_file_uri(‘https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js’), [‘jquery-js’], ”, true );
    //     }
    // add_action( ‘wp_enqueue_scripts’, ‘javascript’);


    // create custom post type(お知らせ)
    function news_custom_post_type(){
        $labels = array(
        'name' => _x('お知らせ', 'post type general name'),
        'singular_name' => _x('お知らせ', 'post type singular name'),
        'add_new' => _x('新規追加', 'news'),
        'add_new_item' => __('お知らせ'),
        'edit_item' => __('編集'),
        'new_item' => __('新規お知らせ'),
        'view_item' => __('表示'),
        'search_items' => __('項目検索'),
        'not_found' => __('記事が見つかりません'),
        'not_found_in_trash' => __('ゴミ箱に記事はありません'),
        'parent_item_colon' => ''
        );
        
        $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite'  => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 4,
        'has_archive' => true,
        'rewrite' => array( 'slug' => 'news'),
        'supports' => array('title','editor','thumbnail')
        );
        register_post_type('news',$args);
    
        $args = array(
        'label' => '月の便り',
        'public' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_admin_column' => true,
        'show_ui' => true,
        'hierarchical' => true,
        'query_var' => true
        );
        register_taxonomy('news_01','news',$args);

        $args = array(
        'label' => '献立表',
        'public' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_admin_column' => true,
        'show_ui' => true,
        'hierarchical' => true,
        'query_var' => true
        );
        register_taxonomy('news_02','news',$args);
    }
    add_action('init', 'news_custom_post_type');

    
    // // create custom post type 分類１
    // $args = array(
    //     'label' => 'カテゴリー１',
    //     'public' => true,
    //     'show_ui' => true,
    //     'show_in_nav_menus' => true,
    //     'show_admin_column' => true,
    //     'hierarchical' => true,
    //     'query_var' => true
    // );
    // register_taxonomy('news_01','news',$args);

    // // create custom post type 分類2
    // $args = array(
    //     'label' => 'カテゴリー２',
    //     'public' => true,
    //     'show_ui' => true,
    //     'show_in_nav_menus' => true,
    //     'show_admin_column' => true,
    //     'show_ui' => true,
    //     'hierarchical' => false,
    //     'query_var' => true
    // );
    // register_taxonomy('news_02','news',$args);

    //記事読み込み用
    function Include_my_php($params = array()) {
        extract(shortcode_atts(array(
            'file' => 'default'
        ), $params));
        ob_start();
        include(get_theme_root() . '/' . get_template() . "/$file.php");
        return ob_get_clean();
    }
    
    add_shortcode('myphp', 'Include_my_php');
    //ここまで

    /* PHPの読み込み
---------------------------------------------------------- */
    function my_php_Include($params = array()) {
    extract(shortcode_atts(array('file' => 'default'), $params));
    ob_start();
    include(STYLESHEETPATH . "/$file.php");
    return ob_get_clean();
    }
    add_shortcode('call_php', 'my_php_Include');
    
?>
