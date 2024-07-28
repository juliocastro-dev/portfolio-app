export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#FFFFFF',
        secondary: '#01EEFF',
        bgMain: '#151925',
        bgSecondary: '#323846',
      },
      fontFamily: {
        'custom': ['Inter', 'sans-serif'],
        'sen': ['Sen', 'sans-serif'],
        'roboto': ['Roboto', 'sans-serif'],
      }
    },
  },
  plugins: [],
}