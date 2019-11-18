'use strict'

module.exports = {
  resolve: {
    modules: ['src', 'node_modules'],
    extensions: ['.ts', '.js', '.scss'],
    descriptionFiles: ['package.json', 'tsconfig.json']
  },
  resolveLoader: {
    moduleExtensions: ['-loader']
  }
};