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
        $(".menu-icon").hide();
        $('.menu-close-icon').show();
        $(".header .nav").addClass('visible');
    });

    $(".menu-close-icon").on('click', function(){
        $(".menu-close-icon").hide();
        $('.menu-icon').show();
        $(".header .nav").removeClass('visible');
    });

    $(document).on('click', 'a[href^="#"]', function(e) {
        // target element id
        var id = $(this).attr('href');

        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }

        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();

        // top position relative to the document
        var pos = $(id).offset().top - 80;

        // animated top scrolling
        $('body, html').animate({scrollTop: pos});
    });

});

//# sourceMappingURL=all.js.map
