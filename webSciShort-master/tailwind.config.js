/** @type {import('tailwindcss').Config} */
// npx tailwindcss -i ./app.css -o ./dist/output.css --watch 
module.exports = {
  // content: [],
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [],
}
