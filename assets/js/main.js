console.log("🚀 init 🚀");

jQuery(document).ready(function ($) {
  $(".slick-hero").slick({
    dots: false,
    infinite: true,
    speed: 500,
    cssEase: "ease",
    arrows: false,

  });

  $("#customPrev").on("click", function () {
    $(".slick-hero").slick("slickPrev");
  });

  // Custom next button click event
  $("#customNext").on("click", function () {
    $(".slick-hero").slick("slickNext");
  });
});
