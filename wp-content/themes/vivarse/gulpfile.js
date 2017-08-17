// My first GULP config
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('helloTask', function() {
  console.log("Hello Jure the task giver!");
});

gulp.task('sass', function() {
  return gulp.src('sass');
});
