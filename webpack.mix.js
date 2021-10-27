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

mix 
.css('node_modules/bootstrap/dist/css/bootstrap.css','public/site/bootstrap.css')
.scripts('node_modules/jquery/dist/jquery.js','public/site/jquery.js')
.scripts('node_modules/bootstrap/dist/js/bootstrap.min.js','public/site/bootstrap.min.js')