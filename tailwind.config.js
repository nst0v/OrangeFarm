import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./resources/**/*.{js,vue,blade.php}",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    light: '#FFFAF0', // Светлый фон
                    DEFAULT: '#F97316', // Основной оранжевый цвет
                    dark: '#C2410C', // Темный акцент
                },
                secondary: {
                    light: '#D4EDDA', // Мягкий зеленый для фона
                    DEFAULT: '#5CB85C', // Зеленый акцент
                    dark: '#3A834A', // Темный зеленый для кнопок
                },
                neutral: {
                    light: '#F3F4F6', // Светлый серый для фона
                    DEFAULT: '#6B7280', // Текстовый цвет
                    dark: '#111827', // Темный для заголовков
                },
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'hero-pattern': "url('/images/hero-bg.jpg')", // Для основного блока с домами
                'milk-pattern': "url('/images/milk-bg.jpg')", // Для раздела молока
                'decor-pattern': "url('/images/decor-bg.jpg')", // Для раздела с декором
            },
        },
    },
    plugins: [],
};
