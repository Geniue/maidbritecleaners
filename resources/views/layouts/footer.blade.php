<!-- footer -->
<footer>
    <!-- section 1 -->
    <div class="footer-1">
        <div class="footer-1-container flex justify-between gap-2">
            <div class="footer-1-container__imgs flex flex-col">
                {{-- <div class="flex gap-4">
                    <a href="https://twitter.com/PGCarpetClean" target="_blank" rel="noreferrer">
                        <img rel="canonical" class="lazy lozad" alt="twitter" width="32px" height="32px"
                            data-src="{{ asset('assets/images/5296516_tweet_twitter_twitter logo_icon.svg') }}" style />
                    </a>
                    <a href="https://www.facebook.com/PristineGreen-Upholstery-and-Carpet-Cleaning-380402999024630/?__tn__=%2Cg/"
                        target="_blank" rel="noreferrer">
                        <img rel="canonical" class="lozad lazy" alt="facebook" width="32px" height="32px"
                            data-src="{{ asset('assets/images/5365678_fb_facebook_facebook logo_icon.png') }}" style />
                        <a href="https://www.instagram.com/MaidBrite  Cleaners/" target="_blank" rel="noreferrer">
                            <img rel="canonical" class="lozad lazy" alt="instagram" width="32px" height="32px"
                                data-src="{{ asset('assets/images/5296765_camera_instagram_instagram logo_icon.webp') }}"
                                style />
                        </a>
                </div>
                <div>
                    <a href="https://www.paypal.me/PristineGreen" target="_blank" rel="noreferrer">
                        <img rel="canonical" class="lozad trade-logo lazy" alt="paypal payments" width="180"
                            height="180" data-src="{{ asset('assets/images/Paypal.webp') }}" style />
                    </a>
                </div>
                <div>
                    <a href="https://www.paypal.com/qrcodes/venmocs/3cd63d8b-" target="_blank" rel="noreferrer">
                        <img rel="canonical" class="lozad trade-logo lazy" alt="paypal payments" width="186"
                            height="156" data-src="{{ asset('assets/images/Venmo-Payment.webp') }}" style />
                    </a>
                </div>
                <div>
                    <a href="{{ route('payment') }}" target="_blank" rel="noreferrer">
                        <img rel="canonical" class="lozad trade-logo lazy" alt="Payments" width="200" height="30"
                            data-src="{{ asset('assets/images/secure-stripe-payment-logo.png') }}" style />
                    </a>
                </div> --}}
                <div>
                    <a href="/">
                        <img rel="canonical" class="lozad logo-white   lazy" width="265" alt="MaidBrite  Cleaners"
                        data-src="{{ asset('assets/logo/maidbrite_logo.png') }}" />
                    </a>
                </div>
            </div>
            {{-- <div class="footer-1-container__Service">
                <p class="footer-heading">SERIVCE AREAS</p>
                <ul class="footer-1-container__Service-links flex flex-col gap-1">
                    <li>
                        <a href="{{ route('service-area') }}">Astoria</a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">East Village</a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">Gramercy Park</a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">Lower East Side</a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">Maspeth </a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">Midtown </a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">Park Slope</a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">Prospect Park
                            South</a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">Queens Village </a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">Union Square </a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">Upper West Side </a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">Union Square </a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">Woodside </a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">Woodhaven</a>
                    </li>
                    <li>
                        <a href="{{ route('service-area') }}">View More Areas</a>
                    </li>
                </ul>
            </div> --}}
            <div class="footer-1-container__Service">
                <p class="footer-heading">OUR LINKS</p>
                <div class="footer-1-container__Service-links flex flex-col gap-1">
                    <span>
                        <a href="{{ route('about-us') }}">About Us</a>
                    </span>
                    <span>
                        <a href="{{ route('house_cleaning') }}">House
                            Cleaning Services</a>
                    </span>
                    <span>
                        <a href="{{ route('post_construct') }}">Post
                            Construction Cleaningg</a>
                    </span>
                    <span>
                        <a href="{{ route('move_in') }}">Move In Cleaning
                            Services</a>
                    </span>
                    <span>
                        <a href="{{ route('move_out') }}">Move Out Cleaning
                            Services</a>
                    </span>
                    <span>
                        <a href="{{ route('apart_cleaning') }}">Apartment
                            Cleaning Services </a>
                    </span>
                    <span>
                        <a href="{{ route('cleaning_lady') }}">Cleaning Lady </a>
                    </span>
                    <span>
                        <a href="{{ route('green_cleaning') }}">Green Cleaning</a>
                    </span>
                    <span>
                        <a href="{{ route('comm_cleaning') }}">Commercial
                            Cleaning</a>
                    </span>
                    <span>
                        <a href="{{ route('maid_cleaning') }}">Maid Cleaning</a>
                    </span>
                    <span>
                        <a href="{{ route('res_cleaning') }}">Residential Cleaning</a>
                    </span>
                    <span>
                        <a href="{{ route('deep_cleaning') }}">Deep Cleaning</a>
                    </span>
                    <span>
                        <a href="{{ route('house_keeping') }}">House Keeping</a>
                    </span>
                    <span>
                        <a href="{{ route('faqs') }}">FAQ’s </a>
                    </span>
                    <span>
                        <a href="{{ route('blog') }}">Blog</a>
                    </span>
                    {{-- <span>
                        <a href="{{ route('blog') }}">Blog</a>
                    </span>
                    <span>
                        <a href="{{ route('coupon') }}">Coupon </a>
                    </span> --}}
                </div>
            </div>
            <div class="footer-1-container__Service">
                <p class="footer-heading">GET IN TOUCH</p>
                <div class="footer-1-container__Service-links flex flex-col gap-1">
                    {{-- <span>
                        <span>

                            <strong>Maidbrite Cleaning Services</strong>
                        </span>
                    </span>
                    <span>
                        <span>34-18 Northern Blvd 3rd fl 7a</span>
                    </span>
                    <span>
                        <span>Queens, NY 11101</span>
                    </span>
                    <span><a class="" href="tel:212-920-2154">212-920-2154</a></span>
                    <span><a href="https://goo.gl/maps/Ynfuj3goiLjx5hoa8"
                            target="_blank" rel="noreferrer">Maps &amp; Directions</a></span>

                    <br /> --}}
                    <span>
                        <span>

                            <strong>Maidbrite Cleaning Services</strong>
                        </span>
                    </span>
                    <span>
                        <span>7 Marcus Garvey Blvd #406</span>
                    </span>
                    <span>
                        <span>Brooklyn, NY 11206</span>
                    </span>
                    <span><a class="" href="tel:212-951-0342">212-951-0342</a></span>
                    <span><a href="https://goo.gl/maps/qWoFZZLvdW63Zpzb8"
                            target="_blank" rel="noreferrer">Maps &amp; Directions</a></span>
                    <br />

                    <span><a href="mailto:sales@maidbritecleaners.com">sales@maidbritecleaners.com</a></span>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-2 flex flex-col">
        <div class="footer-2-links">
            <a href="{{ route('privacy') }}">Privacy Policy</a> |
            <a href="{{ asset('sitemap.xml') }}">Sitemap</a>
        </div>
        <div class="footer-2-copyright">
            <span>© 2023 MaidBrite Cleaning Services. All rights reserved.</span>
        </div>
    </div>
    <!-- section 2 -->
</footer>
@include('app.static_components.floating_callback')