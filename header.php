<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<meta name="description" content="WordPress theme development static data for beginners">
		<meta name="keywords" content="WordPress, Theme, development">
        <link href="<?php bloginfo(‘template_directory’); ?>/assets/css/reset.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo(‘template_directory’); ?>/assets/css/fontawesome.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="<?php bloginfo(‘template_directory’); ?>/assets/css/common.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo(‘template_directory’); ?>/assets/css/slick.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo(‘template_directory’); ?>/assets/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo(‘template_directory’); ?>/assets/bootstrap-5.0.2-dist/js/bootstrap.min.js" rel="stylesheet" type="text/css" />
        <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
    
<header>
        <!-- header top-->
        <div class="header_top">
            <div class="header_left">
            <a href="/factory_car_sell/#">
                <div class="header_logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="">
                </div>
            </div>
            <div class="header_title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_title.png" alt="">
            </div>
            <a>
            <!-- navmenu  sp-->
            <div class="openbtn1 sp"><span></span><span></span><span></span></div>
            <nav id="g-nav">
                <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
                    <ul>
                        <li><a href="/factory_car_sell/#">TOP</a></li>
                        <li><a href="/factory_car_sell/#box2">ABOUT</a></li>
                        <li><a href="/factory_car_sell/#box3">お知らせ</a></li>
                        <li><a href="/factory_car_sell/#box4">購入について</a></li>
                        <li><a href="/factory_car_sell/#box5">アクセス</a></li>
                        <li><a href="<?php echo get_permalink( get_page_by_path( 'contact' )->ID ); ?>">お問い合わせ</a></li>
                    </ul>
                </div>
            </nav>
            <div class="circle-bg"></div>
        </div>
        <!-- navmenu  sp end-->
        <!-- navmenu  pc-->
        <div class="header_nav pc">
            <div class="pc_nav_menu">
                <nav id="pc-nav">
                    <div id="pc-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
                        <ul>
                            <li><a href="/factory_car_sell/#">TOP</a></li>
                            <li><a href="/factory_car_sell/#box2">ABOUT</a></li>
                            <li><a href="/factory_car_sell/#box3">お知らせ</a></li>
                            <li><a href="/factory_car_sell/#box4">購入について</a></li>
                            <li><a href="/factory_car_sell/#box5">アクセス</a></li>
                            <li><a href="<?php echo get_permalink( get_page_by_path( 'contact' )->ID ); ?>">お問い合わせ</a></li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- navmenu  pc end-->
    </header>
