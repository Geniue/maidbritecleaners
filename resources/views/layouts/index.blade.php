<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="robots" content="noindex,nofollow,nocrawl"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/images/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('assets/images/favicon/safari-pinned-tab.svg')}}" color="#1d4528">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    @yield('meta')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "MaidBrite Cleaning Services",
          "address": {
          "@type": "PostalAddress",
          "streetAddress": "7 Marcus Garvey Blvd #406",
          "addressLocality": "Brooklyn, NY 11206",
          "addressRegion": "NY",
          "postalCode": "11206",
          "addressCountry": "USA"
          },
          "telephone": "212-951-0342",
          "email" : "sales@maidbritecleaners.com",
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
          "description": "MaidBrite Cleaning Services provides exceptional, top-notch commercial and residential cleaning services to the NYC area. We offer a variety of services including house cleaning services, post construction cleaning, move in/out cleaning, apartment cleaning, maid cleaning, house keeping, deep cleaning and more!",
          "url": "https://Maidbritecleaners.com"
        }
    </script>
    @yield('schema')
    {{-- preconnect --}}
    <link rel="preconnect"
    href="https://cdnjs.cloudflare.com"/>
    {{-- fonts --}}
    <link rel="stylesheet" href="{{ asset('assets/fonts/lato/stylesheet.css') }}">
     {{-- boostrap css packages --}}
            <link rel="preload" 
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
            integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" 
            as="style" onload="this.onload=null; this.rel='stylesheet'" />
        <noscript><link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" /></noscript>
        {{--  swiper js css packages --}}
            <link rel="preload" 
            href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.min.css"
            integrity="sha512-qKRrPbwf0yKAsKZGGfiNjmd66a7GtkLhLqTqH9boYbDPgUQmDw0mGXfC3HlkbEFEw3HjNmSaS9SR/d07ZXOUVw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" 
            as="style" onload="this.onload=null; this.rel='stylesheet'" />
        <noscript><link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.min.css" /></noscript>
    @yield('preload')
    {{-- custom css file  --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/utiles.css') }}" />
    {{--  navbar css file --}}
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
        <style>
            .footer-1-container__Service-links > span > a {
                 text-decoration: none;
                 color: #fff;
                 display: inline-block;
            }
            .footer-1-container__Service-links > span > a:hover {
                color: #2baf38;
                /* padding: 100px; */
            }
            .responsive-image {
                max-width: 100%;
                height: auto;
            }
        </style>

    {{-- navbar --}}
    <style>
        h1{font-weight:900}.btn.btn-primary{color:#fff;background-color:#2baf38;border-color:unset}#map{height:450px;width:100%}#reviews .review .stars{color:#ffc122;display:block;text-shadow:1px 1px 1px grey;text-align:left}.stars>i{font-size:14px}#reviews .review .text{display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;text-overflow:ellipsis;font-size:85%}#reviews .review{margin-bottom:32px}.slide-content-wrapper{display:inline}.tab-content.coupons-container#nav-tabContent{max-height:330px}@media (max-width:991px){.nav-active{background:#2596be!important}.navbar-menu{padding:0!important}.navbar-menu li{margin:0!important;padding:6px;border-bottom:1px solid #eeeeee85}.custom-arrow:after{content:"";display:block;position:absolute;background-size:0;border-left:12px solid transparent;border-right:12px solid transparent;border-top:12px solid #3bd4ff;position:absolute;content:"";top:22px;right:18px;width:0;height:0;background-image:none;-webkit-transition:all 0.4s ease-in-out;-moz-transition:all 0.4s ease-in-out;-o-transition:all 0.4s ease-in-out;-ms-transition:all 0.4s ease-in-out;transition:all 0.4s;cursor:pointer}.sub-menu-service-btn{display:block;height:100%;width:60px;position:absolute;right:0;top:0}.toggle-up-down-sub-icon::after{transition:all 0.4s;transform:scale(-1)}.project{background-color:#4f709c;margin-top:9px}.container-fluid.mobb{background-color:transparent}.drop-item{border-bottom:1px solid #eeeeee85!important;padding-bottom:6px!important;padding-top:6px!important}.drop-item>a{color:#fff;font-weight:500!important;font-size:18px!important;display:inline-block;width:100%}.menu-icon-wrapper{position:relative;display:inline-block;width:40px;height:40px;pointer-events:none;-webkit-transition:0.1s;transition:0.1s}.menu-icon-wrapper svg{-webkit-transform:scale(.1);-ms-transform:scale(.1);transform:scale(.1);-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0}.menu-icon-wrapper svg{position:absolute;top:-33px;left:-33px}.menu-icon-wrapper svg path{stroke:#2f2c2c;stroke-width:30px;stroke-linecap:round;fill:transparent}.showhide{cursor:pointer;text-align:center;padding:0;display:inline-block;float:right;text-decoration:none;outline:none;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-tap-highlight-color:transparent;position:relative;width:100%;height:100%;display:flex;justify-content:center;align-items:center;padding-left:10px;padding-right:16px;overflow:hidden}.project{background-color:#4f709c;margin-top:9px;margin-left:-6px;margin-bottom:-6px;margin-right:-6px}.container-fluid.mobb{background-color:transparent}.navbar-menu li a{font-weight:400!important}.drop-item{border-bottom:0px!important}}.slide-content-wrapper .slide-content p{display:-webkit-box;-webkit-line-clamp:4;-webkit-box-orient:vertical;overflow:hidden;text-overflow:ellipsis}.we-off-sec-lady-img{background-image:url(../assets/images/consider-it-clean-happy-young-woman-cleaning-lad-2021-10-26-01-42-28-utc-min.webp);width:385px;height:350px;background-repeat:no-repeat;background-size:cover;background-position:100%}@media(min-width:940px){.we-off-sec-lady-img{width:100%;height:100%;background-position:60%}}@media(min-width:1348px){.we-off-sec-lady-img{background-position:130%}}.service-container-img{justify-content:center!important}@media (max-width:991px){.navbar-menu li a{padding:6px 8px 5px 7px!important;font-size:20px;text-align:left;font-weight:600}}.trusted-swiper-btn-prev{position:static!important;color:#000!important;background:transparent!important}.swiper-button-prev,.swiper-button-next{top:50%;width:30px;height:30px;margin-top:-15px;z-index:10}.swiper-button-prev{left:10px}.swiper-button-next{right:10px}.swiper-slide{display:flex;flex-direction:column;justify-content:center;align-items:center}.slide-content{text-align:center}.slide-content h3{font-size:1.5rem;margin-bottom:.5rem}.slide-content p{font-size:1rem;margin-bottom:1rem}.slide-content a{font-size:1rem;color:blue}.swiper-slide img{border-radius:30px}.swiper-slide-inner{border:1px solid #ccc;padding:15px;margin:50px;margin-top:-20px}.slide-content-wrapper{width:80%;margin:0 auto;text-align:center}.slide-content-wrapper img{display:block;margin:0 auto;max-width:100%;height:auto;border-radius:10px}.marg-left{margin-left:20px}.marg-right{margin-left:20px}@media screen and (max-width:768px){.slide-content{margin-top:1rem}.swiper-button-next,.swiper-button-prev{top:55vw!important}}.swiper-button-next,.swiper-button-prev{position:absolute;top:var(--swiper-navigation-top-offset,50%);width:calc(var(--swiper-navigation-size)/ 44 * 27);height:var(--swiper-navigation-size);margin-top:calc(0px - (var(--swiper-navigation-size)/ 2));z-index:10;display:flex;align-items:center;justify-content:center;color:#fff;position:absolute;top:23vw;margin:0;margin-top:0;margin-top:0;width:2.400rem!important;height:2.400rem!important;background-repeat:no-repeat;background-color:#4078bc;background-size:auto 75%;background-position:center;border-radius:8px 0 0 8px;transition:width .3s ease;opacity:1;z-index:2;cursor:pointer}.swiper-button-prev{transform:scale(-1)}:root{--swiper-navigation-size:25px;font-weight:900}.swiper-button-prev::after{transform:scale(-1)}.video-container{position:absolute;width:100%;height:100%;padding-bottom:31.85%;overflow:hidden}.video-container video{position:absolute;top:0;left:0;width:100%;height:100%;min-width:100%;min-height:100%;z-index:-1;object-position:center;object-fit:cover}@media (min-width:992px){.drop-item a{color:inherit!important;text-decoration:underline .15em rgba(255,255,255,0)!important;transition:text-decoration-color 300ms!important;text-underline-offset:5px!important}.drop-item a:hover{text-decoration-color:rgba(255,255,255,1)!important}}@media(max-width:992px){.down-icon::before{top:0;right:0;content:"";font-family:FontAwesome;font-style:normal;font-weight:400;text-decoration:inherit;font-size:25px;font-weight:lighter;left:auto;position:absolute;transition:all 0.4s}.up-icon::before{transition:all 0.4s;transform:scale(-1)}.mobile-fixed-nav{position:fixed;top:0;z-index:9999}}.btn.btn-primary strong{font-family:"latobold"!important}@media (min-width:991px){nav .dropdown .project{transform:translateX(-300px) translateY(5px)}}.navbar-logo a img{width:260px;height:auto}.w-img-250{width:260px;height:auto}.services-items img{height:295px;object-fit:cover;widows:295px;max-width:100%}.pri-playpause{background-image:url('{{asset('assets/images/icons/play-button.svg')}}');background-repeat:no-repeat;width:140px;height:140px;position:absolute;left:0%;right:0%;top:0%;bottom:0%;margin:auto;background-size:contain;background-position:center}.pri-video-h-auto{height:auto!important}.learn-about-video-wrapper{border:groove;border-color:#007aff}@media (min-width:1400px){.learn-about-video-wrapper{width:751px;max-width:100%;height:480px;overflow:hidden}}@media (max-width:1400px){.learn-about-video-wrapper{height:auto}.learn-about-video-wrapper img{height:335px!important;object-fit:cover}}@media (max-width:728px){.learn-about-video-wrapper img{height:282px!important;object-fit:cover}}.learn-about-video-wrapper img{width:100%}.remove-bg{background-image:none!important}.page-link .fa-sharp{border:solid #000;border-width:0 3px 3px 0;display:inline-block;padding:4px}.page-link .fa-chevron-right{transform:rotate(-45deg);-webkit-transform:rotate(-45deg)}.page-link .fa-chevron-left{transform:rotate(135deg);-webkit-transform:rotate(135deg)}@media (min-width:992px){.drop-item a{color:inherit!important;text-decoration:underline .15em rgba(255,255,255,0)!important;transition:text-decoration-color 300ms!important;text-underline-offset:5px!important}.drop-item a:hover{text-decoration-color:rgba(255,255,255,1)!important}}@media (min-width:767px){.new-gap-1{width:700px;padding-left:12px!important}}@media(max-width:992px){.down-icon::before{content:"";display:block;position:absolute;background-size:0;border-left:10px solid transparent;border-right:10px solid transparent;border-top:10px solid #fff;position:absolute;content:"";top:22px;right:18px;width:0;height:0;background-image:none;-webkit-transition:all 0.4s ease-in-out;-moz-transition:all 0.4s ease-in-out;-o-transition:all 0.4s ease-in-out;-ms-transition:all 0.4s ease-in-out;transition:all 0.4s;cursor:pointer}.up-icon::before{transition:all 0.4s;transform:scale(-1)}.mobile-fixed-nav{position:fixed;top:0;z-index:9999}}.btn.btn-primary strong{font-family:"latobold"!important}@media (min-height:420px) and (min-width:1024px){.callback-desktop-only{display:inline-block;background-color:#fff;position:fixed;right:24px;bottom:24px;width:248px;height:255px;box-shadow:0 0 4px #222;z-index:999}.callback-desktop-only .request-form-header{font-size:110%;padding:12px 16px;color:#fff;background-color:#0f5}.callback-desktop-only .request-form-holder .mb-2{margin-bottom:16px!important}.mb-2{margin-bottom:.5rem!important}.myphone-mobile-only.lol{display:none}}@media (max-width:786px){.myphone-mobile-only{display:inline-block;position:fixed;right:24px;bottom:24px;width:96px;height:96px;text-decoration:none;border-radius:48px;overflow:hidden;z-index:99999}.myphone-mobile-only{display:block}.myphone-mobile-only img{-o-object-fit:cover;object-fit:cover;width:100%;height:100%}}.video_section{width:100%!important}.navbar-logo a img{width:300px;height:auto}.banner{display:flex;flex-wrap:wrap;align-items:center;justify-content:center;background-color:lightgray}.left-half{flex:1;padding:20px;text-align:left}.right-half{flex:1;background-color:#ddd;display:flex;justify-content:flex-start;align-items:flex-start}h2{margin-top:0}video{width:100%;height:100%;object-fit:cover}.right-half img{width:100%;height:100%;object-fit:cover}@media (max-width:768px){.banner{flex-direction:column}.right-half{margin-top:0}}@media (min-width:769px) and (max-width:1160px){.left-half{text-align:center}video{height:100vh}}@media (min-width:772px) and (max-width:1136px){.vid_wen_dksd_99{height:auto}}
        @media(min-width:1161px){.right-half{height:420px}}@media (max-width:991px){.main-nav-item--phone{padding-top:0px!important}}@media (max-width:991px){.logo-res .navbar-logo img{width:172px;height:66.7px}}.offerservice-section-list-container>ul>li{gap:.2rem!important}.fa-chevron-right:before{content:""!important}.fa-chevron-left:before{content:""!important}.we_offer_section_lists span{width:50px;height:50px;border-radius:50%;border:2px solid #0087c9 ;display:flex;justify-content:center;align-items:center;margin-right:8px}.we_offer_section_lists li img{width:68%;object-fit:contain;filter: invert(69%) sepia(62%) saturate(2457%) hue-rotate(86deg) brightness(107%) contrast(103%);}
        .up-ar::before{
        border: solid rgb(255, 255, 255);
        border-width: 0 3px 3px 0;
        display: inline-block;
        padding: 5px;
        position: absolute;
        content: "";
        }
        .down::before{
            transform: rotate(-316deg);
        -webkit-transform: rotate(-316deg);
        }

        .up-icon::before {
        transform: rotate(-136deg);
        -webkit-transform: rotate(-136deg);
        }
        .text-yellow{
            color: #F7E513 !important;
            filter: drop-shadow(0 0 8px #666) !important;
        }
        .heading-2 {
          filter: drop-shadow(0 0 6px #666) !important;
        }
        .text-uppercase{
            text-transform: uppercase !important; 
        }
    </style>


    @if (request()->is('services/*'))
    <style type="text/css">
        .main-content-section h2 {
            font-weight: bold;
            font-size: 1.2rem;
        }

        @media(min-width: 1000px) {

            .main-content-section h2,
            .main-content-section p {
                padding-left: 7rem;
                padding-right: 7rem;
            }
        }
       
    </style>
    @endif
    @yield('css')
    {{-- fontawesome packages --}}
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
  
    @if (!request()->routeIs('gallery'))
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    @endif

  



    {{-- bootstrap packages --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    {{-- lazy loading packages --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.16.0/lozad.min.js"
        integrity="sha512-21jyjW5+RJGAZ563i/Ug7e0AUkY7QiZ53LA4DWE5eNu5hvjW6KUf9LqquJ/ziLKWhecyvvojG7StycLj7bT39Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    {{-- swiperjs packages  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.min.js"
        integrity="sha512-hJrV+LKHbu+Hxkn/+ZwGOCMUkap0ZfjJbca9WT38z69+MYmRzMlvUd401TOs1b4byAm4fGDESpEcCbG2A6cibQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    {{-- custom js file --}}
    @if (!request()->routeIs('privacy'))
        <script src="{{ asset('js/main.js') }}" defer></script>
    @endif
    {{-- animation and lazyload scripts --}}
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", async function() {
            var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            // spaceBetween:20,
            centeredSlides: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
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

            const observer = await lozad('.lozad', {
                rootMargin: '100px 0px', // Apply a 100px margin around the viewport
                threshold: 0.1, // Load images when they are 10% visible
                loaded: function(el) {
                    // Add a class to mark the image as loaded
                    el.classList.add('loaded');
                }
            });
            observer.observe();
            
            
        $(document).on("click", ".up-icon", function(e) {
            e.preventDefault();
        })
        
        $(document).on("click", "#myitem1", function(e) {
            e.preventDefault();
        })
    });
    </script>
   


   <script type="text/javascript">
  
  document.addEventListener("DOMContentLoaded", async function() {
       function toggleSlide(elementSelector, height) {
           const element = $(elementSelector);

           if (element.height() === 50) {
               element.animate({
                   height: height
               });
           } else {
               element.animate({
                   height: 50
               });
           }
       }

       $(document).ready(function() {
           $('id').on('click', function() {
               // if ($(this).hasClass("down-icon")) {

               // } else {

               // }
               $(this).toggleClass("up-icon");
               $("#call_body").slideToggle();

               toggleSlide('#cll', 270)
           })

                toggleSlide('#cll', 270);
                $("#call_body").slideToggle();
            })

        });
        </script>

         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer ></script>
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", async function() {
        
                function showAlert(title, text, icon) {
                    swal({
                        title: title,
                        text: text,
                        icon: icon
                    });
                }

        
                $(document).ready(function() {
            
                    @if ($errors->any())
                        showAlert("Error", "{!! implode(' ', $errors->all()) !!}", "error");
                    @endif
        
                    @if (session()->has('message'))
                        showAlert("Success", "{{ session()->get('message') }}", "success");
                    @endif
                });
            });
        </script>



    {{-- add your components js --}}
    @yield('js')
</body>
</html>
