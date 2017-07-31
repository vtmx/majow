// Main
//$(window).on('load', function() {
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

});
