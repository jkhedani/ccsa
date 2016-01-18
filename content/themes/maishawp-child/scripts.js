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
            $('.subscribe-form').css('height','0px');
            $('.subscribe-form').css('padding','0px');
        } else if ( subscribeState === "closed" ) {
            $('.subscribe-form').attr('data-state','open');
            // Slide the site header
            $('.site-header').css('top','375px');
            // Subscribe form
            $('.subscribe-form').css('height','375px');
            $('.subscribe-form').css('padding','40px 20%');
            // Fade in content
            setTimeout(function() {
                $('.subscribe-form form').fadeIn();
            },500);
        }
    });

    /**
     * Show Hidden Fields
     */
    $('input[name="volunteer"]').on('click', function() {
        if ( $(this).prop('checked') ) {
            $('body').find('#form-subscribe').hide();
            $('body').find('.wpcf7').show();
        } else {
            $('body').find('#form-subscribe').show();
            $('body').find('.wpcf7').hide();
        }
    });

    /**
     * Staff Bio
     */
    if ( $('body').hasClass('page-template-staff-page') ) {
        $('.member').on('click', function() {
            $(this).find('.content').show();
        });
    }


});
