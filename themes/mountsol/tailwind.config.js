/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./*.php',
		'./inc/**/*.php',
		'./template-parts/**/*.php',
		'./assets/src/**/*.css',
	],
	corePlugins: {
		preflight: false,
	},
	theme: {
		extend: {
			colors: {
				background: '#ffffff',
				foreground: '#0a1628',
				card: '#ffffff',
				border: '#e2e8f0',
				accent: '#e85c2e',
				primary: '#0a1628',
				muted: {
					DEFAULT: '#f1f5f9',
					foreground: '#64748b',
				},
			},
		},
	},
	plugins: [],
};
