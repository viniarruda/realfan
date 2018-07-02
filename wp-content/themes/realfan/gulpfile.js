/* ------------------------
  GULP TASKS
-------------------------*/

// REQUIRES
var gulp = require('gulp')
    uglify = require('gulp-uglify')
    concat = require('gulp-concat')
    imagemin = require('gulp-imagemin')
    rename = require('gulp-rename')
    uglify = require('gulp-uglify')
    sass = require('gulp-sass');

// SCRIPTS TASK
// Get all JS files and compile to dist folder
gulp.task('minify-js', function() {
  gulp.src('assets/scripts/*.js')
  .pipe(uglify())
  .pipe(gulp.dest('dist/assets/scripts'));
});

gulp.task('concat-js', function() {
  gulp.src('assets/scripts/files/*.js')
  .pipe(concat('main.js'))
  .pipe(gulp.dest('assets/scripts'))
  .pipe(rename('main.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest('assets/scripts'));
});

// STYLES TASK
// Get all SCSS files and compile them in one
gulp.task('concat-css', function() {
  return gulp.src(['assets/styles/sass/base/*.scss',
                  'assets/styles/sass/components/*.scss',
                  'assets/styles/sass/pages/*.scss',
                  'assets/styles/sass/plugins/*.scss'])
      .pipe(concat('all.scss'))
      .pipe(gulp.dest('assets/styles'));
});

// Get the final SCSS file and convert to CSS
gulp.task('process-css', function() {
  gulp.src('assets/styles/all.scss')
  .pipe(sass({
    outputStyle: 'compressed'
  }))
  .pipe(gulp.dest('assets/styles'));
});

// Image Minification
gulp.task('minify-img', function() {
  gulp.src('assets/images/files/*')
          .pipe(imagemin())
          .pipe(gulp.dest('assets/images'))
});

// WATCH TASK
gulp.task('watch', function() {
  gulp.watch('assets/scripts/files/*.js', ['concat-js']);
  gulp.watch('assets/styles/sass/**/*.scss', ['concat-css']);
  gulp.watch('assets/styles/all.scss', ['process-css']);
});

// DEFAULT
gulp.task('default');
