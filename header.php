<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title><?php the_title() ?> | Ujin</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Dexploitdm">
    <meta name="theme-color" content="#2D3C3E">
    <link href="<?php  echo get_template_directory_uri() ?>/assets/build/css/core.css" rel="stylesheet">
	<script src="<?php  echo get_template_directory_uri() ?>/assets/build/js/vendor/jquery.js"></script>
    <?php  wp_head(); ?>

</head>
<body>
<header class="">
    <div class="header-layout box">
        <div class="logo">
           <p>
               <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/logo-jk.svg" title="ujin">
           </p>
        </div>
        <div class="u-menu">
            <ul class="u-menu-list">
                <li class="u-menu-list-item"><a href="#product-anchor">О продукте</a> </li>
                <li class="u-menu-list-item"><a href="#project-anchor">Наши проекты</a> </li>
                <li class="u-menu-list-item"><a href="#about-anchor">О нас</a> </li>
                <li class="u-menu-list-item"><a href="#contact-anchor">Контакты</a> </li>
            </ul>
        </div>
        <div class="call">
            <div class="call-set">
                <a href="#ordercall" class="call-link js-order-call">Заказать звонок</a>
            </div>
            <div class="call-phone">
                <a href="tel:8 800 775 05 19">8 800 775 05 19</a>
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
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/logo-jk.svg" title="ujin">
        </div>
        <ul class="u-menu-list">
              <li class="u-menu-list-item link-drawer"><a href="#product-anchor">О продукте</a> </li>
                <li class="u-menu-list-item link-drawer"><a href="#project-anchor">Наши проекты</a> </li>
                <li class="u-menu-list-item link-drawer"><a href="#about-anchor">О нас</a> </li>
                <li class="u-menu-list-item link-drawer"><a href="#contact-anchor">Контакты</a> </li>
        </ul>
    </div>
</header>
<main>