module.exports = {
    purge: [],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
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
                'empty': '5.625rem'
            },
            height: {
                sm: '65px',
            },
        },

    },
    variants: {
        extend: {},
    },
    plugins: [],
}