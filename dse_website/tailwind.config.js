module.exports = {
    purge: [],
    theme: {
        container: {
            center: true,
        },
        extend: {
            width: {
                '96' : '24rem'
            },
            transformOrigin: {
                "0": "0%",
            },
            zIndex: {
                "-1": "-1",
            },
            colors: {
                colorPrimay : '#02a2dc',
                colorPrimaryDark : '#0184b4',
                light : '#f3f3f3'
            },
        },
    },
    variants: {
        borderColor: ['responsive', 'hover', 'focus', 'focus-within'],
    },
}
