var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var cleancss = require('gulp-cleancss');
var rename = require('gulp-rename');
var concat = require('gulp-concat-util');

// Sass
// Static Server + watching scss files
gulp.task('serve', ['mobileCSS', 'belowFold', '900pxCSS'], function() {

    browserSync.init({
        proxy: "0.0.0.0:8080"
    });

    gulp.watch('**/*.scss', ['mobileCSS', 'belowFold', '900pxCSS']);
});

// Compile Sass into CSS as 3 tasks
// 1
gulp.task('mobileCSS', function() {
    return gulp.src("./sass/aboveFold.scss")
        .pipe(sass())
        .pipe(cleancss({keepBreaks: false}))
        .pipe(concat.header('<style type="text/css">'))
        .pipe(concat.footer('</style>'))
        .pipe(rename({
          basename: 'aboveFoldCSS',
          extname: '.php'
        }))
        .pipe(gulp.dest("./css/"))
        .pipe(browserSync.stream());
});
// 2
gulp.task('belowFold', function() {
    return gulp.src("./sass/belowFold.scss")
        .pipe(sass())
        .pipe(cleancss({keepBreaks: false}))
        .pipe(gulp.dest("./css/"))
});
// 3
gulp.task('900pxCSS', function() {
    return gulp.src("./sass/900px.scss")
        .pipe(sass())
        .pipe(cleancss({keepBreaks: false}))
        .pipe(gulp.dest("./css/"))
});

gulp.task('default', ['serve']);
