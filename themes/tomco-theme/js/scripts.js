jQuery(function () {
    var jQuerytogglebutton = jQuery('.nav-hamburger'),
        jQuerymenuWrap = jQuery('.menu-main-menu-container');

    jQuerytogglebutton.on('click', function () {
        jQuery(this).toggleClass('button-open');
        jQuerymenuWrap.toggleClass('menu-show');
    });
   jQuery('.readmore-button').click(function () {
        jQuery(this).hide();
         jQuery('.about-banner').slideDown().addClass('shrink');
        jQuery('.about-readmore').slideDown().addClass('show');
    })
});

jQuery('#explore-button').click(function(){
    jQuery('html, body').animate({
        scrollTop: jQuery('#products-preview').offset().top
    }, 500);
})

var a = 0;
jQuery(window).scroll(function () {
    var oTop = jQuery('#counter').offset().top - window.innerHeight;
    if (a === 0 && jQuery(window).scrollTop() > oTop) {
        jQuery('.counter-value').each(function () {
            var jQuerythis = jQuery(this),
                countTo = jQuerythis.attr('data-count');
            jQuery({
                countNum: jQuerythis.text()
            }).animate({
                    countNum: countTo
                },
                {
                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        jQuerythis.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        jQuerythis.text(this.countNum);
                        //alert('finished');
                    }
                });
        });
        a = 1;
    }
});


var countDownDate = new Date("February 04, 2018 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {
 
    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "<span>d</span> " + hours + "<span>h</span> "
    + minutes + "<span>m</span> " + seconds + "<span>s</span>";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);