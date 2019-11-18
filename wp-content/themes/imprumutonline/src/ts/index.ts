'use strict'

import 'slick-carousel/slick/slick.scss';
import 'slick-carousel/slick/slick-theme.scss';
import 'slick-carousel';

class Main {
  constructor() {
    require('./modules/best-prices-slick');
  };
};

$(document).ready(() => new Main());