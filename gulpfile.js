var
  gulp = require( 'gulp' ),
  sass = require( 'gulp-sass' ),
  concat = require( 'gulp-concat' ),
  rename = require( 'gulp-rename' ),
  uglify = require( 'gulp-uglify' ),
  minify = require( 'gulp-clean-css' );

var scripts = {
  in: 'assets/js/src/',
  out: 'assets/js/',
  watch: 'assets/js/**/*'
}


var srcScripts = [
  // ADD SCRIPTS IN ORDER HERE
  scripts.in + 'site.js'
];

var styles = { 
  in: 'assets/scss/main.scss',
  out: 'assets/css/',
  watch: 'assets/scss/**/*',
  expandOpts: {
    outputStyle: 'compact'
  }
};
  
gulp.task('scripts', function(){
  return gulp.src(srcScripts)
      .pipe( concat( 'site.js' ) )
      .pipe( gulp.dest( scripts.out ) )
      .pipe( rename( 'site.min.js' ) )
      .pipe( uglify() )
      .pipe( gulp.dest( scripts.out ) );
});

gulp.task( 'styles', function() {
  return gulp
    .src( styles.in )
    .pipe( concat( 'site.css' ) )
    .pipe( sass( styles.expandOpts ) )
    .pipe( gulp.dest( styles.out ) )
    .pipe( rename( 'site.min.css' ) )
    .pipe( minify( {
      keepSpecialComments: 0
    } ) )
    .pipe( gulp.dest( styles.out ) );
} );

gulp.task( 'run', [ 'styles', 'scripts' ], function() {
  gulp.watch( styles.watch, [ 'styles' ] );
  gulp.watch( scripts.watch, [ 'scripts' ] );
} );