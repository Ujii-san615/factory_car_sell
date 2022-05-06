//-----  nav menu -------//
$(".openbtn1").click(function () {//ボタンがクリックされたら
    $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
    $(".circle-bg").toggleClass('circleactive');//丸背景にcircleactiveクラスを付与
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスを除去
    $(".circle-bg").removeClass('circleactive');//丸背景のcircleactiveクラスを除去
});

$('.slider').slick({
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    speed: 500,//スライドのスピード。初期値は300。
    slidesToShow: 3,//スライドを画面に3枚見せる
    slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
    prevArrow: '<img src="/assets/images/right.png" class="slide-arrow prev-arrow">',//矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"><i class="fas fa-angle-right"></i></div>',//矢印部分NextのHTMLを変更
    centerMode: true,//要素を中央ぞろえにする
    variableWidth: true,//幅の違う画像の高さを揃えて表示
    dots: true,//下部ドットナビゲーションの表示
});

$(".slider").slick({
    prevArrow: '<img src="前への矢印画像のパス" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="次への矢印画像のパス" class="slide-arrow next-arrow">'
});

$('.slider').slick({
    autoplay:true,
    autoplaySpeed:5000,
    dots:true,
    centerMode: true,
    centerPadding: '30px',
    dots:true,
    focusOnSelect:true,
    prevArrow: '<?php echo get_template_directory_uri();?>/iimages/left.png" class="slick-prev slick-arrow">',//矢印部分PreviewのHTMLを変更
    nextArrow: '<?php echo get_template_directory_uri();?>/iimages/right.png" class="slick-next slick-arrow">',//矢印部分NextのHTMLを変更
});