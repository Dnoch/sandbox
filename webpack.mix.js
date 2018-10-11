let mix = require('laravel-mix');

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

mix
    .scripts(
        ['resources/assets/js/github.js',
            'resources/assets/js/ui.js',
            'resources/assets/js/app.js',
        ], 'public/js/app.js'
    )
    .scripts(
        [
            'resources/assets/js/weather-app/storage.js',
            'resources/assets/js/weather-app/weather.js',
            'resources/assets/js/weather-app/ui.js',
            'resources/assets/js/weather-app/app.js',
        ], 'public/js/weather-app.js'
    )
    .sass('resources/assets/sass/app.sass', 'public/css').version().browserSync('https://sandbox.laravel');
