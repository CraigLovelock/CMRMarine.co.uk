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
        $('body').css('overflow', 'hidden');
    });

    $(".menu-close-icon").on('click', function(){
        $(".menu-close-icon").hide();
        $('.menu-icon').show();
        $(".header .nav").removeClass('visible');
        $('body').css('overflow', 'auto');
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
        $('body, html').animate({scrollTop: pos}, function(){
            $(".menu-close-icon").hide();
            $('.menu-icon').show();
            $(".header .nav").removeClass('visible');
            $('body').css('overflow', 'auto');
        });
    });

    $(".send-contact").on('click', function(e){
        e.preventDefault();
        $$ = $(this);
        $$form = $$.closest('form');
        $(".message-box").remove();
        $$.attr('disabled', true).val("Sending...");
        $.ajax({
            url: "/contact",
            type: "POST",
            data: $$.closest('form').serialize(),
            cache: false,
            success: function(data){
                $$.attr('disabled', false).val("Send message");
                /*console.log(data[0]['status']);
                if (data.status == "sent") {
                    $$.closest('form').fadeOut(function(){
                        $$form.after('<div class="object message-box success"><strong>Success!</strong><br />Thank you, we shall contact you as soon as possible.</div>');
                    });
                } else {
                    $$form.after('<div class="object message-box error"><strong>Oops!</strong><br />Looks like something went wrong, please email us directly or call.</div>');
                }*/
                $$.closest('form').fadeOut(function(){
                    $$form.after('<div class="object message-box success"><strong>Success!</strong><br />Thank you, we shall contact you as soon as possible.</div>');
                });
            },
            error: function(data) {
                $$.attr('disabled', false).val("Send message");
                $$form.after('<div class="object message-box error"><strong>There were validation errors.</strong><br />All fields are required, please check and re submit.</div>');
            }
        });
    });

});
