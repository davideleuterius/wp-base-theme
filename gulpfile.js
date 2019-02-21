// Load plugins
const autoprefixer = require('autoprefixer');
const concat = require('gulp-concat');
const cssnano = require('cssnano');
const del = require('del');
// const eslint = require('gulp-eslint');
const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const newer = require('gulp-newer');
const plumber = require('gulp-plumber');
const postcss = require('gulp-postcss');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');

// CLEAN ASSETS
function clean() {
  return del(['./assets/css/']);
}
// PROCESS IMAGES
function images() {
  return gulp
    .src('./assets/src/img/*')
    .pipe(newer('./assets/img'))
    .pipe(
      imagemin([
        imagemin.gifsicle({
          interlaced: true,
        }),
        imagemin.jpegtran({
          progressive: true,
        }),
        imagemin.optipng({
          optimizationLevel: 5,
        }),
        imagemin.svgo({
          plugins: [{
            removeViewBox: false,
            collapseGroups: true,
          }],
        }),
      ]),
    )
    .pipe(gulp.dest('./assets/img'));
}
// PROCESS CSS
function css() {
  return gulp
    .src('./assets/src/scss/main.scss')
    .pipe(plumber())
    .pipe(sass({
      outputStyle: 'expanded',
    }))
    .pipe(gulp.dest('./assets/css/'))
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(gulp.dest('./assets/css/'));
}

// LINT SCRIPTS
// .pipe(eslint())
// .pipe(eslint.format())
// .pipe(eslint.failAfterError());
function scriptsLint() {
  return gulp
    .src(['./assets/src/js/**/*', './gulpfile.js'])
    .pipe(plumber());
}
// PROCESS SCRIPTS
function scripts() {
  return (
    gulp
      .src(['./assets/src/js/**/*'])
      .pipe(plumber())
      .pipe(concat('site.js'))
      .pipe(rename('site.min.js'))
      .pipe(uglify())
      .pipe(gulp.dest('./assets/js/'))
  );
}

// WATCH FOR PROCESSING
function watchFiles() {
  gulp.watch('./assets/src/scss/**/*', css);
  gulp.watch('./assets/src/js/**/*', gulp.series(scriptsLint, scripts));
  gulp.watch('./assets/src/img/**/*', images);
}

// COMPLEX TASKS
const js = gulp.series(scriptsLint, scripts);
const build = gulp.series(clean, gulp.parallel(css, images, js));
const watch = gulp.parallel(watchFiles);

// export tasks
exports.images = images;
exports.css = css;
exports.js = js;
exports.clean = clean;
exports.build = build;
exports.watch = watch;
exports.default = build;
