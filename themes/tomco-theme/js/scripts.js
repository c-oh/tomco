jQuery(function(){
  var toggleButton = jQuery('.nav-hamburger');
  var menuWrap = jQuery('.menu-main-menu-container');

  toggleButton.on('click', function(){
    jQuery(this).toggleClass('button-open');
    menuWrap.toggleClass('menu-show');
  });
})

jQuery('.count').each(function(){
  jQuery(this).prop('Counter',0).animate({
    Counter: jQuery(this).text()
  },{
    duration:4000,
    easing:'swing',
    step: function(now){
      jQuery(this).text(Math.ceil(now));
    }
  })
})