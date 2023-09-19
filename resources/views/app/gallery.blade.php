@extends('layouts.index')

@section('title')
    Gallery |{{ env('APP_NAME') }}
@endsection

@section('meta')
    <meta name="title" content=" Gallery | Maidbrite Cleaning Services">
    <meta name="description"
        content="Reach out to Maidbrite Cleaning Services for all your house cleaning services, sanitization needs, and commercial cleaning. We're here to help you keep your space pristine!">
    <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company, quote, quote now, request a quote, contact form, Gallery">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services">
    <meta property="og:title" content=" Gallery  | Maidbrite Cleaning Services">
    <meta property="og:description"
        content="Reach out to Maidbrite Cleaning Services for all your house cleaning services, sanitization needs, and commercial cleaning. We're here to help you keep your space pristine!">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services ">
    <meta name="twitter:description"
        content="Reach out to Maidbrite Cleaning Services for all your house cleaning services, sanitization needs, and commercial cleaning. We're here to help you keep your space pristine!">
    <meta name="twitter:image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Maidbrite Cleaning Services">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
    <meta itemprop="image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
    <link rel="image_src" href="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">


    <meta name="abstract" content="Maidbrite Cleaning Services House and Commercial Cleaning in NYC">
    <meta name="author" content="admin">
    <meta name="classification" content="Blog">
    <meta name="copyright" content="MaidBrite Cleaning Services">
    <meta name="distribution" content="Global">
    <meta name="language" content="en-GB">
    <meta name="publisher" content="Maidbrite Cleaning Services">
    <meta name="rating" content="General">
    <meta name="resource-type" content="Document">
    <meta name="revisit-after" content="3">
    <meta name="subject" content="Blog">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection


@section('css')
    {{-- aos css packages --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lightgallery.min.css">
    <style>
        #light_gallery {
            row-gap: 1.4rem;
            max-width: 100%;
            margin: 0 auto;
            justify-content: center;
        }

        .lg-backdrop.in {
            opacity: .8 !important;
        }

        .gallery-set {
            position: relative;
            display: grid;
            place-items: center;
            cursor: pointer;
        }


        .gallery-set:after {
            content: "\f00e";
            font-family: fontawesome !important;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            position: absolute;
            top: calc(50% - 30px);
            font-size: 26px;
            color: #fff;
            opacity: 0;
            transition: .35s all ease-in-out;
        }

        .gallery-set:hover::after {
            opacity: 1 !important;
        }

        .moeed {
            object-fit: cover;
            width: 295px;
            height: 295px;
            aspect-ratio: 1/1;
        }

        @media (max-width: 768px) {
            #top-banner.short-header .banner-content .heading-text h1 {
                margin-top: -24px !important;
            }
        }
    </style>
@endsection


@section('content')
    <!-- About us banner section -->
    <section class="position-relative">
        <img class="w-100 lozad" height="100"
            data-src="{{ asset('assets/images/carpet-cleaner-service-NYC-gallery.webp') }}">
        <div class="position-absolute w-100 h-100 top-0 d-flex justify-center align-items-center">
            <h2 class="fs-1 font-median text-green-1 p-0 mb-1">Gallery</h2>
        </div>
    </section>
    <section id="main-content-cleaning" class="py-5 overflow-hidden">
        <div class="container px-0 py-2 py-lg-5 ">
            <div class="  row " id="light_gallery">
                @include('app.pagination.gallery.index')
            </div>
            <div class="auto-load text-center aligncenter" style="display: none;">

                <svg version="1.1" id="L9" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink"
                    x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0"
                    xml:space="preserve">
                    <path fill="#000"
                        d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                        <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                            from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                    </path>

                </svg>
            </div>
        </div>
    </section>
    @include('app.static_components.callus_banner')
@endsection



@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="module" defer>
    import lightGallery from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.3";
    import lgZoom from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.3/plugins/zoom";
    window.lgallery = initFGallery();
    document.addEventListener('touchstart',function(e){
      const tag = e.target.tagName
      const hasCls = e.target.classList.contains('lg-img-wrap');
      if(tag === 'PICTURE' && hasCls){
        window.lgallery.closeGallery()
      }
    })


    function initFGallery() {
        
        return lightGallery(document.getElementById("light_gallery"), {
            speed: 500,
            plugins: [lgZoom],
            dynamic: true,
            dynamicEl: {!! json_encode($newLG) !!},
            mobileSettings:{
                controls: true,
                showCloseIcon: true,
            }
        });
    }



    $(document).on("click", "#light_gallery img", async function() {
        var targetItem = this;
        var itemSet = document.querySelectorAll("#light_gallery img");
        
        window.lgallery = destroyGallery();
        window.lgallery = initFGallery();

        document.addEventListener('touchstart',function(e) {
          const tag = e.target.tagName
          const hasCls = e.target.classList.contains('lg-img-wrap');
          if(tag === 'PICTURE' && hasCls){
            window.lgallery.closeGallery()
          }
        })

        // console.log()
        return window.lgallery.openGallery(Number(this.getAttribute("index")));
        
        
    })




    async function destroyGallery() {
        return lightGallery(document.getElementById("light_gallery")).destroy(true);
    }

    $(document).ready(function() {
        var ENDPOINT = "{{ route('gallery') }}";
        var page = 1;



      /*------------------------------------------

      --------------------------------------------

      Call on Scroll Mobile

      --------------------------------------------

      --------------------------------------------*/

      // $(window).bind('touchmove', function() {
          
      //     if ($(window).scrollTop() + $(window).height() >= ($(document).height() - 20)) {
      //         $('#console').append('touching')
      //         page++;

      //         infinteLoadMore(page);

      //     }
      // }); // for mobile




        /*------------------------------------------

        --------------------------------------------

        Call on Scroll

        --------------------------------------------

        --------------------------------------------*/

        var observer = new IntersectionObserver(function(entries) {
            // isIntersecting is true when element and viewport are overlapping
            // isIntersecting is false when element and viewport don't overlap
            if(entries[0].isIntersecting === true)
                

                infinteLoadMore(page);
                page++;
                console.log(page)
        }, { threshold: [1] });
        observer.observe(document.querySelector("#neededH"));

        window.addEventListener("scroll", function () {
            
            // if ($("#neededH")[0].getBoundingClientRect.top >= 0 && $("#neededH")[0].getBoundingClientRect.bottom <= window.innerHeight) {
              
                

            // }

        });



            /*------------------------------------------

        --------------------------------------------

        call infinteLoadMore()

        --------------------------------------------

        --------------------------------------------*/

        function infinteLoadMore(page) {

            $.ajax({

                    url: ENDPOINT + "?page=" + page,

                    datatype: "html",

                    type: "get",

                    beforeSend: async function () {

                        $('.auto-load').show();

                        


                    },
                    complete: function() {

                        const observer = lozad('.lozad', {
                            loaded: function(el) {
                                el.classList.add('fade-in');
                            }
                        });
                        observer.observe();

                        // Reload AOS
                        AOS.refresh();
                        
                        
                    }

                })

                .done(async function (response) {

                    if (response.html == '') {

                        $('.auto-load').css("padding-top", "20px")
                        $('.auto-load').html("No more images found");

                        return;

                    }




                    

                    $('.auto-load').hide();

                    $("#light_gallery").append(response.html);

                    
                    
                    
                    
                    

                })

                .fail(function (jqXHR, ajaxOptions, thrownError) {

                    console.log('Server error occured');

                });

        }
    })
</script>
@endsection
