let gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    cssmin = require('gulp-cssmin'),
    rigger = require('gulp-rigger'),
    minify = require('gulp-minify'),
    rename = require('gulp-rename'),
    replace = require('gulp-replace'),
    watch = require('gulp-watch'),
    ftp = require('gulp-ftp');

let path = {
    build: {
        js: '../assets/js/',
        css: '../assets/css/'
    },
    src: {
        js: 'js/*.js',
        style: 'style/main.scss'
    },
    watch: {
        js: 'js/**/*.js',
        style: 'style/**/*.scss'
    }
};

let credentials = {
    dev: {
        host: 'ftp_server',
        user: 'ftp_user',
        pass: 'ftp_password',
        pathjs: '/wp-content/themes/theme_name/assets/js',
        pathcss: '/wp-content/themes/theme_name/assets/css'
    },
    prod: {
        host: 'ftp_server',
        user: 'ftp_user',
        pass: 'ftp_password',
        pathjs: '/wp-content/themes/theme_name/assets/js',
        pathcss: '/wp-content/themes/theme_name/assets/css'
    }
};


gulp.task('js--dev', function () {
    return gulp.src(path.src.js)
        .pipe(rigger())
        .pipe(gulp.dest(path.build.js))
        .pipe(ftp({
            host: credentials.dev.host,
            user: credentials.dev.user,
            pass: credentials.dev.pass,
            remotePath: credentials.dev.pathjs
        }));
});
gulp.task('js-min--dev', function () {
    return gulp.src(path.src.js)
        .pipe(rigger())
        .pipe(minify({
            ext:{
                src: '-src.js',
                min: '.js'
            },
            ignoreFiles: ['vendor.js']
        }))
        .pipe(gulp.dest(path.build.js))
        .pipe(ftp({
            host: credentials.dev.host,
            user: credentials.dev.user,
            pass: credentials.dev.pass,
            remotePath: credentials.dev.pathjs
        }));
});

gulp.task('styles--dev', function () {
    return gulp.src(path.src.style)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(rename('style.css'))
        .pipe(replace('../../', '../'))
        .pipe(gulp.dest(path.build.css))
        .pipe(ftp({
            host: credentials.dev.host,
            user: credentials.dev.user,
            pass: credentials.dev.pass,
            remotePath: credentials.dev.pathcss
        }));
});
gulp.task('styles-min--dev', function () {
    return gulp.src(path.src.style)
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['> 0.01%'],
            cascade: false
        }))
        .pipe(cssmin())
        .pipe(rename('style.css'))
        .pipe(replace('../../', '../'))
        .pipe(gulp.dest(path.build.css))
        .pipe(ftp({
            host: credentials.dev.host,
            user: credentials.dev.user,
            pass: credentials.dev.pass,
            remotePath: credentials.dev.pathcss
        }));
});

gulp.task('js--prod', function () {
    return gulp.src(path.src.js)
        .pipe(rigger())
        .pipe(gulp.dest(path.build.js))
        .pipe(ftp({
            host: credentials.prod.host,
            user: credentials.prod.user,
            pass: credentials.prod.pass,
            remotePath: credentials.prod.pathjs
        }));
});
gulp.task('js-min--prod', function () {
    return gulp.src(path.src.js)
        .pipe(rigger())
        // .pipe(uglify()).on('error', util.log)
        .pipe(minify({
            ext:{
                src: '-src.js',
                min: '.js'
            },
            ignoreFiles: ['vendor.js']
        }))
        .pipe(gulp.dest(path.build.js))
        .pipe(ftp({
            host: credentials.prod.host,
            user: credentials.prod.user,
            pass: credentials.prod.pass,
            remotePath: credentials.prod.pathjs
        }));
});

gulp.task('styles--prod', function () {
    return gulp.src(path.src.style)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(rename('style.css'))
        .pipe(replace('../../', '../'))
        .pipe(gulp.dest(path.build.css))
        .pipe(ftp({
            host: credentials.prod.host,
            user: credentials.prod.user,
            pass: credentials.prod.pass,
            remotePath: credentials.prod.pathcss
        }));
});
gulp.task('styles-min--prod', function () {
    return gulp.src(path.src.style)
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['> 0.01%'],
            cascade: false
        }))
        .pipe(cssmin())
        .pipe(rename('style.css'))
        .pipe(replace('../../', '../'))
        .pipe(gulp.dest(path.build.css))
        .pipe(ftp({
            host: credentials.prod.host,
            user: credentials.prod.user,
            pass: credentials.prod.pass,
            remotePath: credentials.prod.pathcss
        }));
});



gulp.task('watch-dev', ['build-dev'], function () {
    watch([path.watch.style], function(event, cb) {
        gulp.start('styles--dev');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js--dev');
    });
});
gulp.task('watch-dev-min', ['build-dev-min'], function () {
    watch([path.watch.style], function(event, cb) {
        gulp.start('styles-min--dev');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js-min--dev');
    });
});

gulp.task('watch-prod', ['build-prod'], function () {
    watch([path.watch.style], function(event, cb) {
        gulp.start('styles--prod');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js--prod');
    });
});
gulp.task('watch-prod-min', ['build-prod-min'], function () {
    watch([path.watch.style], function(event, cb) {
        gulp.start('styles-min--prod');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js-min--prod');
    });
});


gulp.task('build-dev', ['styles--dev', 'js--dev']);
gulp.task('build-dev-min', ['styles-min--dev', 'js-min--dev']);

gulp.task('build-prod', ['styles--prod', 'js--prod']);
gulp.task('build-prod-min', ['styles-min--prod', 'js-min--prod']);






gulp.task('default', ['watch-dev']);