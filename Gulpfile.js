var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
var cleancss = require('gulp-cleancss');
var rename = require('gulp-rename');
var concat = require('gulp-concat-util');

// Sass
// Static Server + watching scss/html files
gulp.task('serve', ['css'], function() {

    browserSync.init({
        proxy: "0.0.0.0:8000"
    });

    gulp.watch('**/*.scss', ['css']);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('css', function() {
    return gulp.src("./sass/all.scss")
        .pipe(sass())
        .pipe(cleancss({keepBreaks: false}))
        .pipe(concat.header('<style type="text/css">'))
        .pipe(concat.footer('</style>'))
        .pipe(rename({
          basename: 'allCSS',
          extname: '.php'
        }))
        .pipe(gulp.dest("./css/"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);
