var gulp = require('gulp');

var browserSync = require('browser-sync').create();

gulp.task('watch', function() {
  browserSync.init({
    server: {
      baseDir: 'http://localhost/startingpage/startingpage/index.php'
    },
  })
})

gulp.task('sass', function() {
  return gulp.src('app/scss/**/*.scss') // Gets all files ending with .scss in app/scss
    .pipe(sass())
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});
