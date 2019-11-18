'use strict'

const WEBPACK = require('webpack'),
  { CleanWebpackPlugin } = require('clean-webpack-plugin'),
  MINI_CSS_EXTRACT_PLUGIN = require('mini-css-extract-plugin'),
  { output } = require('./paths.js');

module.exports = [
  new CleanWebpackPlugin({
    cleanStaleWebpackAssets: false,
    cleanOnceBeforeBuildPatterns: ['**/*']
  }),
  new WEBPACK.ProvidePlugin({
    $: 'jquery',
    jQuery: 'jquery'
  }),
  new MINI_CSS_EXTRACT_PLUGIN({
    filename: output.filename.css,
    // chunkFilename: output.chunkFilename.css
  })
];