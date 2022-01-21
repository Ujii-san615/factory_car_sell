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
        <link href="<?php bloginfo(‘template_directory’); ?>/assets/css/common.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo(‘template_directory’); ?>/assets/css/slick.css" rel="stylesheet" type="text/css" />
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/8-1-3/js/8-1-3.js"></script>
        
        <script type="text/javascript">
        $('.slider').slick({
            autoplay:true,
            autoplaySpeed:5000,
            dots:true,
            centerMode: true,
            centerPadding: '30px',
            dots:true,
            focusOnSelect:true,
            prevArrow: '<img src="/assets/images/left.png" class="slick-prev slick-arrow">',//矢印部分PreviewのHTMLを変更
            nextArrow: '<img src="/assets/images/right.png" class="slick-next slick-arrow">',//矢印部分NextのHTMLを変更
        });
        </script>
		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
<header class="header">
<!-- navmenu  pc-->
    <div class="pc_nav_menu pc">
        <nav id="pc-nav">
            <div id="pc-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
                <?php wp_nav_menu( array('theme_location'  => 'headernav',)); ?>
            </div>
        </nav>
    </div>
<!-- navmenu  pc end-->
<!-- navmenu  sp-->
<div class="openbtn1 sp"><span></span><span></span><span></span></div>
    <nav id="g-nav">
        <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
            <ul>
                <li><a href="/index.php">TOPページ</a></li>
                    <li><a href="/info/index.php">お知らせ</a></li>
                    <li><a href="/service/index.php">保育内容</a></li>
                    <li><a href="/page-introduce.php">園の紹介</a></li>
                    <li><a href="/schedule/index.php">園の生活</a></li>
                    <li><a href="/album/index.php">アルバム</a></li>
            </ul>
            <?php wp_nav_menu( array('theme_location'  => 'headernav',)); ?>
        </div>
    </nav>
<div class="circle-bg"></div>
<!-- navmenu  sp end-->
    <div class="header_back">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/header_img.png" alt="">
    </div>
    <div class="header_logo">
        <img src="/assets/images/logo.png" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="">
    </div>
</header>
