/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    400: "#c19b76",
                },
                secondary: {
                    400: "#d5d5d5",
                },
                fontDark: "#1C1C1C",
                fontGray:"#6A6A6A",
                fontLight: "#FFFFFF",
                fontSilver: "#d5d5d5",
                fontGold: "#c19b76",

                bgWhite: "#FFFFFF",
                bgSilver: "#f5f5f5",
                bgBlack: "#151515",
            },
        },
    },
    plugins: [],
};
