const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            'sans': ['Inter', ...defaultTheme.fontFamily.sans],
            'serif': ['Tenor Sans',...defaultTheme.fontFamily.serif],
        },
    },
    screens: {
        'sm':'510px',
        'md':'768px',
        'lg':'1024px',
    }
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms')
  ],
}
