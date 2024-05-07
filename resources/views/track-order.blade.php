@extends('layouts.master')

@section('top-styles')
@endsection

@section('content')  

        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Tracking Order</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Tracking Order</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Track Order Area -->
        <section class="track-order-area ptb-100">
            <div class="container">
                <div class="track-order-content">
                    <h2>All In One Package Tracking</h2>

                    <form>
                        <div class="form-group">
                            <label>Order ID</label>
                            <input type="text" class="form-control" placeholder="Order ID" required>
                        </div>

                        <div class="form-group">
                            <label>Billing E-mail</label>
                            <input type="email" class="form-control" placeholder="Billing E-mail" required>
                        </div>

                        <button type="submit" class="default-btn">Track Order</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Track Order Area -->
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection