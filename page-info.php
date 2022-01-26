<?php get_header(); ?>

    <main>
        <!-- info お知らせ -->
        <section>
            <h1 id="pages_title"><pre>お知らせ</pre></h1>
        </section>
        <!-- content -->
        <section>
            <div class="info">
            <h1 class="info-h1">
                latest articles
            </h1>

            <ul class="info-ul">
            <?php
                if( have_posts() ) :
                    while( have_posts() ) :
                        the_post();
            ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <a href="<?php the_permalink(); ?>">
                        <li class="info-li" >
                            <p class="post__meta__item">
                                <div class="info-img"><?php the_post_thumbnail(); ?></div>
                            </p>
                            <p class="post__meta__item">
                                <date class="post__meta__date"><?php the_date(); ?></date>
                            </p>
                            <h2 class="post__ttl section2-h2"><?php the_title(); ?>
                            </h2>
                            <p class="info-p">
                                <a href="" class="info-a">READ MORE</a>
                            </p>
                        </li>
                    </a>
                </div>

            <?php endwhile;
                else :
            ?>
            </ul>
                <p>表示する記事がありません</p>
            <?php endif;?>
    <!-- 
        </div>
                <?php if ( $wp_query -> max_num_pages > 1 ) : ?>
                    <ul class="p-pagenation">
                        <li class="prevpostslink"><?php next_posts_link( 'Prev' ); ?></li>
                        <li class="prevpostslink"><?php previous_posts_link( 'Next' ); ?></li>
                    </ul>
                <?php endif; ?>
        </div> -->
        </section>
    </main>

<?php get_footer(); ?> 
