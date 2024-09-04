import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors:{
                'allblue': '#465E84',
                'blueberry': '#15253F',
                'steelblue': '#435D86',
                'genericwhite': '#FFFFFF',
                'stormblue': '#2C3D5B',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],

            },
            fontFamily: {
                Montserrat: ['Montserrat', 'system-ui'],
            },
            fontWeight: {
                'thin': '100',
                'extra-light': '200',
                'light': '300',
                'normal': '400',
                'medium': '500',
                'semi-bold': '600',
                'bold': '700',
                'extra-bold': '800',
                'black': '900',
              },
        },
    },

    plugins: [forms],
};
