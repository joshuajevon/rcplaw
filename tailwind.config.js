import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./public/js/**/*.js",
    ],

    theme: {
        extend: {
            colors: {
                gold: "#C4AF65",
                customDarkGray: "#3A3A38",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                cormorant: [
                    "Cormorant Garamond",
                    ...defaultTheme.fontFamily.sans,
                ],
                outfit: ['Outfit', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                "infinite-scroll-left":
                    "infinite-scroll-left 60s linear infinite",
                "infinite-scroll-right":
                    "infinite-scroll-right 60s linear infinite",
            },
            keyframes: {
                "infinite-scroll-left": {
                    from: { transform: "translateX(0)" },
                    to: { transform: "translateX(-100%)" },
                },
                "infinite-scroll-right": {
                    from: { transform: "translateX(-100%)" },
                    to: { transform: "translateX(0%)" },
                },
            },
        },
    },

    plugins: [forms],
};
