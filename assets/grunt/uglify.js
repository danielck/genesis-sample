module.exports = {

	options: {
		compress: true,
		nonull: true
	},

	dist: {
		files: {
			'js/min/app.built.min.js': 'js/built/app.built.js'
//			,'js/min/modernizr.built.min.js' : 'js/built/modernizr.built.js'
		}
	},
};
