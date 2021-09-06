const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            'sans': ['FS Meridian', ...defaultTheme.fontFamily.sans]
        },
    }
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms')
  ],
}
