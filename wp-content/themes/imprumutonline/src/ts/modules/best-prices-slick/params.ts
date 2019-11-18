export let params = {
  // autoplay: true,
  autoplaySpeed: 2000,
  centerMode: true,
  slidesToShow: 3,
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 3
    }
  }, {
    breakpoint: 768,
    settings: {
      slidesToShow: 1
    }
  }, {
    breakpoint: 480,
    settings: {
      fade: true,
      slidesToShow: 1
    }
  }]
}