@extends('layouts.index')
@section('title')
    Residential Cleaning | {{ env('APP_NAME') }}
@endsection

@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('res-faqs.json') !!}
    </script> --}}
@endsection

@section('meta')
    <meta name="title" content="Residential Cleaning  | Maidbrite Cleaning Services ">
    <meta name="description"
        content="Looking for top-notch residential cleaning services near you? MaidBrite offers a comprehensive range of residential cleaning options, from general house cleaning to specialized deep cleaning services. Discover the difference of professional residential cleaning services today!">
    <meta name="keywords"
        content="residential cleaning services, residential cleaning services near me, residential cleaning, residential house cleaning services, residential house cleaning services near me, residential house cleaning, residential deep cleaning services, residential cleaners near me, residential cleaning company, residential deep cleaning services near me, professional residential cleaning services, residential home cleaning, residential home cleaning services, residential floor cleaning services near me, cleaning services near me residential, residential cleaning companies near me, residential exterior cleaning, professional cleaning services residential, residential cleaning business, residential home cleaning services near me, move in house cleaning services, what is residential cleaning, house cleaning reviews, residential cleaning meaning, one time house cleaning services, residential cleaner, residential disinfection services, residential cleaning description, house cleaning services reviews, residential oven cleaning service, residential cleaning services description, clean residential services, high end house cleaning services, residential sanitizing services, residential oven cleaning service near me, residential sanitizing services near me, house cleaning services near me hiring, top residential cleaning companies, house cleaning and sanitizing services near me, individual house cleaning">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services ">
    <meta property="og:title" content="Residential Cleaning  | Maidbrite Cleaning Services ">
    <meta property="og:description"
        content="Looking for top-notch residential cleaning services near you? MaidBrite offers a comprehensive range of residential cleaning options, from general house cleaning to specialized deep cleaning services. Discover the difference of professional residential cleaning services today!">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Residential-Cleaning-Residential-Cleaning-residential-cleaner.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services  ">
    <meta name="twitter:description"
        content="Looking for top-notch residential cleaning services near you? MaidBrite offers a comprehensive range of residential cleaning options, from general house cleaning to specialized deep cleaning services. Discover the difference of professional residential cleaning services today!">
    <meta name="twitter:image" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Residential-Cleaning-Residential-Cleaning-residential-cleaner.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Maidbrite Cleaning Services">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Residential-Cleaning-Residential-Cleaning-residential-cleaner.jpg') }}">
    <meta itemprop="image" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Residential-Cleaning-Residential-Cleaning-residential-cleaner.jpg') }}">
    <link rel="image_src" href="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Residential-Cleaning-Residential-Cleaning-residential-cleaner.jpg') }}">



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

@section('css')
<style>
@media (min-width: 1000px) {
    .main-content-section ul{
      padding-left: 7rem;
      padding-right: 7rem;
    }

    .main-content-section ul {
      font-size: 1rem;
    }
}
</style>
@endsection

@section('content')
    <!-- main section -->
    <main class="position-relative ">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Residential-Cleaning-Residential-Cleaning-residential-cleaner.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Residential-Cleaning-Residential-Cleaning-residential-cleaner.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Residential-Cleaning-Residential-Cleaning-residential-cleaner.jpg') }}"
                alt="Residential Cleaning">
        </picture>


        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Residential Cleaning</h1>
                <p class="tex-white text-center text-lg-start fs-3 text-yellow">
                    Top-rated and trusted residential cleaning service in NYC
                </p>
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
            <h1 class="text-center text-green fs-1 py-5 text-uppercase">Residential Cleaning Services
            </h1>

            <p><strong>We MaidBrite Cleaning Services are your  trusted source for top-notch residential cleaning services. We get it, searching for “residential cleaning services near me” can be a tedious task. That's why we're here to put your search to an end. We know your home is more than just four walls; it's a sanctuary, a personal space where you seek comfort, relaxation, and well-being. Here at MaidBrite, we specialize in residential cleaning, ensuring every corner of your space radiates freshness and cleanliness. We offer a wide range of residential house cleaning services designed to transform your living space into a sparkling haven. And the best part? We're one of the best residential house cleaning services near you that you'll find.</strong></p>
            

            <p class="fs-3"><strong>Why Choose MaidBrite?</strong></p>
            <p> 
                <ul class="ms-3 ms-lg-5">
                    <li><strong>Unmatched Quality</strong>: Wondering what is residential cleaning done right? At MaidBrite, we set ourselves apart with our meticulous attention to detail and unyielding commitment to quality. Forget your typical 'in-and-out' services; we offer thorough, exhaustive residential deep cleaning services. Our well-trained, highly skilled cleaning professionals use premium-grade equipment and eco-friendly products to meet your residential cleaning needs.</li>
                    <li><strong>100% Customer Satisfaction</strong>:You're not just another client to us; you're a valued member of the MaidBrite family. As a leading residential cleaning company, our goal is to understand your specific cleaning needs and preferences. Our professional residential cleaning services come with a 100% Satisfaction Guarantee. If you're not completely satisfied, we'll make it right—no questions asked.</li>
                    <li><strong>Safety First</strong>: Looking for residential cleaners near me who are trustworthy and reliable? Our staff are all vetted, trained, and insured. With MaidBrite, you're not just getting a residential cleaning business; you're choosing peace of mind.</li>
                </ul>
            </p>

            <p class="fs-3"><strong>Our Range of Services</strong></p>
            <p> 
                <strong>General House Cleaning</strong>
                <ul class="ms-3 ms-lg-5">
                    <li>
                        Dusting, sweeping, and mopping
                    </li>
                    <li>Residential home cleaning of appliances, counters, and fixtures</li>
                    <li>Trash removal and recycling </li>
                </ul>
            </p>

            <p> 
                <strong>Kitchen Deep Cleaning</strong>
                <ul class="ms-3 ms-lg-5">
                    <li>Degreasing stoves and ovens</li>
                    <li>Residential home cleaning services for microwaves, refrigerators, and dishwashers</li>
                    <li>Sanitizing countertops and sinks</li>
                    <li><strong>Residential floor cleaning services</strong>: yes, we do floors too!</li>
                </ul>
            </p>

            <p> 
                <strong>Bathroom Bliss</strong>
                <ul class="ms-3 ms-lg-5">
                    <li>
                        Disinfecting toilets, tubs, and showers
                    </li>
                    <li>Residential disinfection services for all your bathroom needs</li>
                    <li>Mirror and faucet polishing</li>
                </ul>
            </p>

            <p> 
                <strong>Special Services</strong>
                <ul class="ms-3 ms-lg-5">
                    <li>Move in house cleaning services</li>
                    <li>One time house cleaning services</li>
                    <li>Residential exterior cleaning</li>
                    <li>Residential oven cleaning service</li>
                </ul>
            </p>

            <p>
                <strong>Custom Plans</strong>
                <p>Have unique needs or looking for high end house cleaning services? We offer custom plans to fit your lifestyle.</p>
            </p>
            <p class="fs-3"><strong>Flexible Scheduling</strong></p>
            <p>We know life can get busy. That's why we offer residential  cleaning services with flexible scheduling options, whether you're looking for a one-time deep clean or regular maintenance cleaning.</p>
            <p class="fs-3"><strong>Get Started Today</strong></p>
            <p>Ready for the MaidBrite difference? Check out our house cleaning reviews and house cleaning services reviews to see what our satisfied customers have to say. And if you're worried about finding residential sanitizing services, fret not—we've got you covered. Our professional cleaning services are designed to exceed your expectations.</p>
            <p>So what are you waiting for? Contact us now to book your first appointment. We're one of the top residential cleaning companies you'll find. Trust MaidBrite for all your individual house cleaning needs and let us transform your home into the sanctuary you deserve. We look forward to bringing brightness into your life, one clean room at a time!</p>
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
    {{-- @include('app.static_components.faq-section') --}}

    @include('app.static_components.callus_banner')
@endsection
