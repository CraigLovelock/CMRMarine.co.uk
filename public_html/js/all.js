$(function(){
    var shrinkHeader = 50;
    $(window).scroll(function() {
        var scroll = getCurrentScroll();
        if ( scroll >= shrinkHeader ) {
            $('header').addClass('scrolled');
        }
        else {
            $('header').removeClass('scrolled');
        }
    });
    function getCurrentScroll() {
        return window.pageYOffset;
    }

    $(".menu-icon").on('click', function(){
        $(".menu-icon").fadeOut(function(){
            $('.menu-close-icon').fadeIn();
        });
        $(".header .nav").addClass('visible');
    });

    $(".menu-close-icon").on('click', function(){
        $(".menu-close-icon").fadeOut(function(){
            $('.menu-icon').fadeIn();
        });
        $(".header .nav").removeClass('visible');
    });

});

//# sourceMappingURL=all.js.map
