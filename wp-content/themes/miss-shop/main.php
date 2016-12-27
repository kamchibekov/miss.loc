<?php
/**
 * Created by PhpStorm.
 * User: kamch
 * Date: 12/22/2016
 * Time: 4:03 PM
 */

?>

<div class="block-banner">
    <div class="container">
        <div class="row">
            <div class="no-padding">

                <div class="owl-carousel">
                    <div>
                        <a href=" <?php echo get_theme_mod('img-slider-href-1'); ?> ">
                            <img src="<?php
                            if (get_theme_mod('img-slider-main-1') != null) {
                                echo get_theme_mod('img-slider-main-1');
                            }
                            ?>">
                        </a>
                    </div>


                    <div>
                        <a href=" <?php echo get_theme_mod('img-slider-href-2'); ?> ">
                            <img src="<?php
                            if (get_theme_mod('img-slider-main-2') != null) {
                                echo get_theme_mod('img-slider-main-2');
                            }
                            ?>">
                        </a>
                    </div>

                    <div>
                        <a href=" <?php echo get_theme_mod('img-slider-href-3'); ?> ">
                            <img src="<?php
                            if (get_theme_mod('img-slider-main-3') != null) {
                                echo get_theme_mod('img-slider-main-3');
                            }
                            ?>">
                        </a>
                    </div>

                    <div>
                        <a href=" <?php echo get_theme_mod('img-slider-href-4'); ?> ">
                            <img src="<?php
                            if (get_theme_mod('img-slider-main-4') != null) {
                                echo get_theme_mod('img-slider-main-4');
                            }
                            ?>">
                        </a>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>

<br>

<div class="main-center-block">
    <div class="block-small-banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-4 left"><a href="<?php echo get_theme_mod('img-banner-href-1'); ?>">
                        <img class="img-responsive" src="<?php echo get_theme_mod('img-banner-1'); ?>" alt="">
                    </a>
                </div>
                <div class="col-sm-4 col-xs-4 center"><a href="<?php echo get_theme_mod('img-banner-href-2'); ?>">
                        <img class="img-responsive" src="<?php echo get_theme_mod('img-banner-2'); ?>" alt="">
                    </a>
                </div>
                <div class="col-sm-4 col-xs-4 right"><a href="<?php echo get_theme_mod('img-banner-href-3'); ?>">
                        <img class="img-responsive" src="<?php echo get_theme_mod('img-banner-3'); ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="block-brand hidden-xs">
        <div class="container">
            <div class="row">
                <div class="padding-no">
                    <h3 class="block_title"> Бренды <span>их предпочитают</span></h3>

                    <div class="block-brand-wrap">
                        <div class="block-inner">
                            <div class="owl-carousel">
                                <a><img class="img-responsive"
                                        src="<?php bloginfo('template_url') ?>/img/brand1.png"></a>
                                <a><img class="img-responsive"
                                        src="<?php bloginfo('template_url') ?>/img/brand2.png"></a>
                                <a><img class="img-responsive"
                                        src="<?php bloginfo('template_url') ?>/img/brand3.png"></a>
                                <a><img class="img-responsive"
                                        src="<?php bloginfo('template_url') ?>/img/brand4.png"></a>
                                <a><img class="img-responsive"
                                        src="<?php bloginfo('template_url') ?>/img/brand5.png"></a>
                                <a><img class="img-responsive"
                                        src="<?php bloginfo('template_url') ?>/img/brand6.png"></a>
                                <a><img class="img-responsive"
                                        src="<?php bloginfo('template_url') ?>/img/brand7.png"></a>
                                <a><img class="img-responsive"
                                        src="<?php bloginfo('template_url') ?>/img/brand8.png"></a>
                                <a><img class="img-responsive"
                                        src="<?php bloginfo('template_url') ?>/img/brand9.png"></a>
                                <a><img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/brand10.png"></a>
                                <a><img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/brand11.png"></a>
                                <a><img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/brand12.png"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="block-buy-now">
    <div class="container">
        <div class="row">
            <h3 class="buy-now-title"> Сейчас покупают <span> их выбириают </span></h3>

            <div class="buy-now-slider-wrap">
                <div class="owl-carousel">
                    <div class="one-item">

                        <div class="item-top">
                            <a href="?action=item" class="clearfix">
                                <img src="<?php bloginfo('template_url') ?>/img/swiper1.jpg">

                            </a>

                            <span class="item-discount">
                                    <span class="inner-discount"> -5% </span>
                                </span>

                        </div>

                        <div class="item-bottom">
                            <div class="info clearfix">
                                <div class="name">
                                    <a><p>Rare</p></a>
                                    <i>Perfect Coverage Bra</i>
                                </div>
                                <div class="price text-right">
                                    <p class="item-price">9 405 руб.</p>

                                    <p class="item-price-old">9 900 руб.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-item">

                        <div class="item-top">
                            <a href="?action=item" class="clearfix">
                                <img src="<?php bloginfo('template_url') ?>/img/swiper2.jpg">

                            </a>

                            <span class="item-discount">
                                    <span class="inner-discount"> -5% </span>
                                </span>

                        </div>

                        <div class="item-bottom">
                            <div class="info clearfix">
                                <div class="name">
                                    <a><p>Rare</p></a>
                                    <i>Perfect Coverage Bra</i>
                                </div>
                                <div class="price text-right">
                                    <p class="item-price">9 405 руб.</p>

                                    <p class="item-price-old">9 900 руб.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-item">

                        <div class="item-top">
                            <a href="?action=item" class="clearfix">
                                <img src="<?php bloginfo('template_url') ?>/img/swiper3.jpg">

                            </a>

                            <span class="item-discount">
                                    <span class="inner-discount"> -5% </span>
                                </span>

                        </div>

                        <div class="item-bottom">
                            <div class="info clearfix">
                                <div class="name">
                                    <a><p>Rare</p></a>
                                    <i>Perfect Coverage Bra</i>
                                </div>
                                <div class="price text-right">
                                    <p class="item-price">9 405 руб.</p>

                                    <p class="item-price-old">9 900 руб.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-item">

                        <div class="item-top">
                            <a href="?action=item" class="clearfix">
                                <img src="<?php bloginfo('template_url') ?>/img/swiper4.jpg">

                            </a>

                            <span class="item-discount">
                                    <span class="inner-discount"> -5% </span>
                                </span>

                        </div>

                        <div class="item-bottom">
                            <div class="info clearfix">
                                <div class="name">
                                    <a><p>Rare</p></a>
                                    <i>Perfect Coverage Bra</i>
                                </div>
                                <div class="price text-right">
                                    <p class="item-price">9 405 руб.</p>

                                    <p class="item-price-old">9 900 руб.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-item">

                        <div class="item-top">
                            <a href="?action=item" class="clearfix">
                                <img src="<?php bloginfo('template_url') ?>/img/swiper5.jpg">

                            </a>

                            <span class="item-discount">
                                    <span class="inner-discount"> -5% </span>
                                </span>

                        </div>

                        <div class="item-bottom">
                            <div class="info clearfix">
                                <div class="name">
                                    <a><p>Rare</p></a>
                                    <i>Perfect Coverage Bra</i>
                                </div>
                                <div class="price text-right">
                                    <p class="item-price">9 405 руб.</p>

                                    <p class="item-price-old">9 900 руб.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-item">

                        <div class="item-top">
                            <a href="?action=item" class="clearfix">
                                <img src="<?php bloginfo('template_url') ?>/img/swiper6.jpg">

                            </a>

                            <span class="item-discount">
                                    <span class="inner-discount"> -5% </span>
                                </span>

                        </div>

                        <div class="item-bottom">
                            <div class="info clearfix">
                                <div class="name">
                                    <a><p>Rare</p></a>
                                    <i>Perfect Coverage Bra</i>
                                </div>
                                <div class="price text-right">
                                    <p class="item-price">9 405 руб.</p>

                                    <p class="item-price-old">9 900 руб.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="block-news">
    <div class="container">
        <div class="row">
            <h3 class="block-title">Miss shop news <span>онлайн журнал</span></h3>

            <div class="wrap-news">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="news-left">
                            <p class="title">
                                <a>
                                    ACM Awards: победители, трогательная речь мамы Тэйлор Свифт и многое другое
                                </a>
                            </p>

                            <p class="date"> 5 Мая 2015 </p>

                            <a class="content-wrap">
                                <img class="img-responsive"
                                     src="<?php bloginfo('template_url') ?>/img/news.jpg" width="340"
                                     height="220"
                                     alt="ACM Awards: победители, трогательная речь мамы Тэйлор Свифт и многое другое"
                                     title="ACM Awards: победители, трогательная речь мамы Тэйлор Свифт и многое другое">
                            </a>

                            <p class="text">Главными героями церемонии вручения наград ACM Awards стали София
                                Вергара, Риз Уизерспун, а также мама Тэйлор Свифт Андреа, которой диагностировали
                                рак.</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="news-center">
                            <a class="one-news">
                                <p class="title">Премьера нового альбома Джей Зи и Бейонсе состоится на сервисе
                                    Tidal</p>

                                <p class="date">5 Мая 2015</p>
                            </a>
                            <a class="one-news">
                                <p class="title">Премьера нового альбома Джей Зи и Бейонсе состоится на сервисе
                                    Tidal</p>

                                <p class="date">5 Мая 2015</p>
                            </a>
                            <a class="one-news">
                                <p class="title">Премьера нового альбома Джей Зи и Бейонсе состоится на сервисе
                                    Tidal</p>

                                <p class="date">5 Мая 2015</p>
                            </a>
                            <a class="one-news">
                                <p class="title">Премьера нового альбома Джей Зи и Бейонсе состоится на сервисе
                                    Tidal</p>

                                <p class="date">5 Мая 2015</p>
                            </a>
                            <a class="one-news">
                                <p class="title">Премьера нового альбома Джей Зи и Бейонсе состоится на сервисе
                                    Tidal</p>

                                <p class="date">5 Мая 2015</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="news-right">
                            <div class="news-slide">
                                <div class="owl-carousel">
                                    <div class="one-item">
                                        <p class="title">
                                            <a href="#">Вспомнить
                                                все: музыканты группы Backstreet Boys</a>
                                        </p>

                                        <p class="date">5 Мая 2015</p>

                                        <div class="wrap-content">
                                            <img class="img-responsive"
                                                 src="<?php bloginfo('template_url') ?>/img/news.jpg">
                                        </div>
                                        <p class="text">
                                            Один из самых популярных бойз-бэндов 90-х Backstreet Boys вошел в
                                            Книгу рекордов Гиннесса как самый успешный молодежный проект всех
                                            времен. Вспоминаем любимые песни! </p>

                                    </div>
                                    <div class="one-item">
                                        <p class="title">
                                            <a href="#">Вспомнить
                                                все: музыканты группы Backstreet Boys</a>
                                        </p>

                                        <p class="date">5 Мая 2015</p>

                                        <div class="wrap-content">
                                            <img class="img-responsive"
                                                 src="<?php bloginfo('template_url') ?>/img/news2.jpg">
                                        </div>
                                        <p class="text">
                                            Один из самых популярных бойз-бэндов 90-х Backstreet Boys вошел в
                                            Книгу рекордов Гиннесса как самый успешный молодежный проект всех
                                            времен. Вспоминаем любимые песни! </p>

                                    </div>
                                    <div class="one-item">
                                        <p class="title">
                                            <a href="#">Вспомнить
                                                все: музыканты группы Backstreet Boys</a>
                                        </p>

                                        <p class="date">5 Мая 2015</p>

                                        <div class="wrap-content">
                                            <img class="img-responsive"
                                                 src="<?php bloginfo('template_url') ?>/img/news3.jpeg">
                                        </div>
                                        <p class="text">
                                            Один из самых популярных бойз-бэндов 90-х Backstreet Boys вошел в
                                            Книгу рекордов Гиннесса как самый успешный молодежный проект всех
                                            времен. Вспоминаем любимые песни! </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="block-seo">
    <div class="container">
        <div class="row">

            <h4>ИНТЕРНЕТ-МАГАЗИН “MISS SHOP” - ТОЛЬКО ИЗЫСКАННЫЕ ПОКУПКИ</h4>

            <p id="website-visitors"><strong>MISS SHOP - всемирно известный онлайн-магазин товаров класса люкс.
                    <br>
                    Каждый месяц наш сайт посещают 4,000,000 человек.</strong></p>

            <p>На сайте представлены дизайнерская одежда, обувь и аксессуары для женщин от ведущих модных домов,
                таких как <cite>Alexander McQueen, Tom Tailor, Pepe Jeans, Aako, Calvin Clein, Rare,
                    Philippecarat, Leo Guy, Eleven Paris и других. </cite>В качестве официального дистрибьютора
                всех брендов, представленных онлайн, компания Miss Shop гарантирует подлинность каждого товара.
                На сайте молодые таланты представлены вместе с самыми известными игроками модной индустрии.</p>

            <p>Компания была основана в 1930-е годы во Флоренции, и флагманский магазин по-прежнему находится
                там.</p>

            <p>Сегодня Miss Shop это:
                <br>
            </p>

            <ul>
                <li> богатый ассортимент модной одежды;</li>

                <li>эксклюзивные модели ведущих европейских дизайнеров;</li>

                <li>модные тенденции и высокое качество.</li>
            </ul>

            <p>В 2010 году количество уникальных посетителей сайта составило 1 500 000 человек. За последние 4
                года эта цифра увеличилась более чем в 3 раза.
                <br>
                По оценкам, общее число уникальных посетителей сайта Miss Shop в 2015 году составит 5 000 000
                человек.</p>
        </div>
    </div>
</div>
