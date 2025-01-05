import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',  // SCSS file
                'resources/js/app.js',      // JS file
            ],
            refresh: true, // Akan me-refresh browser secara otomatis saat ada perubahan
        }),
    ],
});
