var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var babel = require('gulp-babel');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass')(require('sass'));

gulp.task('sass-style', done => {
  return gulp.src('assets/sass/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./assets/css/'));
});

gulp.task('js', done => {
  return gulp.src([
    'assets/scripts/useStrict.js',
    'assets/scripts/addEvent.js',
    'assets/scripts/main.js',
  ])
  .pipe(concat('main.js'))
  // .pipe(uglify())
  // .pipe(rename('main.min.js'))
  .pipe(gulp.dest('./assets/js/'));
})

gulp.task('watch', () => {
  gulp.watch('assets/sass/**/*.scss', gulp.series('sass-style'));
  gulp.watch('assets/scripts/**/*.js', gulp.series('js'));
});

gulp.task('default',
  gulp.series('watch')
);