    <footer>
        <div class="footer">
            <!-- footer img -->
            <div class="footer_text">
                <p>
                    〒901-0146<br>
                    沖縄県那覇市具志3−22−１<br><br>
                </p>
                <p>
                    <a href="tel:0312345678">TEL：03-1234-5678</a>
                    <a href="tel:0312345678">MAIL：topmotor@xxxxx</a><br>
                </p>
            </div>
            
            <div class="copylight">
                <p class="copy">©️TOPMOTOR.biz, All Rights Reserved.</p>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
    <script type="text/javascript">
        $('.slider').slick({
            autoplay:true,
            autoplaySpeed:5000,
            dots:true,
            centerMode: true,
            centerPadding: '30px',
            dots:true,
            focusOnSelect:true,
            prevArrow: '<img src="<?php echo get_template_directory_uri();?>/images/left.png" class="slick-prev slick-arrow">',//矢印部分PreviewのHTMLを変更
            nextArrow: '<img src="<?php echo get_template_directory_uri();?>/images/right.png" class="slick-next slick-arrow">',//矢印部分NextのHTMLを変更
        });
    </script>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="/assets/js/slick.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>