<?php
define( 'ACF_LITE', false );
include_once('advanced-custom-fields/acf.php');
//Убираем теги <p> у изображений
include_once('components/non_tag_p-image.php');
//Перевод ссылок
include_once('components/rus-to-lat.php');
//Оключаем Emoji
include_once('components/unlock_emoji.php');
//Настройки
include_once('components/settingsTwo.php');
//Редиректы
include_once('components/wp-simple-301-redirects.php');
//Классы меню
include_once('components/menu.php');


//Баннер
include_once('components/banners/banHome.php');
include_once('components/banners/counterBan.php');
//О продукте
include_once('components/product-advantage.php');
include_once('components/product-opportunities.php');
//Проекты
include_once('components/projects.php');
include_once('components/emblem-projects.php');
include_once('components/services-projects.php');