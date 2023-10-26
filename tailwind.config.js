import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors';
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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                orange: {
                    '50': '#ffd9a3',
                    '100': '#ffd190',
                    '200': '#ffc97e',
                    '300': '#ffc26b',
                    '400': '#ffba59',
                    '500': '#FFB347',
                    '600': '#e5a13f',
                    '700': '#cc8f38',
                    '800': '#b27d31',
                    '900': '#996b2a',
                    '950': '#7f5923',
                },
            },
        },
    },

    plugins: [forms],
};
