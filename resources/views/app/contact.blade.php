@extends('layouts.index')
@section('title')
    Contact Us | {{ env('APP_NAME') }}
@endsection

@section('meta')
    <meta name="title" content=" Contact Us | Maidbrite Cleaning Services">
    <meta name="description"
        content="Reach out to Maidbrite Cleaning Services for all your house cleaning services, sanitization needs, and commercial cleaning. We're here to help you keep your space pristine!">
    <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company, quote, quote now, request a quote, contact form, contact us">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services">
    <meta property="og:title" content=" Contact Us  | Maidbrite Cleaning Services">
    <meta property="og:description"
        content="Reach out to Maidbrite Cleaning Services for all your house cleaning services, sanitization needs, and commercial cleaning. We're here to help you keep your space pristine!">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="{{ asset('assets/images/10021-house-cleaning-services-NY-PristineGreen-House-Cleaning-UES-Branch-New-York-housekeeping-services.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services ">
    <meta name="twitter:description"
        content="Reach out to Maidbrite Cleaning Services for all your house cleaning services, sanitization needs, and commercial cleaning. We're here to help you keep your space pristine!">
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


@section('css')
    <style type="text/css">
        .con a {
            color: unset;
        }

        #map,
        #map_2,
        #map_3,
        #map_4 {
            height: 200px;
            width: 200px;
        }

        .address-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <!-- Contact us banner section -->
    <section class="position-relative">
        <img class="w-100 lozad" height="130" data-src="{{ asset('assets/images/rug-cleaner-nyc-contact-us.webp') }}" />
        <div class="position-absolute w-100 h-100 top-0 d-flex justify-center align-items-center">
            <p class="fs-1 font-median text-green p-0 mb-1">Contact Us</p>
        </div>
    </section>
    <!-- Contact us page section -->
    <section>
        <div class="container flex flex-column flex-lg-row py-5">
            <!-- contact us form -->
            <div class="col-12 col-lg-7 col-xl-8 d-flex flex-column my-5 py-2 gap-3 pe-md-5">
                <h3 class="fs-3 font-median text-blue">Contact Us</h3>
                <p class="text-lightgray p-0">
                    Contact our sales team below! Our knowledgable representatives will
                    respond shortly and provide you with a free quote and answer any
                    questions you have.
                </p>
                <form action="{{ route('contact_us') }}" method="POST" class="d-flex flex-column gap-4 pe-lg-5">
                    @csrf
                    <input type="text" name="name" class="border border-1 rounded-2 p-2" placeholder="Name" />
                    <input type="text" name="email" class="border border-1 rounded-2 p-2"
                        placeholder="Email Address" />
                    <input type="text" name="phone" class="border border-1 rounded-2 p-2" placeholder="Phone" />
                    <textarea name="message_" id="" cols="30" rows="4" placeholder="Message"
                        class="border border-1 rounded-2 p-2"></textarea>
                    <button type="submit" class="btn-lightgreen tex-white col-4 col-sm-3 col-xl-2 py-2 px-2 rounded-1">
                        Contact Us
                    </button>
                </form>
            </div>
            <!-- social media link and map -->
            <div class="col p-5">
                <!-- visit us -->
                {{-- <div class="icon-list text-center p-4 d-flex flex-column gap-2 border-bottom">
                    <h3 class="fs-3 font-median text-blue">Visit Us</h3>
                    <div class="py-1 d-flex justify-center gap-2">
                        <a href="https://www.facebook.com/PristineGreen-Upholstery-and-Carpet-Cleaning-380402999024630/?__tn__=%2Cg/"
                            target="_blank">
                            <img rel="canonical" class="lozad lazy" alt="facebook" width="32px" height="32px"
                                data-src="{{ asset('assets/images/5365678_fb_facebook_facebook logo_icon.png') }}"
                                style />
                        </a>
                        <a href="https://twitter.com/PGCarpetClean" target="_blank">
                            <img rel="canonical" class="lazy lozad" alt="twitter" width="32px" height="32px"
                                data-src="{{ asset('assets/images/5296516_tweet_twitter_twitter logo_icon.svg') }}"
                                style />
                        </a>
                        <a href="https://www.instagram.com/pristinegreencleaning/" target="_blank">
                            <img rel="canonical" class="lozad lazy" alt="instagram" width="32px" height="32px"
                                data-src="{{ asset('assets/images/5296765_camera_instagram_instagram logo_icon.webp') }}"
                                style />

                        </a>
                    </div>
                </div> --}}
                <!-- Contact Info & Map -->
                <div class="text-center">
                    <div class="p-3 border-bottom con">
                        <h3 class="text-blue font-median py-2">Contact Info</h3>
                        <p class="mb-0">Contact</p>
                        <p>
                            <a target="_blank" href="tel:212-920-2154">212-920-2154</a><br />
                            <a target="_blank" href="mailto:sales@maidbritecleaners.com">sales@maidbritecleaners.com</a>
                        </p>
                    </div>

                    <div class="address-info py-3">
                        <p><strong>Queens</strong></p>
                        <div id="map"></div>
                        <p>
                            <a target="_blank"
                                href="https://goo.gl/maps/72WtZw82sbHEoS7H7">
                                34-18 Northern Blvd 3rd fl 7a<br />
                                Queens, NY 11101
                            </a>
                        </p>
                    </div>
                    <div class="address-info py-3">
                        <p><strong>Brooklyn</strong></p>
                        <div id="map_2"></div>
                        <p>
                            <a target="_blank"
                                href="https://goo.gl/maps/72WtZw82sbHEoS7H7">
                                7 Marcus Garvey Blvd #406<br />
                                Brooklyn, NY 11206
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('app.static_components.callus_banner')
@endsection
@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB_zev3AUlvTv9UGwZGPnUCSnM1aMsPLo"></script>
    <script type="text/javascript">
         function initMap() {
            // Specify the center location as an address, dynamically applicable
            var centerLocation_1 = "34-18 Northern Blvd 3rd fl 7a, Long Island City, NY 11101";
            var centerLocation_2 = "7 Marcus Garvey Blvd #406, Brooklyn, NY 11206";


            // Create a geocoder object
            var geocoder = new google.maps.Geocoder();
            var geocoder_2 = new google.maps.Geocoder();

            // Convert the center location to coordinates
            geocoder.geocode({
                address: centerLocation_1
            }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    // Retrieve the first result's geometry (location)
                    var location = results[0].geometry.location;

                    // Create a map object
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: location,
                        zoom: 18,
                        mapTypeControl: false, // Remove satellite view control
                        streetViewControl: false, // Remove person (street view) control
                        zoomControl: false // Remove zoom controls
                    });

                    // Create a marker for the location
                    var locationMarker = new google.maps.Marker({
                        position: location,
                        map: map,
                        title: centerLocation_1
                    });
                    // Create an info window
                    var infoWindow = new google.maps.InfoWindow({
                        content: "Pristinegreen Cleaning"
                    });

                    // Add click event listener to open the info window
                    locationMarker.addListener('click', function() {
                        infoWindow.open(map, locationMarker);
                    });
                } else {
                    // Geocoding was not successful
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
            geocoder_2.geocode({
                address: centerLocation_2
            }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    // Retrieve the first result's geometry (location)
                    var location = results[0].geometry.location;

                    // Create a map object
                    var map = new google.maps.Map(document.getElementById('map_2'), {
                        center: location,
                        zoom: 18,
                        mapTypeControl: false, // Remove satellite view control
                        streetViewControl: false, // Remove person (street view) control
                        zoomControl: false // Remove zoom controls
                    });

                    // Create a marker for the location
                    var locationMarker = new google.maps.Marker({
                        position: location,
                        map: map,
                        title: centerLocation_2
                    });
                    // Create an info window
                    var infoWindow = new google.maps.InfoWindow({
                        content: "Pristinegreen Cleaning"
                    });

                    // Add click event listener to open the info window
                    locationMarker.addListener('click', function() {
                        infoWindow.open(map, locationMarker);
                    });
                } else {
                    // Geocoding was not successful
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });

        }

        // Load the map after the Google Maps API is loaded
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
@endsection
