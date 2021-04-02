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

//**************** COMMON ******************** 
mix.js('resources/js/app.js', 'public/js').sourceMaps();
mix.sass('resources/sass/app.scss', 'public/css');

//**************** CSS ******************** 
// bootstrap css
mix.copy('node_modules/bootstrap/dist/css', 'public/css/bootstrap');

mix.copy('node_modules/@fortawesome/fontawesome-free/css/all.min.css', 'public/css/fontawesome-all.min.css');
mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');

//************** SCRIPTS ****************** 
// general scripts
mix.js('resources/js/theme.js', 'public/js');

//************** ASSETS ****************** 
//images
mix.copy('resources/assets/images', 'public/images');