$(document).ready(function() {

    var App = {};

    // Offscreen stuff
    if($('.offscreen').length) {
        $('#details').on('submit', function(event) {
            event.preventDefault();

            // Handle form data here
            $('.offscreen').show();

            // Fix for narrow screens
            window.scrollTo(0, 0);

            if(!$('.body').is(':animated')) {
                $('body > div').first().animate({
                    left: '-353px'
                }, 400);
            }
        });

        $('#subscribe').on('submit', function(event) {
            event.preventDefault();
            //
        });

        $(window).on('keyup', function(event) {
            if(event.keyCode == 27) {
                if(!$('.body').is(':animated')) {
                    $('body > div').first().animate({
                        left: ''
                    }, 200, function() {
                        $('.offscreen').hide();
                    });
                }
            }
        });
    }

    // Image overlap
    var columnHeights = [];

    App.ImageOverlays = function() {
        $('.main .col-md-4').each(function(i, el) {
            columnHeights.push($(el).height());
        });

        var longestColumnHeight = Math.max.apply(Math, columnHeights);

        return longestColumnHeight;
    }

    // On DOM ready, calculate the height
    if($(window).width() >= 992) {
        $('.col-img').css('min-height', App.ImageOverlays());
        var imgHeight = ($('.col-img img').height() / 2);
        $('.col-img img').css('margin-top', -imgHeight);
    }

    // On window resize, calculate the height
    var resizeTimer;

    $(window).on('resize', function() {

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(function() {
            if($(this).width() >= 992) {
                $('.col-img').css('min-height', App.ImageOverlays());
                $('.col-img img').css('margin-top', -imgHeight);
            } else {
                $('.col-img').css('min-height', '');
                $('.col-img img').css('margin-top', '');
            }
        }, 250);
    });
});