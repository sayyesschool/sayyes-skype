const gulp = require('gulp');
const sass = require('gulp-sass');

function buildScss() {
    return gulp.src('./scss/styles/index.scss')
        .pipe(sass({
            includePaths: ['./node_modules/'],
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('./css/'));
}

gulp.watch('./scss/**/*.scss', buildScss);

module.exports.default = buildScss;