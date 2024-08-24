// const mix = require('laravel-mix');


// mix.js('resources/js/app.js', 'public/js')
//     .vue()
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ])
//     .version();

let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .vue()
   .postCss('resources/css/app.css', 'public/css');
 // Enables versioning and generates manifest.json

