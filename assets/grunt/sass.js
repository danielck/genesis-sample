module.exports = {

	options: {
		sourceMap: true,
		outputStyle: 'compact'
	},

	dist: {
		files: {
			'styles/css/app.css' : 'styles/scss/app.scss',
			'styles/css/app-legacy.css' : 'styles/scss/app-legacy.scss',
		}
	},
};