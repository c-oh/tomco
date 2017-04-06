jQuery(function () {
    var jQuerytogglebutton = jQuery('.nav-hamburger'),
        jQuerymenuWrap = jQuery('.menu-main-menu-container');

    jQuerytogglebutton.on('click', function () {
        jQuery(this).toggleClass('button-open');
        jQuerymenuWrap.toggleClass('menu-show');
    });
   jQuery('.readmore-button').click(function () {
        jQuery(this).hide();
        jQuery('.about-readmore').slideDown().addClass('.show');
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



function showSelectedValues(){
   alert(jQuery("input[name=product]:checked").map(
            function () {return this.value;}
        ).get)().join("IT WORKS")}
    jQuery('#inquire-link').click(showSelectedValues);


var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} 
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
}

plusDivs;