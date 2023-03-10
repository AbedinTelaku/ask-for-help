/** @type {import('tailwindcss').Config} */
module.exports = {

  content: {
    relative: true,
    files: [
      './modules/*.php', 
      './index.php',
      './footer.php',
      './header.php',
      './sidebar.php',
    ],
  },
  theme: {
    extend: {},
  },
  plugins: [],
}
