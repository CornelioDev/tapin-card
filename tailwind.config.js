/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js}", "./**/*.php"],
    theme: {
      extend: {
        colors: {
            "primary-blue": "#00588F",
            "secondary-blue": "#0F3776",
            "background-blue": "#0F37761F",
        },
        fontFamily: {
          sans: ["Inter", "sans-serif"],
        },
      },
    },
  }