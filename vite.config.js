import { defineConfig } from 'vite';

export default defineConfig({
  root: './src', // Define a pasta raiz como 'src'
  build: {
    outDir: '../dist', // Define a pasta de saída para 'dist'
    rollupOptions: {
      output: {
        entryFileNames: 'assets/[name].js', // Nome dos arquivos JS
        chunkFileNames: 'assets/[name].js', // Nome dos arquivos de chunks
        assetFileNames: 'assets/styles.css', // Define o nome fixo para o CSS gerado
      },
    },
  },
});
