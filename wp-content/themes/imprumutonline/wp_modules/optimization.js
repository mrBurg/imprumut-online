'use strict'

let TERSER_WEBPACK_PLUGIN = require('terser-webpack-plugin'),
  OPTIMIZE_CSS_ASSETS_WEBPACK_PLUGIN = require('optimize-css-assets-webpack-plugin');;

module.exports = {
  noEmitOnErrors: true,
  minimizer: [
    new TERSER_WEBPACK_PLUGIN({
      sourceMap: false
    }),
    new OPTIMIZE_CSS_ASSETS_WEBPACK_PLUGIN()
  ],
  splitChunks: {
    cacheGroups: {
      /*slickCarousel: {
        test: /slick-carousel/,
        name: 'slick-carousel',
        chunks: 'all',
        // enforce: true
      },*/
      default: {
        name: 'index',
        chunks: 'all',
        priority: -10,
        reuseExistingChunk: true,
        enforce: true
      }
    }
  },
  runtimeChunk: {
    name: 'manifest'
  }
};