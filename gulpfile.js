'use strict';

// plugins
var gulp = require('gulp');
var browserSync = require('browser-sync');
// tambahin dulu variable plugin nya
var concat = require('gulp-concat');


/* gulp task untuk browser-sync */
gulp.task('browser-sync', () => {
    // ini adalah file2 yang akan didengar perubahannya
    // ----
    // tambahkan file js
    var files = ['**/*.php', '**/*.css', 'js/**/*.js'];
    browserSync.init(files, {
        // ganti sesuai dengan url project
        // -----
        // ------ ganti nih ....
        // -----
        // proxy: 'localhost/php-oop/bahlul/'
        proxy: 'localhost/ws/tester/learn-oop/'
    });
});

// task untuk gabungin script
gulp.task('scripts', function () {
    // file yang akan d gabung
    var file = ['src/js/script-1.js', 'src/js/script-2.js']
    return gulp.src(file)
        // file hasil gabungan
        .pipe(concat('script.js'))
        // target folder
        .pipe(gulp.dest('./js/'));
});

// task untuk memantau file dan menjalankan task scripts
gulp.task('script-watch', ['scripts'], function () {
    gulp.watch('src/js/**/*.js', ['scripts'])
})