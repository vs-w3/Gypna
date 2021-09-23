const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                nunito: ["nunito", "sans-serif"],
                SegoeUI: ["Segoe UI"],
                helvectaNeue75: ["Helvecta Neue"],
                limelight: ["limelight"],
                inter: ["inter"],
                alk: ["alk"],
            },
            borderRadius: {
                "4xl": "5rem",
            },
            textColor: {
                'g-green-600': '#234821',
                'g-green-500': '#5BB250',
                'g-green-400': '#BEE2B9',
                'g-green-300': '#DEF5DB',
                'g-green-200': '#e9fae4',
                'g-green-100': '#F7FFF6',
            },
            backgroundColor: {
                'g-green-600': '#234821',
                'g-green-500': '#5BB250',
                'g-green-400': '#BEE2B9',
                'g-green-300': '#DEF5DB',
                'g-green-200': '#e9fae4',
                'g-green-100': '#F7FFF6',
            },
            borderColor: {
                'g-green-600': '#234821',
                'g-green-500': '#5BB250',
                'g-green-400': '#BEE2B9',
                'g-green-300': '#DEF5DB',
                'g-green-200': '#e9fae4',
                'g-green-100': '#F7FFF6',
            },
            display: ['hover', 'focus', 'group-hover']
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require('@tailwindcss/aspect-ratio'),
    ],
};
