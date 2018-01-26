var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/assets/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/assets')
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    // uncomment to create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning(Encore.isProduction())

    // uncomment to define the assets of the project
    .addEntry('build/js/jQuery', './assets/js/jQuery-3.2.1.js')
    .addEntry('build/js/expirityHosting', './assets/js/experityhosting.js')

    // .addStyleEntry('css/materialize', './assets/css/materialize.css')
    .addStyleEntry('build/css/material-icons', './assets/css/material_icons.css')
    .addStyleEntry('build/css/expirityHosting', './assets/css/experityhosting.css')

    // uncomment if you use Sass/SCSS files
    // .enableSassLoader()

    // uncomment for legacy applications that require $/jQuery as a global variable
    // .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
