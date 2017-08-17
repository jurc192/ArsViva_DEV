// My first GULP config
var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();


// $ gulp sass -> compiles sass into ./style.css
gulp.task('sass', function() {
  return gulp.src('sass/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('./'))
    .pipe(browserSync.reload({
      stream: true
    }));
});

// refresh browser automatically
gulp.task('browserSync', function() {
  browserSync.init({
    proxy: "localhost/ArsViva_DEV/",
    notify: false
  });
});

// $ gulp watch -> watches for changes, re-compiles on every save
gulp.task('watch', ['browserSync', 'sass'], function() {
  gulp.watch('sass/**/*.scss', ['sass']);
  gulp.watch('sass/**/*.html', browserSync.reload);
  gulp.watch('sass/**/*.js', browserSync.reload);
});
