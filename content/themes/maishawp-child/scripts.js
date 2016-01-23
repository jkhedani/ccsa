jQuery(document).ready(function($) {

    /**
     * Initialize Popovers
     */
     $('[data-toggle="popover"]').popover()

    /**
     * Trigger subscribe container
     */
    $('a[href="#subscribe"]').on('click', function() {
        // console.log('adsf');
    });
    $('li#menu-item-537, li#menu-item-556, a[href="#subscribe"]').on('click', function(e) {
        e.preventDefault();

        // Scroll To Top
        window.scrollTo(0,0);

        // Toggle State
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
        // Show/Hide Form
        if ( $(this).prop('checked') ) {
            $('body').find('#form-subscribe').hide();
            $('body').find('.wpcf7').show();
        } else {
            $('body').find('#form-subscribe').show();
            $('body').find('.wpcf7').hide();
        }
        // Copy inputs from previous form
        $('input[name="first-name"]').val($('input[name="q1"]').val());
        $('input[name="last-name"]').val($('input[name="q2"]').val());
        $('input[name="your-email"]').val($('input[name="q3"]').val());
        $('input[name="your-zipcode"]').val($('input[name="q7"]').val());
    });

    /**
     * Use Label to check checkbox
     */
    $('input[type="checkbox"] + label').on('click', function() {
        var checkboxx = $(this).prev();
        if ( checkboxx.prop('checked') ) {
            $(this).prev().prop('checked', false);
            $('body').find('#form-subscribe').hide();
            $('body').find('.wpcf7').show();
        } else {
            $(this).prev().prop('checked', true);
            $('body').find('#form-subscribe').show();
            $('body').find('.wpcf7').hide();
        }
        // Copy inputs from previous form
        $('input[name="first-name"]').val($('input[name="q1"]').val());
        $('input[name="last-name"]').val($('input[name="q2"]').val());
        $('input[name="your-email"]').val($('input[name="q3"]').val());
        $('input[name="your-zipcode"]').val($('input[name="q7"]').val());
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
