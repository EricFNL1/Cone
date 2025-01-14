import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  root: './src', // Define a pasta raiz como 'src'
  base: './', // Garante que o CSS seja referenciado de forma relativa
  build: {
    outDir: '../dist', // Define a pasta de saída para 'dist'
    rollupOptions: {
      input: {
        // Adiciona os arquivos HTML manualmente no processo de build
        main: path.resolve(__dirname, 'src/index.html'),
        maisservicos: path.resolve(__dirname, 'src/maisservicos.html'),
        sobrenos: path.resolve(__dirname, 'src/sobrenos.html')
      },
      output: {
        entryFileNames: 'assets/[name].js', // Nome dos arquivos JS
        chunkFileNames: 'assets/[name].js', // Nome dos arquivos de chunks
        assetFileNames: 'styles.css', // Coloca o CSS diretamente na pasta dist
      },
    },
  },
});
