/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "./public/js/*.js"
  ],
  safelist : [
	'line-clamp-2'
  ],
  theme: {
    extend: {
      fontFamily: {
        "poppins": ["Poppins", "sans-serif"]
      },
      colors: {
        primary: {
          100: "#D0EBFD",
          200: "#A0D8FC",
          300: "#71C4FA",
          400: "#41B0F9",
          500: "#129DF7",
          600: "#0E7DC6",
          700: "#0B5E94",
          800: "#073F63",
          900: "#041F31",
        },
        secondary: {
          100: "#FBDED2",
          200: "#F7BDA5",
          300: "#F39C78",
          400: "#EF7B4B",
          500: "#EB5A1E",
          600: "#BC4818",
          700: "#8D3612",
          800: "#5E240C",
          900: "#2F1206",
        },
        neutral: {
          100: "#F5F7F8",
          200: "#EBEFF1",
          300: "#E1E6EA",
          400: "#D7DEE3",
          500: "#CDD6DC",
          600: "#A4ABB0",
          700: "#7B8084",
          800: "#525658",
          900: "#292B2C",
        },
        tertiary: {
          100: "#D4EDDA",
          200: "#A9DCB5",
          300: "#7ECA8F",
          400: "#53B96A",
          500: "#28A745",
          600: "#208637",
          700: "#186429",
          800: "#10431C",
          900: "#08210E",
        },
        black: {
          100: "#CCCCCC",
          200: "#999999",
          300: "#666666",
          400: "#333333",
          500: "#000000",
        },
        white: {
          100: "#FFFFFF",
          600: "#CCCCCC",
          700: "#999999",
          800: "#666666",
          900: "#333333",
        },

      },
      fontSize: {
        h1: "48px",
        h2: "40px",
        h3: "33px",
        h4: "28px",
        h5: "23px",
        h6: "19px",
        title1: "16px",
        title2: "13px",
        caption: "11px",
      },

      // animation rotate rightleft start
      // add in class hover:animate-rotate-back-and-forth
      animation: {
        'rotate-back-and-forth': 'rotate-back-and-forth 0.8s ease-in-out infinite',
      },
      keyframes: {
        'rotate-back-and-forth': {
          '0%, 100%': { transform: 'rotate(0deg)' },
          '25%': { transform: 'rotate(10deg)' },
          '75%': { transform: 'rotate(-10deg)' },
        }
      }
      // animation rotate rightleft end

    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/line-clamp')
  ],
}

