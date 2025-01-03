/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js}"],
    theme: {
      extend: {
        colors: {
          primary: "#FFD700", // Amarelo
          background: "#121212", // Preto
          accent: "#1E90FF", // Azul
        },
      },
    },
    plugins: [],
  };
  