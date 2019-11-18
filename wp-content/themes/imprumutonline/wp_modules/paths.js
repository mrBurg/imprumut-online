'use strict'

const PATH = require('path');

module.exports = {
  context: PATH.resolve('src'),
  entry: ['ts/index.ts', 'scss/index.scss'],
  output: {
    path: PATH.resolve('./bundle'),
    filename: {
      js: 'js/[name].js',
      css: 'css/[name].css'
    },
    chunkFilename: {
      js: 'js/chunks/[name].js',
      css: 'css/chunks/[name].css'
    },
    publicPath: '/wp-content/themes/imprumutonline/bundle/'
  },
  staticFiles: {
    fileName: '[name].[ext]',
    vendorFileName: '[folder]/[name].[ext]',
    images: 'images',
    fonts: 'fonts'
  }
};