const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    theme: {
        extend: {
            colors: {
                'navy': {
                    100: '#e6eaf3',
                    200: '#bfcbe1',
                    300: '#99accf',
                    400: '#4d6daa',
                    500: '#002f86',
                    600: '#002a79',
                    700: '#001c50',
                    800: '#00153c',
                    900: '#000e28',
                },
                'gray': {
                    100: '#e9eaea',
                    200: '#c9cbcc',
                    300: '#a8acad',
                    400: '#666e6f',
                    500: '#253031',
                    600: '#212b2c',
                    700: '#161d1d',
                    800: '#111616',
                    900: '#0b0e0f',
                },
                'blue': {
                    100: '#eaf2f6',
                    200: '#cadde7',
                    300: '#a9c9d9',
                    400: '#69a1bd',
                    500: '#2978a0',
                    600: '#256c90',
                    700: '#194860',
                    800: '#123648',
                    900: '#0c2430',
                },
                'gold': {
                    100: '#f8f7f2',
                    200: '#eeeade',
                    300: '#e4ddc9',
                    400: '#d0c4a1',
                    500: '#bcab79',
                    600: '#a99a6d',
                    700: '#716749',
                    800: '#554d36',
                    900: '#383324',
                },
                'cyan': {
                    100: '#f9fcff',
                    200: '#f1f7ff',
                    300: '#e8f3ff',
                    400: '#d7e9ff',
                    500: '#c6e0ff',
                    600: '#b2cae6',
                    700: '#778699',
                    800: '#596573',
                    900: '#3b434d',
                },
            },
            fontFamily: {
                serif: ["Roboto Slab", "serif"]
            },
            opacity: {
                '0': '0',
                '10': '0.10',
                '20': '0.20',
                '25': '0.25',
                '50': '0.5',
                '75': '0.75',
                '100': '1',
              },
        }
    },
    variants: {},
    plugins: []
};
