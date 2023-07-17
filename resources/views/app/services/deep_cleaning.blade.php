@extends('layouts.index')
@section('title')
    Deep Cleaning | {{ env('APP_NAME') }}
@endsection


@section('schema')
    <script type="application/ld+json">
        {!! file_get_contents('deep-faqs.json') !!}
    </script>
@endsection

@section('meta')
    <meta name="title" content="Deep Cleaning | Maidbrite Cleaning Services ">
    <meta name="description"
        content="Experience unparalleled deep cleaning services with Maidbrite Cleaning Services . From whole house deep cleaning to emergency cleaning services, we guarantee a spotless, comfortable environment.">
    <meta name="keywords"
        content="deep cleaning services, professional deep cleaning services, deep cleaning companies near me, deep house cleaning services, home deep cleaning services, kitchen deep cleaning services, bathroom deep cleaning services, deep steam carpet cleaning, office deep cleaning services, deep cleaning cost per hour, same day cleaning services, move in deep cleaning service, apartment deep cleaning services, same day cleaning, professional cleaners, same day cleaning services, emergency cleaning services, apartment deep clean, move in cleaning services near me">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services ">
    <meta property="og:title" content="Deep Cleaning | Maidbrite Cleaning Services ">
    <meta property="og:description"
        content="Experience unparalleled deep cleaning services with Maidbrite Cleaning Services . From whole house deep cleaning to emergency cleaning services, we guarantee a spotless, comfortable environment.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services  ">
    <meta name="twitter:description"
        content="Experience unparalleled deep cleaning services with Maidbrite Cleaning Services . From whole house deep cleaning to emergency cleaning services, we guarantee a spotless, comfortable environment.">
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
                srcset="{{ asset('assets/images/PristineGreen-House-Cleaning---UES-Branch-house-cleaning-services-10021-New-York-deep-cleaning-services-NY.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/PristineGreen-House-Cleaning---UES-Branch-house-cleaning-services-10021-New-York-deep-cleaning-services-NY.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/PristineGreen-House-Cleaning---UES-Branch-house-cleaning-services-10021-New-York-deep-cleaning-services-NY.jpg') }}"
                alt="Pet Stains and Odor cleaning">
        </picture>


        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Deep Cleaning </h1>
                <h3 class="tex-white text-center text-lg-start">
                    Top-rated deep cleaning service in NYC
                </h3>
                {{-- book now form --}}
                @include('app.static_components.booknow_form')
            </div>
        </div>
    </main>


    <!-- review banner section  -->
    {{-- @include('app.static_components.review_banner') --}}

    <!-- main content section  -->
    <section id="main-content-cleaning" class="py-7 main-content-cleaning-service">
        <div class="container py-5 main-content-section text-lightgray">



            <h1 class="text-center text-green fs-1 py-5">Deep Cleaning</h1>

            <h2>
                Deep Cleaning Services by Maidbrite Cleaning Services 
            </h2>
            <p>
                Welcome to Maidbrite Cleaning Services ! We are a trusted professional deep cleaning services provider with a
                commitment to excellence. Our wide range of services, from whole house deep cleaning to office deep cleaning
                services, ensures that every corner of your space gleams with freshness and cleanliness.
            </p>
            <h2>
                Reliable Deep Cleaning Services Near You
            </h2>
            <p>
                Finding reliable deep cleaning companies near you is no longer a hassle with Maidbrite Cleaning Services . Our
                comprehensive deep house cleaning services are designed to meet all your cleaning needs. Our team of
                professional cleaners meticulously ensures every inch of your home sparkles.
            </p>
            <h2>
                Deep Cleaning House and Home Deep Cleaning Services
            </h2>
            <p>
                We understand the importance of a clean, comfortable home. Our home deep cleaning services are thorough,
                ensuring not just surface cleanliness, but also a deep-down, comprehensive clean. With our services, we
                transform your home into a neat, organized space, providing an environment where you can relax and enjoy.
            </p>
            <h2>
                Specialized Cleaning Services

            </h2>
            <p>
                We specialize in offering kitchen deep cleaning services, bathroom deep cleaning services, and deep steam
                carpet cleaning. Our cleaning techniques and non-toxic, eco-friendly products ensure your kitchen, bathroom,
                and carpets are immaculate, safe, and hygienic.
            </p>
            <h2>
                Deep Cleaning Services for Offices and Commercial Spaces
            </h2>
            <p>
                We understand the importance of a clean workspace in boosting productivity. Our office deep cleaning
                services create a clean, tidy, and welcoming environment in your office or commercial space. With our
                specialized cleaning approach, we ensure your workplace is conducive to productivity and success.
            </p>
            <h2>
                Affordable Deep Cleaning Cost Per Hour
            </h2>
            <p>
                At Maidbrite Cleaning Services , we believe in providing value for money. Our deep cleaning cost per hour is
                competitively priced to ensure high-quality services that fit your budget.
            </p>
            <h2>
                Same Day Cleaning and Emergency Cleaning Services
            </h2>
            <p>
                We understand that emergencies can arise unexpectedly. This is why we offer same day cleaning services and
                emergency cleaning services. Our professional cleaners are prepared to handle any cleaning emergency
                promptly and efficiently.

            </p>
            <h2>
                Move In Deep Cleaning Service and Apartment Deep Cleaning Services
            </h2>
            <p>
                Moving into a new place or looking for apartment deep cleaning services? Maidbrite Cleaning Services  has you
                covered! Our move in deep cleaning service ensures your new home is spotless and ready for you to settle in
                comfortably.
            </p>
            <p>
                From us at Maidbrite Cleaning Services , we assure you of unmatched deep cleaning services near you. Experience
                a truly clean environment today!
            </p>

        </div>

    </section>



    {{-- offer-serivces section --}}
    @include('app.static_components.we_offer')


    <!-- Callback section -->
    @include('app.static_components.callback_form_banner')



    <!-- Slider -->
    {{-- <section class="slider-section overflow-hidden pt-3">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue pt-4">Check out our Pet Stains and Odor cleaning work</p>
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
