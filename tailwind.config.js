module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
      fontFamily: {
          'sans': ['-apple-system', 'BlinkMacSystemFont', ...],
          'serif': ['Georgia', 'Cambria', ...],
          'mono': ['SFMono-Regular', 'Menlo', ...],
          'your-font': ['Your Font', ...],
      }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
