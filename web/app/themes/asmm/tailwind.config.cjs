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
  content: [
    './index.php',
    './app/**/*.php',
    './resources/**/*.{php,vue,js}',
  ],
  safelist: [
    {
      pattern: /^([a-z]{2})-(\d)$/,
    },
    {
      pattern: /^text-(\d)([a-z]{2})$/,
    }
  ],
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
      scale: {
        '-100': '-1',
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
