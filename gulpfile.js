var gulp = require('gulp');
var less = require('gulp-less');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var minify = require('gulp-minify-css');
var prefix = require('gulp-autoprefixer');

var scripts = [
    './js/lib/jquery.js',
    './js/lib/typed.js',
    './js/lib/bootstrap.js',
    './js/lib/swipe.js',
    './js/scripts.js'
];

gulp.task('less', function () {
    gulp.src('./less/style.less')
        .pipe(less())
        .pipe(gulp.dest('./css'));
});

gulp.task('css', ['less'], function() {
    gulp.src('./css/style.css')
        .pipe(prefix())
        .pipe(minify())
        .pipe(gulp.dest('dist'));
});

gulp.task('script', function() {
    gulp.src(scripts)
        .pipe(concat('script.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist'));
});

gulp.task('default', function(){
    gulp.start('css');
    gulp.start('script');
});