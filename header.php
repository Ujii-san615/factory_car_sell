<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		<meta name="description" content="WordPress theme development static data for beginners">
		<meta name="keywords" content="WordPress, Theme, development">
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
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
            <!-- <ul>
                <li><a href="/index.php">TOPページ</a></li>
                    <li><a href="/info/index.php">お知らせ</a></li>
                    <li><a href="/service/index.php">保育内容</a></li>
                    <li><a href="/introduce/index.php">園の紹介</a></li>
                    <li><a href="/schedule/index.php">園の生活</a></li>
                    <li><a href="/album/index.php">アルバム</a></li>
            </ul> -->
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
