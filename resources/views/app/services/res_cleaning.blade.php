@extends('layouts.index')
@section('title')
    Residential Cleaning | {{ env('APP_NAME') }}
@endsection

@section('schema')
    <script type="application/ld+json">
        {!! file_get_contents('res-faqs.json') !!}
    </script>
@endsection

@section('meta')
    <meta name="title" content="Residential Cleaning  | Maidbrite Cleaning Services ">
    <meta name="description"
        content="Discover our comprehensive residential cleaning services that cater to your home's every need, from deep cleaning to sanitization. Offering a blend of convenience, professionalism, and quality, we are the residential cleaning company you can trust for a spotlessly clean and comfortable home.">
    <meta name="keywords"
        content=" residential cleaning services, residential house cleaning services, professional residential cleaning services, residential cleaners near me, residential cleaning company, residential deep cleaning services, residential home cleaning services near me, residential exterior cleaning, professional cleaning services residential, residential cleaning companies near me, residential cleaning business, residential home cleaning,high end house cleaning services, one-time house cleaning services, residential oven cleaning service, residential disinfection services, residential sanitizing services near me, house cleaning reviews, residential cleaning services description, cleaning services near me residential">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services ">
    <meta property="og:title" content="Residential Cleaning  | Maidbrite Cleaning Services ">
    <meta property="og:description"
        content="Discover our comprehensive residential cleaning services that cater to your home's every need, from deep cleaning to sanitization. Offering a blend of convenience, professionalism, and quality, we are the residential cleaning company you can trust for a spotlessly clean and comfortable home.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services  ">
    <meta name="twitter:description"
        content="Discover our comprehensive residential cleaning services that cater to your home's every need, from deep cleaning to sanitization. Offering a blend of convenience, professionalism, and quality, we are the residential cleaning company you can trust for a spotlessly clean and comfortable home.">
    <meta name="twitter:image"
        content="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Maidbrite Cleaning Services">
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
    <meta name="publisher" content="Maidbrite Cleaning Services ">
    <meta name="rating" content="General">
    <meta name="resource-type" content="Document">
    <meta name="revisit-after" content="3">
    <meta name="subject" content="Blog">
@endsection


@section('content')
    <!-- main section -->
    <main class="position-relative ">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-residential-cleaning-services-house-cleaning-services.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-residential-cleaning-services-house-cleaning-services.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-residential-cleaning-services-house-cleaning-services.jpg') }}"
                alt="Pet Stains and Odor cleaning">
        </picture>


        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Residential Cleaning</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Top-rated and trusted residential cleaning service in NYC
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
            <h1 class="text-center text-green fs-1 py-5">Residential Cleaning
            </h1>
            <h2><strong>Welcome to our Residential Cleaning Services</strong></h2>

            <p>Your home is your sanctuary, your retreat and a reflection of your lifestyle. Our professional residential
                cleaning services are designed to keep it looking its best. We pride ourselves on our dedicated staff, our
                high end house cleaning services, and our ability to offer a residential cleaning company that can take care
                of all your home needs.</p>
            <h2><strong>Quality Residential House Cleaning Services
                </strong></h2>
            </p>
            <p>It’s often said that a clean home is a happy home. Our residential house cleaning services provide thorough,
                top-to-bottom cleaning, ensuring every corner of your home sparkles. Whether you require a one-time house
                cleaning services or regular maintenance, our teams are fully equipped and ready to provide professional
                cleaning services residential customers will love. </p>
            <h2><strong>Professional Residential Cleaning Services
                </strong></h2>
            </p>
            <p>With our professional residential cleaning services, you get more than just a clean house. Our residential
                cleaners near me are trained professionals who provide personalized attention and meticulous care. Our
                commitment to delivering superior results is what sets us apart from other residential cleaning companies
                near me.
            </p>
            <h2><strong>Comprehensive Residential Home Cleaning Services
                </strong></h2>
            </p>
            <p>From residential deep cleaning services to basic tidying, we've got it covered. Our residential home cleaning
                services near me cater to every corner of your house. That includes offering a unique residential oven
                cleaning service, ensuring your kitchen is in top-notch condition.</p>
            <h2><strong>Residential Exterior Cleaning

                </strong></h2>
            </p>
            <p>Our residential exterior cleaning services provide the same level of quality and care as our interior
                services. From power washing to window cleaning, our residential cleaning business ensures the exterior of
                your home looks as good as the interior.
            </p>
            <h2><strong>Specialized Residential Disinfection and Sanitizing Services

                </strong></h2>
            </p>
            <p>In today’s world, cleanliness goes beyond just removing dust and clutter. It’s about creating a healthier
                living space. Our residential disinfection services and residential sanitizing services near me offer a
                detailed cleaning approach that not only cleans your home but also eliminates germs and bacteria, providing
                a safe environment for you and your family.</p>
            <h2><strong>Convenience and Reliability


                </strong></h2>
            </p>
            <p>Our residential cleaning services near me take the stress out of keeping your home clean. We're committed to
                ensuring our clients receive the best residential cleaning services, along with an easy and convenient
                booking process. We invite you to read our house cleaning reviews and check out our residential cleaning
                services description to get a better sense of what we offer.</p>
            <p>
                Let our residential cleaning services handle your cleaning needs, while you sit back and enjoy your clean,
                comfortable home. Choose us for cleaning services near me residential owners can trust. Remember, we're not
                just cleaning houses; we're taking care of homes.
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
            <p class="fs-1 text-blue pt-4">Check out our Auto Interior cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/11385-car-detailing-seat-shampoo-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-internal-car-wash-NY.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/auto-interior-cleaning-interior-car-seat-cleaning-near-me-Queens-NY-11105-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/auto-interior-cleaning-Queens-interior-detailing-services-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-NY.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/auto-interior-cleaning-Queens-NY-11385-interior-car-detailing-near-me-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="Office carpet cleaning"
                                width="420" height="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-11385-auto-interior-cleaning-NY-full-car-interior-detail-near-me.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/PristineGreen-Upholstery-and-Carpet-Cleaning-Queens-NY-deep-car-interior-cleaning-near-me-11385-auto-interior-cleaning.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/auto-interior-cleaning/Queens 11385 NY PristineGreen Upholstery and Carpet Cleaning auto interior cleaning auto carpet cleaner near me.jpg') }}"
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

    </section>

 --}}


    <!-- what services you need section -->
    @include('app.static_components.callback_form_submit')

    {{-- faqs --}}
    @include('app.static_components.faq-section')

    @include('app.static_components.callus_banner')
@endsection
