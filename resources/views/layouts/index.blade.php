<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    {{-- <meta name="robots" content="noindex,nofollow,nocrawl"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="Sx17A6_E5qrIxU4_cWyFWfB_P5tWo3D1fKUo3MQEjGQ" />
    @yield('meta')


    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "MaidBrite Cleaners",
          "address": {
          "@type": "PostalAddress",
          "streetAddress": "73 Sheridan avenue",
          "addressLocality": "Brooklyn",
          "addressRegion": "NY",
          "postalCode": "11208",
          "addressCountry": "USA"
          },
          "telephone": ["+19179053058", "+12129209013"],
          "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
          ],
          "opens": "09:00",
          "closes": "21:00"
          },
          "priceRange": "$$",
          "currenciesAccepted": "USD",
          "paymentAccepted": "Cash, Credit Card",
          "description": "MaidBrite Cleaners is a professional cleaning service provider located in New York, NY. Our company specializes in delivering exceptional cleaning services to both homes and offices in the region. Our comprehensive range of services includes regular cleaning, deep cleaning, move-in/move-out cleaning, and many more, all performed with top-notch professionalism and expertise.",
          "url": "https://Maidbritecleaners.com"
        }
    </script>

    @yield('schema')


    {{-- fonts --}}
    <link rel="stylesheet" href="{{ asset('assets/fonts/lato/stylesheet.css') }}">



    {{-- boostrap css packages --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- aos css packages --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{--  swiper js css packages --}}
    <script type="ee8302ee409abadaa2320414-text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.min.css"
        integrity="sha512-qKRrPbwf0yKAsKZGGfiNjmd66a7GtkLhLqTqH9boYbDPgUQmDw0mGXfC3HlkbEFEw3HjNmSaS9SR/d07ZXOUVw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('preload')



    {{-- custom css file  --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/utiles.css') }}" />



    {{--  navbar css file --}}
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />


    {{-- navbar --}}
    <style>
        .btn.btn-primary {
            color: white;
            background-color: #2baf38;
            border-color: unset;
        }

        /* CSS styling for the map container */
        #map {
            height: 450px;
            width: 100%;
        }

        #reviews .review .stars {
            color: #ffc122;
            display: block;
            text-shadow: 1px 1px 1px grey;
            text-align: left;
        }

        .stars>i {
            font-size: 14px;
        }

        #reviews .review .text {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 85%;
        }

        #reviews .review {
            margin-bottom: 32px;
        }

        .slide-content-wrapper {
            display: inline;
        }

        .tab-content.coupons-container#nav-tabContent {
            max-height: 330px;
        }

        @media (max-width: 991px) {
            .nav-active {
                background: #2596be !important;
            }

            .navbar-menu {
                padding: 0 !important;
            }

            .navbar-menu li {
                margin: 0 !important;
                padding: 6px;
                border-bottom: 1px solid #eeeeee85;
            }


            .custom-arrow:after {
                content: "";
                display: block;
                position: absolute;
                background-size: 0;
                border-left: 12px solid transparent;
                border-right: 12px solid transparent;
                border-top: 12px solid #3bd4ff;
                position: absolute;
                content: "";
                top: 22px;
                right: 18px;
                width: 0;
                height: 0;
                background-image: none;
                -webkit-transition: all 0.4s ease-in-out;
                -moz-transition: all 0.4s ease-in-out;
                -o-transition: all 0.4s ease-in-out;
                -ms-transition: all 0.4s ease-in-out;
                transition: all 0.4s;
                cursor: pointer;
            }

            .sub-menu-service-btn {
                display: block;
                height: 100%;
                width: 60px;
                position: absolute;
                right: 0;
                top: 0;
            }

            .toggle-up-down-sub-icon::after {
                transition: all 0.4s;
                transform: scale(-1);
            }

            .project {
                background-color: #4f709c;
                margin-top: 9px;
            }

            .container-fluid.mobb {
                background-color: transparent;
            }

            .drop-item {
                border-bottom: 1px solid #eeeeee85 !important;
                padding-bottom: 6px !important;
                padding-top: 6px !important;
            }

            .drop-item>a {
                color: #fff;
                font-weight: 500 !important;
                font-size: 18px !important;
                display: inline-block;
                width: 100%;
            }

            .menu-icon-wrapper {
                position: relative;
                display: inline-block;
                width: 40px;
                height: 40px;
                pointer-events: none;
                -webkit-transition: 0.1s;
                transition: 0.1s;
            }

            .menu-icon-wrapper svg {
                -webkit-transform: scale(0.1);
                -ms-transform: scale(0.1);
                transform: scale(0.1);
                -webkit-transform-origin: 0 0;
                -ms-transform-origin: 0 0;
                transform-origin: 0 0;
            }

            .menu-icon-wrapper svg {
                position: absolute;
                top: -33px;
                left: -33px;
            }

            .menu-icon-wrapper svg path {
                stroke: #2f2c2c;
                stroke-width: 30px;
                stroke-linecap: round;
                fill: transparent;
            }

            .showhide {

                cursor: pointer;
                text-align: center;
                padding: 0;
                display: inline-block;
                float: right;
                text-decoration: none;
                outline: none;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                -webkit-tap-highlight-color: transparent;
                position: relative;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding-left: 10px;
                padding-right: 16px;
                overflow: hidden;
            }

            .project {
                background-color: #4f709c;
                margin-top: 9px;
                margin-left: -6px;
                margin-bottom: -6px;
                margin-right: -6px;
            }

            .container-fluid.mobb {
                background-color: transparent;
            }


            .navbar-menu li a {
                font-weight: 400 !important;
            }

            .drop-item {
                border-bottom: 0px !important;
            }
        }

        .slide-content-wrapper .slide-content p {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>



    {{-- css for slider --}}
    <style type="text/css">
        /* we offer section  */
        .we-off-sec-lady-img {
            background-image: url(../assets/images/consider-it-clean-happy-young-woman-cleaning-lad-2021-10-26-01-42-28-utc-min.webp);
            width: 385px;
            height: 350px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 100%;
        }

        @media(min-width:940px) {
            .we-off-sec-lady-img {
                width: 100%;
                height: 100%;
                background-position: 60%;
            }
        }

        @media(min-width:1348px) {
            .we-off-sec-lady-img {
                background-position: 130%;
            }
        }

        .service-container-img {
            justify-content: center !important;
        }

        /* for navbar  */


        @media (max-width: 991px) {
            .navbar-menu li a {
                padding: 6px 8px 5px 7px !important;
                font-size: 20px;
                text-align: left;
                font-weight: 600;
            }
        }

        .trusted-swiper-btn-prev {
            position: static !important;
            color: #000 !important;
            background: transparent !important;
        }

        .swiper-button-prev,
        .swiper-button-next {
            top: 50%;
            width: 30px;
            height: 30px;
            margin-top: -15px;
            z-index: 10;
        }

        .swiper-button-prev {
            left: 10px;
        }

        .swiper-button-next {
            right: 10px;
        }

        .swiper-slide {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .slide-content {
            text-align: center;
        }

        .slide-content h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .slide-content p {
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .slide-content a {
            font-size: 1rem;
            color: blue;
        }

        .swiper-slide img {
            border-radius: 30px;
        }

        .swiper-slide-inner {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 50px;
            margin-top: -20px;
        }

        .slide-content-wrapper {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }

        .slide-content-wrapper img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .marg-left {
            margin-left: 20px;
        }

        .marg-right {
            margin-left: 20px;
        }


        @media screen and (max-width: 768px) {
            .slide-content {
                margin-top: 1rem;
            }

            .swiper-button-next,
            .swiper-button-prev {
                top: 55vw !important;
            }
        }

        .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            top: var(--swiper-navigation-top-offset, 50%);
            width: calc(var(--swiper-navigation-size)/ 44 * 27);
            height: var(--swiper-navigation-size);
            margin-top: calc(0px - (var(--swiper-navigation-size)/ 2));
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            position: absolute;
            top: 23vw;
            margin: 0;
            margin-top: 0px;
            margin-top: 0px;
            width: 2.400rem !important;
            height: 2.400rem !important;
            background-repeat: no-repeat;
            background-color: #4078bc;
            background-size: auto 75%;
            background-position: center;
            border-radius: 8px 0 0 8px;
            transition: width .3s ease;
            opacity: 1;
            z-index: 2;
            cursor: pointer;
        }

        .swiper-button-prev {
            transform: scale(-1);
        }

        :root {
            --swiper-navigation-size: 25px;
            font-weight: 900;
        }



        .swiper-button-prev::after {
            transform: scale(-1);
        }

        .video-container {
            position: absolute;
            width: 100%;
            height: 100%;
            padding-bottom: 31.85%;
            overflow: hidden;
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            object-position: center;
            object-fit: cover;
        }
    </style>






    <style type="text/css">
        @media (min-width: 992px) {
            .drop-item a {
                color: inherit !important;
                text-decoration: underline 0.15em rgba(255, 255, 255, 0) !important;
                transition: text-decoration-color 300ms !important;
                text-underline-offset: 5px !important;
            }

            .drop-item a:hover {
                text-decoration-color: rgba(255, 255, 255, 1) !important;
            }
        }




        @media(max-width: 992px) {
            .down-icon::before {
                top: 0px;
                right: 0px;
                content: "";
                font-family: FontAwesome;
                font-style: normal;
                font-weight: normal;
                text-decoration: inherit;
                font-size: 25px;
                font-weight: lighter;
                left: auto;
                position: absolute;
                transition: all 0.4s;

            }



            .up-icon::before {
                transition: all 0.4s;
                transform: scale(-1);
            }

            /* make nav fixed on mobile (menu toggle) */
            .mobile-fixed-nav {
                position: fixed;
                top: 0;
                z-index: 9999;
            }

        }

        .btn.btn-primary strong {
            font-family: "latobold" !important;
        }

        @media (min-width: 991px) {
            nav .dropdown .project {
                transform: translateX(-300px) translateY(5px);
            }
        }

        .navbar-logo a img {
            width: 260px;
            height: auto;
        }

        .w-img-250 {
            width: 260px;
            height: auto;
        }
    </style>

    @if (request()->is('services/*'))
        <style type="text/css">
            .main-content-section h2 {
                font-family: "latobold" !important;
                font-size: 1.2rem;
            }

            @media(min-width: 1000px) {

                .main-content-section h2,
                .main-content-section p {
                    padding-left: 18rem;
                    padding-right: 16rem;
                }
            }
        </style>
    @endif
    @yield('css')


    <style type="text/css">
   
   .banner {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            background-color: lightgray;
        }

        .left-half {
            flex: 1;
            padding: 20px;
            text-align: left;
        }

        .right-half {
            flex: 1;
            background-color: #ddd;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
        }

        h2 {
            margin-top: 0;
        }

        form {
            /* Styles for the CTA form */
        }

        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right-half img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .banner {
                flex-direction: column;
            }

            .right-half {
                margin-top: 0;
            }
        }

        @media (min-width: 769px) and (max-width: 1160px) {
            .left-half {
                text-align: center;
            }

            video {
                height: 100vh;
            }
        }

        @media (min-width:772px) and (max-width:1136px) {
            .vid_wen_dksd_99 {
                height: auto;
            }
        }
        @media(min-width:1161px) {
            .right-half {
                height: 420px;
            }
        }
    </style>



    {{-- fontawesome packages --}}
    <script src="https://kit.fontawesome.com/b6e54b3865.js" crossorigin="anonymous"></script>

</head>



<body>
    @if (!request()->routeIs('privacy'))
        @include('layouts.navbar')
    @endif

    @yield('content')

    @if (!request()->routeIs('privacy'))
        @include('layouts.footer')
    @endif




    {{-- jquery packages --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    {{-- bootstrap packages --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>




    {{-- lazy loading packages --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.16.0/lozad.min.js"
        integrity="sha512-21jyjW5+RJGAZ563i/Ug7e0AUkY7QiZ53LA4DWE5eNu5hvjW6KUf9LqquJ/ziLKWhecyvvojG7StycLj7bT39Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    {{-- swiperjs packages  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.min.js"
        integrity="sha512-hJrV+LKHbu+Hxkn/+ZwGOCMUkap0ZfjJbca9WT38z69+MYmRzMlvUd401TOs1b4byAm4fGDESpEcCbG2A6cibQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    {{-- custom js file --}}
    @if (!request()->routeIs('privacy'))
        <script src="{{ asset('js/main.js') }}"></script>
    @endif



    {{-- swiper script for sliders --}}
    <script type="text/javascript">
        if ($(window).width() <= 768) {
            // Update and reinitialize Swiper
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 1,
                initialSlide: 12,
                // spaceBetween:20,
                centeredSlides: true,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '#swiper-button-next',
                    prevEl: '#swiper-button-prev',
                    // spaceBetween:20,
                },
                breakpoints: {
                    1148: {
                        slidesPerView: 3,

                    }
                },
                pagination: {
                    el: false,
                }
            });
        } else {
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 1,
                /*initialSlide: 12,*/
                // spaceBetween:20,
                centeredSlides: true,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '#swiper-button-next',
                    prevEl: '#swiper-button-prev',
                    // spaceBetween:20,
                },
                breakpoints: {
                    1148: {
                        slidesPerView: 3,

                    }
                },
                pagination: {
                    el: false,
                }
            });
        }

        var swiper2 = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            keyboard: {
                enabled: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    {{-- animation and lazyload scripts --}}
    <script type="text/javascript">
        // lazyload img
        // const observer = lozad(".lazy"); // lazy loads elements with selector as '.lazy'
        // observer.observe();

        // import lightGallery from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.3";
        // import lgZoom from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.3/plugins/zoom";
        // window.lgallery = lightGallery(document.getElementById("light_gallery"), {
        //     speed: 500,
        //     plugins: [lgZoom],
        //     mobileSettings:{
        //         controls: true,
        //         showCloseIcon: true,
        //     }
        // });
        document.addEventListener("DOMContentLoaded", function() {

            const observer = lozad('.lozad', {
                rootMargin: '100px 0px', // Apply a 100px margin around the viewport
                threshold: 0.1, // Load images when they are 10% visible
                loaded: function(el) {
                    // Add a class to mark the image as loaded
                    el.classList.add('loaded');
                }
            });
            observer.observe();

            // Initialize AOS
            AOS.init({
                duration: 1000
            });
        });


        $(document).on("click", ".up-icon", function(e) {
            e.preventDefault();
        })

        $(document).on("click", "#myitem1", function(e) {
            e.preventDefault();
        })

        function Sliddde(o) {
            console.log('slide')
            const e = o.target.value;
            $(".foreground-img").css("width", e + "%"), $(".slider-button").css("left", `calc(${e}% - 18px)`);
        }
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        function showAlert(title /*, text*/ ) {
            swal({
                title: title,
                text: "{!! implode(' ', $errors->all()) !!}",
                icon: "error"
            });
        }
    </script>

    @if ($errors->any())
        <script type="text/javascript">
            showAlert("Error");
        </script>
    @endif

    <script type="text/javascript">
        function showAlertSuccess(title) {
            swal({
                title: title,
                text: "{{ session()->get('message') }}",
                icon: "success"
            });
        }
    </script>
    @if (session()->has('message'))
        <script type="text/javascript">
            showAlertSuccess("Success");
        </script>
    @endif
    {{-- add your components js --}}
    @yield('js')




</body>

</html>
