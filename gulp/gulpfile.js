var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var packageImporter = require('node-sass-package-importer');
 
gulp.task('convertToCss', function() {
  gulp.src('../src/scss/style.scss')
      .pipe(plumber())
      .pipe(sass({
        importer: packageImporter({
            extensions: ['.scss', '.css']
        })
      }))
      .pipe(autoprefixer())
      .pipe(gulp.dest('../'));
});
 
gulp.task('default', function() {
    gulp.watch('../src/scss/**/*.scss',['convertToCss']);
});
