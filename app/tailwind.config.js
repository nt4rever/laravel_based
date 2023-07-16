/** @type {import('tailwindcss').Config} */
export default {
  content: ['./index.html', './src/**/*.{js,ts,jsx,tsx}'],
  corePlugins: { preflight: false },
  theme: {
    extend: {
      colors: {
        primary: '#A72AA3',
        secondary: '#FFEBFE',
        bgBlank: '#F7F7F7'
      }
    }
  },
  plugins: []
};
