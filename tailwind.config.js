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
      },
      colors:
      {
        'accent-600': 'hsl(205, 50%, 37%)',
        'accent-500': 'hsl(205, 50%, 47%)',
        'accent-300': 'hsl(205, 50%, 67%)',
        'accent-200': 'hsl(205, 50%, 80%)',
        'accent-100': 'hsl(205, 80%, 90%)',
      },
      animation: 
      {
        'slow-ping': 'ping 1500ms linear infinite'
      },
      backgroundImage:
      {
        'base-texture': "url('../../public/assets/BackgroundPattern.webp')"
      }
    },
    fontFamily: {
      'red': ['Red Hat Display', 'sans-serif'],
      'pops': ['Poppins']
    },
  },
  plugins: []
}

