const path = require('path');

module.exports = {
	mode:'production',
	entry: {
		'main': [
			path.resolve(__dirname, './src/burger-button.js'),
			path.resolve(__dirname, './src/orientation-changes.js'),
			path.resolve(__dirname, './src/image-resizing.js'),
			path.resolve(__dirname, './src/responsive-header.js'),
			path.resolve(__dirname, './src/page-refresh.js'),
			path.resolve(__dirname, './src/detect-language.js'),
			path.resolve(__dirname, './src/contact-button.js'),
			path.resolve(__dirname, './src/fullscreen-functions.js')
		]
	},
	output: {
		filename: '[name].bundle.js',
		path: path.resolve(__dirname, 'dist'),
	},
	optimization: {
		splitChunks: {
			chunks: 'all'
		}
	}
};