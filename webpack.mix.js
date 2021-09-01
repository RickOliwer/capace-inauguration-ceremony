// webpack.mix.js

const mix = require('laravel-mix');

mix.sass('src/sass/theme.scss', 'css/');
mix.js(['src/js/app.js'], 'js/theme.js');