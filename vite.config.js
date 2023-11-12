import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/_variables.scss',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/bootstrap.js',
                'resources/js/dashboard.js',
                'resources/js/form.js',
                'resources/js/main.js',
                'resources/js/modal.js',
                'resources/js/navbar.js',
                'resources/js/password.js',
                'resources/js/roleToggle.js',
                'resources/js/search.js',
                'resources/js/upload.js',
            ],
            refresh: true,
        }),
    ],
});
