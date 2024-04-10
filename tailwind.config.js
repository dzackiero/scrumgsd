/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', 'sans-serif'],
            },
            colors: {
                'primary': {
                    '50': '#e9f3ff',
                    '100': '#d7eaff',
                    '200': '#b7d7ff',
                    '300': '#8cbbff',
                    '400': '#5f90ff',
                    '500': '#3b66ff',
                    '600': '#1939ff',
                    '700': '#0e2af4',
                    '800': '#0f28c4',
                    '900': '#172d9d',
                    '950': '#0d1759',
                },
                'secondary': {
                    '50': '#eff9ff',
                    '100': '#def2ff',
                    '200': '#b6e8ff',
                    '300': '#75d7ff',
                    '400': '#2cc4ff',
                    '500': '#00a9f2',
                    '600': '#008ad4',
                    '700': '#006eab',
                    '800': '#005c8d',
                    '900': '#064d74',
                    '950': '#04314d',
                },

            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
        require('tailwind-scrollbar')({nocompatible: true}),
    ],
}

