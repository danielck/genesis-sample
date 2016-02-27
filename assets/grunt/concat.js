module.exports = {

	options: {
	  separator: ';',
	},

	dist: {
		src: [
			'js/dev/app.js'
			],
		dest: 'js/built/app.built.js',
		nonull: true
	},
	// modernizr: {
	// 	src: [
	// 		'js/dev/vendor/modernizr.js',
	// 		],
	// 	dest: 'js/built/modernizr.built.js'
	// }
};
