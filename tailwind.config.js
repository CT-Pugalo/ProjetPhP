module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            green: {
              100: "#ecf6ee",
              200: "#d8eddd",
              300: "#c5e5cb",
              400: "#b1dcba",
              500: "#9ed3a9",
              600: "#7ea987",
              700: "#5f7f65",
              800: "#3f5444",
              900: "#202a22"
            },
            white: {
                100: "#f7f7fd",
                200: "#f0f0fb",
                300: "#e8e8f9",
                400: "#e1e1f7",
                500: "#d9d9f5",
                600: "#aeaec4",
                700: "#828293",
                800: "#575762",
                900: "#2b2b31"
            },
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
