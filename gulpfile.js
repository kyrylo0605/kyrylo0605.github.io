const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
 
	gulp.task('imagemin', () =>
	gulp.src('dist/before/*')
       .pipe(imagemin())
       .pipe(gulp.dest('dist/after'))
	);

   