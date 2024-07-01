import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig(({ mode }) => {
    const env = loadEnv(mode, process.cwd(), '');
    return {
        server: {
            origin: env.VITE_SERVER_ORIGIN,
            host: true,
            port: env.VITE_SERVER_PORT,
            cors: {
                origin: env.VITE_HOST_ORIGIN
            },
            hmr: {
                host: env.VITE_SERVER_HMR_HOST,
                port: env.VITE_SERVER_PORT
            }
        },
        plugins: [
            laravel({
                input: [
                    'resources/css/app.css',
                    'resources/js/app.js',
                ],
                refresh: true,
            }),
        ],
    }
});
