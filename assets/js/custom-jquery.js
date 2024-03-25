$(document).ready(function () {
  const slider = $(".services__wrapper");
  const experience_item = document.querySelector(".experience__item");
  const reviews_slider = $(".reviews__wrapper");
  const projections_slider = $(".projections__wrapper");

  if (experience_item) {
    experienceRange();
  }

  if (slider) {
    servicesSlider();
  }

  if (reviews_slider) {
    reviewsSlider();
  }

  if (projections_slider) {
    projectionsSlider();
  }

  function servicesSlider() {
    slider.slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      speed: 1000,
      arrows: false,
      dots: false,
      // autoplay: true,
      autoplaySpeed: 2000,
      easing: "ease",
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });
    const services__arrow_prev = $(".services__arrow--prev");
    const services__arrow_next = $(".services__arrow--next");
    services__arrow_prev.on("click", function () {
      slider.slick("slickPrev");
    });
    services__arrow_next.on("click", function () {
      slider.slick("slickNext");
    });
  }

  function experienceRange() {
    $(".experience__item").each(function () {
      const count = $(this).attr("data-count");

      $(this).roundSlider({
        radius: 90,
        width: 5,
        handleSize: 30,
        handleShape: "dot",
        startAngle: 90,
        slideType: "min-range",
        value: parseInt(count),
        pathColor: "#daae3c",
        borderColor: "none",
        rangeColor: "#fff",
      });
    });
  }

  function reviewsSlider() {
    reviews_slider.slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      speed: 1000,
      arrows: false,
      dots: false,
      // autoplay: true,
      autoplaySpeed: 2000,
      easing: "ease",
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });

    const reviews__arrow_prev = $(".reviews__box--prev");
    const reviews__arrow_next = $(".reviews__box--next");
    reviews__arrow_prev.on("click", function () {
      reviews_slider.slick("slickPrev");
    });
    reviews__arrow_next.on("click", function () {
      reviews_slider.slick("slickNext");
    });
  }

  function projectionsSlider() {
    projections_slider.slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      speed: 1000,
      arrows: false,
      dots: false,
      // autoplay: true,
      autoplaySpeed: 2000,
      easing: "ease",
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });

    const projections__arrow_prev = $(".projections__arrow--prev");
    const projections__arrow_next = $(".projections__arrow--next");
    projections__arrow_prev.on("click", function () {
      projections_slider.slick("slickPrev");
    });
    projections__arrow_next.on("click", function () {
      projections_slider.slick("slickNext");
    });
  }
});
