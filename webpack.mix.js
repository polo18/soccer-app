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

//mix.js('resources/js/app.js', 'public/js')
    

mix.scripts('resources/js/main.js', 'public/js/main.js')
    .scripts([
        'resources/js/jquery-3.3.1.min.js',
        'resources/js/jquery-migrate-3.0.1.min.js',
        'resources/js/jquery-ui.js',
        'resources/js/popper.min.js',
        'resources/js/bootstrap.min.js',
        'resources/js/owl.carousel.min.js',
        'resources/js/jquery.stellar.min.js',
        'resources/js/jquery.countdown.min.js',
        'resources/js/bootstrap-datepicker.min.js',
        'resources/js/jquery.easing.1.3.js',
        'resources/js/aos.js',
        'resources/js/jquery.fancybox.min.js',
        'resources/js/jquery.sticky.js',
        'resources/js/jquery.mb.YTPlayer.min.js'   
    ], 'public/js/all.js')
    .styles('resources/css/style.css', 'public/css/style.css')
    .styles([
        'resources/css/bootstrap/bootstrap.css',
        'resources/css/jquery-ui.css',
        'resources/css/owl.carousel.min.css',
        'resources/css/owl.theme.default.min.css',
        'resources/css/owl.theme.default.min.css',
        'resources/css/jquery.fancybox.min.css',
        'resources/css/bootstrap-datepicker.css',
        'resources/css/aos.css'
    ], 'public/css/all.css');