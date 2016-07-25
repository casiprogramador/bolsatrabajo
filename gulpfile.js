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
   'bootstrap': './resources/assets/bower/bootstrap'
 }


 elixir(function(mix) {
   mix.less('app.less', 'public/css', {
     includePaths: [paths.bootstrap + '/less']
   });

   mix.copy(paths.bootstrap + '/fonts/**', 'public/fonts');

   mix.scripts([
     paths.jquery + '/dist/jquery.js',
     paths.bootstrap + '/dist/js/bootstrap.js',
     'app.js'
   ], 'public/js/app.js');

   mix.version(['css/app.css', 'js/app.js']);
 });
