import defaultTheme from 'tailwindcss/defaultTheme';


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
                jakarta: ['"Plus Jakarta Sans"', 'serif'],
            },
            colors: {
                primary: '#3F302B',
                secondary: '#FFEFE2',
                icon: {
                    green: '#E5E7EB',
                    purple: '#4B5563',
                    brown: '#4B5563',
                },
            }
        },
    },
    plugins: [],
}
