@extends('layouts.index')
@section('title')
    Maid Cleaning | {{ env('APP_NAME') }}
@endsection

@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('couch-faqs.json') !!}
    </script> --}}
@endsection

@section('meta')
    <meta name="title" content="Move Out Cleaning  | Maidbrite Cleaning Services ">
    <meta name="description"
        content="Looking for a reliable maid cleaning service near me? MaidBrite offers top-notch house cleaning services, deep cleaning maid service, and move out cleaning service to keep your home spotless. Flexible scheduling and affordable cleaning services available.">
    <meta name="keywords"
        content="maid cleaning service, maid cleaning service near me, cleaning maid service, house cleaning services, deep cleaning maid service, house deep cleaning service, apartment cleaning services, home cleaners service, deep house cleaning, move out cleaning service, move in cleaning, moving cleaning service, deep clean service, residential cleaning services near me, house cleaners near me, housekeeper near me, home cleaners near me, professional house cleaning, private house cleaners near me, house keeping services near me, one time cleaning service, local house cleaning services, best house cleaning services near me, weekly house cleaning cost, affordable cleaning services, and home deep cleaning services">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services ">
    <meta property="og:title" content="Move Out Cleaning  | Maidbrite Cleaning Services ">
    <meta property="og:description"
        content="Looking for a reliable maid cleaning service near me? MaidBrite offers top-notch house cleaning services, deep cleaning maid service, and move out cleaning service to keep your home spotless. Flexible scheduling and affordable cleaning services available.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Maid-Cleaning-Maid-Cleaning-the-cleaning-lady.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services  ">
    <meta name="twitter:description"
        content="Looking for a reliable maid cleaning service near me? MaidBrite offers top-notch house cleaning services, deep cleaning maid service, and move out cleaning service to keep your home spotless. Flexible scheduling and affordable cleaning services available.">
    <meta name="twitter:image" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Maid-Cleaning-Maid-Cleaning-the-cleaning-lady.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Maidbrite Cleaning Services ">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Maid-Cleaning-Maid-Cleaning-the-cleaning-lady.jpg') }}">
    <meta itemprop="image" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Maid-Cleaning-Maid-Cleaning-the-cleaning-lady.jpg') }}">
    <link rel="image_src" href="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Maid-Cleaning-Maid-Cleaning-the-cleaning-lady.jpg') }}">



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
@media (min-width: 1000px) {
    .main-content-section ul{
      padding-left: 20rem;
      padding-right: 18rem;
    }
    .main-content-section ul {
      font-family: "latobold" !important;
      font-size: 1rem;
    }
}
</style>
@endsection
@section('content')
    <!-- main section -->
    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Maid-Cleaning-Maid-Cleaning-the-cleaning-lady.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Maid-Cleaning-Maid-Cleaning-the-cleaning-lady.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Maid-Cleaning-Maid-Cleaning-the-cleaning-lady.jpg') }}"
                alt="Maid Cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Maid Cleaning</h1>
                <p class="tex-white text-center text-lg-start fs-3">
                    Trusted and recommended maid cleaning service im NYC
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

            <h1 class="text-center text-green fs-1 py-5">Maid Cleaning Service</h1>


            <p><strong>
                    We understand that your home is your sanctuary, a place where you unwind and make cherished memories with your family. In today's fast-paced world, finding a reliable maid cleaning service near you can be a challenge. That's where we come in. We are your go-to maid cleaning service, designed to make your life easier and your home impeccably clean.
                </strong></p>
            <p class="fs-3"><strong>Services We Offer</strong></p>
            <p>
                Our services are as diverse as the needs of our clients. Whether it’s house deep cleaning service, one-time deep cleaning, ongoing weekly or monthly service, or specialized cleaning tasks like apartment cleaning services, we've got you covered. Here are some of the services we offer: 
                <ul>
                    <li><strong>Regular Cleaning</strong>: Regular dusting, vacuuming, and mopping are the cornerstones of this service. This is home cleaners service at its finest. Bathrooms, kitchens, living rooms, and bedrooms will all get our meticulous attention. No surface goes uncleaned!</li>
                    <li><strong>Deep Cleaning</strong>: Our deep cleaning maid service goes beyond the surface to clean those often-overlooked areas. Think baseboards, door frames, light fixtures, and even that awkward space behind the toilet. This is deep house cleaning at its best.</li>
                    <li><strong>Move-In/Move-Out Cleaning</strong>: Moving is stressful enough without having to worry about cleaning. Our move out cleaning service ensures your old home is spotless for the next occupants, while our move in cleaning makes your new space welcoming.</li>

                    <li><strong>Specialized Cleaning</strong>: Need your oven cleaned or your carpets shampooed? We offer moving cleaning service, deep clean service, and more to address those difficult-to-clean areas.</li>

                    <li><strong>Environmentally Friendly Cleaning</strong>: We offer residential cleaning services near you that are eco-friendly. Our non-toxic cleaning supplies are safe for your family and pets.</li>

                    <li><strong>Flexible Scheduling and Easy Booking</strong>: Looking for house cleaners near me or a housekeeper near me? Our local house cleaning services offer flexible scheduling options, including weekends and evenings. You can easily book us through our website, phone, or app.</li>
                </ul>
            </p>

            <p class="fs-3"><strong>Why Choose MaidBrite?</strong></p>
            <p>
                <ul>
                    <li><strong>Quality You Can See and Feel</strong>: We offer the best house cleaning services with exceptional quality.</li>
                    <li><strong>Trained and Professional Staff</strong>: Our home cleaners undergo intensive training, covering cleaning techniques, customer service, and safety protocols.</li>
                    <li><strong>Competitive Pricing</strong>: Our affordable cleaning services come with transparent pricing and no hidden fees.</li>
                </ul>
            </p>
            <p class="fs-3"><strong>Contact Us</strong></p>
            <p>Ready for a professional house cleaning or perhaps looking for private house cleaners near me? Maybe you need house keeping services near me or one time cleaning service? Get in touch with us for a free consultation. Our weekly house cleaning cost packages are designed to suit different budgets and needs.</p>
            <p>The MaidBrite promise is not just about maid cleaning services; it's about enhancing your quality of life. Experience our home deep cleaning services and see for yourself. We look forward to serving you soon!</p>

        </div>
    </section>



    {{-- offer-serivces section --}}
    @include('app.static_components.we_offer')


    <!-- Callback section -->
    @include('app.static_components.callback_form_banner')



    {{-- <!-- Slider -->
    <section class="slider-section overflow-hidden pt-3">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue pt-4">Check out our Couch cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/1608aedb622de4.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/10010-NY-sofa-cleaning-NYC-New-York-couch-cleaner-NYC-MaidBrite-Upholstery-and-Carpet-Cleaning-min.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/11105 couch cleaner nyc NY MaidBrite Upholstery and Carpet Cleaning Queens sofa cleaning nyc.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/11105-couch-cleaner-nyc-deep-clean-microfiber-couch-Queens-NY-MaidBrite-Upholstery-and-Carpet-Cleaning.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="Office carpet cleaning"
                                width="420" height="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/11385 NY MaidBrite Upholstery and Carpet Cleaning Queens stanley steemer prices for couch cleaning sofa cleaning nyc.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/carpet cleaner NYC upholstery cleaning Brooklyn Queens NY 11385 MaidBrite Upholstery and Carpet Cleaning.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/carpet cleaning service MaidBrite Upholstery and Carpet Cleaning coronavirus steam cleaning prevention 10010 NY New York.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/Couch Cleaning Companies.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/sofa cleaning nyc Queens professional couch cleaning prices MaidBrite Cleaning Services Upholstery and Carpet Cleaning 11105 NY.jpg') }}"
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
    {{-- @include('app.static_components.faq-section') --}}
    @include('app.static_components.callus_banner')
@endsection
