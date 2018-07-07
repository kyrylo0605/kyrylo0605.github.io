const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
 
gulp.task('imagemin', () =>
    gulp.src('projects/lamzaki/images/content/photo/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/lamzaki/images'))
);