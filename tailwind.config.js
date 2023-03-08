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
        'mentifyTheme' : '#9D1F64',
        'mentifyTheme-500' : '#9d1f6480',
        'mentifyTheme-200' : '#9d1f6447',
        'mentifyOrange' : '#FF8E4E',
        'mentifyNotify' : '#EBD2E0'
      }
    },
  },
  plugins: [require("flowbite/plugin")],
}
