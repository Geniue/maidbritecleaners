@extends('layouts.index')
@section('title')
    Cleaning Services | {{ env('APP_NAME') }}
@endsection

@section('css')
    <style>
        .services-items .col-12 {
            padding-bottom: 38px !important;
        }
        .main-carpet-services-section {
            background-image: url('{{'assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Top-Commercial-and-House-Cleaning-Service-house-cleaning-near-me.jpg'}}')
            }
    </style>
@endsection


@section('meta')
    <meta name="title" content="Cleaning Services  | Maidbrite Cleaning Services ">
    <meta name="description"
        content="Maidbrite Cleaning Services  provides top-notch house cleaning services, move in/out cleaning, post construction cleaning, and commercial cleaning. Your local solution for a clean, sanitized home or business!">
    <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services ">
    <meta property="og:title" content="Cleaning Services  | Maidbrite Cleaning Services ">
    <meta property="og:description"
        content="Maidbrite Cleaning Services  provides top-notch house cleaning services, move in/out cleaning, post construction cleaning, and commercial cleaning. Your local solution for a clean, sanitized home or business!">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Top-Commercial-and-House-Cleaning-Service-house-cleaning-near-me.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services  ">
    <meta name="twitter:description"
        content="Maidbrite Cleaning Services  provides top-notch house cleaning services, move in/out cleaning, post construction cleaning, and commercial cleaning. Your local solution for a clean, sanitized home or business!">
    <meta name="twitter:image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Top-Commercial-and-House-Cleaning-Service-house-cleaning-near-me.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Maidbrite Cleaning Services ">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Top-Commercial-and-House-Cleaning-Service-house-cleaning-near-me.jpg') }}">
    <meta itemprop="image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Top-Commercial-and-House-Cleaning-Service-house-cleaning-near-me.jpg') }}">
    <link rel="image_src" href="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Top-Commercial-and-House-Cleaning-Service-house-cleaning-near-me.jpg') }}">


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

@endsection

@section('content')
    <!-- main section starts here -->
    <main class="main-carpet-services-section d-flex align-items-end py-5">
        <div class="col-12 col-md-8 col-xl-6  p-5 pb-120">
            <!-- heading section -->
            <div class="">
                <h1 class=" text-green">
                    Services
                </h1>
                <p class="heading-2 text-center text-lg-start p-3 text-yellow">Top Carpet Cleaner Service in NYC</p>
            </div>
            <!-- Book now seciton -->
            <form action="{{ route('callback_number') }}" method="POST" class="row gap-3">
                @csrf
                <input aria-label="input phone" type="text"  class="phone-input py-3 rounded-2 col-md-8 col-12" />
                <button type="submit" class="py-3 rounded-2 bg-lightgreen text-white col-md-3 col-12">BOOK NOW</button>
            </form>
        </div>
    </main>
    <!-- main section starts here -->

    {{-- reviews banner section --}}
    {{-- @include('app.static_components.review_banner') --}}


    {{-- services section starts here --}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-4">
                        <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 py-3 text-green-1 text-uppercase ">
                            SERVICES
                        </h2>
                    </div>
                    <div class="services-items col-md-12 row row-gap-4 row-gap-lg-5 justify-content-center">
                        <div class="col-12 col-sm-6 col-md-4 item text-center">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('house_cleaning') }}"
                                class="d-flex flex-column gap-3">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img alt="post" class="img img-fluid lazy rounded-3 lozad" width="295"
                                            height="295"
                                            alt="House Cleaning"
                                            data-src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-House-Cleaning-House-Cleaning-cleaners-near-me.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="text-green-1 fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto" text-lightgray>
                                    House Cleaning Services
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    we understand that every home is a unique sanctuary. That's why we offer comprehensive and
                                    tailored house cleaning services designed to maintain the sparkle in your abode and complement your
                                    lifestyle.
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('post_construct') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Post Construction " width="295" height="295"
                                            data-src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Post-Construction-Cleaning-Post-Construction-Cleaning-post-construction-cleaning.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Post Construction Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    MaidBrite Cleaning Services offers comprehensive post-construction cleaning services to make your newly built or renovated space spotless and move-in ready. Whether it's interior cleaning, exterior cleaning, or specialized services, we've got you covered. Our expert staff is trained in post renovation cleaning, construction clean up, and construction site cleaning. We offer tailored solutions with competitive post-construction cleaning rates, making us a leading construction cleaning company in your area. Fully insured and eco-friendly, MaidBrite is your go-to for all things related to cleaning after construction.
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('move_in') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Move In Cleaning" width="295" height="295"
                                            data-src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Move-In-Cleaning-Services-Move-In-Cleaning-Services-moving-cleaning-service.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Move In Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    mbarking on a new journey in a new home is thrilling, but can also be quite stressful, especially when it
                                    comes to cleaning. You need a fresh start and a spotlessly clean space. That's where our move in cleaning
                                    services come into play.
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('move_out') }}">
                                <div class="top-holder">
                                    <div class="img-holder lozad">
                                        <img alt="Move Out Cleaning" class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Move-Out-Cleaning-Services-Move-Out-Cleaning-Services-move-out-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Move Out Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Finding reliable move out cleaners near you can be a daunting task. That's where we come in. Maidbrite Cleaning Services  House
                                    Cleaning takes pride in offering highly trained and experienced professionals who understand the importance
                                    of a thorough cleaning process.
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('apart_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Apartment Cleaning" width="295" height="295"
                                            data-src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Apartment-Cleaning--Apartment-Cleaning--apartment-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Apartment Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    where quality and convenience are the cornerstones of our professional apartment
                cleaning services. Your comfort and satisfaction are paramount to us, and we strive to provide an
                immaculate, rejuvenated living space that reflects your lifestyle and preferences. 
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('green_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Green Cleaning"  width="295" height="295"
                                            alt="green carpet cleaner service"
                                            data-src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Green-Cleaning--Green-Cleaning--green-house-cleaning.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Green Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    In an era where environmental consciousness is paramount, we at our company pride ourselves in offering
                green house cleaning as part of our diverse range of services. We are your green house cleaners with a
                mission to maintain the integrity of your home while minimizing our carbon footprint.
                                </p>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('comm_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Commercial Cleaning" width="295" height="295"
                                            data-src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Commercial-Cleaning-Commercial-Cleaning-commercial-cleaning.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Commercial Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Commercial spaces often the get the most abuse. Whether it be customers coming in and out of the
                    store all day, employees use the office sapce day and night, or a big dusty mess from after a
                    construction project.!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('maid_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Maid Cleaning" width="295" height="295"
                                            data-src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Maid-Cleaning-Maid-Cleaning-the-cleaning-lady.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Maid Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Welcome to MaidBrite, your ultimate choice for maid cleaning services that span from regular cleaning to specialized tasks like apartment cleaning services and move-in/move-out cleaning. Our professional team, background-checked for your safety, excels in deep house cleaning using eco-friendly products. With flexible scheduling, competitive pricing, and a 100% satisfaction guarantee, MaidBrite stands out as the maid cleaning service near me you can fully trust. Whether you need a professional house cleaning or are in search of house cleaners near me, we offer an array of options to meet your specific needs.

                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('res_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Residential Cleaning" width="295" height="295"
                                            data-src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Residential-Cleaning-Residential-Cleaning-residential-cleaner.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Residential Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    MaidBrite Cleaning Services is your ultimate destination for high-quality residential cleaning services. Whether you're searching for "residential cleaning services near me," interested in residential deep cleaning, or in need of specialized residential house cleaning services, we've got you covered. With a focus on customer satisfaction and safety, our vetted and trained staff provide a variety of services including residential home cleaning, one-time deep cleans, and even move-in house cleaning services. Check out our house cleaning reviews and book an appointment to experience the MaidBrite difference today!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('cleaning_lady') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Cleaning Lady" width="295" height="295"
                                            data-src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Cleaning-Lady-Cleaning-Lady-cleaning-services-near-me.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Cleaning Lady
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    There’s no place like home, especially when it's sparkling clean. At our cleaning company, we take great
                                    pride in providing top-tier cleaning lady services, offering you a fresh and vibrant living environment.
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('deep_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Deep Cleaning" width="295" height="295"
                                            data-src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Deep-Cleaning--Deep-Cleaning--details-cleaning-services.jpg') }}">
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Deep Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    We are a trusted professional deep cleaning services provider with a
                                    commitment to excellence. Our wide range of services, from whole house deep cleaning to office deep cleaning
                                    services, ensures that every corner of your space gleams with freshness and cleanliness.
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('house_keeping') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="House Keeping" width="295" height="295"
                                            data-src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-House-Keeping-House-Keeping-what-is-housekepping.jpg') }}">
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    House Keeping
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    where your search for housekeeping cleaning services ends. We know what
                    housekeeping means – it is a commitment to cleanliness, organization, and a harmonious living
                    environment. We understand that when you're looking for a housekeeper, you want more than just a cleaner
                    housekeeper.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- services section ends here --}}







    <!-- Callback-form section -->
    @include('app.static_components.callback_form_banner')



    @include('app.static_components.callback_form_submit')

    @include('app.static_components.callus_banner')
@endsection
