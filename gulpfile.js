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
    return gulp.src('./dev/scss/index.scss')
        .pipe(sass({
            includePaths: ['./node_modules/'],
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('./dev/css/'));
}

function buildScssDev1() {
    return gulp.src('./dev1/scss/index.scss')
        .pipe(sass({
            includePaths: ['./node_modules/'],
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('./dev1/css/'));
}

module.exports.default = () => gulp.watch(['./scss/**/*.scss', './dev/**/*.scss', './dev1/**/*.scss'], gulp.parallel([buildScss, buildScssDev, buildScssDev1]));