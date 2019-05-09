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
    .sass('resources/sass/app.scss', 'public/css');
    
    mix.styles([

        'resources/sass/assets/css/libs/bootstrap.css',
        'resources/sass/assets/css/libs/blog-post.css',
        'resources/sass/assets/css/libs/font-awesome.css',
        'resources/sass/assets/css/libs/metisMenu.css',
        'resources/sass/assets/css/libs/sb-admin-2.css',
        'resources/sass/assets/css/libs/styles.css'
 
    ], 'public/css/semua.css');

    mix.scripts([

        'resources/sass/assets/js/libs/jquery.js',
        'resources/sass/assets/js/libs/bootstrap.js',
        'resources/sass/assets/js/libs/metisMenu.js',
        'resources/sass/assets/js/libs/sb-admin-2.js',
        'resources/sass/assets/js/libs/scripts.js'


    ], 'public/js/semua.js');   
     
