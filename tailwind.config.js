const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'thunder': ['Thunder', ...defaultTheme.fontFamily.sans],
                'thunder-bold': ['ThunderBold', ...defaultTheme.fontFamily.sans],
                'thunder-thin-italic': ['ThunderThinIta', ...defaultTheme.fontFamily.sans],
                'thunder-italic': ['ThunderIta', ...defaultTheme.fontFamily.sans],
                'thunder-semibold': ['ThunderSemBd', ...defaultTheme.fontFamily.sans],
                'thunder-extralight': ['ThunderExtLt', ...defaultTheme.fontFamily.sans],
                'thunder-extralight-italic': ['ThunderExtLtIta', ...defaultTheme.fontFamily.sans],
                'thunder-light': ['ThunderLight', ...defaultTheme.fontFamily.sans],
                'thunder-black-italic': ['ThunderBlackIta', ...defaultTheme.fontFamily.sans],
                'thunder-extrabold-italic': ['ThunderExtBdIta', ...defaultTheme.fontFamily.sans],
                'thunder-extrabold': ['ThunderExtBd', ...defaultTheme.fontFamily.sans],
                'thunder-medium-italic': ['ThunderMedIta', ...defaultTheme.fontFamily.sans],
                'thunder-semibold-italic': ['ThunderSemBdIta', ...defaultTheme.fontFamily.sans],
                'thunder-light-italic': ['ThunderLightIta', ...defaultTheme.fontFamily.sans],
                'thunder-thin': ['ThunderThin', ...defaultTheme.fontFamily.sans],
                'thunder-black': ['ThunderBlack', ...defaultTheme.fontFamily.sans],
                'thunder-medium': ['ThunderMed', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'greenth': '#45D688',
                'mediumgreenth': '#3DA186',
                'darkgreenth': '#357484',
                'lightblueth': '#495FAF',
                'blueth': '#2A2E80',
                'cleanblueth': '#2E4681'
            }
        },
    },

    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
        require('@tailwindcss/aspect-ratio'),
    ],
};
