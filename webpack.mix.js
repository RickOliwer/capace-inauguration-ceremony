// webpack.mix.js

const mix = require('laravel-mix');

mix.sass('src/sass/theme.scss', 'css/');
mix.js(['src/js/date_animation.js'], 'js/theme.js');