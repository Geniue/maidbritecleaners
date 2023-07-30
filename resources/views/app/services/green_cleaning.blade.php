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
        content="green house cleaning, organic cleaning services, green house cleaners, eco-friendly commercial cleaning products, greener cleaners, green clean services, today's green cleaning, green commercial cleaning products, green home cleaning services, greenwashing cleaning products, healthy cleaning services, green cleaning near me, environmentally friendly industrial cleaning products, green housekeeping services, environmentally friendly commercial cleaning products, green cleaning program, green cleaning, simple green cleaner, bissell big green, eco cleaning, clean green, green and clean, green cleaning services, eco cleaning services, eco-friendly cleaning, non-toxic cleaners, green & clean, clean & green, eco cleaning company, green cleaners near me, go green go clean, greenworks cleaner, eco-friendly cleaning services, eco cleaners near me">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services ">
    <meta property="og:title" content="Green Cleaning  | Maidbrite Cleaning Services ">
    <meta property="og:description"
        content="Explore our green cleaning services, combining environmental consciousness with impeccable housekeeping. From organic cleaning services to using eco-friendly commercial cleaning products, we are leading the green revolution in cleaning. Dive into the world of green house cleaning with us - where cleanliness meets sustainability.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/house-cleaning-services-New-York-green-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services  House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services  ">
    <meta name="twitter:description"
        content="Explore our green cleaning services, combining environmental consciousness with impeccable housekeeping. From organic cleaning services to using eco-friendly commercial cleaning products, we are leading the green revolution in cleaning. Dive into the world of green house cleaning with us - where cleanliness meets sustainability.">
    <meta name="twitter:image" content="{{ asset('assets/images/house-cleaning-services-New-York-green-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Maidbrite Cleaning Services ">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{ asset('assets/images/house-cleaning-services-New-York-green-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}">
    <meta itemprop="image" content="{{ asset('assets/images/house-cleaning-services-New-York-green-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}">
    <link rel="image_src" href="{{ asset('assets/images/house-cleaning-services-New-York-green-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}">

    <link rel="shortcut" type="image/png" href="{{ asset('assets/icons/site_icon_128x128.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/icons/site_icon_128x128.png') }}">

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

@section('content')
    <!-- main section -->
    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/images/house-cleaning-services-New-York-green-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/images/house-cleaning-services-New-York-green-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/images/house-cleaning-services-New-York-green-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}"
                alt="cough cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">GREEN CLEANING </h1>
                <p class="tex-white text-center text-lg-start fs-3">
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



            <h1 class="text-center text-green fs-1 py-5">GREEN CLEANING</h1>

            <h2>Going Green: Embracing the Power of Eco-Friendly Cleaning</h2>
            <p>
                In an era where environmental consciousness is paramount, we at our company pride ourselves in offering
                green house cleaning as part of our diverse range of services. We are your green house cleaners with a
                mission to maintain the integrity of your home while minimizing our carbon footprint.
            </p>
            <h2>
                The Revolution of Organic Cleaning Services

            </h2>
            <p>
                Understanding the shift in consumer trends and needs, we have dedicated our efforts to providing organic
                cleaning services. We believe in delivering a top-notch cleaning experience that is not only effective but
                also respects and protects the environment. Unlike conventional cleaning methods, our approach to green
                cleaning isn't tied to harmful chemicals. Instead, we opt for environmentally friendly industrial cleaning
                products and green commercial cleaning products that are safe for you, your family, and our planet.

            </p>
            <h2>
                Eco-Friendly Commercial Cleaning Products: A Sustainable Choice

            </h2>
            <p>

                A unique aspect of our service is our use of eco-friendly commercial cleaning products. These products are
                designed to be tough on dirt and grime, yet gentle on the environment. Our greener cleaners bring about
                sparkling clean surfaces without the unpleasant chemical residue, making us a favorite for those searching
                for green cleaning near me.

            </p>

            <h2>Achieving a Greener Clean</h2>
            <p>
                As a part of our green cleaning program, we offer comprehensive green housekeeping services. These services
                not only clean but also help to create a healthier living space. We are cautious of greenwashing cleaning
                products, so you can be assured that our green clean services only use genuinely green products.

            </p>
            <h2>
                Adapting to Today's Green Cleaning Methods
            </h2>
            <p>
                In tune with today's green cleaning trends, we constantly update our green cleaning methods and products.
                Our commitment to providing healthy cleaning services goes hand in hand with our commitment to
                sustainability. Our company is known for its green home cleaning services that are beneficial for you and
                the environment.
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
                The Way Forward with Green & Clean Services
            </h2>
            <p>
                Our commitment to green cleaning services isn’t just about being eco-friendly; it’s about providing a
                cleaning service that you can trust. We are your reliable eco cleaning company always ready to provide
                excellent eco-friendly cleaning. If you're wondering, "where are the green cleaners near me?", we are just
                one call away, eager to bring our non-toxic cleaners to your doorstep.
            </p>
            <h2>
                Endnote: Clean & Green
            </h2>
            <p>
                In a world where the future is green, our clean & green services are just what you need. We stand against
                the notion of using harsh chemicals and firmly stand for the use of greenworks cleaner and other
                eco-friendly cleaning products. With our eco-friendly cleaning services, your search for the best eco
                cleaners near me ends here. We invite you to join us in the green revolution: Go green, go clean!
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
