(function ($) {
  "use strict";
  //AOS js
  AOS.init();
  //Data Background
  $("[data-background]").each(function () {
      $(this).css("background-image", "url(" + $(this).attr("data-background") + ")");
  });

  // meanmenu
  $("#mobile-menu-active").meanmenu();
  // One Page Nav
  var top_offset = $(".header-area").height() - 10;
  $(".menu-area").onePageNav({
      currentClass: "active",
      scrollOffset: top_offset,
  });
  //sticky-header
  $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();
      if (scroll < 50) {
          $("#header-sticky").removeClass("sticky");
      } else {
          $("#header-sticky").addClass("sticky");
      }
  });

  // Images loaded
  $('#container').imagesLoaded( function() {
  // Isotope
  $(".grid").isotope({
      itemSelector: ".grid-item",
      percentPosition: true,
      masonry: {
          columnWidth: 1,
      },
  });
});
  

  // Magnific popup
  $(document).ready(function () {
      $(".video-button").magnificPopup({ type: "iframe" });
  });
  // Magnific popup
  $(document).ready(function () {
      $(".image-popup").magnificPopup({ type: "image" });
  });

  $("#event-countdown").countdown("2021/04/01", function (event) {
      $(this).html(event.strftime("<div><span>%D</span><span>Days</span></div> <div><span>%H</span><span>Hours</span></div><div><span>%M</span><span>Minute</span></div><div><span>%S</span><span>Second</span></div>"));
  });

  $(document).ready(function () {
      $("#js-main-slider")
          .pogoSlider({
              autoplay: true,
              autoplayTimeout: 6000,
              displayProgess: false,
              preserveTargetSize: false,
              targetWidth: 900,
              targetHeight: 300,
              responsive: false,
              pauseOnHover: false,
          })
          .data("plugin_pogoSlider");

      var transitionDemoOpts = {
          displayProgess: false,
          generateNav: false,
          generateButtons: false,
      };

      $("#demo1").pogoSlider(transitionDemoOpts);
      $("#demo2").pogoSlider(transitionDemoOpts);
      $("#demo3").pogoSlider(transitionDemoOpts);
      $("#demo4").pogoSlider(transitionDemoOpts);
      $("#demo5").pogoSlider(transitionDemoOpts);
      $("#demo6").pogoSlider(transitionDemoOpts);
      $("#demo7").pogoSlider(transitionDemoOpts);
      $("#demo8").pogoSlider(transitionDemoOpts);
      $("#demo9").pogoSlider(transitionDemoOpts);
      $("#demo10").pogoSlider(transitionDemoOpts);
      $("#demo11").pogoSlider(transitionDemoOpts);
      $("#demo12").pogoSlider(transitionDemoOpts);
  });
})(jQuery);
