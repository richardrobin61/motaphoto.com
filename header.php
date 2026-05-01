<?php
/**
 * En-tête du site Nathalie Mota.
 *
 * @package Nathalie_Mota
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="site-header__inner">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo" aria-label="Accueil - Nathalie Mota">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Logo.svg' ); ?>" alt="Nathalie Mota">
        </a>

        <nav class="site-header__nav" aria-label="Menu principal">

            <?php
            wp_nav_menu( array(
                'theme_location' => 'main_menu',
                'menu_class'     => 'main-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ) );
            ?>

            <button class="burger" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="mobile-menu">
                <span class="burger__bar"></span>
                <span class="burger__bar"></span>
            </button>

        </nav>

    </div>

    <div class="mobile-menu" id="mobile-menu" aria-hidden="true">
        <button class="mobile-menu__close" aria-label="Fermer le menu">&times;</button>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'main_menu',
            'menu_class'     => 'mobile-menu__list',
            'container'      => false,
            'fallback_cb'    => false,
        ) );
        ?>
    </div>

</header>

<div class="site-content">