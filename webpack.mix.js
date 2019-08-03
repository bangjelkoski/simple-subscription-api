const mix = require('laravel-mix');
const path = require('path');
const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    });

mix.webpackConfig({
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js/components/'),
            '@fields': path.resolve(__dirname, 'resources/js/components/types/fields'),
            validators: 'vuelidate/lib/validators',
        },
    },
});

mix.extract(['vue', 'axios', 'lodash', 'vue-router', 'vuelidate', 'vuex']);

if (mix.inProduction()) {
    mix.version();
}
