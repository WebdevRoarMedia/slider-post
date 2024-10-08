$('.cities-grid').slick({
    centerMode: true,
     centerPadding: "0",
    arrows: true,
    prevArrow:"<img class='a-left control-c prev slick-prev' src='/wp-content/uploads/2024/03/arrow-left.svg'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='/wp-content/uploads/2024/03/arrow-right.svg'>",
    dots: true,
    infinite: true,
    speed: 600,
    slidesToShow: 3,
    slidesToScroll: 3,
    adaptiveHeight: false,
    autoplay: true,
      autoplaySpeed: 4000,
    responsive: [
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
                      {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            },
  },
    ],
});
