const colors = require('tailwindcss/colors')

module.exports = {
  content: ['./**/*.php', './src/**/*.js'],
  plugins: [require('@tailwindcss/typography')],
  theme: {
    extend: {
      gridTemplateColumns: {
        footer: '1fr 5fr 1fr',
      },
    },
    colors: {
      white: colors.white,
      black: colors.black,
      lightBlue: 'rgb(86, 126, 168)',
      darkBlue: 'rgb(7, 12, 30)',
      darkGrey: 'rgb(41, 48, 50)',
      lightGrey: 'rgba(41, 48, 50, 0.05)',
      orange: 'rgb(252, 73, 36)',
      overlay: 'rgba(27, 33, 52, 0.5)',
    },
    fontFamily: {
      forum: ['Forum', 'cursive'],
      rubik: ['Rubik', 'sans-serif'],
    },
  },
}
