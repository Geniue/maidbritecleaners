@extends('layouts.index')
@section('title')
    Blogs | {{ env('APP_NAME') }}
@endsection

@section('meta')
<meta name="title" content=" Blogs | Maidbrite Cleaning Services">
<meta name="description"
    content="Reach out to Maidbrite Cleaning Services for all your house cleaning services, sanitization needs, and commercial cleaning. We're here to help you keep your space pristine!">
<meta name="keywords"
    content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company, quote, quote now, request a quote, contact form, contact us">
<link rel="canonical" href="{{ url()->current() }}">

<meta property="og:site_name" content="Maidbrite Cleaning Services">
<meta property="og:title" content=" Blogs  | Maidbrite Cleaning Services">
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
<meta name="copyright" content="Maidbrite Cleaning Services">
<meta name="distribution" content="Global">
<meta name="language" content="en-GB">
<meta name="publisher" content="Maidbrite Cleaning Services">
<meta name="rating" content="General">
<meta name="resource-type" content="Document">
<meta name="revisit-after" content="3">
<meta name="subject" content="Blog">
@endsection

@section('content')
    <!-- blog section -->
    <section>
        <div class="container p-md-5">
            <div class="py-4 text-center fs-1 text-blue">
                <h1 id="st" class="font-median">Blog</h1>
            </div>
            <!-- blogs -->
            <div class="row py-5 row-gap-5 mx-md-0" id="blogs">
                @include('app.pagination.blogs.index')
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var containerH = $('#blogs').height();
                $.ajax({
                    url: $(this).attr('href'),
                    method: 'GET',
                    dataType: 'html',
                    beforeSend: function() {
                        // showLoader();
                        $('#blogs').height(containerH)
                    },
                    success: function(response) {

                        $('#blogs').html(response);
                    },
                    complete: function() {
                        // hideLoader();
                        var target = $("#st");
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        // Reload Lozad
                        const observer = lozad('.lozad', {
                            loaded: function(el) {
                                el.classList.add('fade-in');
                            }
                        });
                        observer.observe();

                        // Reload AOS
                        AOS.refresh();
                    }
                });
            });
        })
    </script>
@endsection
