<?php get_header(); ?>

    <main>
        <!-- introduce 園の紹介 -->
        <section>
            <h1 id="pages_title"><pre>園の紹介</pre></h1>
        </section>
        <section>
        <div class="section" id=section1>
            <h1>私たちについて</h1>
            <div class="we_box">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider2.jpg">
                <p>クッピー乳児園は、27年3ヵ月、無認可で地域の子どもたちを保育してまいりました。<br>
                そして、2017年8月に小規模保育事業所として引き続き、「クッピー乳児園開園」しております。<br>
                経験豊富な保育士がよりよい環境づくりをし、家庭的で安心安全。<br>
                伸び伸びと、ゆったりとした空間の中で、心身共に日々笑顔あふれる保育に努めてまいります。<br>
                地域の子育てをこれからも応援してまいります。</p>
            </div>
        </div>
    </section>
    <section>
        <div class="section" id=section2>
            <h1>園の概要</h1>
            <div class="section_table">
                <h2 class="h2_box">施設詳細</h2>
                <table class="syousai_table">
                    <tr>
                        <th>施設名称</th>
                        <td class="td_left">クッピー乳児園</td>
                    </tr>
                    <tr>
                        <th>開設年月日</th>
                        <td class="td_left">平成29年8月1日</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td class="td_left">〒901-2214　沖縄県宜野湾市我如古1-55-13-2F</td>
                    </tr>
                    <tr>
                        <th>TEL / FAX</th>
                        <td class="td_left">098-898-5657</td>
                    </tr>
                    <tr>
                        <th>施設代表者</th>
                        <td class="td_left">多和田 眞栄</td>
                    </tr>
                    <tr>
                        <th>施設管理者</th>
                        <td class="td_left">園長　多和田 鶴美</td>
                    </tr>
                    <tr>
                        <th>施設種類</th>
                        <td class="td_left">認可小規模保育園</td>
                    </tr>
                    <tr>
                        <th>利用定員</th>
                        <td class="td_left">19名（0、1、2歳児）</td>
                    </tr>
                    <tr>
                        <th>職員構成</th>
                        <td class="td_left">代表、園長、主任保育士、保育士、調理師</td>
                    </tr>
                    <tr>
                        <th>連携施設</th>
                        <td class="td_left">「どんぐりの里保育園」宜野湾市長田3丁目27番9号<br>
                            「ポケット保育園」宜野湾市我如古3丁目18番3号<br>
                            「赤道あおぞら保育園」宜野湾市赤道2丁目9番11号<br>
                            「ぎのわんおひさま保育園」宜野湾市佐真下59番1号</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section>
        <div class="section" id=section2>
            <h1>職員構成</h1>
            <div class="section_table">
                <h2 class="h2_box">職員構成</h2>
                <table class="syousai_table">
                    <tr>
                        <th>代表者</th>
                        <td>多和田 眞栄</td>
                    </tr>
                    <tr>
                        <th>園長</th>
                        <td>多和田 鶴美</td>
                    </tr>
                </table>

                <p class="table_text">クラス別担当職員</p>
                <table class="syousai_table">
                    <tr>
                        <th>うさぎ組<br>(2歳児クラス)</th>
                            <td>屋宜 桃子<br>宮里 直美</td>
                    </tr>
                    <tr>
                        <th>りす組<br>(1歳児クラス)</th>
                            <td>宮城 有希<br>米須 綾乃</td>
                    </tr>
                    <tr>
                        <th>ひよこ組<br>(0歳児クラス)</th>
                            <td>崎濱 一子<br>崎濱 輝美</td>
                    </tr>
                    <tr>
                        <th>フリー</th>
                            <td>志慶真 智江<br>泉 和枝<br>喜納 美来</td>
                    </tr>
                </table>
                <table class="syousai_table">
                    <p class="table_text">サポート職員</p>
                    <tr>
                        <th>嘱託医</th>
                            <td>宮城小児科クリニック<br>宮城 仲健先生</td>
                            <td>パワー2歯科クリニック<br>識名 朝浩先生</td>
                    </tr>
                </table>
                <table class="syousai_table">
                    <tr>
                        <th>調理師<br>(給食・離乳食)</th>
                            <td>津覇 美乃<br>佐喜眞 みゆき</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <section>
        <div class="section_slider" id=section2>
            <h1>クラス紹介</h1>
            <div class="slider_wrap">
                <ul class="slider">
                    <li><img src="<?php echo get_template_directory_uri();?>/images/stage1.png" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri();?>/images/stage2.png" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri();?>/images/stage3.png" alt=""></li>
                </ul>
            </div>
        <div>
    </section>
    </main>
    <script type="text/javascript">
        $('.slider').slick({
            autoplay:true,
            autoplaySpeed:5000,
            dots:true,
            centerMode: true,
            centerPadding: '30px',
            dots:true,
            focusOnSelect:true,
            prevArrow: '<<?php echo get_template_directory_uri();?>/iimages/left.png" class="slick-prev slick-arrow">',//矢印部分PreviewのHTMLを変更
            nextArrow: '<?php echo get_template_directory_uri();?>/iimages/right.png" class="slick-next slick-arrow">',//矢印部分NextのHTMLを変更
        });
    </script>

<?php get_footer(); ?> 
