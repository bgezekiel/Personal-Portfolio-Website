$(window).on('scroll', function() {
    if($(window).scrollTop()) {
        $('nav').addClass('black');
    }
    else {
        $('nav').removeClass('black');
    }
})


$( document ).ready(function() {
    $('#js-navbar-toggle').click(function() {
        $('#js-menu').addClass('active')
      });
});

$('a[href^="#"]').on('click', function(event) {

    var target = $(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});