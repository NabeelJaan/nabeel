const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),

            fontSize: {
                '58px' : '58px'
            },

            borderWidth: {
                '10' : '10px'
            },

            backgroundColor: {
                'Blue1'     : '#00283A',
                'darkBlue'  : '#02162B',
                'darkGrey'  : '#00151F',
                'green'     : '#70BA65'
            },

            textColor: {
                'Blue1'     : '#00283A',
                'darkBlue'  : '#02162B',
                'darkGrey'  : '#00151F',
                'grey'      : '#919ca1', 
                'white2'    : '#fcfcfe' 
            },

            borderColor: {
                'Blue1'     : '#00283A',
                'darkBlue'  : '#02162B',
                'darkGrey'  : '#00151F'
            }
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};
