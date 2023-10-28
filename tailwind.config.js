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
                oak: {
                    '50': '#a19996',
                    '100': '#8e8481',
                    '200': '#7c706c',
                    '300': '#695b56',
                    '400': '#564742',
                    '500': '#44332D',
                    '600': '#3d2d28',
                    '700': '#362824',
                    '800': '#2f231f',
                    '900': '#281e1b',
                    '950': '#221916',
                },
                wine: {
                    '50': '#c29b9e',
                    '100': '#b6878b',
                    '200': '#aa7377',
                    '300': '#9e5e64',
                    '400': '#924b51',
                    '500': '#86373E',
                    '600': '#783137',
                    '700': '#6b2c31',
                    '800': '#5d262b',
                    '900': '#502125',
                    '950': '#431b1f',
                },
                ocher: {
                    '50': '#f4d480',
                    '100': '#f3ce6d',
                    '200': '#f1c75b',
                    '300': '#f0c149',
                    '400': '#eebb37',
                    '500': '#edb525',
                    '600': '#ebaf13',
                    '700': '#d9a112',
                    '800': '#c79410',
                    '900': '#b5860f',
                    '950': '#a3790d',
                },
                orange: {
                    '50': '#f8debb',
                    '100': '#f6d7ae',
                    '200': '#f5d0a0',
                    '300': '#f3ca93',
                    '400': '#f2c385',
                    '500': '#f1bd78',
                    '600': '#d8aa6c',
                    '700': '#c09760',
                    '800': '#a88454',
                    '900': '#907148',
                    '950': '#785e3c',
                },
                skin: {
                    '50': '#f7ece3',
                    '100': '#f5e8dd',
                    '200': '#f3e4d7',
                    '300': '#f2e0d2',
                    '400': '#f0dccc',
                    '500': '#EFD9C7',
                    '600': '#d7c3b3',
                    '700': '#bfad9f',
                    '800': '#a7978b',
                    '900': '#8f8277',
                    '950': '#776c63',
                },
                beige: {
                    '50': '#fafaed',
                    '100': '#f9f9ea',
                    '200': '#f8f8e6',
                    '300': '#f7f7e3',
                    '400': '#f6f6df',
                    '500': '#F5F5DC',
                    '600': '#dcdcc6',
                    '700': '#c4c4b0',
                    '800': '#abab9a',
                    '900': '#939384',
                    '950': '#7a7a6e',
                },
            },
        },
    },

    plugins: [forms],
};
