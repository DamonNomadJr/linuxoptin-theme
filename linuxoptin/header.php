<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header>
        <div class="navbar navbar-dark navbar-expand-lg bg-dark">
            <a class="navbar-brand site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php the_custom_logo_url() ?>" width="30px" height="30px" class="d-inline-block align-top"/>
                    <?php bloginfo( 'name' ); ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php do_action('linuxoptin_main_navigation') ?>
        </div>
    </header>

    <div id="content" class="site-content">
