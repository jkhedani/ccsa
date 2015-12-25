jQuery(document).ready(function($) {

    /**
     * Trigger subscribe container
     */
    $('li#menu-item-537').on('click', function() {
        var subscribeState = $('.subscribe-form').attr('data-state');
        if ( subscribeState === "open" ) {
            $('.subscribe-form').attr('data-state','closed');
            // Fade in content
            setTimeout(function() {
                $('.subscribe-form form').fadeOut();
            },500);
            // Slide the site header
            $('.site-header').css('top','0px');
            // Subscribe form
            $('.subscribe-form').css('height','00px');
        } else if ( subscribeState === "closed" ) {
            $('.subscribe-form').attr('data-state','open');
            // Slide the site header
            $('.site-header').css('top','150px');
            // Subscribe form
            $('.subscribe-form').css('height','150px');
            // Fade in content
            setTimeout(function() {
                $('.subscribe-form form').fadeIn();
            },500);
        }
    });

});
