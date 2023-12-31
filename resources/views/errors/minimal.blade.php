<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="Sx17A6_E5qrIxU4_cWyFWfB_P5tWo3D1fKUo3MQEjGQ" />
    @yield('meta')

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



    {{-- css for slider --}}
    <style type="text/css">
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

        .navbar-logo a img {
          width: 300px;
          height: auto;
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

    </style>
    <style>

    .container.error {
      max-width: 600px;
      margin: 0 auto;
      text-align: center;
      padding: 50px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1.error {
      font-size: 36px;
      color: #333;
      margin-bottom: 20px;
    }

    p.error {
      font-size: 18px;
      color: #666;
      margin-bottom: 30px;
    }

    a.error {
      color: #fff;
      background-color: #4CAF50;
      border: none;
      padding: 10px 20px;
      text-decoration: none;
      font-size: 16px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    a.error:hover {
      background-color: #45a049;
    }


    ul.error {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }
    ul.error li.error {
      margin-bottom: 20px;
    }



    input.error[type="text"],
    button.error[type="submit"] {
      padding: 10px;
      font-size: 16px;
      border-radius: 4px;
      border: 1px solid #ddd;
    }

    button.error[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button.error[type="submit"]:hover {
      background-color: #45a049;
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



    {{-- fontawesome packages --}}
    <script src="https://kit.fontawesome.com/b6e54b3865.js" crossorigin="anonymous"></script>

</head>



<body>
    @if (!request()->routeIs('privacy'))
        @include('layouts.navbar')
    @endif

    
    <div class="container error">
        <h1 class="error">@yield('code')</h1>
        <p class="error">@yield('message')</p>
        <ul class="error">
          <li class="error">Go back to the <a href="/">homepage</a></li>
        </ul>
    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.16.0/lozad.min.js" integrity="sha512-21jyjW5+RJGAZ563i/Ug7e0AUkY7QiZ53LA4DWE5eNu5hvjW6KUf9LqquJ/ziLKWhecyvvojG7StycLj7bT39Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

        $(document).on("click", ".down-icon", function(e) {
            e.preventDefault();
        })

        function Sliddde(o) {
            console.log('slide')
            const e = o.target.value;
            $(".foreground-img").css("width", e + "%"), $(".slider-button").css("left", `calc(${e}% - 18px)`);
        }
    </script>

</body>

</html>
