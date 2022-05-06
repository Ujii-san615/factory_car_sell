<?php

/*

Template Name: ニュース
Template Post Type: page,post

*/

?>

<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<body>
<main>
    <section>
        <div id="section_title">
            <img src="<?php bloginfo('template_directory'); ?>/images/title_news_main.png" alt="お知らせ">
        </div>
    </section>
    <section>
            <div class="section_01 news_title">
                <div class="title_small">
                    <img src="<?php bloginfo('template_directory'); ?>/images/title_news_small.png" alt="タイトル
                    ">
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">詳しくみる</a>
                    </div>
                </div>
                
                <div class="news_wrap,card_wrap">
                    <div class="news_box">
                        <ul>
                        <?php
                            global $post;
                            $tmp_post = $post; // このPHPコードを実行する前の記事データを退避。
                            $category_slugs = array(
                                'schedule',
                            ); // カテゴリスラッグを配列で指定。
                            $category_ids = array();
                            foreach ( $category_slugs as $category_slug ) {
                                $idObj = get_category_by_slug( $category_slug ); // 指定したカテゴリスラッグから、get_category_by_slug 関数でカテゴリIDを取得。
                                $category_id = $idObj->term_id;
                                array_push( $category_ids, $category_id ); // カテゴリIDを配列に格納。
                            }
                            $numberposts = '4'; // 取得する最大投稿記事数を指定。
                            foreach ( $category_ids as $category_id ) { // 指定したカテゴリスラッグの数だけ繰り返す。
                        ?>

                        <?php
                            $postslist = get_posts( "category=$category_id&numberposts=$numberposts&order=DESC&orderby=date" );
                            // get_posts 関数で、投稿記事データを取得し、配列に格納
                            foreach ( $postslist as $post ) {
                            // 取得した投稿記事データを1つづつ表示
                        ?>

                            <a href="<?php echo get_permalink(); ?>">
                                <li class="li_box">
                                    <div class="thumbnail"><img src="<?php the_post_thumbnail_url() ?>" alt=""></div>
                                    <div class="li_text_box">
                                        <div class="day"><?php the_time('Y年n月j日'); ?>&nbsp;&nbsp;</div>
                                        <div class="lavel"><?php echo '<span class="entry-label" style="' . esc_attr( 'background:' . $this_category_color ) . ';">' . esc_html( $this_category_name ) . '</span>'; ?></div>
                                        <div class="text"><?php the_title(); ?></div>
                                    </div>
                                </li>
                            </a>
                            <?php
                                    }
                            ?>
                                    
                            <?php
                                }
                                $post = $tmp_post; // このPHPコードを実行する前の記事データを復活。
                            ?>
                        </ul>
                    </div>
                    <!-- <div class="more_button">
                        <a href="">もっと見る </a>
                    </div> -->
                </div>
            </div>
        </div> 
        </section>
    <?php wp_footer(); ?>
    <?php include ( dirname(__FILE__) . '/footer.php' ); ?>
