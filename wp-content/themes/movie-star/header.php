<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */

/**
 * Вывод настроек темы
 *
 * @link http://manual.unyson.io/en/latest/helpers/php.html#database
 */
// fw_get_db_customizer_option($option_id, $default_value = null);

/**
 * Вывод меню
 *
 * @link https://wp-kama.ru/function/wp_nav_menu
 */
// wp_nav_menu([
//  'theme_location' => 'primary
//]);

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=1170">
    <meta name="format-detection" content="telephone=no">

    <?php wp_head(); ?>
</head>

<body>
<header class="header">
    <!--<video width="100%" height="614px" preload="auto" autoplay="autoplay"-->
    <!--loop="loop" poster="img/header-slide.jpg">-->
    <!--<source src="video/bg2.mp4" type="video/mp4"></source>-->
    <!--</video>-->
    <div class="container">
        <div class="header__logo">
            <a href="/">
                <img src="<?php bloginfo('template_directory'); ?>/img/header-logo.png" alt="">
            </a>
        </div>
        <div class="header__menu">
            <a href="#" class="menu-link">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <span>меню</span>
            </a>

            <ul>
                <li><a href="#">О нас</a></li>
                <li><a href="#go_portfolio" class="SmothtoScroll">Портфолио</a></li>
                <li><a href="#go_services" class="SmothtoScroll">Услуги</a></li>
                <li><a href="#go_shares" class="SmothtoScroll">Акции</a></li>
                <li><a href="http://movie-star/wigs/">Парики</a></li>
                <li><a href="#go_contacts" class="SmothtoScroll">Контакты</a></li>
            </ul>
        </div>
        <div class="header__contacts">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>Самара, пр-т Масленникова, д.8</span>
            <i class="fa fa-phone" aria-hidden="true"></i>
            <a href="tel:846 334-07-33">(846) 334-07-33</a>
        </div>

        <div class="header__social">
            <a href="http://vk.com" target="_blank">
                <i class="fa fa-vk" aria-hidden="true"></i>
            </a>
            <a href="http://instagram.com" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </div>
        <div class="header__content">
            <h1>Салон красоты Кинозвезда</h1>
            <h2>делаем Вас красивыми уже 17 лет</h2>
            <button>Онлайн запись</button>
        </div>
    </div>
</header>

