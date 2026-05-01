/**
 * Scripts du thème Nathalie Mota.
 */

document.addEventListener('DOMContentLoaded', function () {

    /* =========================================================================
       BURGER MENU MOBILE
       ========================================================================= */
    const burger      = document.querySelector('.burger');
    const mobileMenu  = document.querySelector('.mobile-menu');
    const closeBtn    = document.querySelector('.mobile-menu__close');

    if (burger && mobileMenu) {

        // Ouverture du menu mobile
        burger.addEventListener('click', function () {
            mobileMenu.classList.add('is-open');
            burger.setAttribute('aria-expanded', 'true');
            mobileMenu.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        });

        // Fermeture du menu mobile
        if (closeBtn) {
            closeBtn.addEventListener('click', function () {
                mobileMenu.classList.remove('is-open');
                burger.setAttribute('aria-expanded', 'false');
                mobileMenu.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            });
        }

        // Fermeture du menu si on clique sur un lien
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                mobileMenu.classList.remove('is-open');
                burger.setAttribute('aria-expanded', 'false');
                mobileMenu.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            });
        });
    }

    /* =========================================================================
       MODALE DE CONTACT
       ========================================================================= */
    const modal        = document.getElementById('contact-modal');
    const modalClose   = modal ? modal.querySelector('.contact-modal__close') : null;
    const modalOverlay = modal ? modal.querySelector('.contact-modal__overlay') : null;

    function openContactModal() {
        if (!modal) return;
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeContactModal() {
        if (!modal) return;
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    // Écoute tous les liens pointant vers #contact
    const contactTriggers = document.querySelectorAll('a[href="#contact"], a[href*="#contact"]');

    contactTriggers.forEach(function (trigger) {
        trigger.addEventListener('click', function (event) {
            event.preventDefault();
            openContactModal();
        });
    });

    // Fermeture via la croix
    if (modalClose) {
        modalClose.addEventListener('click', closeContactModal);
    }

    // Fermeture via l'overlay
    if (modalOverlay) {
        modalOverlay.addEventListener('click', closeContactModal);
    }

    // Fermeture via Escape
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && modal && modal.classList.contains('is-open')) {
            closeContactModal();
        }
    });

});