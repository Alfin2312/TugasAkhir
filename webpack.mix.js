const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
<<<<<<< HEAD
 | for your Laravel application. By default, we are compiling the Sass
=======
 | for your Laravel applications. By default, we are compiling the CSS
>>>>>>> 960dee0f7084ae2b12490abb3932889ddb54fdec
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
<<<<<<< HEAD
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
=======
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
>>>>>>> 960dee0f7084ae2b12490abb3932889ddb54fdec
