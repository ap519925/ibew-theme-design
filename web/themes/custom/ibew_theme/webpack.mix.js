const mix = require('laravel-mix');

mix.setPublicPath('build')
   .js('src/js/main.script.js', 'js')
   .sass('src/scss/main.scss', 'css')
   .sourceMaps();

if (mix.inProduction()) {
    mix.version();
}
