const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');

function compileSass() {
  return gulp
    .src('assets/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('styles.css'))
    .pipe(gulp.dest('assets/css'));
}

function watchFiles() {
  gulp.watch('assets/scss/**/*.scss', compileSass);
}

exports.sass = compileSass;
exports.default = watchFiles;
