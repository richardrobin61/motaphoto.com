<?php
/**
 * Modale de contact - Template part
 *
 * @package Nathalie_Mota
 */
?>

<div class="contact-modal" id="contact-modal" aria-hidden="true" role="dialog" aria-labelledby="contact-modal-title">

    <div class="contact-modal__overlay" aria-hidden="true"></div>

    <div class="contact-modal__inner">

        <div class="contact-modal__banner" aria-hidden="true">
            <span class="contact-modal__banner-text">CONTACTCONTACTCONTACTCONTACTCONTACT</span>
            <span class="contact-modal__banner-text">CONTACTCONTACTCONTACTCONTACTCONTACT</span>
        </div>

        <div class="contact-modal__form">
            <h2 id="contact-modal-title" class="sr-only">Formulaire de contact</h2>
            <?php echo do_shortcode( '[contact-form-7 id="bde52ef" title="Formulaire de contact Nathalie Mota"]' ); ?>
        </div>

    </div>

</div>