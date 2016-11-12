var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var sourcemaps = require('gulp-sourcemaps');
gulp.task('sass', function(){
   return gulp.src('pastel.scss')
      .pipe(sourcemaps.init())
      .pipe(sass({
         outputStyle: 'expanded'
      })).on('error', notify.onError(function(error){
         return "Error: " + error.message;
      }))
      .pipe(autoprefixer('last 15 version'))
      .pipe(sourcemaps.write())
         .pipe(gulp.dest(""))
});
gulp.task('production', function(){
   return gulp.src('pastel.scss')
      .pipe(sass({
         outputStyle: 'compressed'
      })).on('error', notify.onError(function(error){
         return "Error: " + error.message;
      }))
      .pipe(autoprefixer('last 15 version'))
         .pipe(gulp.dest('css'))
})
gulp.task('default',["sass"], function(){
   gulp.watch('**.scss', ['sass']);
});
