/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/**/*.blade.php", // lebih spesifik
        "./resources/js/**/*.js",
    ],
    safelist: [
        "text-red-600",
        "text-3xl",
        "font-bold",
        "underline", // kelas yang kamu pakai
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
