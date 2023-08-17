@extends('layouts.index')
@section('title')
    House Cleaning | {{ env('APP_NAME') }}
@endsection
@section('schema')
    <script type="application/ld+json">
        {!! file_get_contents('house-faqs.json') !!}
    </script>
@endsection
@section('meta')
    <meta name="title" content="House Cleaning | Maidbrite Cleaning Services ">
    <meta name="description"
        content="Experience exceptional house cleaning services with Maidbrite Cleaning Services . From deep cleaning to move in and move out cleaning services, our professional team is dedicated to keeping your home spotless and comfortable. Trust us for reliable, high-quality and affordable cleaning solutions near you.">
    <meta name="keywords"
        content="cleaning services near me, house cleaning services, house cleaners near me, home cleaning services near me, cleaning company near me, deep cleaning services, move out cleaning services, apartment cleaning services, deep cleaning house, house keeping services, same day cleaning service, house cleaning cost, cleaning services, house cleaning services near me, house cleaning, house cleaners near me, home cleaning services, cleaning company, professional cleaning services, deep cleaning house, residential cleaning services">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services ">
    <meta property="og:title" content="House Cleaning | Maidbrite Cleaning Services ">
    <meta property="og:description"
        content="Experience exceptional house cleaning services with Maidbrite Cleaning Services . From deep cleaning to move in and move out cleaning services, our professional team is dedicated to keeping your home spotless and comfortable. Trust us for reliable, high-quality and affordable cleaning solutions near you.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-House-Cleaning--cleaners-near-me-near-me.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services  ">
    <meta name="twitter:description"
        content="Experience exceptional house cleaning services with Maidbrite Cleaning Services . From deep cleaning to move in and move out cleaning services, our professional team is dedicated to keeping your home spotless and comfortable. Trust us for reliable, high-quality and affordable cleaning solutions near you.">
    <meta name="twitter:image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-House-Cleaning--cleaners-near-me-near-me.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Maidbrite Cleaning Services ">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-House-Cleaning--cleaners-near-me-near-me.jpg') }}">
    <meta itemprop="image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-House-Cleaning--cleaners-near-me-near-me.jpg') }}">
    <link rel="image_src" href="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-House-Cleaning--cleaners-near-me-near-me.jpg') }}">

    <link rel="shortcut" type="image/png" href="{{ asset('assets/icons/site_icon_128x128.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/icons/site_icon_128x128.png') }}">

    <meta name="abstract" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC">
    <meta name="author" content="admin">
    <meta name="classification" content="Blog">
    <meta name="copyright" content="Maidbrite Cleaning Services  House and Commercial Cleaning - All rights Reserved.">
    <meta name="distribution" content="Global">
    <meta name="language" content="en-GB">
    <meta name="publisher" content="Maidbrite Cleaning Services">
    <meta name="rating" content="General">
    <meta name="resource-type" content="Document">
    <meta name="revisit-after" content="3">
    <meta name="subject" content="Blog">
@endsection


@section('css')
<style>
    @media screen and (max-width:878PX) {
        .ser-banner>img {
            background-size: 100% 100%;
        }
    }
    </style>
    @endsection
@section('content')
    <!-- main section -->
    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad ser-banner">
            <source media="(max-width: 878px)" srcset="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-House-Cleaning--cleaners-near-me-near-me.jpg') }}">
            <source media="(min-width: 878px)" srcset="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-House-Cleaning--cleaners-near-me-near-me.jpg') }}">
            <img class="service-bannner-img h-img-600" src="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-House-Cleaning--cleaners-near-me-near-me.jpg') }}"
                alt="House Cleaning">
        </picture>
        <div class="p-4 p-lg-5 pb-120  position-absolute bottom-0 w-100 h-100">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">House Cleaning</h1>
                <p class="tex-white text-center text-lg-start fs-3">
                    Top House Cleaning Service Provider in NYC
                </p>
                {{-- book now form --}}
                @include('app.static_components.booknow_form')
            </div>
        </div>
    </main>


    <!-- review banner section  -->
    {{-- @include('app.static_components.review_banner') --}}

    <!-- main content section  -->
    <section>
        <div class="container py-5 main-content-section text-lightgray">
            <h1 class="text-center text-green fs-1 py-5">HOUSE CLEANING</h1>

            <h2>
                Exceptional House Cleaning Services by Maidbrite Cleaning Services 
            </h2>
            <p>
                At Maidbrite Cleaning Services , we understand that every home is a unique sanctuary. That's why we offer comprehensive and
                tailored house cleaning services designed to maintain the sparkle in your abode and complement your
                lifestyle. Whether you are looking for an occasional spruce-up or recurring, scheduled cleaning, we are the
                cleaning company near you that is ready to get down to the nitty-gritty.

            </p>
            <h2>
                A Variety of Cleaning Services to Suit Every Home
            </h2>
            <p>
                Our services encompass a broad spectrum of cleaning tasks. From regular home cleaning services, deep
                cleaning services, move out cleaning services to specialized apartment cleaning services, we have got it
                covered. Our team of dedicated housekeepers are well-versed in maintaining a pristine environment in your
                living spaces.

            </p>
            <h2>
                Trusted and Professional House Cleaners Near You

            </h2>
            <p>
                Our house cleaners are not only reliable but also trained to deliver professional cleaning services. At
                Maidbrite Cleaning Services , we ensure that our cleaning ladies and housekeepers go through rigorous training to provide
                services that surpass your expectations. Our team is devoted to maintaining a clean and comfortable
                environment for you and your loved ones.

            </p>
            <h2>
                Move In and Move Out Cleaning Services
            </h2>
            <p>
                Whether you are moving into a new home or moving out of your apartment, Maidbrite Cleaning Services  is here to assist you
                with exceptional cleaning. Our move in cleaning service ensures that your new residence is welcoming and
                spotless, setting the stage for delightful memories. On the other hand, our move out cleaning services are
                designed to leave your old home in immaculate condition, ensuring a smooth transition.
            </p>
            <h2>
                Deep Cleaning Services for Comprehensive Cleanliness
            </h2>
            <p>
                At times, your home may need more than a regular cleaning touch. This is where our deep cleaning house
                services come into play. We dive deep into every nook and corner, ensuring that every inch of your home is
                gleaming. Our deep cleaners are equipped with the skills and tools to eliminate stubborn dirt and grime,
                guaranteeing a refreshing living space.

            </p>
            <h2>
                Reliable Same Day Cleaning Service
            </h2>
            <p>
                Do you need cleaning services at short notice? Look no further. Our same day cleaning service is designed to
                cater to your immediate cleaning needs. Whether it's an unexpected visitor or a sudden event, our house
                keeping services are there for you, even at the eleventh hour.
            </p>
            <h2>
                Affordable and Fair House Cleaning Cost
            </h2>
            <p>
                Quality does not always have to come at a high cost. At Maidbrite Cleaning Services , we strive to provide the best cleaning
                services at competitive rates. We believe that everyone deserves a clean and comfortable home, and we ensure
                that our house cleaning cost remains affordable without compromising on quality.
            </p>
            <h2>
                Why Choose Maidbrite Cleaning Services ?
            </h2>
            <p>
                As a professional cleaning company, we are dedicated to providing high-quality house cleaning services near
                you. Our team of professionals is always ready to deliver the highest level of service to meet your cleaning
                needs. We believe in creating a clean, healthy and comfortable living environment for you and your family.
                Choose Maidbrite Cleaning Services  for a spotless, sparkling home!
            </p>
        </div>

    </section>



    <!-- Callback section -->
    @include('app.static_components.callback_form_banner')

    {{-- offer-serivces section --}}
    @include('app.static_components.we_offer')

    {{-- <!-- Slider -->
    <section class="slider-section overflow-hidden pt-3">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue pt-4">Check out our Carpet cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/carpet-cleaner-nyc-New-York-best-carpet-steam-cleaner-PristineGreen-Upholstery-and-Carpet-Cleaning-10010.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/11105-carpet-cleaner-nyc-NY-rug-cleaner-nyc-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/Area-Rug-Cleaning-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-NY.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/Queens%20Carpet%20Cleaner%20Service%20PristineGreen%20Upholstery%20and%20Carpet%20Cleaning%2011105%20residential%20carpet%20cleaning.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="Office carpet cleaning"
                                width="420" height="420"
                                data-src="{{ Storage::disk('public')->url('gallery/carpet-cleaner-service-rug-cleaning-NYC-10010-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-New-York.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/PristineGreen-Upholstery-and-Carpet-Cleaning-10010-NY.webp') }}"
                                style>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="w-100 h-100 position-absolute top-0 d-flex justify-content-between px-2 px-sm-4 align-items-center">
                <div id="swiper-button-prev" class="swiper-button-prev trusted-swiper-btn-prev"></div>
                <div id="swiper-button-next" class="swiper-button-next trusted-swiper-btn-prev"></div>
            </div>
        </div>

    </section> --}}


    <!-- what serivces you need section -->
    @include('app.static_components.callback_form_submit')

    {{-- faqs --}}
    @include('app.static_components.faq-section')

    @include('app.static_components.callus_banner')
@endsection
