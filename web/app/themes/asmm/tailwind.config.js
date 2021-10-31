module.exports = {
  purge: {
    content: [
      './index.php',
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
            a: {
              color: theme('colors.green.DEFAULT'),
              textDecoration: 'none',
            },
          },
        },
      }),
      backgroundImage: {
        page: "url('https://picsum.photos/id/982/1920/1080')",
      },
      scale: {
        '-100': '-1',
      },
      keyframes: {
        separator: {
          '0%': {
            transform: 'scale(1,0)',
          },
          '100%': {
            transform: 'scale(1,1)',
          },
        },
      },
      animation: {
        'wave': 'separator 1000ms cubic-bezier(0.23, 2, 0.32, 1) forwards',
      },
    },
  },
  variants: {
    extend: {
      display: [
        'hover',
        'group-hover',
      ],
    },
  },
  plugins: [require('@tailwindcss/typography')],
};
