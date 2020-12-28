const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const terser = require('gulp-terser');
const browsersync = require('browser-sync');
const concat = require( 'gulp-concat' ); 
const connect = require('gulp-connect-php');

// Sass Task
function scssTask(){
  return src('assets/scss/style.scss')
      .pipe(sass())
      .pipe(postcss([cssnano()]))
      .pipe(dest('./'));
}

// JavaScript Task
function jsCustom(){
  return src('assets/js/custom/**/*.js')
    .pipe(terser())
    .pipe( concat( 'custom.js' ) )
    .pipe(dest('./assets/js'));
}

// JavaScript Task
function jsVendor(){
  return src('assets/js/vendor/**/*.js')
    .pipe(terser())
    .pipe( concat( 'vendor.js' ) )
    .pipe(dest('./assets/js'));
}

// Initialize Browsersync
function browsersyncServe(cb){
  connect.server({}, function () {
    browsersync({
      proxy: '127.0.0.1:8000',
      open: false
    });
  });
  cb();
}

// Tells Browsersync to reload
function browsersyncReload(cb){
  browsersync.reload();
  cb();
}

/*
*   Gulp Tasks
*/

// Watch Task
function watchTask(){
  watch('*.php', browsersync.reload);
  watch(['assets/scss/**/*.scss', 'assets/js/**/*.js'], series(scssTask, jsCustom, browsersync.reload));
}

// Default Gulp Task
exports.default = series(
  scssTask,
  jsCustom,
  jsVendor,
  browsersyncServe,
  watchTask
);

