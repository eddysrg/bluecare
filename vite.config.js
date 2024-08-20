import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import FastGlob from "fast-glob";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                FastGlob.sync(["resources/js/**/*.js"]),
            ],
            refresh: true,
        }),
    ],
});
