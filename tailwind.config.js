/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
    "./resources/**/*.vue",
  ],
  safelist: [
    'bg-primary', 'bg-secondary', 'bg-light', 'bg-dark',
    'text-primary', 'text-secondary', 'text-light', 'text-dark',
    'border-primary', 'border-secondary', 'border-light', 'border-dark',
    'hover:bg-primary', 'hover:bg-secondary', 'hover:bg-light', 'hover:bg-dark',
    'hover:text-primary', 'hover:text-secondary', 'hover:text-light', 'hover:text-dark',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#FE7314',
        secondary: '#EA9545',
        light: '#FBF3E4',
        dark: '#381E0C',
      }
    },
  },
  plugins: [],
}