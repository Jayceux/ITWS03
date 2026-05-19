/**
 * Tailwind configuration generated from views/partials/head.php theme variables
 */
module.exports = {
	content: [
		'./public/**/*.php',
		'./App/views/**/*.php',
		'./**/*.php'
	],
	theme: {
		extend: {
			colors: {
			background: '#FFFFFF',
			foreground: '#000000',
			primary: '#00796B',
			accent: '#8BC34A',
			card: '#10958C',
			heading: '#FFFFFF',
			link: '#FFFFFF',
			tag: '#FFFFFF',
			'tag-foreground': '#000000',
			footer: '#048B67',
			border: '#E0E0E0',
			input: '#FFFFFF',
			'showcase-overlay': 'rgba(0,0,0,0.5)',
			},
			fontFamily: {
			heading: ["Lora", 'serif'],
			body: ["Manrope", 'sans-serif']
			},
			borderRadius: {
			DEFAULT: '8px',
				sm: 'calc(0.5rem * 0.6)',
				md: 'calc(0.5rem * 0.8)',
				lg: '0.5rem',
				xl: 'calc(0.5rem * 1.4)',
				'2xl': 'calc(0.5rem * 1.8)',
				'3xl': 'calc(0.5rem * 2.2)',
				'4xl': 'calc(0.5rem * 2.6)'
			}
		}
	},
	plugins: []
}
