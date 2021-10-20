module.exports = {
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.{php,vue,js}',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        blue: {
          light: '#118ab2',
          dark: '#073b4c',
        },
        green: {
          DEFAULT: '#06d6a0',
        },
        red: {
          DEFAULT: '#ef4767',
        },
        yellow: {
          DEFAULT: '#ffd166',
        },
      },
      fontFamily: {
        sans: ['Oswald', 'sans-serif'],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/typography')],
};
