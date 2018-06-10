const path = require('path');
const ExtractTextPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
	entry: {
		app: './assets/src/js/app.js'
	},
	output: {
		filename: 'app.js',
		path: path.resolve(__dirname, 'assets/dist/js/')
	},
	module: {
		rules: [{
			test: /\.(s*)css$/,
			use: [
				ExtractTextPlugin.loader,
				'css-loader'
			]
		}]
	},
	plugins: [
		new ExtractTextPlugin({filename: '../css/app.css'}),
		new BrowserSyncPlugin({
			proxy: {
				target: 'http://germ.blog.localhost'
			}
		})
	]
};
