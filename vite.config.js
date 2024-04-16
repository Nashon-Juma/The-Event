import { defineConfig } from 'vite';
import laravel,{refreshpath} from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                'app/livewire/**',
                'app/Filament/**'
            ],
        }),
    ],
});
