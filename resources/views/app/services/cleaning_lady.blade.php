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
        content="cleaners near me, cleaning services near me, cleaning services, house cleaning services, house cleaning services near me, house cleaning, house cleaners near me, house cleaning near me, home cleaning services near me, cleaning company near me, cleaning company, cleaning companies near me, cleaning service, home cleaning services, cleaning service near me, home cleaning, house cleaning service, deep cleaning house, professional cleaning services, residential cleaning services">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services ">
    <meta property="og:title" content="Cleaning Lady | Maidbrite Cleaning Services ">
    <meta property="og:description"
        content="Discover superior quality cleaning lady services near you. From regular house cleaning to deep cleaning, our lady maids provide unmatched professionalism and attention to detail.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Cleaning-Lady-Cleaning-Lady-cleaning-services-near-me.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC | Maidbrite Cleaning Services  ">
    <meta name="twitter:description"
        content="Discover superior quality cleaning lady services near you. From regular house cleaning to deep cleaning, our lady maids provide unmatched professionalism and attention to detail.">
    <meta name="twitter:image" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Cleaning-Lady-Cleaning-Lady-cleaning-services-near-me.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Maidbrite Cleaning Services ">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Cleaning-Lady-Cleaning-Lady-cleaning-services-near-me.jpg') }}">
    <meta itemprop="image" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Cleaning-Lady-Cleaning-Lady-cleaning-services-near-me.jpg') }}">
    <link rel="image_src" href="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Cleaning-Lady-Cleaning-Lady-cleaning-services-near-me.jpg') }}">



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
<style type="text/css">
    .main-content-section h3 {
      font-family: "latobold" !important;
      font-size: 1rem;
    }

    @media (min-width: 1000px) {
        .main-content-section h3{
          padding-left: 18rem;
          padding-right: 16rem;
        }
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
                srcset="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Cleaning-Lady-Cleaning-Lady-cleaning-services-near-me.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Cleaning-Lady-Cleaning-Lady-cleaning-services-near-me.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Cleaning-Lady-Cleaning-Lady-cleaning-services-near-me.jpg') }}"
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


            <h2>Cleaning services – the best investment in your home</h2>
            <p>
                Using house cleaning services is one of the best decisions you will ever make. Benefits of using the services of a cleaning company include: enjoying a sparkling clean home with no effort, living in a clean and safe environment, having more time for rest and relaxation, and maintaining the value of your property. MaidBrite Cleaners is a professional cleaning services company that provides the best result to your “cleaning services near me” search – we offer a high standard of services, competitive prices and adjusting to your preferences and schedule. After our visit, your place will look as fresh and clean as the day you moved in!
            </p>
            <h2>
                The Cleaning Lady – Your home’s best friend
            </h2>
            <p>
                Every place needs the touch of a cleaning lady that is trained, experienced, and careful with each task, no matter how big or small. Knowing you can count on someone to provide a complete cleaning service and leave your place impeccable makes you feel like home, whether you own or rent the property. At MaidBrite Cleaners, our house cleaning service includes more than just basic cleaning and extends to whatever is needed to restore your home to its original glory: deep cleaning services, housekeeping, post construction cleaning, carpet and upholstery cleaning, and many others.
            </p>
            <p>Typing “house cleaning services near me”? No need to search the Internet for a home cleaning service anymore, as our team of diligent and experienced cleaning ladies can come to any area in NYC to provide detail-oriented and custom cleaning services, regardless of your schedule.</p>


            <h2>
                Why choose our residential cleaning services?
            </h2>
            <p>
                The need to maintain work-life balance and use those free hours for rest or hobbies has spurred the emergence of thousands of home cleaning services everywhere, and especially in the NYC area. However, not all house cleaning companies are created the same – it is vital that you opt for the services of a reliable cleaner. When looking for “house cleaners near me”, look no further than MaidBrite Cleaners. We provide cleaning services at an unparalleled level and ensure the following benefits:
            </p>
            <h3>
                Professional services
            </h3>
            <p>
                Our experienced cleaning ladies can handle anything from basic cleaning to specific tasks such as upholstery cleaning or deep cleaning due to their extensive training and access to professional cleaning equipment.
            </p>
            <h3>
                Personal touch
            </h3>
            <p>
                Whether you require deep cleaning house services or housekeeping, you are assigned a specialist in providing excellent cleaning services. Our standards are way beyond what the generic cleaning company has to offer and you will notice the difference from our very first visit.
            </p>
            <h3>
                Accessibility
            </h3>
            <p>
                Our services are available in all five boroughs of NYC – you just need to contact us online or give us a phone call and let us know what kind of cleaning services you need. In return, we will provide you with a free quote for your house cleaning services and an appointment at your most convenient time!
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
