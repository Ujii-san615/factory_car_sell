<footer>
        <div class="footer">
            <!-- topup -->
            <div id="page-top">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top_up.png" alt=""></a>
            </div>
            <!-- footer img -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer.png" alt="">
            <div class=copylight>
                <p class="copy">Copyright © クッピー乳児園. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/8-1-3/js/8-1-3.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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
</body>
</html>