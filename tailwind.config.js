import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './app/Enums/*.php',
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
                light_beige: {
                    '50': '#f7f5f2',
                    '100': '#f5f3ef',
                    '200': '#f3f1ec',
                    '300': '#f2efea',
                    '400': '#f0ede7',
                    '500': '#EFECE5',
                    '600': '#d7d4ce',
                    '700': '#bfbcb7',
                    '800': '#a7a5a0',
                    '900': '#8f8d89',
                    '950': '#777672',
                },
                teal: {
                    '50': '#afc4bd',
                    '100': '#9fb8b0',
                    '200': '#8fada3',
                    '300': '#7fa196',
                    '400': '#6f9589',
                    '500': '#608A7C',
                    '600': '#567c6f',
                    '700': '#4c6e63',
                    '800': '#436056',
                    '900': '#39524a',
                    '950': '#30453e',
                },
                deep_purple: {
                    '50': '#9d9ab6',
                    '100': '#8986a8',
                    '200': '#757299',
                    '300': '#625e8b',
                    '400': '#4e4a7c',
                    '500': '#3b366e',
                    '600': '#353063',
                    '700': '#2f2b58',
                    '800': '#29254d',
                    '900': '#232042',
                    '950': '#1d1b37',
                },
                dark_gray: {
                    '50': '#aba7ab',
                    '100': '#9a969a',
                    '200': '#89848a',
                    '300': '#787279',
                    '400': '#676168',
                    '500': '#575058',
                    '600': '#4e484f',
                    '700': '#454046',
                    '800': '#3c383d',
                    '900': '#343034',
                    '950': '#2b282c',
                },
                sand: {
                    '50': '#f7edd6',
                    '100': '#f6e9ce',
                    '200': '#f4e5c6',
                    '300': '#f3e2be',
                    '400': '#f1deb6',
                    '500': '#f0dbae',
                    '600': '#d8c59c',
                    '700': '#c0af8b',
                    '800': '#a89979',
                    '900': '#908368',
                    '950': '#786d57',
                },
                tan: {
                    '50': '#d4c5b4',
                    '100': '#cbbaa5',
                    '200': '#c2ae96',
                    '300': '#baa387',
                    '400': '#b19778',
                    '500': '#a98c6a',
                    '600': '#987e5f',
                    '700': '#877054',
                    '800': '#76624a',
                    '900': '#65543f',
                    '950': '#544635',
                },
                salmon: {
                    '50': '#e9ad9e',
                    '100': '#e59d8b',
                    '200': '#e08c77',
                    '300': '#dc7c64',
                    '400': '#d86c51',
                    '500': '#D45C3E',
                    '600': '#be5237',
                    '700': '#a94931',
                    '800': '#94402b',
                    '900': '#7f3725',
                    '950': '#6a2e1f',
                },
                ocher: {
                    '50': '#cfb099',
                    '100': '#c6a084',
                    '200': '#bc9170',
                    '300': '#b3815b',
                    '400': '#a97147',
                    '500': '#a06233',
                    '600': '#90582d',
                    '700': '#804e28',
                    '800': '#704423',
                    '900': '#603a1e',
                    '950': '#503119',
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

    plugins: [
        forms,
    ],
};
