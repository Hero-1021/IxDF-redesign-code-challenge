/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
          neutral: {
              1: "#fff",
              2: "#f9f9f9",
              3: "#ececec",
              4: "#bcbcbc",
              5: "#6a6a6a",
              6: "#2b2b2b",
              7: "#000",
          },
          brand: {
              1: "#009cde",
              2: "#0d6fb4",
          },
          accent: {
              1: "#457205",
              2: "#f5851e",
              3: "#d21f18",
              4: "purple",
              5: "#cf6dc8",
          },
      },
      boxShadow: {
          default: "0px 4px 6px rgba(106, 106, 106, 0.5)",
          brand01: "0px 4px 6px rgba(0, 123, 171, 0.5)",
      },
      transitionTimingFunction: {
          easeInQuad: "cubic-bezier(0.55, 0.085, 0.68, 0.53)",
          easeOutQuad: "cubic-bezier(0.25, 0.46, 0.45, 0.94)",
      },
      gridTemplateColumns: {
          custom: "1fr 1024px 1fr"
      },
      fontFamily: {
custom: ['Merriweather', 'sans-serif'],
source: ['source-sans-pro', 'sans-serif'], 
},
fontSize: {
      custom18: "18px" 
  },
  },
  },
  plugins: [],
};