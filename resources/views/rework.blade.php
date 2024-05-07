@extends('layouts.master')

@section('top-styles')
@endsection

@section('content')  
<!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Rework</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Rework</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Categories Banner Area -->
        <section class="categories-banner-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-categories-box">
                            <img src="{{url('')}}/assets/img/rework/Menu_Bags.jpg" alt="image">

                            <div class="content text-white">
                                <a href="{{ route('product') }}" class="default-btn">Shop Now</a>
                            </div>
                            <a href="{{ route('product') }}" class="link-btn"></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-categories-box">
                            <img src="{{url('')}}/assets/img/rework/Menu_Bucket_Hats.jpg" alt="image">

                            <div class="content">
                            	<!-- <span>Your Looks</span>
                                <h3>Must Haves</h3> -->
                                <a href="{{ route('product') }}" class="default-btn">Shop Now</a>
                            </div>
                            <a href="{{ route('product') }}" class="link-btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Categories Banner Area -->

@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection