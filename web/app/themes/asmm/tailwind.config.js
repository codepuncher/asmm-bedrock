const fs = require('fs');
const themeJson = fs.readFileSync('./theme.json');
const theme = JSON.parse(themeJson);
const colors = theme.settings.color.palette.reduce((acc, item) => {
  const [color, number] = item.slug.split('-');

  // If there is a number identifier, make this an object
  if (undefined !== number) {
    if (!acc[color]) {
      acc[color] = {};
    }
    acc[color][number] = item.color;
  } else {
    acc[color] = item.color;
  }

  return acc;
}, {});

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
      colors,
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
