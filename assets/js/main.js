var setCookie = function(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

var getCookie = function(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

$(document).ready(function () {

    "use strict";
    // Cookies settings 
        setTimeout(function () {
            $("#cookieConsent").fadeIn(200);
        }, 4000);
        $("#closeCookieConsent, .cookieConsentOK").click(function() {
            $("#cookieConsent").fadeOut(200);
            jQuery("#cookieConsent").remove();
            setCookie("closed", "closed", 36)
        });

    console.log("cookie is : " + getCookie("closed"));
    if (getCookie("closed") == "closed") {
        $("#cookieConsent").addClass('hidden');
    }

    jQuery(".close-div").click(function() {
        jQuery("#close-me").remove();
        setCookie("closed", "closed", 365)
    });

    // Preloader
    $(window).load(function () { // makes sure the whole site is loaded
        $('.page-preloader spinner').fadeOut(); // will first fade out the loading animation
        $('.page-preloader').delay(350).fadeOut('slow');
        // will fade out the white DIV that covers the website.
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    })
    
    // Animated typing text

    $(".animated-text").typed({
        strings: [
            "s.r.o len za 239€",
            "živnosti len za 25€",
        ],
        typeSpeed: 40,
        loop: true,
    });
    
        //Set the carousel options
        $('#quote-carousel').carousel({
            pause: true,
            interval: 4000,
        });
});