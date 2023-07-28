@extends('layouts.index')


@section('title')
    About Us | {{ env('APP_NAME') }}
@endsection

@section('meta')
    <meta name="title" content="About Us | Maidbrite Cleaning Services">
    <meta name="description"
        content="Discover Maidbrite Cleaning Services, a trusted provider of house cleaning services, offering deep cleaning, move in/out, and post construction cleaning. Committed to green, sanitizing solutions!">
    <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services">
    <meta property="og:title" content="About Us | Maidbrite Cleaning Services">
    <meta property="og:description"
        content="Discover Maidbrite Cleaning Services, a trusted provider of house cleaning services, offering deep cleaning, move in/out, and post construction cleaning. Committed to green, sanitizing solutions!">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning ServicesHouse and Commercial Cleaning in NYC  | Maidbrite Cleaning Services">
    <meta name="twitter:description"
        content="Discover Maidbrite Cleaning Services, a trusted provider of house cleaning services, offering deep cleaning, move in/out, and post construction cleaning. Committed to green, sanitizing solutions!">
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

    <meta name="abstract" content="Maidbrite Cleaning Services House and Commercial Cleaning in NYC">
    <meta name="author" content="admin">
    <meta name="classification" content="Blog">
    <meta name="copyright" content="Maidbrite Cleaning Services House and Commercial Cleaning - All rights Reserved.">
    <meta name="distribution" content="Global">
    <meta name="language" content="en-GB">
    <meta name="publisher" content="Maidbrite Cleaning Services">
    <meta name="rating" content="General">
    <meta name="resource-type" content="Document">
    <meta name="revisit-after" content="3">
    <meta name="subject" content="Blog">
@endsection


@section('content')
    <!-- About us banner section -->
    <section class="position-relative">
        <img class="w-100 lozad" height="112"
        alt="about us"
            data-src="{{ asset('assets/images/carpet-cleaning-services--Queens-11105-PristineGreen-Upholstery-and-Carpet-Cleaning-rug-cleaner--NY1.webp') }}" />
        <div class="position-absolute w-100 h-100 top-0 d-flex justify-center align-items-center">
            <h2 class="fs-1 font-median text-green-1 p-0 mb-1">About Us</h2>
        </div>
    </section>
    <!-- About us page section -->
    <section>
        <div class="container py-5 text-lightgray">
            <h2 class="text-blue text-center py-5">
                Experts in House Cleaning Services
            </h2>
            <p>
                At Maidbrite Cleaning Services, we're passionate about delivering exceptional house cleaning services, right
                in the heart of your community. Born from a desire to bring professionalism and a high standard of
                cleanliness to homes near you, we’ve grown into a trusted house cleaning service.
            </p>
            <p>
                Our team of dedicated house cleaners near you take pride in their work. Every sweep, scrub, and polish is
                done with precision and a genuine love for housekeeping. From routine home cleaning services to detailed
                deep cleaning services, our team does it all. We're not just a cleaning company near you; we're a team of
                professionals that feel like family.
            </p>
            <p>
                Perhaps you’re searching for maids near you, or a move-out cleaning service? Maidbrite Cleaning Services is
                committed to providing a diverse range of services to suit every need. If it's housekeeping services near
                you that you’re after, we are available and at your service.
            </p>
            <p>
                We don’t just offer house cleaning services near you; we bring peace of mind and a cleaner, healthier living
                environment right to your doorstep. At Maidbrite Cleaning Services, we offer more than just a service. We deliver a promise
                of exceptional quality, deep cleaning services near you, and most importantly, your satisfaction.
            </p>
            <p>
                Come home to a cleaner house. Come home to Maidbrite Cleaning Services.
            </p>
        </div>
    </section>

    @include('app.static_components.callus_banner')
@endsection
