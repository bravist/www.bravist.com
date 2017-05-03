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
    .copy('node_modules/admin-lte/plugins/iCheck/square/blue@2x.png', 'public/css/blue@2x.pnpg')
    .copy('node_modules/admin-lte/dist/css/skins/_all-skins.min.css', 'public/css/_all-skins.min.css')
    .copy('node_modules/admin-lte/plugins/datatables/dataTables.bootstrap.css', 'public/css/dataTables.bootstrap.css')
    .copy('node_modules/admin-lte/plugins/morris/morris.css', 'public/css/morris.css')
    .copy('node_modules/admin-lte/plugins/select2/select2.min.css', 'public/css/select2.min.css')
    .copy('node_modules/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', 'public/js/bootstrap3-wysihtml5.all.min.js')
    .copy('node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js', 'public/js/daterangepicker.js')
    .copy('node_modules/admin-lte/plugins/datepicker/bootstrap-datepicker.js', 'public/js/bootstrap-datepicker.js')
    .copy('node_modules/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js', 'public/js/jquery.slimscroll.min.js')
    .copy('node_modules/admin-lte/plugins/fastclick/fastclick.js', 'public/js/fastclick.js')
    .copy('node_modules/admin-lte/plugins/datatables/dataTables.bootstrap.min.js', 'public/js/dataTables.bootstrap.min.js')
    .copy('node_modules/admin-lte/plugins/datatables/jquery.dataTables.min.js', 'public/js/jquery.dataTables.min.js')
    .copy('node_modules/admin-lte/dist/js/app.min.js', 'public/js/app.min.js')
    .copy('node_modules/admin-lte/dist/js/pages/dashboard.js', 'public/js/dashboard.js')
    .copy('node_modules/admin-lte/plugins/select2/select2.full.min.js', 'public/js/select2.full.min.js')
    .copy('node_modules/admin-lte/dist/js/demo.js', 'public/js/demo.js');
