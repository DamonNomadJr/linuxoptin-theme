<?php

//add_filter('nav_menu_css_class' , 'linuxoptin_main_menu_classes' , 10, 3);
//
//add_filter( 'nav_menu_link_attributes', 'linuxoptin_main_menu_link_classes', 10, 3 );

add_action( 'linuxoptin_main_navigation', 'linuxoptin_main_menu', 10);
add_action( 'linuxoptin_main_navigation', 'linuxoptin_user_control_menu', 20);
add_action( 'linuxoptin_main_navigation', 'linuxoptin_main_search', 30);