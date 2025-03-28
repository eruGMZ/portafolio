/** @type {import('tailwindcss').Config} */
    export default {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/css/**/*.css",
        "./resources/js/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                comfortaa: ['Comfortaa', 'sans-serif'],
            },
        },
    },
    plugins: [],
}

