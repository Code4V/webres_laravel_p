/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      spacing: {
        '112': '28rem',
        '128': '32rem',
        '146': '38rem',
        '164': '44rem'
      },
      transitionProperty: {
        'width': 'width',
        'basis': 'flex-basis'
      },
      transitionTimingFunction: {
        'in-out-sudden': 'cubic-bezier(.68,-0.55,.27,1.55)'
      }
    },
    fontFamily: {
      'red': ['Red Hat Display', 'sans-serif'],
      'pops': ['Poppins']
    },
  },
  plugins: []
}

