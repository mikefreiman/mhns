var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var cleancss = require('gulp-cleancss');

// Sass
// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        proxy: "0.0.0.0:8000"
    });

    gulp.watch('**/*.scss', ['sass']);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("./style.scss")
        .pipe(sass())
        .pipe(cleancss({keepBreaks: false}))
        .pipe(gulp.dest("./"))
        .pipe(browserSync.stream());
});


gulp.task('default', ['serve']);
