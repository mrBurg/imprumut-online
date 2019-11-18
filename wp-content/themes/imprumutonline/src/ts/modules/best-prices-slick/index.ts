import './slick-slider.scss';

import { params } from './params';
import { init, beforeChange, afterChange, swipe, breakpoint } from './callBack';

let $slick = $('.js-best-prices-slick');

$slick
  .on('init', init)
  .on('beforeChange', beforeChange)
  .on('afterChange', afterChange)
  .on('swipe', swipe)
  .on('breakpoint', breakpoint)
  .slick(params);