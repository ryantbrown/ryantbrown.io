import { defineConfig } from "vite-plugin-windicss";

export default defineConfig({
  darkMode: "class",
  safelist: "p-3 p-4 p-5",
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Inter var"'],
      },
      colors: {
        rgreen: {
          100: "#655e21",
        },
        rblue: {
          100: "#2c667a",
        },
      },
    },
  },
});
