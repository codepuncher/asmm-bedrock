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
      typography: (theme) => ({
        DEFAULT: {
          css: {
            color: theme('colors.white'),
            a: {
              color: theme('colors.yellow.DEFAULT'),
            },
            p: {
              color: theme('colors.white'),
            },
            h1: {
              color: theme('colors.red.DEFAULT'),
            },
          },
        },
      }),
      backgroundImage: {
        page: "url('https://picsum.photos/id/982/1920/1080')",
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/typography')],
};
