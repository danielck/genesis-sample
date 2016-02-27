// https://github.com/nDmitry/grunt-postcss
// https://github.com/postcss/autoprefixer
// https://github.com/jonathantneal/oldie
// https://github.com/postcss/postcss
module.exports = {

	autoprefixer: {
		options: {
			map: true,
			processors: [
				require( 'autoprefixer' )({
					browsers: [ 'last 2 versions', 'ie 9-11' ]
				}),
			]
		},
		files: {
			'styles/css/app.css' : 'styles/css/app.css'
		}
	},
	oldie: {
		options: {
			map: true,
			processors: [
				require( 'oldie' ),
			]
		},
		files: {
			'styles/css/app-legacy.css' : 'styles/css/app.css'
		}
	},
	min: {
		options: {
			map: true,
			processors: [
				require( 'csswring' )({
					preserveHacks: true
				}),
			]
		},
		files: {
			'styles/css/app.css' : 'styles/css/app.css',
			'styles/css/app-legacy.css' : 'styles/css/app-legacy.css'
		}
	}
};