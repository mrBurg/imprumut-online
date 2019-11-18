'use strict'

const WEBPACK = require('webpack'),
  { target, mode, devtool } = require('./wp_modules/common.js'),
  { context, entry, output } = require('./wp_modules/paths.js'),
  rules = require('./wp_modules/rules.js'),
  { resolve, resolveLoader } = require('./wp_modules/resolve.js'),
  stats = require('./wp_modules/stats.js'),
  optimization = require('./wp_modules/optimization.js'),
  plugins = require('./wp_modules/plugins.js'),
  { watch, watchOptions } = require('./wp_modules/watch.js');

module.exports = {
  target,
  mode,
  devtool,
  context,
  entry: {
    index: entry
  },
  output: {
    path: output.path,
    filename: output.filename.js,
    chunkFilename: output.chunkFilename.js,
    publicPath: output.publicPath
  },
  module: {
    rules
  },
  resolve,
  resolveLoader,
  stats,
  optimization,
  plugins,
  watch,
  watchOptions
};