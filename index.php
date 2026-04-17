<?php
/**
 * Template principal (fallback)
 *
 * @package Nathalie_Mota
 */

get_header();
?>

<main id="main-content">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php
get_footer();