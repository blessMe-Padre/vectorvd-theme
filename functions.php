<?php

// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

// добавляет возможность выбрать кастомныи лого из админки
add_theme_support('custom-logo');

// добавляет возможность выбрать кастомныи лого из админки
add_theme_support('custom-logo');

// подключение и настройка меню через админку
// add_action('after_setup_theme', 'add_menu');

// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', ['post']);


function theme_add_scripts()
{
    // подключаем стили
    wp_enqueue_style('baguetteBox-css', get_template_directory_uri() . '/css/baguetteBox.min.css');
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.css');

    // подключаем основной файл стилей темы
    wp_enqueue_style('style', get_stylesheet_uri(), '', '1.0.3');

    //---------------------------------------------------------------------------------------------------------------------------------------------
    wp_enqueue_script('baguetteBox', get_template_directory_uri() .
        '/js/baguettebox.js', false, null, 'footer');

    wp_enqueue_script('swiper', get_template_directory_uri() .
        '/js/swiper-bundle.min.js', false, null, 'footer');

    wp_enqueue_script('smoothscroll', get_template_directory_uri() .
        '/js/smoothscroll.js', false, null, 'footer');

    wp_enqueue_script('wow', get_template_directory_uri() .
        '/js/wow.js', false, null, 'footer');

    wp_enqueue_script('my_video', get_template_directory_uri() . '/js/module/video.js');
    wp_localize_script('my_video', 'php_vars', array('home' => get_template_directory_uri()));


    wp_enqueue_script_module('main', get_theme_file_uri('/js/main.js'));
}


add_action('admin_menu', 'remove_default_menus');

function remove_default_menus()
{
    remove_menu_page('index.php');                  // Консоль
    // remove_menu_page('edit.php');                   // Записи
    remove_menu_page('upload.php');                 // Медиафайлы
    // remove_menu_page('edit.php?post_type=page');    // Страницы
    remove_menu_page('edit-comments.php');          // Комментарии
    remove_menu_page('themes.php');                 // Внешний вид
    // remove_menu_page('plugins.php');                // Плагины
    remove_menu_page('users.php');                  // Пользователи
    remove_menu_page('tools.php');                  // Инструменты 
    remove_menu_page('options-general.php');        // Настройки
    remove_menu_page('bvi');        // плагин для слабовидящих
    remove_menu_page('wp-dark-mode');        // темная тема
    // remove_menu_page('wpcf7');   // Contact form 7
    // remove_menu_page('aiowpsec');   // wp security
    // remove_menu_page('edit.php?post_type=acf-field-group');   // ACF Field Group
    // remove_menu_page('edit.php?post_type=filter-set');   // filters
}


if (function_exists('acf_add_options_page')) {

    acf_add_options_page(
        array(
            'page_title' => 'Редактирование информации и телефонов',
            'menu_title' => 'Телефоны и контакты',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        )
    );
}