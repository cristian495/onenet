const { mix } = require('laravel-mix');

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
    .scripts([
             'resources/assets/js/plugins/datatables/datatables.js',
             'resources/assets/js/plugins/bootstrap_select/bootstrap-select.js',
             'resources/assets/js/plugins/moment/moment.js',
             'resources/assets/js/plugins/datetimepicker/bootstrap-datetimepicker.min.js',
             'resources/assets/js/plugins/daterangepicker/daterangepicker.js'
            ]
            ,'public/js/plugins.js')
    .styles([
             'resources/assets/css/plugins/datatables/datatables.css',
             'resources/assets/css/plugins/bootstrap_select/bootstrap-select.css',
             'resources/assets/css/plugins/datetimepicker/bootstrap-datetimepicker.min.css',
             'resources/assets/css/plugins/daterangepicker/daterangepicker.css'
            ]
             ,'public/css/plugins.css')


    //PLAGINA WEB
    .styles([
        'resources/assets/css/plugins/paginaweb/font-awesome.css',
        'resources/assets/css/plugins/paginaweb/bootstrap-touch-slider.css',
        'resources/assets/css/plugins/paginaweb/material-design.css'
            ],
            'public/css/paginaweb/pluginsPaginaWeb.css')
    .styles([
            'resources/assets/css/paginaweb/main.css'
            ],'public/css/paginaweb/estilosPaginaWeb.css')
    // END PAGINA WEB


    .scripts(['resources/assets/js/scriptsApp/contenido_ajax.js',
              'resources/assets/js/scriptsApp/selects.js'],'public/js/scripts.js')

    .styles([
             ,'resources/assets/css/plusis.css'
             ,'resources/assets/css/checkbox.css'
             ,'resources/assets/css/descripcion.css'
             ,'resources/assets/css/bootstrap_select.css'
            ],'public/css/estilos.css');
/*
mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/app-landing.js', 'public/js/app-landing.js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .less('node_modules/bootstrap-less/bootstrap/bootstrap.less', 'public/css/bootstrap.css')
   .less('resources/assets/less/adminlte-app.less','public/css/adminlte-app.css')
   .less('node_modules/toastr/toastr.less','public/css/toastr.css')
   .combine([
       'public/css/app.css',
       'node_modules/admin-lte/dist/css/skins/_all-skins.css',
       'public/css/adminlte-app.css',
       'node_modules/icheck/skins/square/blue.css',
       'public/css/toastr.css'
   ], 'public/css/all.css')
   .combine([
       'public/css/bootstrap.css',
       'resources/assets/css/main.css'
   ], 'public/css/all-landing.css')
   //APP RESOURCES
   .copy('resources/assets/img/*.*','public/img')
   //VENDOR RESOURCES
   .copy('node_modules/font-awesome/fonts/*.*','public/fonts/')
   .copy('node_modules/ionicons/dist/fonts/*.*','public/fonts/')
   .copy('node_modules/admin-lte/bootstrap/fonts/*.*','public/fonts/bootstrap')
   .copy('node_modules/admin-lte/dist/css/skins/*.*','public/css/skins')
   .copy('node_modules/admin-lte/dist/img','public/img')
   .copy('node_modules/admin-lte/plugins','public/plugins')
   .copy('node_modules/icheck/skins/square/blue.png','public/css')
   .copy('node_modules/icheck/skins/square/blue@2x.png','public/css');
*//*
if (mix.config.inProduction) {
  mix.version();
}*/