/*
	Gulp shik v2.5

	Ilya Komichev
	shikarniy.com
*/


//	#modules
// ==============================================
var gulp = require('gulp');
var connect = require('gulp-connect');
var gulpif = require('gulp-if');

var changed = require('gulp-changed');
var cached = require('gulp-cached');
var filter = require('gulp-filter');
var customwatch = require('gulp-watch');

var plumber = require('gulp-plumber');
var notify = require("gulp-notify");

var stylus = require('gulp-stylus');
var prefix = require('gulp-autoprefixer');

var jade = require('gulp-jade');
var jadeInheritance = require('gulp-jade-inheritance');


//	#paths
// ==============================================
var paths = {
	root: '../site/',
	css: '../site/css',
	js: '../site/js/*.js',
	sources: {
		jade: {
			src: '../source/jade/*.jade',
			inc: '../source/jade/_*.jade',
			excl: '!../source/jade/_*.jade',
		},
		stylus: {
			src: '../source/styl/*.styl',
			inc: '../source/styl/_*.styl',
			excl: '!../source/styl/_*.styl',
		}
	}
}


//	#server
// ===============================================
gulp.task('webserver', function () {
	connect.server({
		port: '8080',
		root: paths.root,
		livereload: true
	});
});



//	#watch
// ==============================================
gulp.watch([paths.sources.stylus.inc], ['stylus']);
gulp.watch('../source/jade/*.jade', ['reload-jade', 'setWatch']);

//	#gulp-watch
gulp.task('customwatch', function() {
		
	//	#stylys
	customwatch([paths.sources.stylus.src, paths.sources.stylus.excl])
		.pipe(plumber())
		.pipe(stylus())
		.pipe(prefix())
		.pipe(gulp.dest(paths.css))
		.pipe(connect.reload())

	// JavaScript
	customwatch([paths.js])
		.pipe(connect.reload())
})


//	#tasks
// ==============================================

//	#stylus
gulp.task('stylus', function () {
	gulp.src([paths.sources.stylus.src, paths.sources.stylus.excl])
		.pipe(plumber({errorHandler: notify.onError("<%= error.message %>")}))
		.pipe(stylus())
		.pipe(prefix())
		.pipe(gulp.dest(paths.css))
		.pipe(connect.reload())
});


//	#jade
// ==============================================
gulp.task('jade', function() {
	return gulp.src('../source/jade/*.jade')

		// only pass unchanged *main* files and *all* the partials
		.pipe(changed('../site', {extension: '.html'}))

		// filter out unchanged partials, but it only works when watching
		.pipe(gulpif(global.isWatching, cached('jade')))

		// find files that depend on the files that have changed
		.pipe(jadeInheritance({basedir: '../source/jade/'}))

		// filter out partials (folders and files starting with "_" )
		.pipe(filter(function (file) {
			return !/\/_/.test(file.path) || !/^_/.test(file.relative);
		}))

		// process jade templates
		.pipe(jade({
			pretty: true
		}))

		// save all the files
		.pipe(gulp.dest("../site/"))
});


//
gulp.task('setWatch', function() {
	global.isWatching = true;
});


gulp.task('reload-jade', ['jade'], function () {
	gulp.src('../source/jade/*.jade')
		.pipe(connect.reload());
});


//	#default
gulp.task('default', ['webserver', 'stylus', 'reload-jade']);
