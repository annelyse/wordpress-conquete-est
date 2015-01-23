<?php

/**
 * Plugin Name: Slider LPWD
 * Description: Le slider du siècle, mec!
 * Version: 0.1
 * Author: LPWD
 * License: BSD
 */

/**
 *
 * Demande à wordpress d'initialiser le plugin
 *
 */
add_action('init', 'lpwdsliders_init');

/**
 *
 * Initialise le plugin
 *
 */
function lpwdsliders_init()
{
    register_post_type(
        'slide',
        array(
            'public' => true, // Rend éditable ce type de post depuis le BO
            'label' => 'Slides', // Titre dans le menu du BO
            'labels' => array(
                
                'menu_name' => 'Slider',
                'all_items' => 'Voir tous les slides',
                'name' => 'Liste des slides',
                'name_admin_bar' => 'Ajouter un slide',
                'singular_name' => 'slide',
                'add_new' => 'Ajouter un slide',
                'add_new_item' =>'Titre du slide',
                'edit_item' => 'Ajouter un autre slide',
                'view_item' => 'Voir slide',
                'search_items' => 'Chercher un slide',
                'not_found' => 'Aucun slide',
                'not_found_in_trash' => 'Aucun slide dans la corbeille',
            ),
            'capability' => 'post', // même permission que pour un post
            'supports' => array( // les données qui composent un slide
                'title',
                'thumbnail',
            ),
            'publicity_queryable' => false, // désactive le lien
        )
    );

    add_image_size(
        'slider', // nom du type d'image
        800, // largeur
        150, // hauteur
        true // crop de l'image
    );
}

/**
 *
 * Affiche le slider
 *
 */
function lpwdsliders_show($limit = 6)
{
    wp_enqueue_script(
        'bjqs',
        plugins_url().'/lpwd-sliders/basic-jquery-slider/js/bjqs-1.3.js',
        array(
            'jquery',
        ),
        '1.3',
        true
    );

    wp_enqueue_style(
        'bjqs',
        plugins_url().'/lpwd-sliders/basic-jquery-slider/bjqs.css',
        array(),
        '1.3',
        'all'
    );

    add_action(
        'wp_footer',
        'lpwdsliders_runbjqs',
        30
    );

    // récupère les slides
    $slides = new WP_Query('post_type=slide&posts_per_page='.$limit);
    $pluginPath = __DIR__;

    include $pluginPath.'/slides.php';
}

function lpwdsliders_runbjqs()
{
    include __DIR__.'/run.php';
}
