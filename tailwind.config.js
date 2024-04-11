import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', 'Nexa Bold', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage:{
                'greenwaves': "url('/public/assets/images/svg.png')"
            }
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin')
    ],
};
