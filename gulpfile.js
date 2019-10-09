const path = require('path');
const gulp = require('gulp');
const pug = require('gulp-pug');
const sass = require('gulp-sass');

// function buildPug() {
//     return gulp.src('./src/views/index.pug')
//         .pipe(pug())
//         .pipe(gulp.dest('./public'));
// }

function buildSass() {
    return gulp.src('./src/styles/index.scss')
        .pipe(sass({
            includePaths: ['./node_modules/'],
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('./public/css/'));
}

function copyJs() {
    return gulp.src('../node_modules/material-components-web/dist/material-components-web.min.js')
        .pipe(gulp.dest('./build/'));
}

gulp.watch('./src/**/*.scss', buildSass);
//gulp.watch('./src/**/*.pug', buildPug);

//module.exports.default = gulp.parallel(buildPug, buildSass);
module.exports.default = buildSass;