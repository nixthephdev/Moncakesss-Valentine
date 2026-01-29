/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'love-red': '#ff4d6d',
        'love-pink': '#ffb3c1',
        'love-bg': '#fff0f3',
      },
      fontFamily: {
        'cute': ['"Comic Neue"', 'cursive'], 
      }
    },
  },
  plugins: [],
}