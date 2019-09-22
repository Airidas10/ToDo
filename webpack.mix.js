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
   .sass('resources/sass/app.scss', 'public/css')
   .browserSync({proxy: 'http://stats.wip',
        reloadDebounce: 500,
        ghostMode: {
            scroll: false
        },
        files: [
            'app/**/*.php',
            'resources/views/**/*.php',
            'resources/js/**/*.vue',
            'resources/assets/img/**/*.png',
            'resources/assets/img/**/*.jpg',
            'resources/assets/img/**/*.svg',
            'public/mix-manifest.json', 
            'public/css/**/*.css',
            'public/css/*.css',
            'public/js/**/*.js',
        ]
    });
