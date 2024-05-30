module.exports = {
	content: ['./resources/**/*'],
	corePlugins: {
		preflight: false,
	},
	prefix: 'ttw-',
	darkMode: ['variant', ['html[class*="dark"] &']],
}
