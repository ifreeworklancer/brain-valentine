import jquery from 'jquery';
import ScrollReveal from 'scrollreveal';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').click(function () {
        var menu = $('.menu');
        $(this).toggleClass('active');
        if (menu.is(':visible')) {
            menu.slideUp();
        } else {
            menu.slideDown();
        }
    });

    /**
     * Scroll link
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();

        var id = $(this).attr('href');

        if (id.length > 1) {

            var top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);

            $('.burger-menu').removeClass('active');
            $('.menu').slideUp();
        }
    });


    /**
     * Form
     */
    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parents('.form-group').addClass('in-focus');
        } else {
            $(this).parents('.form-group').removeClass('in-focus');
        }
    });

    /**
     * Modal
     */
    var modalFeedback = $('.custom-modal--feedback');
    var closeModal = $('.close-modal');
    var modalMask = $('.modal-mask');

    $('.open-modal-feedback').on('click', function (e) {
        e.preventDefault();
        $(modalFeedback).addClass('active');
        $(modalMask).addClass('active');
    });


    $(closeModal).on('click', function () {
        $(modalFeedback).removeClass('active');
        $(modalMask).removeClass('active');
    });


    $(modalMask).on('click', function () {
        $(modalFeedback).removeClass('active');
        $(modalMask).removeClass('active');
    });


    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });


   /**
     * Animate scroll
     */
    // ScrollReveal().reveal('.intro-item', {
    //     origin: 'left',
    //     delay: 400,
    //     distance: '200px',
    // });
    ScrollReveal().reveal('.cloud-1', {
        origin: 'left',
        delay: 1000,
        duration: 600,
        distance: '500px',
    });
    ScrollReveal().reveal('.cloud-2', {
        origin: 'left',
        delay: 1500,
        duration: 900,
        distance: '800px',
    });
    ScrollReveal().reveal('.cloud-3', {
        origin: 'right',
        delay: 1300,
        duration: 500,
        distance: '600px',
    });
    ScrollReveal().reveal('.cloud-4', {
        origin: 'left',
        delay: 1000,
        duration: 500,
        distance: '600px',
    });
    ScrollReveal().reveal('.cloud-5', {
        origin: 'right',
        delay: 1400,
        duration: 700,
        distance: '600px',
    });


})(jQuery)