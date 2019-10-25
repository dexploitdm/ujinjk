<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title><?php the_title() ?> | Ujin</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Dexploitdm | Дмитрий Паршаков">
    <meta name="theme-color" content="#2D3C3E">
    <link href="<?php  echo get_template_directory_uri() ?>/assets/build/css/core.css" rel="stylesheet">
    <?php  wp_head(); ?>

</head>
<body>
<header class="">
    <div class="header-layout box">
        <div class="logo">
           <a href="<?php echo get_site_url(); ?>/">
               <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/logo.svg" title="ujin">
           </a>
        </div>
        <div class="u-menu">
            <ul class="u-menu-list">
                <li class="u-menu-list-item"><a href="#">О продукте</a> </li>
                <li class="u-menu-list-item"><a href="#">Наши проекты</a> </li>
                <li class="u-menu-list-item"><a href="#">О нас</a> </li>
                <li class="u-menu-list-item"><a href="#">Контакты</a> </li>
            </ul>
        </div>
        <div class="call">
            <div class="call-set">
                <a href="http://localhost:3000/#" class="call-link">Заказать звонок</a>
            </div>
            <div class="call-phone">
                <a href="http://localhost:3000/#">8 800 775 05 19</a>
            </div>
        </div>
        <div class="drawer-btn js-open-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="drawer-menu">
        <div class="logo">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/logo.svg" title="ujin">
        </div>
        <ul class="u-menu-list">
            <li class="u-menu-list-item"><a href="#">О продукте</a> </li>
            <li class="u-menu-list-item"><a href="#">Наши проекты</a> </li>
            <li class="u-menu-list-item"><a href="#">О нас</a> </li>
            <li class="u-menu-list-item"><a href="#">Контакты</a> </li>
        </ul>
    </div>
</header>
<main>