$(document).ready(function() {

    // Skip content
    $('.skip-content').on('focusin', function(){
        $(this).toggleClass('active');
    }).on('focusout', function() {
        $(this).toggleClass('active');
    });

    // Toggle menu.
    $('.navbar-toggle').on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $('.menu').toggleClass('active');
    });

    // Toggle submenu.
    $('.menu-item-has-children > a').on('click', function(e){
        e.preventDefault();
        $(this).parent().find('.sub-menu').toggleClass('active');
        $(this).parent().toggleClass('active');
    });


    // Slick Slider
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
