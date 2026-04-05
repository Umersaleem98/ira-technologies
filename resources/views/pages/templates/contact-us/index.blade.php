@include('layouts.templates.head')
<title>Contact Us</title>

<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>        
            <div class="layer layer-three"><span class="overlay"></span></div>        
        </div>

@include('layouts.templates.search')
@include('layouts.templates.header')

        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(templates/assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Contact us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="index.html">Home</a></li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- address-section -->
        <section class="address-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Our Addresses</h2>
                    <p>Excepteur sint occaecat cupidatat non proident sunt</p>
                    <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 address-column">
                        <div class="single-adderss-block">
                            <div class="inner-box">
                                <h3>New York Office</h3>
                                <ul class="info-list clearfix">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        PO Box 16122 Collins Street West Victoria 8007 Canada
                                    </li>
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        <a href="tel:48564334212234">(+48) 564-334-21-22-34</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 address-column">
                        <div class="single-adderss-block">
                            <div class="inner-box">
                                <h3>London Office</h3>
                                <ul class="info-list clearfix">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        PO Box 16122 Collins Street West Victoria 8007 Landon
                                    </li>
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        <a href="tel:48564334212234">(+48) 564-334-21-22-34</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 address-column">
                        <div class="single-adderss-block">
                            <div class="inner-box">
                                <h3>Netherlands Office</h3>
                                <ul class="info-list clearfix">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        PO Box 16122 Collins Street West Victoria 8007 Netherlands
                                    </li>
                                    <li>
                                        <i class="fas fa-phone"></i>
                                        <a href="tel:48564334212234">(+48) 564-334-21-22-34</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- address-section end -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-column">
                <div 
                    class="google-map" 
                    id="contact-google-map" 
                    data-map-lat="40.712776" 
                    data-map-lng="-74.005974" 
                    data-icon-path="assets/images/icons/map-marker.png"  
                    data-map-title="Brooklyn, New York, United Kingdom" 
                    data-map-zoom="12" 
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

                </div>
            </div>
        </section>
        <!-- google-map-section -->


        <!-- contact-section -->
        <section class="contact-section">
            <div class="auto-container">
                <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 big-column">
                    <div class="sec-title">
                        <h2>Get In Touch</h2>
                        <p>Excepteur sint occaecat cupidatat non proident sunt</p>
                        <span class="separator" style="background-image: url(assets/images/icons/separator-1.png);"></span>
                    </div>
                    <div class="form-inner">
                        <form method="post" action="https://azim.commonsupport.com/Castro/sendemail.php" id="contact-form" class="default-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                    <button type="submit" class="theme-btn-two" name="submit-form">Submit Message<i class="flaticon-right-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- clients-section -->
        <section class="clients-section">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <figure class="clients-logo-box"><a href="index.html"><img src="templates/assets/images/clients/clients-logo-1.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img src="templates/assets/images/clients/clients-logo-2.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img src="templates/assets/images/clients/clients-logo-3.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img src="templates/assets/images/clients/clients-logo-4.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img src="templates/assets/images/clients/clients-logo-5.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index.html"><img src="templates/assets/images/clients/clients-logo-6.png" alt=""></a></figure>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- main-footer -->
        <footer class="main-footer light">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget logo-widget">
                                        <figure class="footer-logo"><a href="index.html"><img src="templates/assets/images/footer-logo-2.png" alt=""></a></figure>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget links-widget">
                                        <div class="widget-title">
                                            <h3>Category</h3>
                                        </div>
                                        <div class="widget-content">
                                            <ul class="links-list clearfix">
                                                <li><a href="index.html">Men</a></li>
                                                <li><a href="index.html">Women</a></li>
                                                <li><a href="index.html">Kids</a></li>
                                                <li><a href="index.html">Accessories</a></li>
                                                <li><a href="index.html">Shoe</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 footer-column">
                                    <div class="footer-widget links-widget">
                                        <div class="widget-title">
                                            <h3>Useful Link</h3>
                                        </div>
                                        <div class="widget-content">
                                            <ul class="links-list clearfix">
                                                <li><a href="index.html">News & Tips</a></li>
                                                <li><a href="index.html">About Us</a></li>
                                                <li><a href="index.html">Terms & Conditions</a></li>
                                                <li><a href="index.html">Our Shop</a></li>
                                                <li><a href="index.html">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 big-column">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                                    <div class="footer-widget contact-widget">
                                        <div class="widget-title">
                                            <h3>Contact</h3>
                                        </div>
                                        <ul class="info-list clearfix">
                                            <li><i class="flaticon-maps-and-flags"></i>4708 Ruecker Wall, Kassandratown, HI</li>
                                            <li><i class="flaticon-phone-ringing"></i><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                            <li><i class="flaticon-email"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                                    <div class="footer-widget newsletter-widget">
                                        <div class="widget-title">
                                            <h3>Newsletter</h3>
                                        </div>
                                        <div class="widget-content">
                                            <p>4708 Ruecker Wall, Kassandratown, HI 97729</p>
                                            <form action="https://azim.commonsupport.com/Castro/contact.html" method="post" class="newsletter-form">
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="Enter your email" required="">
                                                    <button type="submit" class="theme-btn-three">Subscribe</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container clearfix">
                    <ul class="cart-list pull-left clearfix">
                        <li><a href="index.html"><img src="templates/assets/images/resource/card-1.png" alt=""></a></li>
                        <li><a href="index.html"><img src="templates/assets/images/resource/card-2.png" alt=""></a></li>
                        <li><a href="index.html"><img src="templates/assets/images/resource/card-3.png" alt=""></a></li>
                        <li><a href="index.html"><img src="templates/assets/images/resource/card-4.png" alt=""></a></li>
                    </ul>
                    <div class="copyright pull-right">
                        <ul class="footer-social clearfix">
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                        <p><a href="index.html">Castro</a> &copy; 2020 All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-long-arrow-alt-up"></i>
        </button>
    </div>

@include('layouts.templates.footer')
@include('layouts.templates.script')