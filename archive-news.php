    
    <section>
        <h1>お知らせ</h1>
    </section>
    <section>
    <?php
        global $post;
        $args = array( 'posts_per_page' => 8 );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) {
        setup_postdata($post);
    ?>
    <ul>
        <div class="item">
            <div class="img">
                <?php the_post_thumbnail('index_thumbnail'); ?>
            </div>
            <div class="title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="time">
                <?php the_time('Y.m.d') ?>    
            </div>
            <div class="category">
                <?php the_category(',') ?>
            </div>
        </div>

        <?php
		$custom_posts = get_posts(array(
			'post_type' => 'test',
			'posts_per_page' => 10,
            'category_name'  => 'news',
			'tax_query' => array(
			array(
				'taxonomy' => 'news_02','news',
				'field' => 'slug',
				'terms' => 'test-term'
				)
			)
		));
        global $post;
        if($custom_posts): foreach($custom_posts as $post): setup_postdata($post); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endforeach; wp_reset_postdata(); endif; ?>

        <?php
        }
        wp_reset_postdata();
        ?>
    </ul>
    </section>

    <!----------- 以下繰り返し ------------>

    <section>
        <h1>献立票</h1>
    </section>

    <section>
    <?php
        global $post;
        $args = array( 'posts_per_page' => 8 );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) {
        setup_postdata($post);
    ?>
    <ul>
        <div class="item">
            <div class="img">
                <?php the_post_thumbnail('index_thumbnail'); ?>
            </div>
            <div class="title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="time">
                <?php the_time('Y.m.d') ?>    
            </div>
            <div class="category">
                <?php the_category(',') ?>
            </div>
        </div>

        <?php
		$custom_posts = get_posts(array(
			'post_type' => 'test',
			'posts_per_page' => 10,
            'category_name'  => 'food',
			'tax_query' => array(
			array(
				'taxonomy' => 'news_01',
				'field' => 'slug',
				'terms' => 'test-term'
				)
			)
		));
        global $post;
        if($custom_posts): foreach($custom_posts as $post): setup_postdata($post); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endforeach; wp_reset_postdata(); endif; ?>

        <?php
        }
        wp_reset_postdata();
        ?>
    </ul>
    </section>
