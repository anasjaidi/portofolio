const	gulp = require('gulp'),
		sass = require('gulp-sass')(require('sass')),
		pug = require('gulp-pug'),
		prefixer = require('gulp-autoprefixer');

// start pug task
var pugFiles = ['index.pug'],
	pugDest = '../dist';
var pugFunction =  function () {
	return gulp.src(pugFiles)
		.pipe(pug({pretty: true}))
		.pipe(gulp.dest(pugDest));
};

gulp.task('pug', pugFunction);

// start sass task and auto-prefix
var sassFiles = ['./style/sass/main.sass', './style/sass/**/*.sass'],
	sassDest = '../dist/css';
var sassFunction = function () {
	return gulp.src(sassFiles)
		.pipe(sass({outputStyle: 'compressed'}))
		.pipe(prefixer('last 2 versions'))
		.pipe(gulp.dest(sassDest));
};

gulp.task('sass', sassFunction);

// start watch task

gulp.task('init', function () {
	gulp.watch(pugFiles, pugFunction);
	gulp.watch(sassFiles, sassFunction)
});