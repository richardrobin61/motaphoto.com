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
 * Chargement des styles et polices du thème.
 * Respecte la bonne pratique WordPress : enqueue au lieu de hardcoder dans le <head>.
 */
function motaphoto_enqueue_assets() {

    // Google Fonts : Space Mono + Poppins
    wp_enqueue_style(
        'motaphoto-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap',
        array(),
        null // pas de version pour Google Fonts
    );

    // Feuille de style principale du thème
    wp_enqueue_style(
        'motaphoto-style',
        get_stylesheet_uri(),
        array( 'motaphoto-google-fonts' ), // dépend de Google Fonts (chargé avant)
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'motaphoto_enqueue_assets' );