<?php include ( dirname(__FILE__) . '/header.php' ); ?>

    <section>
    <div id="box6">
        <div class="section_title">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/title_news.png" alt="最新情報、販売車両">
        </div>
    </div>
    

    <div class="news_list">
        <div class="card_wrap">
            <?php
                global $post;
                $args = array( 'posts_per_page' => 8 );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) {
                setup_postdata($post);
            ?>
            <div class="card">
                <a href="<?php the_permalink(); ?>">
                <div class="card-img-top">
                    <?php the_post_thumbnail('index_thumbnail'); ?>
                </div>

                <div class="card-body">
                    <div class="time">
                        <?php the_time('Y.m.d') ?>
                    </div>

                    <!-- <h5 class="card-title"></h5> -->
                    <p class="card-text"><?php the_title(); ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </a>
            </div>
            
            <?php
                $custom_posts = get_posts(array(
                    'post_type' => 'test',
                    'posts_per_page' => 10,
                    'category_name'  => 'news',
                    'tax_query' => array(
                    array(
                        'taxonomy' => 'news',
                        'field' => 'slug',
                        'terms' => 'test-term'
                        )
                    )
                ));
                global $post;
                if($custom_posts): foreach($custom_posts as $post): setup_postdata($post); ?>
        </div>
            <?php endforeach; wp_reset_postdata(); endif; ?>
            
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
    </section>

    <?php get_footer(); ?> 