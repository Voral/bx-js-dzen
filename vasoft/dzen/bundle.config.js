// noinspection JSUnresolvedVariable
const isProd = process.argv.includes('--prod');
module.exports = {
    input: './src/application.js',
    output: './dist/vasoft-dzen.bundle.js',
    namespace: 'BX.Vasoft',
    browserslist: true,
    minification: isProd,
};