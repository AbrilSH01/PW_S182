import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
            //Importación para que bootstrap sea reconocido
            resolve:{
                alias:{
                    '~bootstrap' : path.resolve(__dirname,'node_modules/bootstrap')
                }
            }
            // Fin importacion
        }),
    ],
});
