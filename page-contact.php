<?php get_header(); ?>
<div id="box6">
    <div class="section_title">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title_contact.png" alt="お問わ合せ">
    </div>

    <p>
    販売車両に関するお問合せ、ご購入のご相談などございましたら気軽にご連絡ください。<br>
    お急ぎの場合はお電話でのお問合せもお受付しております。
    </p>

    <h2 class="tel_text">
        <a class="tel" href="tel:0312345678">TEL:080-4509-8139<a>
    </h2>



    <div class="contact_form">
        <?php
        $page_id = 2;//ページIDを指定
        $page = get_post($page_id, 'OBJECT', 'raw'); //指定のページIDから情報を取得
        $page_include = apply_filters( 'the_content',$page->post_content); //ページの本文をフィルターフックで整形
        echo $page_include; //出力
        ?>
    </div>

</div>

<?php get_footer(); ?> 
