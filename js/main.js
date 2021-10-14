jQuery(function(){

  jQuery(".openbtn").click(function () {
    jQuery(this).toggleClass('active');
    jQuery(".l-sidebar").toggleClass('active');
    jQuery(".l-sidebar-mask").toggleClass('active');
    jQuery(".l-main-area").toggleClass('active');

    
  });

});