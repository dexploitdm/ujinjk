<?php

add_action( 'init', 'true_register_post_type_init_partners' ); // Использовать функцию только внутри хука init

function true_register_post_type_init_partners() {
    $labels = array(
        'name' => 'Партнеры',
        'singular_name' => 'элемент', // админ панель Добавить->Функцию
        'add_new' => 'Добавить партнера',
        'add_new_item' => 'Добавить нового партнера', // заголовок тега <title>
        'edit_item' => 'Редактировать партнера',
        'new_item' => 'Новый партнер',
        'all_items' => 'Все партнеры',
        'view_item' => 'Просмотр партнера на сайте',
        'search_items' => 'Искать партнера',
        'not_found' =>  'партнеров не найдено.',
        'not_found_in_trash' => 'В корзине нет партнеров.',
        'menu_name' => 'Партнеры' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
        'menu_position' => 20, // порядок в меню
        'supports' => array( 'title', 'thumbnail')
    );
    register_post_type('partners', $args);
}
