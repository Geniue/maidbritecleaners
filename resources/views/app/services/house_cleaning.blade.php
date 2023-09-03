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
        content="cleaners near me, cleaning services near me, cleaning services, house cleaning services, house cleaning services near me, house cleaning, house cleaners near me, house cleaning near me, maid service, home cleaning services near me, cleaning company near me, cleaning company, cleaning companies near me, home cleaning services, cleaning service near me, home cleaning, house cleaning service, deep cleaning house, professional cleaning services, housekeeping services near me, cleaners, residential cleaning services, housekeeping services">
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
    .main-content-section h3 {
      font-family: "latobold" !important;
      font-size: 1rem;
    }

    @media (min-width: 1000px) {
        .main-content-section h3{
          padding-left: 18rem;
          padding-right: 16rem;
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

            <p>
                <strong>
                 Looking for “cleaners near me”? Now the quest is over as you have found us, MaidBrite Cleaners, a professional and reliable house cleaning company that can provide service in most areas of NYC. We do high-quality work and our team is able to deliver the highest level of service when cleaning your home. We make sure you enjoy a healthy and pleasant environment at home, free of harmful germs and harsh chemicals.   
                </strong>
            </p>

            <h2>
                Why choose us and our cleaning services?
            </h2>
            <p>
                We know that there are hundreds of home cleaning services ready to pop up when you search “cleaning services near me.” However, we also know that we are some of the best in our industry and our services provide you real value for money. Here is why you should stop looking for “house cleaners near me” and call our team to clean your home:

            </p>
            <h3>
                Peace of mind
            </h3>
            <p>
                Feeling worried about someone going through your beloved possessions? No need to worry with our house cleaning services. We understand that each home is someone’s sanctuary and retreat after a hard day’s work, so we will treat it most respectfully and carefully. You will find every item in its place and we will be aware of no-go areas if applicable.
            </p>

            <h3>
                Saving time and money
            </h3>
            <p>
                Why spend long hours cleaning your home when you already have a busy schedule? By delegating your home cleaning tasks to professionals, you will be enjoying better results while you will be able to focus on what is important to you (work, hobbies, rest). You save money for sure because you don’t need to spend $$ on cleaning equipment and solutions. At the same time, regular professional cleaning helps you preserve your property value and expand the lifespan of your physical assets, which translates to more money saving!
            </p>

            <h3>
                Custom house cleaning
            </h3>
            <p>
                Not only do we cater to your particular needs, but we also provide specialized house cleaning service: deep cleaning, move in cleaning services, same day cleaning. Whether you want your new place thoroughly cleaned or you need to clean after the wild party last night, we are there for you.
            </p>

            <h3>
                Trusted and professional house cleaners
            </h3>
            <p>
                Our team of diligent maids is specialized in residential cleaning services and undergoes regular training. The experience of our staff combined with modern cleaning equipment and effective and safe cleaning products enable us to provide for you a truly hygienic and safe home.
            </p>

            <h3>
                Competitive prices
            </h3>
            <p>
                Saving time with home cleaning is only possible when the service price is fair and affordable. Our clients appreciate us for our transparent pricing policy, meaning there are no hidden costs. Before we begin providing our professional cleaning services, we offer a free quote based on information sourced from our clients (surface, type of services required, photos if necessary).
            </p>
            <p>The best result for “house cleaning services near me” is MaidBrite Cleaners – by calling to our services you will enjoy benefits such as personalized cleaning services, competitive rates, a high standard of cleanliness and having more time to relax!</p>
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
