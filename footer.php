<?php
/**
 * Pied de page du site Nathalie Mota.
 *
 * @package Nathalie_Mota
 */
?>
</div><!-- /.site-content -->

<footer class="site-footer">
    <div class="site-footer__inner">

        <a href="<?php echo esc_url( home_url( '/mentions-legales' ) ); ?>" class="site-footer__link">Mentions légales</a>

        <a href="<?php echo esc_url( home_url( '/politique-de-confidentialite' ) ); ?>" class="site-footer__link">Vie privée</a>

        <span class="site-footer__copy">Tous droits réservés</span>

    </div>
</footer>

<?php get_template_part( 'templates_parts/modal-contact' ); ?>

<?php wp_footer(); ?>

</body>
</html>