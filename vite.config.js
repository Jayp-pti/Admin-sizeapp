import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import { renameSync, existsSync, mkdirSync } from 'fs';
import { resolve } from 'path';

export default defineConfig({
    build: {
        manifest: true,
        outDir: 'public/build',
        cssCodeSplit: true,
        rollupOptions: {
            output: {
                assetFileNames: (css) => {
                    if (css.name.split('.').pop() === 'css') {
                        return 'css/[name].min.css';
                    } else {
                        return 'icons/' + css.name;
                    }
                },
                entryFileNames: 'js/[name].js',
            },
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/style.css',
                'resources/js/script.js'
            ], // Ensure these paths are correct
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                { src: 'resources/css', dest: '' },
                { src: 'resources/fonts', dest: '' },
                { src: 'resources/img', dest: '' },
                { src: 'resources/js', dest: '' },
                { src: 'resources/js/tinymce', dest: '' },
                { src: 'resources/json', dest: '' },
                { src: 'resources/plugins', dest: '' },
                { src: 'resources/scss', dest: '' },
            ],
        }),
        {
            name: 'move-manifest',
            writeBundle() {
                const sourceDir = resolve(__dirname, 'public/build/.vite');
                const targetDir = resolve(__dirname, 'public/build');

                if (!existsSync(targetDir)) {
                    mkdirSync(targetDir, { recursive: true });
                }

                const manifestPath = resolve(sourceDir, 'manifest.json');
                const targetPath = resolve(targetDir, 'manifest.json');

                if (existsSync(manifestPath)) {
                    renameSync(manifestPath, targetPath);
                }
            },
        },
    ],
});
