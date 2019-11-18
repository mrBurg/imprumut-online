import * as cssVars from 'scss/services/constants.scss';

export let params = {
  autoplay: true,
  autoplaySpeed: 2000,
  centerMode: true,
  centerPadding: '0px',
  slidesToShow: 3,
  responsive: [{
    breakpoint: cssVars['size-md'],
    settings: {
      slidesToShow: 1
    }
  }, {
    breakpoint: cssVars['size-xs'],
    settings: {
      fade: true,
      slidesToShow: 1
    }
  }]
}