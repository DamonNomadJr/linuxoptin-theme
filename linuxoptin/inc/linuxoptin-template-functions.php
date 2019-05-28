<?php

/**
 * @linuxoptin_main_navigation
 * Main menu registration
 */
if ( ! function_exists('linuxoptin_main_menu') ){

    function linuxoptin_main_menu(){

        wp_nav_menu(array(
                'theme_location'    => 'main_menu',
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbarNav',
                'menu_class'        => 'navbar-nav mr-auto',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            =>  new WP_Bootstrap_Navwalker()));
    }

}

/**
 * @linuxoptin_main_navigation
 * User menu registration
 */

if ( ! function_exists('linuxoptin_user_control_menu') ){

    function linuxoptin_user_control_menu(){

        wp_nav_menu(array(
            'theme_location'    => 'user_control_menu',
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarNav',
            'menu_class'        => 'navbar-nav flex-row ml-md-auto d-none d-md-flex',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            =>  new WP_Bootstrap_Navwalker()));
    }

}

/**
 * @linuxoptin_main_navigation
 * Search bar registration
 */

if ( ! function_exists('linuxoptin_main_search')){

    function linuxoptin_main_search(){
        ?>
            <form class="form-inline" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                       placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                       value="<?php echo get_search_query() ?>" name="s"
                       title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">
                    Search
                </button>
            </form>
        <?php
    }

}









if (! function_exists('linuxoptin_main_menu_classes')){

    function linuxoptin_main_menu_classes($classes, $item){
        $classes[] = "nav-item";
        return $classes;
    }

}

if (! function_exists('linuxoptin_main_menu_link_classes')) {

    function linuxoptin_main_menu_link_classes($atts, $item, $args){
        // check if the item is set to target="_blank"
        if ( $item->target == '_blank' ) {
            // add the desired attributes:
            $atts['class'] = 'target-blank';
        }
        $atts['class'] = 'nav-link';
        return $atts;
    }
}