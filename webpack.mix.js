let mix = require('laravel-mix');

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

//
mix.js('resources/assets/js/app.js', 'public/js')//
   .sass('resources/assets/sass/app.scss', 'public/css');
   // .copyDirectory('resources/assets/image/*','public/image');

    // .sourceMaps()//资源映射,给使用浏览器的开发人员工具提供额外的调试信息，默认禁用

//自动监控你的文件变化
//npm run watch
mix.browserSync('laobing.test');

//生产环境版本控制，清除缓存
//npm run production
if (mix.inProduction()) {
    mix.version();
}
