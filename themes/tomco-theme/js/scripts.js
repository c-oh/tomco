jQuery(function(){
  var toggleButton = jQuery('.nav-hamburger');
  var menuWrap = jQuery('.menu-main-menu-container');

  toggleButton.on('click', function(){
    jQuery(this).toggleClass('button-open');
    menuWrap.toggleClass('menu-show');
  });
})

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});