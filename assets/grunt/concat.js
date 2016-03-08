module.exports = {

	options: {
	  separator: ';',
	},

	dist: {
		src: [
			'bower_components/foundation-sites/js/foundation.core.js',
			'bower_components/foundation-sites/js/foundation.util.mediaQuery.js',
			'bower_components/foundation-sites/js/foundation.util.keyboard.js',
			'bower_components/foundation-sites/js/foundation.util.box.js',
			'bower_components/foundation-sites/js/foundation.util.motion.js',
			'bower_components/foundation-sites/js/foundation.util.nest.js',
			'bower_components/foundation-sites/js/foundation.drilldown.js',
			'bower_components/foundation-sites/js/foundation.dropdownMenu.js',
			'bower_components/foundation-sites/js/foundation.responsiveMenu.js',
			'bower_components/foundation-sites/js/foundation.responsiveToggle.js',
			'js/dev/app.js'
			],
		dest: 'js/built/app.es2015.js',
		nonull: true
	},
	// modernizr: {
	// 	src: [
	// 		'js/dev/vendor/modernizr.js',
	// 		],
	// 	dest: 'js/built/modernizr.built.js'
	// }
};
