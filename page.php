<?php
/**
 * Template pour l'affichage des pages standards (ex: "À propos").
 *
 * @package Nathalie_Mota
 */

get_header();
?>

<main id="main-content">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title( '<h1>', '</h1>' );
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php
get_footer();