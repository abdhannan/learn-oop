'use strict';

// plugins
var gulp = require('gulp');
var browserSync = require('browser-sync');

/* gulp task untuk browser-sync */
gulp.task('browser-sync', () => {
    // ini adalah file2 yang akan didengar perubahannya
    var files = [ '**/*.php', '**/*.css' ];
    browserSync.init(files, {
        // ganti sesuai dengan url project
        proxy: 'localhost/php-oop/bahlul/'
    });
});