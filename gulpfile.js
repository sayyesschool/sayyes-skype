const gulp = require('gulp');
const sass = require('gulp-sass');

function buildScss() {
    return gulp.src('./src/styles/index.scss')
        .pipe(sass({
            includePaths: ['./node_modules/'],
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('./public/css/'));
}

gulp.watch('./src/**/*.scss', buildScss);

module.exports.default = buildScss;