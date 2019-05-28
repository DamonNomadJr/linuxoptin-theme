<?php

require 'inc/linuxoptin-template-hooks.php';
require 'inc/linuxoptin-template-functions.php';
require 'inc/linuxoptin-custom-functions.php';
require_once 'inc/linuxoptin-nav-walker.php';
require_once  'inc/linuxoptin-class-sidebar-widget.php';

if ( ! function_exists( 'linuxoptin_setup' ) ) :

    function linuxoptin_setup() {

        load_theme_textdomain( 'linuxoptin', get_template_directory() . '/languages' );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        add_theme_support(
            'custom-logo',
            array(
                'height'      => 50,
                'width'       => 50,
                'flex-width'  => false,
                'flex-height' => false,
                'class' => "d-inline-block align-top"
            )
        );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'main_menu' => esc_html__( 'Main Menu', 'linuxoptin' ),
                'user_control_menu' => esc_html('User Menu', 'linuxoptin')
        ));

        register_sidebar( array(
            'name'          => esc_html__( 'Sidebar', 'linuxoptin' ),
            'id'            => 'side-widgets',
            'description'   => esc_html__( 'Add widgets here.', 'linuxoptin' ),
            'before_widget' => '<div id="%1$s" class="card widget %2$s"><div class="card-body">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h3 class="card-title widget-title">',
            'after_title'   => '</h3>',
        ) );

    }
endif;

function linuxoptin_scripts() {
    wp_enqueue_style( 'linuxoptin-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri().'/css/bootstrap-grid.css');
//    wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri().'css/bootstrap-reboot.css');
    wp_enqueue_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js");
    wp_enqueue_script('bootstrap.js', get_template_directory_uri().'/js/bootstrap.js');
}

add_action( 'after_setup_theme', 'linuxoptin_setup' );

add_action( 'wp_enqueue_scripts', 'linuxoptin_scripts' );
