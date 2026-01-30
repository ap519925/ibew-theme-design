const mix = require('laravel-mix');
// Tailwind
const tailwindcss = require('tailwindcss');

mix.setPublicPath('build')
    .js('src/js/main.js', 'js')
    .sass('src/scss/main.scss', 'css')
    .options({
        processCssUrls: false, // Often needed for Tailwind/Sass mix
        postCss: [tailwindcss('./tailwind.config.js')],
    })
    .sourceMaps();

if (mix.inProduction()) {
    mix.version();
}
