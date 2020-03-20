const gulp = require('gulp');
const sass = require('gulp-sass');

function buildScss() {
    return gulp.src('./scss/index.scss')
        .pipe(sass({
            includePaths: ['./node_modules/'],
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('./css/'));
}

function buildScssDev() {
    return gulp.src('./scss/index.scss')
        .pipe(sass({
            includePaths: ['./node_modules/'],
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('./dev/'));
}

module.exports.default = () => gulp.watch('./scss/**/*.scss', gulp.parallel([buildScss, buildScssDev]));