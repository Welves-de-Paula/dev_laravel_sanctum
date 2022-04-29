module.exports = {


  // proxy API requests to Valet during development
  devServer: {
    proxy: 'http://localhost:8000'
  },

  // output built static files to Laravel's public dir.
  // note the "build" script in package.json needs to be modified as well.
  outputDir: '../public',

  // modify the location of the generated HTML file.
  // make sure to do this only in production.
  indexPath: process.env.NODE_ENV === 'production'
    ? '../resources/views/index.blade.php'
    : 'index.html',

  pwa: {
    name: 'PsicoPlanner',
    themeColor: '#624DE3',
    msTileColor: '#624DE3',
    manifestOptions: {
      background_color: '#624DE3'
    }
  }
}