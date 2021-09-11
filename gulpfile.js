const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const terser = require('gulp-terser');
const browsersync = require('browser-sync').create();

// SASS Task
function scssTask() {
    return src('css/style.scss', { sourcemaps: true })
        .pipe(sass())
        .pipe(postcss([cssnano()]))
        .pipe(dest('dist', { sourcemaps: '.' }));
}

// JS Task
function jsTask() {
    return src('js/main.js', { sourcemaps: true })
        .pipe(terser())
        .pipe(dest('dist', { sourcemaps: '.' }));
}

// Browsersync Tasks
function browsersyncServe(cb){
    browsersync.init({
        proxy: "http://localhost/leieadmin",
        options: {
            reloadDelay: 250
        },
        notify: false
    });
    cb();
}

// BrowserSyncReload Task
function browsersyncReload(cb) {
    browsersync.reload();
    cb();
}

// Watch Task
function watchTask() {
    watch('*.html', browsersyncReload);
    watch(['css/pages/*.scss', 'js/**/*.js'], series(scssTask, jsTask, browsersyncReload));
}

// Default Gulp Task
exports.default = series (
    scssTask,
    jsTask,
    browsersyncServe,
    watchTask
)
