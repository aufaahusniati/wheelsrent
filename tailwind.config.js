/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        primary: '#0174BE',
        secondary: '#D2DE32',
        dark: '#0f172a',
      },
      screens: {
        '2xl' : '1320px'
      },
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}