const mix = require('laravel-mix');

mix.sass('resources/sass/app.sass', 'assets/app.css')
    .vue('resources/js/vue.js', 'assets/vue.js')
    .options({
        processCssUrls: false,
        uglify: {
            uglifyOptions: {
                compress: {
                    drop_console: true
                }
            }
        }
    })
    .sourceMaps()