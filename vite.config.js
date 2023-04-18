import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [ 
                'resources/js/app.js',
                'resources/js/front/app.js',
                'resources/css/front/app.css',
                
        ],
            refresh: true,
        }),
    ],
});
