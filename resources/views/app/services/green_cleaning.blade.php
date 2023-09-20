@extends('layouts.index')
@section('title')
    Green Cleaning | {{ env('APP_NAME') }}
@endsection


@section('schema')
    <script type="application/ld+json">
        {!! file_get_contents('green-faqs.json') !!}
    </script>
@endsection

@section('meta')
    <meta name="title" content="Green Cleaning  | Maidbrite Cleaning Services ">
    <meta name="description"
        content="Explore our green cleaning services, combining environmental consciousness with impeccable housekeeping. From organic cleaning services to using eco-friendly commercial cleaning products, we are leading the green revolution in cleaning. Dive into the world of green house cleaning with us - where cleanliness meets sustainability.">
    <meta name="keywords"
        content="green house cleaning, organic cleaning services, green house cleaners, green house cleaning service, green house cleaning services, eco-friendly maid service, green clean services, eco green house cleaning, green janitorial supplies, today's green cleaning, green commercial cleaning products, green cleaning nyc, green home cleaning services, green cleaning certification">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services ">
    <meta property="og:title" content="Green Cleaning  | Maidbrite Cleaning Services ">
    <meta property="og:description"
        content="Explore our green cleaning services, combining environmental consciousness with impeccable housekeeping. From organic cleaning services to using eco-friendly commercial cleaning products, we are leading the green revolution in cleaning. Dive into the world of green house cleaning with us - where cleanliness meets sustainability.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Green-Cleaning--Green-Cleaning--green-house-cleaning.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services  ">
    <meta name="twitter:description"
        content="Explore our green cleaning services, combining environmental consciousness with impeccable housekeeping. From organic cleaning services to using eco-friendly commercial cleaning products, we are leading the green revolution in cleaning. Dive into the world of green house cleaning with us - where cleanliness meets sustainability.">
    <meta name="twitter:image" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Green-Cleaning--Green-Cleaning--green-house-cleaning.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Maidbrite Cleaning Services ">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Green-Cleaning--Green-Cleaning--green-house-cleaning.jpg') }}">
    <meta itemprop="image" content="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Green-Cleaning--Green-Cleaning--green-house-cleaning.jpg') }}">
    <link rel="image_src" href="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Green-Cleaning--Green-Cleaning--green-house-cleaning.jpg') }}">



    <meta name="abstract" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC">
    <meta name="author" content="admin">
    <meta name="classification" content="Blog">
    <meta name="copyright" content="Maidbrite Cleaning Services  House and Commercial Cleaning - All rights Reserved.">
    <meta name="distribution" content="Global">
    <meta name="language" content="en-GB">
    <meta name="publisher" content="Maidbrite Cleaning Services  ">
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
    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Green-Cleaning--Green-Cleaning--green-house-cleaning.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Green-Cleaning--Green-Cleaning--green-house-cleaning.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/geo_services/11206--NY--Brooklyn-Green-Cleaning--Green-Cleaning--green-house-cleaning.jpg') }}"
                alt="cough cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Green  Cleaning </h1>
                <p class="tex-white text-center text-lg-start fs-3 text-yellow">
                    Get green and non-toxic cleaning services in NYC
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



            <h1 class="text-center text-green fs-1 py-5 text-uppercase">GREEN CLEANING</h1>

            <p><strong>Taking care to protect the environment, no matter what activity you are doing, is considered vital these days. We have been aware of our negative impact on the planet for decades and measures to prevent and minimize pollution are already underway. One of those strategies is represented by green house cleaning, which is ensured by companies with green cleaning certification and using environmentally-friendly products.</strong></p>

            <h2>Going green with organic cleaning services – a must for any cleaning company</h2>
            <p>
                At MaidBrite Cleaners we provide you with a clean and sanitized home while also taking care to reduce the carbon footprint of our company and of our customers. We have been offering green home cleaning services since this shift in consumer trends emerged and we are already experienced in the use of green janitorial supplies and cleaning techniques.
            </p>
            <p>
                We have ditched the conventional cleaning methods wherever possible and replaced harmful chemicals with green cleaning products and cleaning methods (steam cleaning, using natural substances, opting for reusable cleaning cloths, etc.) Being able to provide green house cleaning services is a huge differentiator and one of the criteria that an increasing number of consumers use when choosing a cleaning company.
            </p>
            <h2>How we achieve superior cleaning with our eco-friendly maid service</h2>
            <p>
                Worried that green cleaning may not be as effective as conventional cleaning methods? Today's green cleaning is reliable and well-established, so your home or workplace benefits from the highest standards of cleanliness without polluting the environment or contributing significantly to the carbon footprint.
            </p>
            <h2>Avoiding harsh cleaning chemicals</h2>
            <p>
                By cleaning your home regularly, you will not need very strong cleaning chemicals because there will be no hardened dirt and grime to eliminate. Although we provide deep cleaning as well, we advise you to use regular housekeeping services that help to keep your home in good condition and prevent the situation from getting out of control.
            </p>

            <h2>Green cleaning methods</h2>
            <p>
                One of the ways to eliminate the need for harsh chemical is using green cleaning methods, such as steam cleaning, hot water extractors (with green cleaning solutions), air drying, etc.
            </p>
            <h2>
                Using genuinely green cleaning products
            </h2>
            <p>
                Not every product that has a green logo on its label is truly a green cleaning supply. MaidBrite Cleaners is a professional green cleaning NYC company and we are not fooled by greenwashing tricks. We know our products, how they work and how they help to maintain a healthy and safe environment in your home.
            </p>
            <h2>
                Eco Green House Cleaning: The Future of Cleaning
            </h2>
            <p>
                The concept of eco green house cleaning isn't a fad; it's the future of cleaning. From the simple use of a
                simple green cleaner to bigger tasks using a bissell big green, our company's approach is rooted in
                environmental stewardship. The eco cleaning methods we use leave your house clean and green.
            </p>
            <h2>
                Benefits of using a green house cleaning service
            </h2>
            <p>
                Have you decided to switch to green house cleaners? This is an excellent decision as you will be enjoying the following advantages:
                <ul class="ms-3 ms-lg-5">
                    <li>Reducing pollution and energy consumption.</li>
                    <li>Enjoying a healthier environment at home, free from residue from harmful chemicals.</li>
                    <li>Achieving high standards of hygiene without harming your health and physical assets, while also ensuring a healthier working environment for people in the cleaning industry.</li>
                    <li>Supporting the green commercial cleaning products industry and enabling it to occupy a larger share of the market, thus making a lasting impact on consumer habits and preferences.</li>
                </ul>
            </p>
            <p>
                Choose green clean services from <strong>MaidBrite Cleaners</strong> today and the planet will thank you later!
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
            <p class="fs-1 text-blue pt-4">Check out our Green cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/green-cleaning/1608ae8f628353.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/green-cleaning/carpet cleaner for urine smell Queens best carpet cleaner for pet urine PristineGreen Upholstery and Carpet Cleaning NY 11385.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/green-cleaning/carpet cleaner nyc Queens NY 11385 green upholstery cleaning NYC PristineGreen Upholstery and Carpet Cleaning.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/green-cleaning/mattress-cleaner-nyc-PristineGreen-Upholstery-and-Carpet-Cleaning-upholstery-cleaning-nyc-NY-Queens-11105.jpg') }}"
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
