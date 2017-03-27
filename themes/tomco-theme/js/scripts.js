jQuery(function(){
  var toggleButton = jQuery('.nav-hamburger');
  var menuWrap = jQuery('.menu-main-menu-container');

  toggleButton.on('click', function(){
    jQuery(this).toggleClass('button-open');
    menuWrap.toggleClass('menu-show');
  });
})

jQuery('.count').each(function () {
    jQuery(this).prop('Counter',0).animate({
        Counter: jQuery(this).text()
    }, {
        duration: 2000, 
        easing: 'swing',
        step: function (now) {
            jQuery(this).text(Math.ceil(now));
        }
    });
}); 

jQuery(document).ready(function(){
    jQuery('.readmore-button').click(function(){
        jQuery(this).hide();
        jQuery('.about-readmore').slideDown().addClass('.show');
    })
})

(function( jQuery ) {
  //shows the search input field on click 
  jQuery('.icon-search').on('click', function(event){
    event.preventDefault();
    jQuery('.header-search .search-field').toggleClass('show').focus();
  });
  //hides the search input field when not in focus
  jQuery('.header-search .search-field').on('focusout', function(){
    jQuery(this).removeClass('show');
  });
       
})( jQuery );