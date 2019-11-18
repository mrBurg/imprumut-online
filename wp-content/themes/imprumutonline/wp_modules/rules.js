'use strict'

const AUTOPREFIXER = require('autoprefixer'),
  miniCssExtractPluginLoader = require('mini-css-extract-plugin').loader,
  { output, staticFiles } = require('./paths.js');

module.exports = [{
  test: /\.ts$/,
  include: /ts/,
  exclude: /node_modules/,
  loader: 'awesome-typescript'
}, {
  test: /\.(sc|c)ss$/,
  use: [{
    loader: miniCssExtractPluginLoader,
    options: {
      publicPath: output.publicPath
    }
  }, {
    loader: 'css',
    options: { sourceMap: true }
  }, {
    loader: 'postcss',
    options: {
      plugins: [AUTOPREFIXER({
        overrideBrowserslist: ['ie >= 11', 'last 2 version']
      })],
      sourceMap: true
    }
  }, {
    loader: 'sass',
    // options: { sourceMap: true }
  }]
}, {
  test: /\.woff2?$/,
  loader: 'url'
}, {
  test: /\.(ttf|eot|svg)$/,
  include: /fonts/,
  exclude: /images/,
  loader: 'file',
  options: {
    outputPath: staticFiles.fonts,
    name: staticFiles.vendorFileName
  }
}, {
  test: /\.(jpg|png|gif|svg)$/,
  include: /node_modules/,
  exclude: /fonts/,
  loader: 'file',
  options: {
    outputPath: staticFiles.images,
    name: staticFiles.vendorFileName
  }
}, {
  test: /\.(jpg|png|gif|svg)$/,
  include: /images/,
  exclude: /node_modules|fonts/,
  loader: 'file',
  options: {
    outputPath: staticFiles.images,
    name: staticFiles.fileName
  }
}];