@extends('layouts.master')

@section('top-styles')
@endsection

@section('content')  

        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start About Area -->
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="assets/img/about/img1.jpg" class="shadow" alt="image">
                            <img src="assets/img/about/img2.jpg" class="shadow" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <span class="sub-title">About Us</span>
                            <h2>Fashion Redisplay Trusted Online Shopping Site in the World</h2>
                            <h6>Fashion Redisplay.com offers you flexible and responsive shopping experience.</h6>
                            <p><strong>Fashion Redisplay</strong> is an eCommerce website which features millions of products, i.e. clothes, shoes, bags, electronic items and much more, with all at incredible prices.</p>
                            <p>One of the most popular on the web is shopping. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <div class="features-text">
                                <h5><i class='bx bx-planet'></i>Ships to more than 10 countries and regions</h5>
                                <p>We provide customers with a hassle-free and worry-free international shopping experience from buying to delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-inner-area">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="about-text">
                                <h3>Our Story</h3>
                                <p>One of the most popular on the web is shopping.</p>
                                
                                <ul class="features-list">
                                    <li><i class='bx bx-check'></i> People like Fashion Redisplay</li>
                                    <li><i class='bx bx-check'></i> World's finest Fashion Redisplay</li>
                                    <li><i class='bx bx-check'></i> The original Fashion Redisplay</li>
                                    <li><i class='bx bx-check'></i> We trust Fashion Redisplay</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="about-text">
                                <h3>Our Values</h3>
                                <p>The best of both worlds. Store and web.</p>
                                
                                <ul class="features-list">
                                    <li><i class='bx bx-check'></i> Always in style!</li>
                                    <li><i class='bx bx-check'></i> Discover your favorite shopping</li>
                                    <li><i class='bx bx-check'></i> Find yourself</li>
                                    <li><i class='bx bx-check'></i> Feel-good shopping</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                            <div class="about-text">
                                <h3>Our Promise</h3>
                                <p>Rediscover a great shopping tradition</p>
                                
                                <ul class="features-list">
                                    <li><i class='bx bx-check'></i> Get better shopping</li>
                                    <li><i class='bx bx-check'></i> Love shopping again</li>
                                    <li><i class='bx bx-check'></i> Online shopping.</li>
                                    <li><i class='bx bx-check'></i> Shopping for all seasons</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start Offer Area -->
        <section class="offer-area bg-image1 ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="offer-content">
                            <span class="sub-title">Limited Time Offer!</span>
                            <h2>-40% OFF</h2>
                            <p>Get The Best Deals Now</p>
                            <a href="#" class="default-btn">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Offer Area -->

        <!-- Start Partner Area -->
        <div class="partner-area ptb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Our Brands</h2>
                </div>
                
                <div class="partner-slides owl-carousel owl-theme">
                    <div class="partner-item">
                        <a href="#"><img src="{{url('')}}/assets/img/partner/adidas.png" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#"><img src="{{url('')}}/assets/img/partner/jordan.png" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#"><img src="{{url('')}}/assets/img/partner/nike.png" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#"><img src="{{url('')}}/assets/img/partner/puma.png" alt="image"></a>
                    </div>

                    <div class="partner-item">
                        <a href="#"><img src="{{url('')}}/assets/img/partner/reebok.png" alt="image"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner Area -->

        <!-- Start Testimonials Area -->
        <section class="testimonials-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Testimonials</span>
                    <h2>What Clients Says About Us</h2>
                </div>

                <div class="testimonials-slides owl-carousel owl-theme">
                    <div class="single-testimonials-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        <div class="info">
                            <img src="assets/img/user1.jpg" class="shadow rounded-circle" alt="image">
                            <h3>John Smith</h3>
                            <span>Student</span>
                        </div>
                    </div>

                    <div class="single-testimonials-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        <div class="info">
                            <img src="assets/img/user2.jpg" class="shadow rounded-circle" alt="image">
                            <h3>Sarah Taylor</h3>
                            <span>Student</span>
                        </div>
                    </div>

                    <div class="single-testimonials-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        <div class="info">
                            <img src="assets/img/user3.jpg" class="shadow rounded-circle" alt="image">
                            <h3>David Warner</h3>
                            <span>Student</span>
                        </div>
                    </div>

                    <div class="single-testimonials-item">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                        <div class="info">
                            <img src="assets/img/user4.jpg" class="shadow rounded-circle" alt="image">
                            <h3>James Anderson</h3>
                            <span>Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Area -->
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection