const mix = require('laravel-mix');

mix.styles('resources/css/app.css', 'public/style.css')
mix.js('resources/js/createDate.js', 'public/createDate.js')
mix.js('resources/js/addRow.js', 'public/addRow.js')