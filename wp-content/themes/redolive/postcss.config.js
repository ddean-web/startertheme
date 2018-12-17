var tailwindcss = require('tailwindcss');

module.exports = {
  plugins: [
    tailwindcss('./src/css/tailwind.js'),
    require('autoprefixer'),
  ]
}