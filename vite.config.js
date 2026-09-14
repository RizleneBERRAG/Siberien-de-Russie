import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/components/header.css',
                'resources/css/components/footer.css',
                'resources/css/pages/home.css',
                'resources/css/pages/cats.css',
                'resources/css/pages/adoption.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
