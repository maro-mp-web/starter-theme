/** @type {import('tailwindcss').Config} */
// Koristimo ES module sintaksu jer je "type": "module" u package.json
export default {
  content: [
    "./**/*.php", // Skenira sve PHP datoteke u korijenu teme i poddirektorijima
    "./assets/js/**/*.js", // Skenira JavaScript datoteke u 'assets/js/' folderu
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}