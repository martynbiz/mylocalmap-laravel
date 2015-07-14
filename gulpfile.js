var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    // mix.phpUnit();

    // fonts
    mix
        .copy('bower_components/bootstrap/dist/fonts', 'public/fonts')

    // css
    mix
        .copy('bower_components/bootstrap/less', 'resources/assets/less/bootstrap')
        .less('app.less').styles([
            'app.css'
        ], 'public/css/_all.css', 'public/css');

    // javascript
    mix
        .copy('bower_components/jquery/dist/jquery.js', 'public/js/jquery.js')
        .copy('bower_components/bootstrap/dist/js/bootstrap.js', 'public/js/bootstrap.js')
        .coffee()
        .scripts([

            // third party libraries
            'jquery.js',
            'bootstrap.js',

            // app libraries and widgets
            'map.js',
            'jquery-utils.js',

            'app.js'

        ], 'public/js/_all.js', 'public/js')

    mix
        .version([
            'public/css/_all.css',
            'public/js/_all.js'
        ]);

});
