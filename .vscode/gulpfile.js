var gulp = require('gulp');
var markdown = require('gulp-markdown');

gulp.task('markdown', function() {
    gulp.src('**/*.md')
        .pipe(markdown())
        .pipe(gulp.dest(function(f) {
            return f.base;
        }))
});

gulp.task('default', function() {
    gulp.watch('**/*.md', ['markdown']);
})