var gulp = require('gulp'),
	sass = require('gulp-sass'),
	styl = require('gulp-styl'),
	coffee = require('gulp-coffee'),
	concat = require('gulp-concat')
	livereload = require('gulp-livereload'),
	browserify = require('gulp-browserify'),
	lr = require('tiny-lr');

var server = lr();

gulp.task('sass', function() {
  return gulp.src('app/scss/**/*.scss') // Gets all files ending with .scss in app/scss and children dirs
    .pipe(sass())
    .pipe(styl({compress : true}))
    .pipe(gulp.dest('dist/css'))
    .pipe(livereload(server));
});

gulp.task('coffee', function () {
  gulp.src('app/coffee/**/*.coffee')
    .pipe(coffee())
    .pipe(browserify())
    .pipe(concat('index.js'))
    .pipe(gulp.dest('dist/js'))
    .pipe(livereload(server));
});

gulp.task('lr-server', function() {  
    server.listen(35729, function(err) {
        if(err) return console.log(err);
    });
});

gulp.task('watch', function(){
  gulp.watch('app/scss/**/*.scss', ['sass']);
  gulp.watch('app/coffee/**/*.coffee', ['coffee']);
});

gulp.task('default', ['lr-server', 'coffee', 'sass', 'watch']);