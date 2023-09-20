const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const cssmin = require("gulp-cssmin");
const concat = require("gulp-concat");
const minify = require("gulp-minify");
const fs = require("fs");

// Compile Sass to CSS
gulp.task("compile-sass", function () {
  return gulp
    .src("assets/scss/*.scss")
    .pipe(sass())
    .pipe(concat("styles.css"))
    .pipe(cssmin())
    .pipe(gulp.dest("assets/css"));
});

// Concatenate and minify JavaScript
gulp.task("scripts", function () {
  return gulp
    .src("assets/js/*.js") // Assumes all JS files are in assets/js directory
    .pipe(concat("main.js"))
    .pipe(minify())
    .pipe(gulp.dest("assets/js"))
    .on("end", function () {
      // Delete the existing main-min.js file and rename main.js to main-min.js
      fs.unlink("assets/js/main-min.js", function (err) {
        if (err) throw err;
        fs.rename("assets/js/main.js", "assets/js/main-min.js", function (err) {
          if (err) throw err;
        });
      });
    });
});

// Watch for changes and run tasks
gulp.task("watch", function () {
  gulp.watch("assets/scss/*.scss", gulp.series("compile-sass"));
  gulp.watch("assets/js/*.js", gulp.series("scripts"));
});

// Default task (runs all specified tasks)
gulp.task("default", gulp.series("compile-sass", "scripts", "watch"));
