@extends('layouts.master')

@section('top-styles')
@endsection

@section('content')  
<!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Gift Card</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Gift Card</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Lookbook Area -->
        <section class="lookbook-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-lookbook-box">
                            <a href="#"><img src="{{url('')}}/assets/img/gift_card/fr-50_1.png" alt="image"></a>

                            <div class="content">
                                <p><a href="#">CHRISTMAS GIFT CARD</a></p>
                                <p>AED 50.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-lookbook-box">
                            <a href="#"><img src="{{url('')}}/assets/img/gift_card/fr-100-christmas.png" alt="image"></a>

                            <div class="content">
                                <p><a href="#">CHRISTMAS GIFT CARD</a></p>
                                <p>AED 100.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-lookbook-box">
                            <a href="#"><img src="{{url('')}}/assets/img/gift_card/fr-150_1.png" alt="image"></a>

                            <div class="content">
                                <p><a href="#">CHRISTMAS GIFT CARD</a></p>
                                <p>AED 150.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-lookbook-box">
                            <a href="#"><img src="{{url('')}}/assets/img/gift_card/fr-200.png" alt="image"></a>

                            <div class="content">
                                <p><a href="#">CHRISTMAS GIFT CARD</a></p>
                                <p>AED 200.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Lookbook Area -->

@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection