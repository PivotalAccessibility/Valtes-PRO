twind.install({
    hash: false,
    variants: [
        ['only-sm', '@media screen and (max-width: 768px)'],
        ['when-sm', '@media screen and (max-width: 768px)'],
        ['children', '& > *'],
        ['expanded', '&[aria-expanded="true"]'],
        ['focused', '.focused &'],
        ["selected", '&[aria-selected="true"]'],
        ["current", '&[aria-current="true"]'],
        ["scrolled", "&.scrolled"],
        ["touch", "@media (hover: none)"],
    ],
    theme: {
        container: {
            center: true,
            padding: {
                "DEFAULT": "1.5rem",
                "sm": "1.5rem",
                "md": "2.5rem",
                "lg": "2.5rem",
                "xl": "2.5rem",
                "2xl": "10rem",
            }
        },
        fontFamily: {
            display: ["Playfair Display"],
            body: ["Inter"]
        },
        extend: {
            colors: {
                "primary": "var(--color-primary)",
                "primary-100": "var(--color-primary-100)",
                "primary-800": "var(--color-primary-800)",
                "primary-900": "var(--color-primary-900)",
                "secondary": "var(--color-secondary)",
                "dark": "var(--color-dark)",
                "accent": "var(--color-accent)",
                "dark-green": "var(--color-dark-green)",
            },
            spacing: {
                "112": "28rem",
                "128": "32rem",
                "136": "34rem",
                "144": "36rem",
                "152": "38rem",
            },
            transitionTimingFunction: {
                'in-expo': 'cubic-bezier(0.95, 0.05, 0.795, 0.035)',
                'out-expo': 'cubic-bezier(0.19, 1, 0.22, 1)',
            },
            transitionDuration: {
                '400': '400ms',
            }
        },
    },
});
