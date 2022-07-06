const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/pages/homepage.scss', 'public/css/pages')
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/pages/homepage.js', 'public/js/pages');

mix.copy("resources/assets/img", "public/img");
mix.copy("resources/assets/fonts", "public/fonts");
