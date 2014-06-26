// Incluir gulp
var gulp = require('gulp');

// Incluir plug-ins
var concat = require('gulp-concat');

// Tareas
gulp.task('concatJs', function() {
  gulp.src('./dev/js/*.js')
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./build/js'));
});
 
gulp.task('concatCss', function() {
  gulp.src(['./dev/css/*.css','./bower_components/bootstrap/docs/assets/css/bootstrap.css'])
    .pipe(concat("styles.css"))
    .pipe(gulp.dest('./dev/css'));
});

gulp.task('concatIndex', function() {
  gulp.src('./dev/index.php')
    .pipe(concat("index.php"))
    .pipe(gulp.dest('./build/'));
});

/*gulp.task('default', function() {
	gulp.run('concatJs','concatCss','concatIndex');
})*/

// Esperar cambios en JS
gulp.watch('./dev/js/*.js', function() {
  gulp.run('concatJs');
});
 
// Esperar cambios en CSS
gulp.watch('./dev/css/*.css', function() {
  gulp.run('concatCss');
});

// Esperar cambios en CSS
gulp.watch('./dev/index.php', function() {
  gulp.run('concatIndex');
});