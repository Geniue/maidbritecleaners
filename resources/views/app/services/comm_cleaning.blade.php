@extends('layouts.index')
@section('title')
    Commercial Cleaning | {{ env('APP_NAME') }}
@endsection


@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('comm-faqs.json') !!}
    </script> --}}
@endsection

@section('meta')
    <meta name="title" content="Move Out Cleaning  | Maidbrite Cleaning Services ">
    <meta name="description"
        content="Looking for professional move out cleaning services? Maidbrite Cleaning Services  provides expert and affordable solutions to make your move stress-free. Our skilled cleaners offer comprehensive services tailored to your needs, leaving your previous home spotless and ready for the next occupants. Contact us today for a seamless transition to your new chapter.">
    <meta name="keywords"
        content="move out cleaning services, move out cleaners near me, move out cleaning near me, moving out cleaning service, move out cleaning cost, move out cleaning services near me, move out house cleaning services near me, moving out cleaning services, move out cleaning prices, professional move out cleaning, move out cleaning service near me, move out house cleaning services, move out services, average cost of move out cleaning, apartment move out cleaning, move out cleaning services cost, how much does move out cleaning cost, how long does a move out cleaning take, move out cleaning rates, apartment move out cleaning cost, move out deep cleaning, best move out cleaning service, move out cleaning services prices">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services ">
    <meta property="og:title" content="Move Out Cleaning  | Maidbrite Cleaning Services ">
    <meta property="og:description"
        content="Looking for professional move out cleaning services? Maidbrite Cleaning Services  provides expert and affordable solutions to make your move stress-free. Our skilled cleaners offer comprehensive services tailored to your needs, leaving your previous home spotless and ready for the next occupants. Contact us today for a seamless transition to your new chapter.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services  ">
    <meta name="twitter:description"
        content="Looking for professional move out cleaning services? Maidbrite Cleaning Services  provides expert and affordable solutions to make your move stress-free. Our skilled cleaners offer comprehensive services tailored to your needs, leaving your previous home spotless and ready for the next occupants. Contact us today for a seamless transition to your new chapter.">
    <meta name="twitter:image"
        content="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Maidbrite Cleaning Services ">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl"
        content="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
    <meta itemprop="image"
        content="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
    <link rel="image_src"
        href="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">

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
                srcset="{{ asset('assets/images/PristineGreen-House-Cleaning-UES-Branch-house-cleaning-services-10021-New-York-commercial-cleaning-services-NY.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/PristineGreen-House-Cleaning-UES-Branch-house-cleaning-services-10021-New-York-commercial-cleaning-services-NY.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/PristineGreen-House-Cleaning-UES-Branch-house-cleaning-services-10021-New-York-commercial-cleaning-services-NY.jpg') }}"
                alt="Pet Stains and Odor cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Commercial Cleaning</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Trusted and recommended commercial cleaner in NYC, specializing in deep cleaning your commercial spaces
                </h3>
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

            <h1 class="text-center text-green fs-1 py-5">COMMERCIAL CLEANING
            </h1>


            <p><strong>
                    Commercial spaces often the get the most abuse. Whether it be customers coming in and out of the
                    store all day, employees use the office sapce day and night, or a big dusty mess from after a
                    construction project. Whatever it is, we have your back! Best of all, we only use non-toxic cleaning
                    products to deep and effectively clean all surfaces so you can be assured that no sensitive employee
                    or customer will be turned off by our work.
                </strong></p>
            <p><a class="fs-3" href="{{ route('post_construct') }}"><strong>Post-Construction Cleaning</strong></a></p>
            <p>Construction can be a messay job! Dust and dirt seem to make their way into every crevice after a project
                and post-project cleanup is essential for the presentation of your work as well as the safety of the
                customer. Let us do the hard work and take care of your post construction cleaning jobs! We have
                specific processes to capture all the dirt and dust without damaging possibly delicate pieces like
                hardwood floors and glass mirrors. You can be assured that your new projec will look spotless after our
                work and your customer will be impressed!</p>
            <p class="fs-3"><strong>Office Cleaning</strong></p>
            <p>Over time, office spaces can become dirty just from daily wear and tear from employees using it during
                their daily tasks. The kitchen, the bathroom, the desks, and more need attention. Let PristineGreen take
                care of office cleaning for you on a one-time or regular basis! We deep clean all areas and surfaces
                with only non-toxic cleaning products so you can be assured that the result will be excellent and safe!
                Enhance your productivity and keep your employees happy and safe with our office cleaning services!</p>
            <p class="fs-3"><strong>Store Cleaning</strong></p>
            <p>Custaomers are constantly coming in and out of your store and over time, things can look a little dingy
                and dull. Keep your store pristine with our commerical store cleaning services! From cleaning displays
                to carpet cleaning to upholstery cleaning, we have you covered at every angle. Our non-toxic products
                ensure a great clean as well as one that doesn't upset sensitive customers with unpleasant smells.
                Impress your customers with our commercial store cleaning services!</p>


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
    {{-- @include('app.static_components.faq-section') --}}


    @include('app.static_components.callus_banner')
@endsection
