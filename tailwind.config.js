module.exports = {
    purge: [],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
        screens: {
            'pixel': '1px',
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px',
        },
        maxWidth: {
            'empty': '17.5rem',
        },
        minWidth: {
            '6': '6rem',
        },
        extend: {
            colors: {
                'gray-light': '#f2f2f2'
            },
            width: {
                '9/10': '90%',
                'box': '9.875rem',
                'price': '8.1875rem',
                'empty': '5.625rem',
                '70': '4.375rem'
            },
            height: {
                sm: '65px',
                70: '4.375rem',
            },
        },

    },
    variants: {
        extend: {},
    },
    plugins: [],
}