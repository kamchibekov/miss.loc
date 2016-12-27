<?php
/**
 * Created by PhpStorm.
 * User: kamch
 * Date: 12/25/2016
 * Time: 12:48 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--  <link rel="shortcut icon" type="image/x-icon" href="<?php // bloginfo('template_url') ?>/img/favicon.ico"> -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Miss Shop</title>

    <!-- Bootstrap -->
    <!--
    <link href="<?php // bloginfo('template_url') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php // bloginfo('stylesheet_url') ?>" rel="stylesheet">
    <link href="<?php // bloginfo('template_url') ?>/css/font-awesome.min.css" rel="stylesheet">
    -->
    <!-- Owl-Carousel -->

    <!--
    <link rel="stylesheet" href="<?php // bloginfo('template_url') ?>/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php // bloginfo('template_url') ?>/owlcarousel/css/owl.theme.default.min.css">
    -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body>

<header id="header">

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-md-6 center-div">
                        <div class="logo">
                            <a href="/">
                                <img class="logo-miss" src="<?php bloginfo('template_url') ?>/img/miss_header_logo.png" title="Miss shop" alt="Miss shop">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 left-div">
                        <div class="wrap-phone">
                            <div class="title">
                                Заказ на сайте и по телефону
                            </div>
                            <div class="phone">
                                <p>8 (495) 988-46-18</p>

                                <p>8 (495) 988-46-18 <i>Круглосуточно</i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 sm-no-rgiht-padding">
                <div class="search">
                    <form action="">
                        <input title="Искать" type="text" class="search-field" autocomplete="off" name="search"
                               maxlength="50">

                        <div class="search-btn">
                            <button class="search-field-btn" type="submit">Найти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Меню -->


    <div class="container adi">
        <div class="row">
            <nav class="navbar navbar-default">


                <!-- Mega menu  Begin!-->

                <?php //  wp_nav_menu( array( 'theme_location'	=> 'miss-menu', 'depth' => 1, 'container' => false) ); ?>


                <!-- Mega menu end!-->


                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse my-nav navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="?action=page"> <span> Джемперы и кардиганы </span> </a></li>
                        <li><a href="?action=page"><span> Нижнее белье </span></a></li>
                        <li><a href="?action=page"><span> Обувь </span></a></li>
                        <li><a href="?action=page"><span> Платья </span></a></li>
                        <li><a href="?action=page"><span> Футболки и блузки </span></a></li>
                        <li><a href="?action=page"><span> Бренды </span></a></li>
                        <li><a href="?action=page"><span> Распродажа </span></a></li>
                        <li><a href="?action=page"><span> Доставка и оплата </span></a></li>
                        <li><a href="?action=page"><span> О магазине </span></a></li>
                    </ul>
                </div>


            </nav>
        </div>
    </div>


    <!-- Меню end -->


</header>

<main id="content" class="content">

    <div class="brands hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <span>Бренды по алфавиту:</span>
                </div>

                <div class="col-sm-9">
                    <div class="block-alpha">
                        <ul>
                            <li><span>A</span></li>
                            <li><span>B</span></li>
                            <li><span>C</span></li>
                            <li><span>D</span></li>
                            <li><span>E</span></li>
                            <li><span>F</span></li>
                            <li><span>G</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="all-brands">
                        <a href="?action=brands"> Все </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

