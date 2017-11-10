let mix = require('laravel-mix');

mix.js('resources/assets/js/script.js', 'public/js')
   .sass('resources/assets/sass/style.scss', 'public/css');
