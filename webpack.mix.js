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

mix.sass('resources/sass/home.scss', 'public/css')
    .sass('resources/sass/media-queries.scss', 'public/css')
    .sass('resources/sass/footer.scss', 'public/css')
    .sass('resources/sass/nav.scss', 'public/css')
    .sass('resources/sass/product.scss', 'public/css')
    .sass('resources/sass/shop.scss', 'public/css')
    .sass('resources/sass/registro.scss', 'public/css')
    .sass('resources/sass/alta.scss', 'public/css')
    .sass('resources/sass/cart.scss', 'public/css');
    
