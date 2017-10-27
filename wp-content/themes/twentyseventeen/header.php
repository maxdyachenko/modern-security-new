<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/wp-content/themes/twentyseventeen/assets/styles/main.css">
    <link rel="stylesheet" href="/wp-content/themes/twentyseventeen/assets/styles/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/wp-content/themes/twentyseventeen/assets/scripts/libs/slick/slick/slick.css">
    <?php wp_head(); ?>
</head>
<body  <?php body_class(); ?> >

<div class="mobile-menu">
    <i class="fa fa-2x fa-bars" aria-hidden="true"></i>
</div>
<aside>
    <div id="content">
        <!--content block for slimscroll-->

        <div class="logo">
            <a href="<?= home_url(); ?>">
                <img src="/wp-content/themes/twentyseventeen/assets/images/logo.png" alt="Logo">
            </a>
        </div>
        <!-- list of cities -->
        <?php    $citItem = array(
            'orderby'      => 'ID',
            'order'        => 'ASC',
            'taxonomy'     => 'category',
            'exclude'      => array(5,6,7)
        ); ?>

        <?php $cities = get_categories( $citItem ); ?>

        <div class="menu-city-container">
            <div class="toggler">
                <p class="selected curplace">г. Москва</p>
                <i></i>
            </div>
            <div class="dropdown dropdown-city" >
                <ul class="choice-sity">
                <?php if($cities) {
                    foreach ($cities as $city) {  ?>
                        <li class="dropdown-item">
                            <a href="#"><?php echo $city->name ?></a>
                        </li>
                 <?php   }
                } ?>
                </ul>
            </div>
<!--            <select name="sources" id="sources" class="custom-select sources"  placeholder="г. Москва">-->
<!--                --><?php //if($cities) {
//                    foreach ($cities as $city) {  ?>
<!--                        <option value="--><?//= $city->name_ID ?><!--">--><?//= $city->name?><!--</option>-->
<!--                --><?php //} } ?>
<!--            </select>-->
        </div>

        <div class="menu-items menu-items-1">
            <?php wp_nav_menu('menu=head'); ?>
        </div>

        <div class="menu-items menu-items-2">
            <?php wp_nav_menu('menu=un_head'); ?>
        </div>

        <div class="menu-items menu-items-3">
            <ul>
                <li class="menu-item menu-item-3">
                    <a href="#">Оплата услуг</a>
                </li>
            </ul>
        </div>

        <div class="social-group">
            <div class="icon">
                <a href="#">
                    <i class="fa fa-vk" aria-hidden="true"></i>
                </a>
            </div>
            <div class="icon">
                <a href="#">
                    <i class="fa fa-telegram" aria-hidden="true"></i>
                </a>
            </div>
            <div class="icon">
                <a href="#">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
            </div>
            <div class="icon">
                <a href="#">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>

                </a>
            </div>
            <div class="icon">
                <a href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
            <div class="icon">
                <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <div class="square-buttons-container">
            <div class="square-button">
                <p>
                    Рассчитать стоимость банкротства
                </p>
            </div>
            <div class="square-button">
                <p>
                    получить консультацию бесплатно
                </p>
            </div>
        </div>

        <div class="number-container">
            <p class="number">8 800 502-24-85</p>
            <p class="number-text">Звонок бесплатный по РФ</p>
        </div>

    </div>
</aside>
}