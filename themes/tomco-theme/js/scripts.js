jQuery(function(){
  var toggleButton = jQuery('.nav-hamburger');
  var menuWrap = jQuery('.menu-main-menu-container');

  toggleButton.on('click', function(){
    jQuery(this).toggleClass('button-open');
    menuWrap.toggleClass('menu-show');
  });
})