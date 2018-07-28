var Encore = require('@symfony/webpack-encore');

Encore.setOutputPath('./assets/dist').
    setPublicPath('/wp-content/themes/germ-blog-theme/assets/dist').
    addEntry('app', './assets/src/js/app.js').
    autoProvidejQuery()
    // .enableVersioning(Encore.isProduction())
    .enableSourceMaps(!Encore.isProduction()).
    cleanupOutputBeforeBuild().
    enableBuildNotifications().
    enableSassLoader().
    configureUrlLoader()
;

module.exports = Encore.getWebpackConfig();
