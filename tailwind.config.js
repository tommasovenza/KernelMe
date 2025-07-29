/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/**/*.js",
        "./resources/**/**/**/*.blade.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                body: ["Inter", "sans-serif"],
            },
            colors: {
                primaryColor: "#EB5F58",
                accentColor: "#FB8500",
                textColor: "#023047",
                tHeaderColor: "#FFB5A7",
                tableRows: "#F8F9FA",
                infoColor: "#CBEEF3",
                dangerColor: "#E93D1A",
                warningColor: "#FFE433",
                successColor: "#79DA4",
                variant: "#ed7859",
            },
        },
    },
    plugins: [],
};
