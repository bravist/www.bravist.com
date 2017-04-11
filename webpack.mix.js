const {
    mix
} = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copy('node_modules/admin-lte/bootstrap/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
    .copy('node_modules/admin-lte/dist/css/AdminLTE.min.css', 'public/css/AdminLTE.min.css')
    .copy('node_modules/admin-lte/plugins/iCheck/square/blue.css', 'public/css/blue.css')
    .copy('node_modules/admin-lte/plugins/jQuery/jquery-2.2.3.min.js', 'public/js/jquery-2.2.3.min.js')
    .copy('node_modules/admin-lte/bootstrap/js/bootstrap.min.js', 'public/js/bootstrap.min.js')
    .copy('node_modules/admin-lte/plugins/iCheck/icheck.min.js', 'public/js/icheck.min.js')
    .copy('node_modules/admin-lte/bootstrap/fonts/glyphicons-halflings-regular.woff2', 'public/fonts/glyphicons-halflings-regular.woff2')
    .copy('node_modules/admin-lte/bootstrap/fonts/glyphicons-halflings-regular.woff', 'public/fonts/glyphicons-halflings-regular.woff')
    .copy('node_modules/admin-lte/plugins/iCheck/square/blue@2x.png', 'public/css/blue@2x.pnpg');
