// My first GULP config
var gulp = require('gulp');
var sass = require('gulp-sass');


// $ gulp sass -> compiles sass into ./style.css
gulp.task('sass', function() {
  return gulp.src('sass/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('./'))
});

// refresh browser automatically
// gulp.task('browserSync', function() {
//   browserSync.init({
//     proxy: "localhost/ArsViva_DEV/",
//     notify: false
//   });
// });

// $ gulp watch -> watches for changes, re-compiles on every save
gulp.task('watch', ['sass'], function() {
  gulp.watch('sass/**/*.scss', ['sass']);
});
