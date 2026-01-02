/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/**/*.js',
        './resources/**/**/**/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php'
    ],
    // safelist: ['bg-green-500', 'bg-red-500'],
    theme: {
        extend: {
            fontFamily: {
                body: ['Inter', 'sans-serif']
            },
            colors: {
                bgLightColor: '#e5e7eb',
                textLightColor: '#0f172a',
                accentLightColor: '#3b82f6',
                textLightSecondaryColor: '#64748b',
                headingLightColor: '#1E293B',
                bgDarkColor: '#0f172a',
                textDarkColor: '#94a3b8',
                accentDarkColor: '#3b82f6',
                textDarkSecondaryColor: '#cbd5e1',
                headingDarkColor: '#cbd5e1'
            }
        }
    },
    plugins: []
}
