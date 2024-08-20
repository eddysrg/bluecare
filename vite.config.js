import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/components/carousel.js",
                "resources/js/components/navBarMenu.js",
                "resources/js/components/responsiveMenu.js",
            ],
            refresh: true,
        }),
    ],
});
