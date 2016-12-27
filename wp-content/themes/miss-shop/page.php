<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Store_Villa
 */

get_header(); ?>


    <div class="page">

        <div class="container">

            <h2 class="catalog-title">Каталоги</h2>

            <div class="row">

                <div class="white-overlay">

                    <div class="col-sm-3 no-padding-left clearfix">


                        <div id="menu-widget" class="menu-widget">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <span class="arrow" role="button" data-toggle="collapse"
                                                  data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                                  aria-controls="collapseOne"> &nbsp;&nbsp; </span>

                                            <a href="#">
                                                Джемперы и кардиганы
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <span class="arrow" role="button" data-toggle="collapse"
                                                  data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                                                  aria-controls="collapseOne"> &nbsp;&nbsp; </span>

                                            <a href="#">
                                                Нижнее белье
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <span class="arrow" role="button" data-toggle="collapse"
                                                  data-parent="#accordion" href="#collapseSix" aria-expanded="false"
                                                  aria-controls="collapseOne"> &nbsp;&nbsp; </span>

                                            <a href="#">
                                                Обувь
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <span class="arrow" role="button" data-toggle="collapse"
                                                  data-parent="#accordion" href="#collapseSeven" aria-expanded="false"
                                                  aria-controls="collapseOne"> &nbsp;&nbsp; </span>

                                            <a href="#">
                                                Платья
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <span class="arrow" role="button" data-toggle="collapse"
                                                  data-parent="#accordion" href="#collapseEight" aria-expanded="false"
                                                  aria-controls="collapseOne"> &nbsp;&nbsp; </span>

                                            <a href="#">
                                                Футболки и блузки
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel"
                                         aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar-left">

                            <div class="block-filter-ajax">

                                <form method="post" action="">

                                    <div class="manufacturer-block">

                                        <a class="manufacture-btn" role="button" data-toggle="collapse"
                                           href="#manufacture" aria-expanded="false" aria-controls="manufacture">
                                            <span class="arrow"></span> ПРОИЗВОДИТЕЛЬ
                                        </a>
                                        <div class="collapse" id="manufacture">

                                            <div class="manufacture-inner">

                                                <ul class="manufacture-overview">
                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Aako </label>
                                                    </li>

                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Aako </label>
                                                    </li>

                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Aako </label>
                                                    </li>

                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Aako </label>
                                                    </li>

                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Aako </label>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="manufacturer-block">

                                        <a class="manufacture-btn" role="button" data-toggle="collapse"
                                           href="#facture-block" aria-expanded="false" aria-controls="facture-block">
                                            <span class="arrow"></span> Фактура материала
                                        </a>
                                        <div class="collapse" id="facture-block">

                                            <div class="manufacture-inner">

                                                <ul class="manufacture-overview">
                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Кружевной </label>
                                                    </li>

                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Текстильный </label>
                                                    </li>

                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Трикотажный </label>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="manufacturer-block">

                                        <a class="manufacture-btn" role="button" data-toggle="collapse"
                                           href="#cvet-block" aria-expanded="false" aria-controls="cvet-block">
                                            <span class="arrow"></span> Цвет
                                        </a>
                                        <div class="collapse" id="cvet-block">

                                            <div class="cvet-inner">

                                                <ul class="cvet-overview">

                                                    <li class="cvet-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> <span title="Абрикосовый"
                                                                                               style="background: #FBCEB1"></span>
                                                        </label>
                                                    </li>
                                                    <li class="cvet-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> <span title="Абрикосовый"
                                                                                               style="background: #FBCEB1"></span>
                                                        </label>
                                                    </li>
                                                    <li class="cvet-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> <span title="Абрикосовый"
                                                                                               style="background: #FBCEB1"></span>
                                                        </label>
                                                    </li>
                                                    <li class="cvet-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> <span title="Абрикосовый"
                                                                                               style="background: #FBCEB1"></span>
                                                        </label>
                                                    </li>
                                                    <li class="cvet-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> <span title="Абрикосовый"
                                                                                               style="background: #FBCEB1"></span>
                                                        </label>
                                                    </li>
                                                    <li class="cvet-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> <span title="Абрикосовый"
                                                                                               style="background: #FBCEB1"></span>
                                                        </label>
                                                    </li>
                                                    <li class="cvet-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> <span title="Абрикосовый"
                                                                                               style="background: #FBCEB1"></span>
                                                        </label>
                                                    </li>
                                                    <li class="cvet-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> <span title="Абрикосовый"
                                                                                               style="background: #FBCEB1"></span>
                                                        </label>
                                                    </li>
                                                    <li class="cvet-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> <span title="Абрикосовый"
                                                                                               style="background: #FBCEB1"></span>
                                                        </label>
                                                    </li>
                                                    <li class="cvet-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> <span title="Абрикосовый"
                                                                                               style="background: #FBCEB1"></span>
                                                        </label>
                                                    </li>
                                                    <li class="cvet-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> <span title="Абрикосовый"
                                                                                               style="background: #FBCEB1"></span>
                                                        </label>
                                                    </li>
                                                    <li class="cvet-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> <span title="Абрикосовый"
                                                                                               style="background: #FBCEB1"></span>
                                                        </label>
                                                    </li>


                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="manufacturer-block">

                                        <a class="manufacture-btn" role="button" data-toggle="collapse"
                                           href="#size-block" aria-expanded="false" aria-controls="size-block">
                                            <span class="arrow"></span> Размер
                                        </a>
                                        <div class="collapse" id="size-block">

                                            <div class="manufacture-inner">

                                                <ul class="size-inner-blocks">

                                                    <li class="size-li">
                                                        <input type="checkbox" name="aako" value="1" id="size1">
                                                        <label class="check" for="size1"> L </label>
                                                    </li>

                                                    <li class="size-li">
                                                        <input type="checkbox" name="aako" value="1" id="size1">
                                                        <label class="check" for="size1"> M </label>
                                                    </li>

                                                    <li class="size-li">
                                                        <input type="checkbox" name="aako" value="1" id="size1">
                                                        <label class="check" for="size1"> S </label>
                                                    </li>

                                                    <li class="size-li">
                                                        <input type="checkbox" name="aako" value="1" id="size1">
                                                        <label class="check" for="size1"> XL </label>
                                                    </li>

                                                    <li class="size-li">
                                                        <input type="checkbox" name="aako" value="1" id="size1">
                                                        <label class="check" for="size1"> XS </label>
                                                    </li>

                                                    <li class="size-li">
                                                        <input type="checkbox" name="aako" value="1" id="size1">
                                                        <label class="check" for="size1"> XXL3 </label>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="manufacturer-block">

                                        <a class="manufacture-btn" role="button" data-toggle="collapse"
                                           href="#obhvat-grudi" aria-expanded="false" aria-controls="obhvat-grudi">
                                            <span class="arrow"></span> Обхват груди
                                        </a>
                                        <div class="collapse" id="obhvat-grudi">

                                            <div class="manufacture-inner">

                                                <ul class="manufacture-overview">
                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Кружевной </label>
                                                    </li>

                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Текстильный </label>
                                                    </li>

                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Трикотажный </label>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="manufacturer-block">

                                        <a class="manufacture-btn" role="button" data-toggle="collapse"
                                           href="#razmer-chashki" aria-expanded="false" aria-controls="razmer-chashki">
                                            <span class="arrow"></span> Размер чашечки
                                        </a>
                                        <div class="collapse" id="razmer-chashki">

                                            <div class="manufacture-inner">

                                                <ul class="manufacture-overview">
                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Кружевной </label>
                                                    </li>

                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Текстильный </label>
                                                    </li>

                                                    <li class="manufacture-li">
                                                        <input type="checkbox" name="aako" value="aako" id="aako">
                                                        <label class="check" for="aako"> Трикотажный </label>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="manufacturer-block">

                                        <a class="manufacture-btn" role="button" data-toggle="collapse"
                                           href="#price-slider" aria-expanded="false" aria-controls="price-slider">
                                            <span class="arrow"></span> Розничная цена
                                        </a>
                                        <div class="collapse" id="price-slider">

                                            <div class="slider-inner">


                                                <div class="price-slider-values">
                                                    <div class="price-values-inner1">
                                                        <label> от </label>
                                                        <input type="text" placeholder="0" value>
                                                    </div>
                                                    <div class="price-values-inner2">
                                                        <label> до </label>
                                                        <input type="text" placeholder="259000" value>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="reset-btn">
                                        <input type="button" name="reset-filter" value="Сбросить"
                                               class="reset-filter-btn">
                                    </div>


                                </form>

                            </div>

                        </div>


                    </div>

                    <div class="col-sm-9 no-padding-right">

                        <div class="catalog-banner"></div>

                        <div class="subscription-panel"></div>

                        <div class="row" style="margin: 0">


                            <div class="title col-sm-12"><h2> Каталог </h2></div>

                            <div class="block-pagination col-sm-12"></div>

                            <div class="col-sm-12 sm-no-padding">

                                <div class="row">

                                    <div class="products-list">


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="one-item">

                                                        <div class="item-top">
                                                            <a href="?action=item" class="clearfix">
                                                                <img class="img-responsive"
                                                                     src="<?php bloginfo('template_url') ?>/img/swiper1.jpg">

                                                            </a>

                                                            <span class="item-discount">
                                                        <span class="inner-discount"> -5% </span>
                                                    </span>

                                                        </div>

                                                        <div class="item-bottom">
                                                            <div class="info clearfix">
                                                                <div class="name">
                                                                    <a><p>Rare</p></a>
                                                                    <p><i>Perfect Coverage Bra </i></p>
                                                                </div>
                                                                <div class="price">
                                                                    <p class="item-price">9 405 руб.</p>

                                                                    <p class="item-price-old">9 900 руб.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="one-item">

                                                        <div class="item-top">
                                                            <a href="?action=item" class="clearfix">
                                                                <img class="img-responsive"
                                                                     src="<?php bloginfo('template_url') ?>/img/swiper1.jpg">

                                                            </a>

                                                            <span class="item-discount">
                                                        <span class="inner-discount"> -5% </span>
                                                    </span>

                                                        </div>

                                                        <div class="item-bottom">
                                                            <div class="info clearfix">
                                                                <div class="name">
                                                                    <a><p>Rare</p></a>
                                                                    <p><i>Perfect Coverage Bra </i></p>
                                                                </div>
                                                                <div class="price">
                                                                    <p class="item-price">9 405 руб.</p>

                                                                    <p class="item-price-old">9 900 руб.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="one-item">

                                                        <div class="item-top">
                                                            <a href="?action=item" class="clearfix">
                                                                <img class="img-responsive"
                                                                     src="<?php bloginfo('template_url') ?>/img/swiper1.jpg">

                                                            </a>

                                                            <span class="item-discount">
                                                        <span class="inner-discount"> -5% </span>
                                                    </span>

                                                        </div>

                                                        <div class="item-bottom">
                                                            <div class="info clearfix">
                                                                <div class="name">
                                                                    <a><p>Rare</p></a>
                                                                    <p><i>Perfect Coverage Bra </i></p>
                                                                </div>
                                                                <div class="price">
                                                                    <p class="item-price">9 405 руб.</p>

                                                                    <p class="item-price-old">9 900 руб.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="one-item">

                                                        <div class="item-top">
                                                            <a href="?action=item" class="clearfix">
                                                                <img class="img-responsive"
                                                                     src="<?php bloginfo('template_url') ?>/img/swiper1.jpg">

                                                            </a>

                                                            <span class="item-discount">
                                                        <span class="inner-discount"> -5% </span>
                                                    </span>

                                                        </div>

                                                        <div class="item-bottom">
                                                            <div class="info clearfix">
                                                                <div class="name">
                                                                    <a><p>Rare</p></a>
                                                                    <p><i>Perfect Coverage Bra </i></p>
                                                                </div>
                                                                <div class="price">
                                                                    <p class="item-price">9 405 руб.</p>

                                                                    <p class="item-price-old">9 900 руб.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="one-item">

                                                        <div class="item-top">
                                                            <a href="?action=item" class="clearfix">
                                                                <img class="img-responsive"
                                                                     src="<?php bloginfo('template_url') ?>/img/swiper1.jpg">

                                                            </a>

                                                            <span class="item-discount">
                                                        <span class="inner-discount"> -5% </span>
                                                    </span>

                                                        </div>

                                                        <div class="item-bottom">
                                                            <div class="info clearfix">
                                                                <div class="name">
                                                                    <a><p>Rare</p></a>
                                                                    <p><i>Perfect Coverage Bra </i></p>
                                                                </div>
                                                                <div class="price">
                                                                    <p class="item-price">9 405 руб.</p>

                                                                    <p class="item-price-old">9 900 руб.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="one-item">

                                                        <div class="item-top">
                                                            <a href="?action=item" class="clearfix">
                                                                <img class="img-responsive"
                                                                     src="<?php bloginfo('template_url') ?>/img/swiper1.jpg">

                                                            </a>

                                                            <span class="item-discount">
                                                        <span class="inner-discount"> -5% </span>
                                                    </span>

                                                        </div>

                                                        <div class="item-bottom">
                                                            <div class="info clearfix">
                                                                <div class="name">
                                                                    <a><p>Rare</p></a>
                                                                    <p><i>Perfect Coverage Bra </i></p>
                                                                </div>
                                                                <div class="price">
                                                                    <p class="item-price">9 405 руб.</p>

                                                                    <p class="item-price-old">9 900 руб.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="one-item">

                                                        <div class="item-top">
                                                            <a href="?action=item" class="clearfix">
                                                                <img class="img-responsive"
                                                                     src="<?php bloginfo('template_url') ?>/img/swiper1.jpg">

                                                            </a>

                                                            <span class="item-discount">
                                                        <span class="inner-discount"> -5% </span>
                                                    </span>

                                                        </div>

                                                        <div class="item-bottom">
                                                            <div class="info clearfix">
                                                                <div class="name">
                                                                    <a><p>Rare</p></a>
                                                                    <p><i>Perfect Coverage Bra </i></p>
                                                                </div>
                                                                <div class="price">
                                                                    <p class="item-price">9 405 руб.</p>

                                                                    <p class="item-price-old">9 900 руб.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="one-item">

                                                        <div class="item-top">
                                                            <a href="?action=item" class="clearfix">
                                                                <img class="img-responsive"
                                                                     src="<?php bloginfo('template_url') ?>/img/swiper1.jpg">

                                                            </a>

                                                            <span class="item-discount">
                                                        <span class="inner-discount"> -5% </span>
                                                    </span>

                                                        </div>

                                                        <div class="item-bottom">
                                                            <div class="info clearfix">
                                                                <div class="name">
                                                                    <a><p>Rare</p></a>
                                                                    <p><i>Perfect Coverage Bra </i></p>
                                                                </div>
                                                                <div class="price">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php

get_footer();
