<?php
/**
 * Created by PhpStorm.
 * User: kamch
 * Date: 12/25/2016
 * Time: 12:48 PM
 */
?>

</main>

<footer id="footer" class="hidden-xs">

    <div class="inner-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="wrap-footer clearfix">
                        <ul class="footer-menu clearfix">
                            <li class="first">
                                <a href=""> О КОМПАНИИ </a>
                                <ul style="height: 160px;">

                                    <li><a href="?action=about">О нас</a></li>

                                    <li><a href="#">Работа у нас</a></li>

                                    <li><a href="#">Посетите наши магазины</a></li>

                                    <li><a href="#">Контакты</a></li>

                                    <li><a href="#">Новости</a></li>

                                    <li><a href="#">Постановления и условия</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href=""> ПОМОЩЬ</a>
                                <ul style="height: 160px;">

                                    <li><a href="#">О нас</a></li>

                                    <li><a href="#">Работа у нас</a></li>

                                    <li><a href="#">Посетите наши магазины</a></li>

                                    <li><a href="#">Контакты</a></li>

                                    <li><a href="#">Новости</a></li>

                                    <li><a href="#">Постановления и условия</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href=""> КЛИЕНТАМ </a>
                                <ul style="height: 160px;">

                                    <li><a href="#">О нас</a></li>

                                    <li><a href="#">Работа у нас</a></li>

                                    <li><a href="#">Посетите наши магазины</a></li>

                                    <li><a href="#">Контакты</a></li>

                                    <li><a href="#">Новости</a></li>

                                    <li><a href="#">Постановления и условия</a></li>


                                </ul>
                            </li>
                            <li>
                                <a href="">МОЙ КАБИНЕТ</a>
                                <ul style="height: 160px;">

                                    <li><a href="#">О нас</a></li>

                                    <li><a href="#">Работа у нас</a></li>

                                    <li><a href="#">Посетите наши магазины</a></li>

                                    <li><a href="#">Контакты</a></li>

                                    <li><a href="#">Новости</a></li>

                                    <li><a href="#">Постановления и условия</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 clearfix">
                    <div class="contact">
                        <div class="title">
                            <a> Контакты </a>
                        </div>
                        <div class="email">
                            <?php echo get_theme_mod('miss-email'); ?>
                        </div>
                        <div class="phone">
                            <p><?php echo get_theme_mod('miss-phone-1'); ?></p>
                            <p><?php echo get_theme_mod('miss-phone-2'); ?></p>
                        </div>
                        <div class="social clearfix">
                            <ul class="clearfix">
                                <li><a href="<?php echo get_theme_mod('social-vk'); ?>"></a></li>
                                <li><a href="<?php echo get_theme_mod('social-fb'); ?>"></a></li>
                                <li><a href="<?php echo get_theme_mod('social-tw'); ?>"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins)
<script src="<?php // bloginfo('template_url') ?>/js/jquery.js"></script>
-->
<!-- Include all compiled plugins (below), or include individual files as needed
<script src="<?php // bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
-->
<!--  Owl-carousel
<script src="<?php // bloginfo('template_url') ?>/owlcarousel/js/owl.carousel.min.js"></script>
-->
<!-- Custom js
<script src="<?php // bloginfo('template_url') ?>/js/custom.js"></script>
-->

<?php wp_footer(); ?>

<script>
    $(document).ready(function () {

    });

</script>

</body>
</html>
