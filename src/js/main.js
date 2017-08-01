$(document).ready(function() {

    // Toggle menu.
    $('.navbar-toggle').on('click', function(e){
        e.preventDefault();
        $('.menu').toggleClass('active');
        $(this).find('i').toggleClass('active');
    });

    // Toggle submenu.
    $('.menu-item-has-children a').on('click', function(e){
        e.preventDefault();
        $(this).parent().find('.submenu').toggleClass('active');
        $(this).parent().find('i').toggleClass('active');
    });


    // Slick

    $('.slide-container').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 800,
        adaptiveHeight: true,

        arrows: true,
        appendArrows: $('.slide-arrows'),
        prevArrow: '<button><i class="material-icons md-48">keyboard_arrow_left</i></button>',
        nextArrow: '<button><i class="material-icons md-48">keyboard_arrow_right</i></button>',

        dots: true,
        appendDots: $('.slide-dots')
    });

});
