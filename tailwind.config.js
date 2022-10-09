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
                '90' : '90px',
                '64' : '64px',
                '58' : '58px',
                '32' : '32px',
                '11' : '11px',

            },

            borderWidth: {
                '10' : '10px'
            },

            backgroundColor: {
                'Blue1'     : '#00283A',
                'Blue'      : '#48C5E8',
                'darkGrey'  : '#00151F',
                'green'     : '#59c378'
            },

            textColor: {
                'Yellow'    : '#FFE600',
                'green'     : '#59c378',
                'darkGrey'  : '#00151F',
                'grey'      : '#919ca1', 
                'white2'    : '#fcfcfe' 
            },

            borderColor: {
                'Blue1'     : '#00283A',
                'darkBlue'  : '#02162B',
                'darkGrey'  : '#00151F'
            },

            maxWidth: {
                '1170' : '1170px'
            },
            width: {
                '500' : '500px',
                '110' : '110px',
                '70' : '70px',
                '50' : '50px'
            },
            height: {
                '500' : '500px',
                '110' : '110px',
                '70' : '70px',
                '50' : '50px'
            },
            padding: {
                '130' : '130px'
            },
            margin: {
                '88': '88px'
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
