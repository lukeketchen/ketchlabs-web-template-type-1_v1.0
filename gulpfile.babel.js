const { src, dest, watch, series } = require('gulp');
const gulp = require( 'gulp' );
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const terser = require('gulp-terser');
const browsersync = require('browser-sync').create();

// Sass Task
function scssTask(){
    return src('app/scss/style.scss', { sourcemaps: true })
        .pipe(sass())
        .pipe(postcss([cssnano()]))
        .pipe( gulp.dest( "./" ) );
  }

// JavaScript Task
function jsTask(){
    return src('app/js/script.js', { sourcemaps: true })
      .pipe(terser())
      .pipe( gulp.dest( "./" ) );
  }