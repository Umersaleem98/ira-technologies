@include('layouts.templates.head')
<title>About Us</title>
<style>
    .section-padding {
        padding: 80px 0;
    }

    .page-banner {
        background: url('../img/banner/about-banner.jpg') center/cover no-repeat;
        padding: 120px 0;
        color: #fff;
        text-align: center;
    }

    .mission-box {
        padding: 30px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .mission-box i {
        font-size: 35px;
        color: #007bff;
        margin-bottom: 15px;
    }

    .feature-box {
        text-align: center;
        padding: 25px;
        border: 1px solid #eee;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .feature-box i {
        font-size: 35px;
        color: #007bff;
        margin-bottom: 10px;
    }

    .team-card {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        text-align: center;
        margin-bottom: 30px;
    }

    .team-card img {
        width: 100%;
    }

    .team-content {
        padding: 20px;
    }

    .team-social a {
        margin: 0 5px;
        color: #555;
        font-size: 16px;
    }

    .cta-section {
        background: #007bff;
        color: #fff;
        padding: 60px 0;
    }
</style>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    @include('layouts.templates.header')

    <main>

        <!-- ================= Hero Banner ================= -->
        <section class="page-banner">
            <div class="container text-center">
                <h1>About Us</h1>
                <p>Learn more about our company, mission and our amazing team</p>
            </div>
        </section>


        <!-- ================= About Section ================= -->
        <section class="about section-padding">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <img src="{{ asset('templates/assets/img/about/about.jpg') }}" class="img-fluid rounded shadow">
                    </div>

                    <div class="col-lg-6">
                        <h2>Who We Are</h2>
                        <p>
                            We are a passionate team committed to delivering high quality digital
                            solutions. Our mission is to help businesses grow through modern
                            technology, innovation, and creative strategies.
                        </p>

                        <p>
                            Our company focuses on building scalable web applications, modern
                            websites, and digital platforms that help organizations achieve
                            their goals efficiently.
                        </p>

                        <a href="#" class="btn btn-primary mt-3">Learn More</a>
                    </div>

                </div>
            </div>
        </section>


        <!-- ================= Mission Vision ================= -->
        <section class="mission bg-light section-padding">
            <div class="container">
                <div class="row text-center">

                    <div class="col-md-4">
                        <div class="mission-box">
                            <i class="lni lni-target"></i>
                            <h4>Our Mission</h4>
                            <p>
                                Deliver high quality digital solutions that empower businesses
                                and individuals to achieve success.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mission-box">
                            <i class="lni lni-eye"></i>
                            <h4>Our Vision</h4>
                            <p>
                                Become a trusted technology partner helping organizations grow
                                through innovation and creativity.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mission-box">
                            <i class="lni lni-heart"></i>
                            <h4>Our Values</h4>
                            <p>
                                Integrity, commitment, innovation and client satisfaction are
                                the foundation of everything we do.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ================= Why Choose Us ================= -->
        <section class="why-us section-padding">
            <div class="container">

                <div class="section-title text-center">
                    <h2>Why Choose Us</h2>
                    <p>We provide professional services with modern technology</p>
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="lni lni-code"></i>
                            <h5>Clean Code</h5>
                            <p>We build optimized and scalable applications.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="lni lni-bolt"></i>
                            <h5>Fast Performance</h5>
                            <p>Our solutions are optimized for speed and reliability.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature-box">
                            <i class="lni lni-users"></i>
                            <h5>Expert Team</h5>
                            <p>Our experienced professionals deliver quality work.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- ================= Team Section ================= -->
        <section class="team bg-light section-padding">
            <div class="container">

                <div class="section-title text-center">
                    <h2>Meet Our Team</h2>
                    <p>Our dedicated professionals</p>
                </div>

                <div class="row">

                    <!-- Team Member -->
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <img src="{{ asset('templates/assets/img/team/team1.jpg') }}" class="img-fluid">
                            <div class="team-content">
                                <h5>John Doe</h5>
                                <span>CEO & Founder</span>

                                <div class="team-social">
                                    <a href="#"><i class="lni lni-facebook-filled"></i></a>
                                    <a href="#"><i class="lni lni-linkedin-original"></i></a>
                                    <a href="#"><i class="lni lni-twitter-original"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member -->
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <img src="{{ asset('templates/assets/img/team/team2.jpg') }}" class="img-fluid">
                            <div class="team-content">
                                <h5>Sarah Khan</h5>
                                <span>Project Manager</span>

                                <div class="team-social">
                                    <a href="#"><i class="lni lni-facebook-filled"></i></a>
                                    <a href="#"><i class="lni lni-linkedin-original"></i></a>
                                    <a href="#"><i class="lni lni-twitter-original"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member -->
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <img src="{{ asset('templates/assets/img/team/team3.jpg') }}" class="img-fluid">
                            <div class="team-content">
                                <h5>Ali Ahmed</h5>
                                <span>Lead Developer</span>

                                <div class="team-social">
                                    <a href="#"><i class="lni lni-facebook-filled"></i></a>
                                    <a href="#"><i class="lni lni-linkedin-original"></i></a>
                                    <a href="#"><i class="lni lni-twitter-original"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member -->
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <img src="{{ asset('templates/assets/img/team/team4.jpg') }}" class="img-fluid">
                            <div class="team-content">
                                <h5>Fatima Noor</h5>
                                <span>UI/UX Designer</span>

                                <div class="team-social">
                                    <a href="#"><i class="lni lni-facebook-filled"></i></a>
                                    <a href="#"><i class="lni lni-linkedin-original"></i></a>
                                    <a href="#"><i class="lni lni-twitter-original"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- ================= Call To Action ================= -->
        <section class="cta-section">
            <div class="container text-center">
                <h2>Ready to Work With Us?</h2>
                <p>Let's build something amazing together.</p>
                <a href="#" class="btn btn-light">Contact Us</a>
            </div>
        </section>

    </main>

    @include('layouts.templates.footer')

    <!-- Scroll Top -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    @include('layouts.templates.script')

</body>
