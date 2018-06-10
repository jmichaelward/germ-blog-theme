const path = require('path');

module.exports = {
	entry: {
		app: './assets/src/js/app.js'
	},
	output: {
		filename: 'app.js',
		path: path.resolve(__dirname, 'assets/dist/js/')
	}
};
