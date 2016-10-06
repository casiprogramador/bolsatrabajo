var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
 var paths = {
   'jquery': './resources/assets/bower/jquery',
   'bootstrap': './resources/assets/bower/bootstrap',
   'moment': './resources/assets/bower/moment',
   'datetimepicker': './resources/assets/bower/eonasdan-bootstrap-datetimepicker',
   'fontawesome': './resources/assets/bower/components-font-awesome',
 }


 elixir(function(mix) {
   mix.less('app.less', 'public/css', {
     includePaths: [paths.bootstrap + '/less']
   });

   mix.copy(paths.bootstrap + '/fonts/**', 'public/fonts');
   mix.copy(paths.fontawesome + '/fonts/**', 'public/fonts');
   mix.copy(paths.fontawesome + '/css/font-awesome.min.css', 'public/css');

   mix.scripts([
     paths.jquery + '/dist/jquery.js',
     paths.bootstrap + '/dist/js/bootstrap.js',
     paths.moment + '/min/moment.min.js',
     paths.datetimepicker + '/src/js/bootstrap-datetimepicker.js',
     'app.js'
   ], 'public/js/app.js');

   mix.version(['css/app.css', 'js/app.js']);
 });
