import { defineConfig } from 'vite';
import { glob } from 'glob';
import laravel from 'laravel-vite-plugin';


function GetFilesArray(query) {
    return glob.sync(query);
}
const pageJsFiles = GetFilesArray('resources/assets/js/*.js');
const CoreScssFiles = GetFilesArray('resources/assets/vendor/scss/**/!(_)*.scss');
const FontsScssFiles = GetFilesArray('resources/assets/vendor/fonts/!(_)*.scss');
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
