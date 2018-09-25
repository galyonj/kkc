/**
 * WPGulp Configuration File
 *
 * 1. Edit the variables as per your project requirements.
 * 2. In paths you can add <<glob or array of globs>>.
 *
 * @package WPGulp
 */

module.exports = {

	// Project options.
	projectURL: 'knoxvillekidneycenter.test', // Local project URL of your already running WordPress site. Could be something like wpgulp.local or localhost:3000 depending upon your local WordPress setup.
	productURL: './', // Theme/Plugin URL. Leave it like it is, since our gulpfile.js lives in the root folder.
	browserAutoOpen: false,
	injectChanges: true,

	// Style options.
	styleSRC: './dev/css/main.scss', // Path to main .scss file.
	styleDestination: './site/web/app/themes/kkc/assets', // Path to place the compiled CSS file. Default set to root folder.
	outputStyle: 'compressed', // Available options → 'compact' or 'compressed' or 'nested' or 'expanded'
	errLogToConsole: true,
	precision: 10,

	// Editor style options
	editorStyleSRC: './dev/css/editor-style.scss',
	editorStyleDestination: './site/web/app/themes/kkc/assets',
	outputStyle: 'compressed', // Available options → 'compact' or 'compressed' or 'nested' or 'expanded'
	errLogToConsole: true,
	precision: 10,

	// JS Plugin Options
	jsPluginSRC: './dev/js/req/*.js', // Path to JS plugin folder
	jsPluginDestination: './site/web/app/themes/kkc/assets/req', // Path to place the compiled JS plugin file
	jsPluginFile: 'req', // Compiled JS plugin file name

	// JS options.
	jsSRC: './dev/js/*.js', // Path to JS plugin folder.
	jsDestination: './site/web/app/themes/kkc/assets', // Path to place the compiled JS plugin file.
	jsFile: 'main', // Compiled JS plugin file name. Default set to plugin i.e. plugin.js.

	// Images options.
	imgSRC: './dev/img/raw/*', // Source folder of images which should be optimized and watched. You can also specify types e.g. raw/**.{png,jpg,gif} in the glob.
	imgDST: './dev/img/', // Destination folder of optimized images. Must be different from the imagesSRC folder.

	// Watch files paths.
	watchStyles: './dev/css/**/*.scss', // Path to all *.scss files inside css folder and inside them.
	watchJs: './dev/js/**/*.js', // Path to all plugin JS files.
	watchPhp: './**/*.php', // Path to all PHP files.

	// Translation options.
	textDomain: 'kkc', // Your textdomain here.
	translationFile: 'kkc.pot', // Name of the translation file.
	translationDestination: './languages', // Where to save the translation files.
	packageName: 'kkc', // Package name.
	bugReport: 'https://github.com/galyonj/kkc/issues', // Where can users report bugs.
	lastTranslator: 'John Galyon <galyon.jb@gmail.com>', // Last translator Email ID.
	team: 'John Galyon <galyon.jb@gmail.com>', // Team's Email ID.

	// Browsers you care about for autoprefixing. Browserlist https://github.com/ai/browserslist
	// The following list is set as per WordPress requirements. Though, Feel free to change.
	BROWSERS_LIST: [
		'last 2 version',
		'> 1%',
		'ie >= 11',
		'last 1 Android versions',
		'last 1 ChromeAndroid versions',
		'last 2 Chrome versions',
		'last 2 Firefox versions',
		'last 2 Safari versions',
		'last 2 iOS versions',
		'last 2 Edge versions',
		'last 2 Opera versions'
	]
};
