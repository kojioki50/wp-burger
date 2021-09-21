$(function () {

  $(".openbtn").click(function () {
    $(this).toggleClass('active');
    $(".l-sidebar").toggleClass('active');
    $(".l-sidebar-mask").toggleClass('active');
    $(".l-main-area").toggleClass('active');
    
  });

});