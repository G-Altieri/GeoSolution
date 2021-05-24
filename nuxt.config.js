export default {
    server: {
        port: 7000, // default: 3000
        host: '0.0.0.0', // default: localhost,
        timing: false
    },
    // Disable server-side rendering: https://go.nuxtjs.dev/ssr-mode
    ssr: false,
    target: 'static',
    // Global page headers: https://go.nuxtjs.dev/config-head
    head: {
        title: 'GeoSolution',
        htmlAttrs: {
            lang: 'it'
        },
        meta: [{
                charset: 'utf-8'
            },
            {
                name: 'viewport',
                content: 'width=device-width, initial-scale=1'
            },
            {
                hid: 'description',
                name: 'description',
                content: ''
            }
        ],
        link: [{
            rel: 'icon',
            type: 'image/x-icon',
            href: 'logo.ico'
        }]
    },

    // Global CSS: https://go.nuxtjs.dev/config-css
    css: [
        '~/assets/css/main.css',
        '~/assets/font/Poppins.css',
        //'vue-slick-carousel/dist/vue-slick-carousel-theme.css',
        //'vue-slick-carousel/dist/vue-slick-carousel.css',
    ],

    // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
    plugins: [
        /*Plugin media query */

        '~/plugins/vueMq',

        //carosello

        '~/plugins/vue-slick-carousel.js',


        {
            src: '~plugins/vue-magic-scroll.js',
            ssr: false
        },
        {
            src: '~plugins/vue-waypoint.js',
            ssr: false,
            mode: 'client'
        },



    ],

    // Auto import components: https://go.nuxtjs.dev/config-components
    components: true,

    // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
    buildModules: [
        // https://go.nuxtjs.dev/tailwindcss
        '@nuxtjs/tailwindcss',


        //Anime js 
        ['nuxt-animejs'],



    ],
    // Add global page transition
    pageTransition: {
        name: 'page',
        mode: 'out-in',
        css: false,

        beforeEnter(el) {
            this.$anime.set(el, {
                opacity: 0
            })
        },

        enter(el, done) {
            this.$anime({
                targets: el,
                opacity: [0, 1],
                duration: 500,
                easing: 'easeInOutSine',
                complete: done
            })
        },

        leave(el, done) {
            this.$anime({
                targets: el,
                opacity: [1, 0],
                duration: 500,
                easing: 'easeInOutSine',
                complete: done
            })
        }
    },

    // Modules: https://go.nuxtjs.dev/config-modules
    modules: [
        '@nuxtjs/axios',
        //Libreria per la gestione delle lingue
        ['nuxt-i18n', {
            lazy: true,
            locales: [{
                    name: 'Italiano',
                    code: 'it',
                    iso: 'it-IT',
                    file: 'it-IT.js'
                },
                {
                    name: 'Inglese',
                    code: 'en',
                    iso: 'en-US',
                    file: 'en-US.js'
                },
                {
                    name: 'Spagnolo',
                    code: 'es',
                    iso: 'es-ES',
                    file: 'es-ES.js'
                },
            ],
            langDir: 'lang/',
            defaultLocale: 'it',
        }],

    ],

    // Build Configuration: https://go.nuxtjs.dev/config-build
    build: {}
}