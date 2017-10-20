var elixir = require('laravel-elixir');

elixir.config.publicPath = 'public';

elixir(function(mix) {

	mix.copy('vendor/bower_components/bootstrap/dist/css/bootstrap.css', 'public/assets/css/libs/bootstrap.css');
    mix.copy('vendor/bower_components/admin-lte/dist/css/AdminLTE.css', 'public/assets/css/libs/AdminLTE.css');

    // Merge all CSS files in one file.
    mix.styles([
        '/libs/bootstrap.css',
        '/libs/AdminLTE.css',
    ], './public/assets/css/min.css', './public/assets/css');

});