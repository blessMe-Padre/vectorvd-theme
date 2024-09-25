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
