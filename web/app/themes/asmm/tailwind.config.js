import typography from '@tailwindcss/typography'

/** @type {import('tailwindcss').Config} config */
const config = {
  content: [
    './app/**/*.php',
    './resources/**/*.{php,vue,js}',
  ],
  safelist: [
    {
      pattern: /^([a-z]{2})-(\d)$/,
    },
    {
      pattern: /^text-(\d)([a-z]{2})$/,
    },
    'h-6',
    'w-6',
  ],
  theme: {
    extend: {
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
      display: ['hover', 'group-hover'],
    },
  },
  plugins: [
    typography,
  ],
};

export default config
