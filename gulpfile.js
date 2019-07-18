var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', function(){
  return gulp.src('assets/css/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('.'))
});
