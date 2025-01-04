import { defineConfig } from 'vite';

export default defineConfig({
  root: './src', // Define a pasta raiz como 'src'
  base: './', // Garante que o CSS seja referenciado de forma relativa
  build: {
    outDir: '../dist', // Define a pasta de saída para 'dist'
    rollupOptions: {
      output: {
        entryFileNames: 'assets/[name].js', // Nome dos arquivos JS
        chunkFileNames: 'assets/[name].js', // Nome dos arquivos de chunks
        assetFileNames: 'styles.css', // Coloca o CSS diretamente na pasta dist
      },
    },
  },
});
