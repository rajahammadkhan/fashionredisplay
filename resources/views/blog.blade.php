@extends('layouts.master')

@section('top-styles')
@endsection

@section('content')  

<!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Blog</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Blog Area -->
        <section class="blog-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="{{ route('blog-detail') }}">
                                    <img src="{{url('')}}/assets/img/blog/blog1.jpg" alt="image">
                                </a>
                                <div class="date">
                                    <span>December 17, 2022</span>
                                </div>
                            </div>

                            <div class="post-content">
                                <span class="category">Fashion Redisplay</span>
                                <h3><a href="{{ route('blog-detail') }}">Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas</a></h3>
                                <a href="{{ route('blog-detail') }}" class="details-btn">Read Story</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="{{ route('blog-detail') }}">
                                    <img src="{{url('')}}/assets/img/blog/blog2.jpg" alt="image">
                                </a>
                                <div class="date">
                                    <span>December 17, 2022</span>
                                </div>
                            </div>

                            <div class="post-content">
                                <span class="category">Fashion Redisplay</span>
                                <h3><a href="{{ route('blog-detail') }}">Being Stylish, Being You: Easy Ways to Upgrade Your Denim Game</a></h3>
                                <a href="{{ route('blog-detail') }}" class="details-btn">Read Story</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="{{ route('blog-detail') }}">
                                    <img src="{{url('')}}/assets/img/blog/blog1.jpg" alt="image">
                                </a>
                                <div class="date">
                                    <span>December 17, 2022</span>
                                </div>
                            </div>

                            <div class="post-content">
                                <span class="category">Fashion Redisplay</span>
                                <h3><a href="{{ route('blog-detail') }}">Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas</a></h3>
                                <a href="{{ route('blog-detail') }}" class="details-btn">Read Story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection