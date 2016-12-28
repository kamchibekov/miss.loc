<?php

/*
Plugin Name: Custom-shop
Plugin URI: ''
Description: Плагин интернет магазин
Version: 1.0
Author: Adilet Kamchibekov
Author URI: http://kamchibekov.esy.es
License: GPL2
*/


add_action( 'init', 'create_itemsVP' );
function create_itemsVP() {
    register_post_type( 'custom-shop',
        array(
            'labels' => array(
                'name' => 'Товары',
                'singular_name' => 'Товар',
                'add_new' => 'Добавить товар',
                'add_new_item' => 'Добавить новый товар',
                'edit' => 'Изменить',
                'edit_item' => 'Изменить товар',
                'new_item' => 'Новый товар',
                'view' => 'Просмотр',
                'view_item' => 'Просмотр товара',
                'search_items' => 'Поиск товара',
                'not_found' => 'Товара не найдена',
                'not_found_in_trash' => 'В корзине товара не найдено',
            ),
            'public' => true,
            'menu_position' => 10,
            'supports' => array( 'title', 'category' ),
            'taxonomies' => array( 'category' ),
            'menu_icon' => 'dashicons-cart',
            'rewrite' => array( 'slug' => 'product'),
            'has_archive' => true
        )
    );
}
function prefix_pre_get_posts($query) {
     if ($query->is_category) {
          $query->set('post_type', 'any');
     }
     return $query;
}
add_action('pre_get_posts', 'prefix_pre_get_posts');