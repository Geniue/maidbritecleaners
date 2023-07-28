@extends('layouts.index')
@section('title')
    Cleaning Services | {{ env('APP_NAME') }}
@endsection

@section('css')
    <style>
        .services-items .col-12 {
            padding-bottom: 38px !important;
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
    <meta property="og:image"
        content="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services  ">
    <meta name="twitter:description"
        content="Maidbrite Cleaning Services  provides top-notch house cleaning services, move in/out cleaning, post construction cleaning, and commercial cleaning. Your local solution for a clean, sanitized home or business!">
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
                <p class="heading-2 text-center text-lg-start p-3">Top Carpet Cleaner Service in NYC</p>
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
                        <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 py-3 text-green-1 text-uppercase">
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
                                            data-src="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="text-green-1 fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto" text-lightgray>
                                    House Cleaning Services
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    We use our homes for everything which is why its important to keep it clean from top to
                                    bottom. Our comprehensive house cleaning services will suite all your needs!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('post_construct') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Post Construction " width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-house-cleaning-services-New-York-PristineGreen-House-Cleaning-UES-Branch-10021-post-construction-cleaning.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Post Construction Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Construction work is always messy: dirt, dust, and grime everywhere! Our trained team
                                    knows
                                    how to quickly and effectively clean every nook and cranny of your new project!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('move_in') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Move In Cleaning" width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-move-in-cleaning-house-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Move In Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    When we move to a new place, the last thing we want to think about it cleaniung it after
                                    we
                                    have just had the hassle of moving. Hire us to do a complete top to bottom clean of your
                                    new
                                    house or apartment!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('move_out') }}">
                                <div class="top-holder">
                                    <div class="img-holder lozad">
                                        <img alt="Move Out Cleaning" class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/images/house-cleaning-services-New-York-move-out-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Move Out Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    After we have packed up all our boxes, we are often too tired to clean the whole
                                    apartment
                                    before we move. That's why you should call us to do a complete and thorough clean of
                                    your
                                    old home to ensure no bills come in the mail from the landlord!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('apart_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Apartment Cleaning" width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-apartment-cleaning-services-house-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Apartment Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Our apartments are the center of our lives, but sometimes life is too busy for us to
                                    spend
                                    time cleaning it! Our services do the heavy lifting for you so you can keep on living
                                    life
                                    without worrying about cleaning!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('green_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Green Cleaning"  width="295" height="295"
                                            alt="green carpet cleaner service"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-maid-cleaning-service-house-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Green Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Our furry friends sometimes make accidents on our clean upholstery and carpet.
                                    Our pet odor
                                    removal and pet stain cleaning services in NYC remove those stains and smells
                                    safetly and
                                    effectively!
                                </p>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('comm_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Commercial Cleaning" width="295" height="295"
                                            data-src="{{ asset('assets/images/PristineGreen-House-Cleaning-UES-Branch-house-cleaning-services-10021-New-York-commercial-cleaning-services-NY.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Commercial Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Our furry friends sometimes make accidents on our clean upholstery and carpet.
                                    Our pet odor
                                    removal and pet stain cleaning services in NYC remove those stains and smells
                                    safetly and
                                    effectively!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('maid_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Maid Cleaning" width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-maid-cleaning-service-house-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Maid Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Our furry friends sometimes make accidents on our clean upholstery and carpet.
                                    Our pet odor
                                    removal and pet stain cleaning services in NYC remove those stains and smells
                                    safetly and
                                    effectively!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('res_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Residential Cleaning" width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-residential-cleaning-services-house-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Residential Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Car owners can spend hours every day in their vehicles, and
                                    slowly the car’s interior being its seats, trunk, carpets,
                                    mats, and even headliner gather dirt, odors, bacteria, and
                                    stains. Getting your car cleaned by an interior auto
                                    detailer will make your driving experience more hygienic,
                                    and guests will not feel uncomfortable with the dirty
                                    upholstery!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('cleaning_lady') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Cleaning Lady" width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-cleaning-lady-house-cleaning-services.jpg') }}" />
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Cleaning Lady
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Keeping the office clean and hygienic is essential for a productive work
                                    environment. Having
                                    a professional upholstery steam cleaner and rug shampooer regularly maintain
                                    your office’s
                                    fabric and leather furniture and carpets will ensure a safe and clean work
                                    environment with
                                    happy employees!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('deep_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="Deep Cleaning" width="295" height="295"
                                            data-src="{{ asset('assets/images/PristineGreen-House-Cleaning---UES-Branch-house-cleaning-services-10021-New-York-deep-cleaning-services-NY.jpg') }}">
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Deep Cleaning
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    The couch is the centerpiece of the living room and over time gets covered in
                                    dirt, smells,
                                    and stains. Hiring a professional sofa cleaner is essential to keeping your home
                                    clean and
                                    hygienic. Our couch cleaning services include stain removal, odor removal,
                                    sanitizing,
                                    deodorizing, and more!!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('house_keeping') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" alt="House Keeping" width="295" height="295"
                                            data-src="{{ asset('assets/images/NY-10021-New-York-PristineGreen-House-Cleaning-UES-Branch-housekeeping-services-house-cleaning-services.jpg') }}">
                                    </div>
                                </div>
                                <h3 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    House Keeping
                                </h3>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Having a house keeper saves you so much time! No need to worry about deep cleaning the
                                    ktichen or bathroom. Keep enjoying life and let us do the dirty work!
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
