(function() {
    window.Landing = {};

    $(window).load(function() {

        var contactPosition = $('#book').offset().top;

        $('#book_button').on('click', function(event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: contactPosition
            }, 400);
        });

    });
})();