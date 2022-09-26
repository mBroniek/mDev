const mix = require('laravel-mix')
require('laravel-mix-webp')
require('laravel-mix-compress');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .copy('resources/js/main.js', 'public/js/main.js').compress()
    .copy('resources/images/svg', 'public/images/svg')
    .js('node_modules/uikit/dist/js/uikit.min.js', 'public/js/app.js').compress()
    .js('node_modules/uikit/dist/js/uikit-icons.min.js', 'public/js/app.js').compress()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/core.scss', 'public/css').compress()
    .version()

    .ImageWebp({
        disable: false,
        from: 'resources/images',
        to: 'public/images',
        imageminWebpOptions: {
            quality: 70
        }
    })
    .ImageWebp({
        disable: false,
        from: 'resources/images/techstack',
        to: 'public/images/techstack',
        imageminWebpOptions: {
            quality: 70
        }
    })
    .ImageWebp({
        disable: false,
        from: 'resources/images/icons',
        to: 'public/images/icons',
        imageminWebpOptions: {
            quality: 70
        }
    })
    .ImageWebp({
        disable: false,
        from: 'resources/images/clients',
        to: 'public/images/clients',
        imageminWebpOptions: {
            quality: 70
        }
    })
    .ImageWebp({
        disable: false,
        from: 'resources/images/blog',
        to: 'public/images/blog',
        imageminWebpOptions: {
            quality: 70
        }
    })

    .ImageWebp({
        disable: false,
        from: 'resources/images/labels',
        to: 'public/images/labels',
        imageminWebpOptions: {
            quality: 70
        }
    })
    .ImageWebp({
        disable: false,
        from: 'resources/images/case-study',
        to: 'public/images/case-study',
        imageminWebpOptions: {
            quality: 70
        }
    })
    .ImageWebp({
        disable: false,
        from: 'resources/images/headers-pages',
        to: 'public/images/headers-pages',
        imageminWebpOptions: {
            quality: 70
        }
    })

//redukcja


//minifikacja
const TerserPlugin = require("terser-webpack-plugin");

//kompresja
const CompressionPlugin = require('compression-webpack-plugin');

module.exports = {
    optimization: {
        minimize: true,
        minimizer: [new TerserPlugin()],
    },
    plugins: [
        new CompressionPlugin({
            include: /\/includes/,
            algorithm: "gzip",
            test: /\.js$|\.css$|\.html$|\.svg$/,
            threshold: 10240,
            minRatio: 0.8
        })
    ]
};
