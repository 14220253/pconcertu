/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        fontFamily: {
            sans: ['Inter var', ...defaultTheme.fontFamily.sans],
          },
          gridTemplateRows: {
            '[auto,auto,1fr]': 'auto auto 1fr',
          },
      },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin'),
        require('@tailwindcss/aspect-ratio')
    ],
  }
