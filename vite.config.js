import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/admin_dashboard.css',
                'resources/css/forget_password_page.css',
                'resources/css/Login.css',
                'resources/css/product-styles.css',
                'resources/css/style.css',
                'resources/css/style2.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
