/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./css/**/*.{html,js}","./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      width :{
        '200' : '200px',
        '500' : '500px',
        '120' : '120px',
      },
      height :{
        'ch-1' : '10rem',
      },
      fontSize:{
        '32' : '32px',
      }
    },
  },
  plugins: [require('flowbite/plugin')],
}

