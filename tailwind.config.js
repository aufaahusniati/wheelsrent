/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        primary: '#0174BE',
        secondary: '#D2DE32',
      },
      screens: {
        '2xl' : '1320px'
      },
      fontFamily : {
        poppins : "'poppins'"
      }
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}