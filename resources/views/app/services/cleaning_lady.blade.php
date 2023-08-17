@extends('layouts.index')
@section('title')
    Cleaning Lady | {{ env('APP_NAME') }}
@endsection


@section('schema')
    <script type="application/ld+json">
        {!! file_get_contents('clean-lady-faqs.json') !!}
    </script>
@endsection

@section('meta')
    <meta name="title" content="Cleaning Lady | Maidbrite Cleaning Services ">
    <meta name="description"
        content="Discover superior quality cleaning lady services near you. From regular house cleaning to deep cleaning, our lady maids provide unmatched professionalism and attention to detail.">
    <meta name="keywords"
        content="cleaning lady near me, cleaning lady services, independent cleaning lady near me, house cleaning lady near me, house cleaning lady, hire a cleaning lady, cleaning ladies in my area, find a cleaning lady near me, best cleaning lady near me, need a cleaning lady, lady maids cleaning service, cleaners near me, cleaning services near me, house cleaning services, deep cleaning house, professional cleaning services, house cleaning services near me, cleaning company">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services ">
    <meta property="og:title" content="Cleaning Lady | Maidbrite Cleaning Services ">
    <meta property="og:description"
        content="Discover superior quality cleaning lady services near you. From regular house cleaning to deep cleaning, our lady maids provide unmatched professionalism and attention to detail.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC | Maidbrite Cleaning Services  ">
    <meta name="twitter:description"
        content="Discover superior quality cleaning lady services near you. From regular house cleaning to deep cleaning, our lady maids provide unmatched professionalism and attention to detail.">
    <meta name="twitter:image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Maidbrite Cleaning Services ">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
    <meta itemprop="image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
    <link rel="image_src" href="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">

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

@section('content')
    <!-- main section -->
    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}"
                alt="Cleaning Lady">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Cleaning Lady</h1>
                <p class="tex-white text-center text-lg-start fs-3">
                    Get cleaning lady services for your apartment or house in NYC
                </p>
                {{-- book now form --}}
                @include('app.static_components.booknow_form')
            </div>
        </div>
    </main>


    <!-- review banner section  -->
    {{-- @include('app.static_components.review_banner') --}}

    <!-- main content section  -->
    <section class="">
        <div class="container py-5 main-content-section text-lightgray">

            <h1 class="text-center text-green fs-1 py-5">CLEANING LADY </h1>


            <h2>Cleaning Lady Services: Your Home's Best Friend</h2>
            <p>
                There’s no place like home, especially when it's sparkling clean. At our cleaning company, we take great
                pride in providing top-tier cleaning lady services, offering you a fresh and vibrant living environment.
            </p>
            <h2>
                Highly Trusted Cleaning Lady Services Near You

            </h2>
            <p>
                Have you been frequently searching for "cleaning lady near me" or "independent cleaning lady near me"? Rest
                assured, your search ends here. With our cleaning lady services in your local area, you can always expect a
                clean home. We cater to your unique needs, making sure every corner of your space shines and sparkles.
            </p>
            <h2>
                Hire a Cleaning Lady to Rejuvenate Your Home
            </h2>
            <p>
                If you're looking to hire a cleaning lady who is skilled, experienced, and diligent, you're at the right
                place. Our cleaning ladies take immense pride in their work, ensuring every task, big or small, is handled
                with utmost care. Their work goes beyond basic cleaning services, offering deep cleaning house services that
                leave every room gleaming.
            </p>
            <h2>
                Cleaning Ladies in Your Area: Unmatchable Precision and Quality
            </h2>
            <p>
                Often, people find themselves typing "find a cleaning lady near me" or "best cleaning lady near me" into
                search engines. With us, you need not look further. We have a robust team of skilled cleaning ladies in your
                area who are dedicated to providing meticulous and personalized cleaning services.
            </p>
            <h2>
                Professional House Cleaning Lady Services

            </h2>
            <p>
                Whether you're looking for a house cleaning lady or a private cleaning lady, our company offers the best.
                Our cleaning lady services are designed to accommodate your every need, from house cleaning to more specific
                tasks. Forget the days of struggling to find a "house cleaning lady near me" - our experts are always at
                your service.

            </p>
            <h2>
                Why Choose Our Lady Maids Cleaning Service?
            </h2>
            <p>
                Not all cleaning services near you offer the personal touch of a cleaning lady. With our lady maids cleaning
                service, you get the benefit of an individual cleaner dedicated to maintaining your home's cleanliness.
                Every one of our lady maids is a specialist in providing superior house cleaning services, and they are just
                a call away!

            </p>
            <p>
                In conclusion, if you need a cleaning lady, be it for regular house cleaning, deep cleaning, or other
                professional cleaning services, look no further. Get in touch with us, and experience a new standard of
                cleanliness in your home.
            </p>



        </div>
    </section>


    <!-- Callback section -->
    @include('app.static_components.callback_form_banner')

    {{-- offer-serivces section --}}
    @include('app.static_components.we_offer')



    <!-- Slider -->
    {{-- <section class="slider-section overflow-hidden pt-3">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue pt-4">Check out our Commercial cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy service-slider-imgs lozad rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/commercial-cleaning/10010-NY-sofa-cleaning-NYC-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning-min.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy service-slider-imgs lozad rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/commercial-cleaning/11105 best commercial steam cleaning PristineGreen Upholstery and Carpet Cleaning Queens NY commercial carpet cleaning service-min.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy service-slider-imgs lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/commercial-cleaning/carpet-cleaner-nyc-New-York-best-carpet-steam-cleaner-PristineGreen-Upholstery-and-Carpet-Cleaning-10010.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img
                                class=" lazy service-slider-imgs lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/commercial-cleaning/PristineGreen-Upholstery-and-Carpet-Cleaning-10010-NY.jpg') }}"
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
