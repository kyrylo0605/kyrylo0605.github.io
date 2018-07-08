  // const gulp = require('gulp');
 // const imagemin = require('gulp-imagemin');
 
 // gulp.task('imagemin', () =>
    // gulp.src('projects/lamzaki/images/content/photo/*')
       //  .pipe(imagemin())
       // .pipe(gulp.dest('dist/lamzaki/images'))
// );

   // html to pdf

var pdf = require('html-pdf');
pdf.create(html).toFile([filepath, ]function(err, res){
  console.log(res.filename);
});

pdf.create(html).toStream(function(err, stream){
  stream.pipe(fs.createWriteStream('./foo.pdf'));
});

pdf.create(html).toBuffer(function(err, buffer){
  console.log('This is a buffer:', Buffer.isBuffer(buffer));
});


// for backwards compatibility
// alias to pdf.create(html[, options]).toBuffer(callback)
pdf.create(html [, options], function(err, buffer){});