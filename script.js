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

jQuery('.scroll_to').click(function(e){
    
        var jump = $(this).attr('about');
    
        var new_position = $(jump).offset();
    
        $('html, body').stop().animate({ scrollTop: new_position.top }, 1000);
    
        e.preventDefault();
    
    });
    
