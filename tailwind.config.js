/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./dist/**/*.{html,js,php}'],
  theme: {
    container:{
      center : true,
      padding:'16px',
    },
    extend: {
      backgroundImage:{
        'hero-pattern':
         "linear-gradient(to right bottom, rgba(0,0,0,.5), rgba(225,225,225,.5))"
     },
    },
  },
  plugins: [],
}

