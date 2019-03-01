$(window).on('scroll', function() {
    if($(window).scrollTop()) {
        $('nav').addClass('black');
    }
    else {
        $('nav').removeClass('black');
    }
})


$( document ).ready(function() {
    $('#js-navbar-toggle').on('click', function() {
        $('#js-menu').addClass('active')
      });
});

$( document ).ready(function() {
    $('#js-menu').on('click', function() {
        $('#js-menu').removeClass('active');
        });
    });
