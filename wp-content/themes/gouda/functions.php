<?php

function gouda_theme_support(){
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'gouda_theme_support');


function gouda_register_styles(){

    wp_enqueue_style('gouda-style', get_template_directory_uri() . '/style.css', array(), rand(111,9999), 'all');
    wp_enqueue_style('gouda-typekit', 'https://use.typekit.net/zhd3zme.css', array(), '1.0', 'all');
    wp_enqueue_style('gouda-lightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css', array(), '1.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'gouda_register_styles');

function gouda_menus(){

    $locations = array(
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'gouda_menus');



function gouda_register_scripts(){

    wp_enqueue_script('gouda-lightbox', 'https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js', array(), '1.0', true);
    wp_enqueue_script('gouda-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '1.0', true);
    wp_enqueue_script('gouda-main', get_template_directory_uri().'/assets/js/main.js', array('gouda-lightbox', 'gouda-aos'), '1.1', true);
}

add_action( 'wp_enqueue_scripts', 'gouda_register_scripts');

function gouda_widget_areas(){


    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Header Area',
            'id' => 'header-1',
            'description' => 'Header Widget Area'
        )
        );

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Current Day',
                'id' => 'current-day',
                'description' => 'Current Day Logo'
            )
            );

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Current Time',
                'id' => 'current-time',
                'description' => 'Current Time Logo'
            )
            );

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Header Tagline',
                'id' => 'header-end',
                'description' => 'Tagline for header'
            )
            );
        
        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'About Copy',
                'id' => 'about-copy',
                'description' => 'WYSIWYG copy for about section'
            )
            );

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => '',
                'class' => 'services__list-item',
                'name' => 'Services List',
                'id' => 'services-list',
                'description' => 'List of services offered'
            )
            );
        
        register_sidebar(
            array(
                'before_widget' => '<div class="work__list-wrap">',
                'after_widget' => '</div>',
                'name' => 'Work List',
                'id' => 'work-list',
                'description' => 'Sample Work'
            )
            );

        register_sidebar(
            array(
                'before_widget' => '',
                'after_wicget' => '',
                'name' => 'Bio List',
                'id' => 'bio-list',
                'description' => 'Employee Bios'
            )
            );
        
}

add_action('widgets_init', 'gouda_widget_areas');
