import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";
import windi from "vite-plugin-windicss";
import windiConfig from "./windi.config";

export default defineConfig({
  plugins: [
    vue(),
    windi({
      config: windiConfig,
      preflight: {
        enableAll: true,
      },
    }),
  ],
  optimizeDeps: {
    include: ["vue"],
  },
});
