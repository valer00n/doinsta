var gulp = require('gulp');
var sass = require('gulp-sass');
var coffee = require('gulp-coffee');

gulp.task('sass', function() {
  return gulp.src('app/scss/**/*.scss') // Gets all files ending with .scss in app/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('dist/css'))
});

gulp.task('coffee', function () {
  gulp.src('app/coffee/**/*.coffee')
    .pipe(coffee())
    .pipe(gulp.dest('dist/js'));
});

gulp.task('watch', function(){
  gulp.watch('app/scss/**/*.scss', ['sass']);
  gulp.watch('app/coffee/**/*.coffee', ['coffee']);
});

gulp.task('default', ['coffee', 'sass', 'watch']);