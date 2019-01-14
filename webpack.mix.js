const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/bootstrap.min.js', 'public/js')
   .js('resources/js/main.js', 'public/js')
   .js('resources/js/plugins.js', 'public/js')
   .js('resources/js/popper.js', 'public/js')
   .js('resources/js/modernizr-2.8.3.min.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/font-awesome.min.scss', 'public/css')
   .sass('resources/sass/plugins.scss', 'public/css')
   .sass('resources/sass/timeLine.scss', 'public/css')
   .sass('resources/sass/style.scss', 'public/css')
   .sass('resources/sass/themify-icons.scss', 'public/css')
    .sass('resources/sass/notify.scss', 'public/css')
