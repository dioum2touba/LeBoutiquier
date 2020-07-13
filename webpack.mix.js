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


mix.styles ([
    'public/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css' ,
    'public/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css',
    'public/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css',
    'public/vendors/bower_components/fullcalendar/dist/fullcalendar.css',
    'public/dist/css/style.css',
], 'public/css/all.css' );
