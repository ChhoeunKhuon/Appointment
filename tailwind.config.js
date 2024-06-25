/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./css/**/*.{html,js}", 
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      width: {
        '200': '200px',
        '500': '500px',
        '120': '120px',
      },
      height: {
        'h1': '40rem',
        '29' : '29px',
      },
      fontSize: {
        '32': '32px',
      },
      margin: {
        '29' : '29px',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
