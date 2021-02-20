var gulp = require('gulp');
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var cleanCSS = require('gulp-clean-css');
var browserSync = require('browser-sync').create();

function css() {
  return gulp
    .src('./wp-content/themes/harcovnici/style.less')
    .pipe(less())
    .pipe(autoprefixer(['last 2 versions', '> 5%']))
    .pipe(cleanCSS())
    .pipe(gulp.dest('./wp-content/themes/harcovnici/'))
    .pipe(browserSync.stream());
}
exports.css = css;

function watch() {
  browserSync.init({
    proxy: 'localhost',
  });
  gulp.watch('./wp-content/themes/**/*.less', css);
  gulp.watch('./wp-content/themes/**/*.php').on('change', browserSync.reload);
  gulp.watch('./wp-content/themes/**/js/*.js').on('change', browserSync.reload);
}
exports.watch = watch;
