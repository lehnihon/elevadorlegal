(function($) {
  new WOW().init();
  $('.btn-nav').on('click',function(){
    $("#myNav").toggleClass('overlay-hg');
    $("#nav-icon1").toggleClass('open');
    $(this).toggleClass('menu-f');
  });

  var owl = $(".owl-carousel");
  owl.owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
      0:{
          items:1,
      },
      900:{
          items:3,
      }
    }
  });
})(jQuery);
