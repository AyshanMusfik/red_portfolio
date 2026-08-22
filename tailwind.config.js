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
        brand: '#E50914',
        dark: '#111111',
        'dark-card': '#161618',
      },
    },
  },
  plugins: [],
}
