const gulp = require('gulp');
const sass = require('gulp-sass');
const cssmin = require('gulp-cssmin');
const concat = require('gulp-concat');

gulp.task('styles', function () {
    return gulp.src('src/scss/*.scss')
        .pipe(sass())
        .pipe(cssmin())
        .pipe(gulp.dest('dist/css'));
});

gulp.task('scripts', function () {
    return gulp.src('src/js/*.js')
        .pipe(concat('main.js'))
        .pipe(gulp.dest('dist/js'));
});

gulp.task('default', gulp.parallel('styles', 'scripts'));
