module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        letterSpacing: {
            widest: '1.25rem',
        },
        container: {
            center: true,
        },
        extend: {
            backgroundImage: {
                'desktop-dark': "url('/images/bg-desktop-dark.jpg')",
                'desktop-light': "url('/images/bg-desktop-light.jpg')",
                'mobile-dark': "url('/images/bg-mobile-dark.jpg')",
                'mobile-light': "url('/images/bg-mobile-light.jpg')",
            },
            backgroundSize: {
                '100%': '100%',
            }
        },
    },
    plugins: [require('@tailwindcss/forms')],
    darkMode: 'class',
}
