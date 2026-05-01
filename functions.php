<?php
/**
 * Fichier des fonctions du thème Nathalie Mota
 *
 * @package Nathalie_Mota
 */

// Sécurité : empêche l'accès direct au fichier
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Configuration de base du thème : supports et menus.
 */
function motaphoto_setup() {
    // Support du titre dynamique dans la balise <title>
    add_theme_support( 'title-tag' );

    // Support des images à la une (utile pour les photos plus tard)
    add_theme_support( 'post-thumbnails' );

    // Enregistrement du menu principal (configurable depuis l'admin WP)
    register_nav_menus( array(
        'main_menu' => __( 'Menu principal', 'motaphoto' ),
    ) );
}
add_action( 'after_setup_theme', 'motaphoto_setup' );

/**
 * Chargement des styles, polices et scripts du thème.
 * Respecte la bonne pratique WordPress : enqueue au lieu de hardcoder dans le <head>.
 */
function motaphoto_enqueue_assets() {

    // Google Fonts : Space Mono + Poppins
    wp_enqueue_style(
        'motaphoto-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap',
        array(),
        null
    );

    // Feuille de style principale du thème
    wp_enqueue_style(
        'motaphoto-style',
        get_stylesheet_uri(),
        array( 'motaphoto-google-fonts' ),
        wp_get_theme()->get( 'Version' )
    );

    // Script principal du thème (chargé en footer pour de meilleures perfs)
    wp_enqueue_script(
        'motaphoto-scripts',
        get_template_directory_uri() . '/js/scripts.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true // true = charge en bas de page (optimisation perf)
    );
}
add_action( 'wp_enqueue_scripts', 'motaphoto_enqueue_assets' );