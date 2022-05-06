<?php get_header(); ?>

            <!-- slider -->
        <section>
            <div class="slider_wrap pc">
                <?php echo do_shortcode('[smartslider3 slider="4"]');?>
            </div>

            <div class="slider_wrap sp">
                <?php echo do_shortcode('[smartslider3 slider="2"]');?>
            </div>
        </section>
        <main>
        <section>
            <div id="box1">
                <div class="top_text">
                    <p>
                        毎日乗るクルマだから<br>
                        手頃な価格で出会いたい！<br><br>
                        そんなお客様にピッタリな車を見つける<br>
                        お手伝いをさせていただきます。
                    </p>
                </div>
                <div class="second_text">
                    <p>
                        ▼現在販売中の中古車販売情報はこちらでチェック▼
                    </p>
                    <a href="https://www.o-cross.net/shop/004915/car/soldlist?SHOPID=004915&perPage=20&sortBy=registerNew">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/crossroad.png" alt="クロスロードで車を探す">
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div id="box2">
                <div class="section_title">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title_about.png" alt="アバウト私たちについて">
                </div>
                <div class="section_text">
                    <h1>沖縄で中古車を購入するなら<br>
                        FACTORY CAR SELL
                    </h1>
                </div>
                <div class="section_box">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about_image.png" alt="当社の車両は格安での提供が可能">
                    <div class="box_wrap">
                        <p>
                            本州から仕入れた軽自動車中古車両をメインに販売しています。<br>
                            レンタアップ車両などの取り扱いもおこなっており、<br>
                            お得な価格でご提供が可能です。<br><br>
                            仕入れコストをギリギリまで落とすことで、<br>
                            お客様のご満足いただける価格での<br>
                            ご提供が可能となっております。<br>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div id="box3">
                <div class="section_title">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title_news.png" alt="最新情報、販売車両">
                </div>

                <div class="news_text">
                    <p>
                        随時取り扱い車両や、販売実績を紹介しています。<br>
                        気になる車両がございましたら<br>
                        気軽に店舗までお問い合わせください。<br>
                    </p>
                </div>
            </div>
            <div class="btn_tel">
                    <a href="/factory_car_sell/news" class="btn_07">もっとみる<span></span></a>
                </div>

        </section>

        <section>
            <div id="box4">
                <div class="section_title">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title_buycar.png" alt="ご購入の流れ">
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/buycar_imag.png" alt="納車までの流れはこちら">
            </div>
            <div class="btn_tel">
                <a href="#" class="btn_07">もっとみる<span></span></a>
            </div>
        </section>



        <section>
            <div id="box5">
                <div class="section_title">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title_accece.png" alt="アクセス">
                </div>
                <div class="map pc">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1722.2177808764484!2d127.6547705388931!3d26.178655727787092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5690645b3650b%3A0x397db47903e52596!2zRkFDVE9SWSBDQVIgUkVOVEFMIOaylue4hOOBrui8uOWFpei7iiDlpJbou4rjg6zjg7Pjgr_jgqvjg7w!5e0!3m2!1sja!2sjp!4v1648141231238!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                </div>
                <div class="map sp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1722.2177808764484!2d127.6547705388931!3d26.178655727787092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5690645b3650b%3A0x397db47903e52596!2zRkFDVE9SWSBDQVIgUkVOVEFMIOaylue4hOOBrui8uOWFpei7iiDlpJbou4rjg6zjg7Pjgr_jgqvjg7w!5e0!3m2!1sja!2sjp!4v1648141231238!5m2!1sja!2sjp" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                </div>
            </div>
        </section>
        
        <section>
            <!-- mail.tel -->
            <div class="contact_ico">
                <div class="ico_wrap">
                    <a href="/factory_car_sell/contact"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/mail.png" alt="mail">
</a>
                    <a href="tel:0312345678"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tel.png" alt="tell"></a>
                    <!-- topup -->
                    <div id="page-top">
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?> 
