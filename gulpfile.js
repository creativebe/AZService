const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

 var paths = {
 	'bootstrap'  : 'bower_components/bootstrap/dist',
 	'jquery'	 : 'bower_components/jquery/dist',
 	'adminlte'	 : 'bower_components/AdminLTE/dist',
    'fontawesome': 'node_modules/font-awesome'
 }

elixir((mix) => {
    mix
    	.styles([
    		paths.bootstrap + '/css/bootstrap.css',
    		paths.adminlte + '/css/AdminLTE.css',
            paths.fontawesome + '/css/font-awesome.css'
    		],'public/css/all.css','./')
    	.copy([    		
    		'bower_components/jquery/dist/jquery.js',
    		'bower_components/bootstrap/dist/js/bootstrap.js',
    		'bower_components/jquery-ui/jquery-ui.js',
    		'bower_components/AdminLTE/dist/js/app.js'],'public/js/','./')
    	.copy([
            'bower_components/bootstrap/dist/fonts',
            'node_modules/font-awesome/fonts'
            ],'public/fonts/','./');
});
