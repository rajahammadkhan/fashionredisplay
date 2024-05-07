@extends('layouts.master')

@section('top-styles')
@endsection

@section('content')  
<!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Cart</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Cart Area -->
        <section class="cart-area ptb-100">
            <div class="container">
                <form>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="{{ route('product-detail') }}">
                                            <img src="{{url('')}}/assets/img/products/product-detail1.jpg" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="{{ route('product-detail') }}">2001 The Mountain Cat In A Pocket VNTG Tie Dye T-Shirt</a>
                                        <ul>
                                            <li>SKU: <span>A0139352</span></li>
                                            <li>Brand: <span>The Mountain</span></li>
                                            <li>Color: <span>Black</span></li>
                                            <li>Brand Size: <span>M</span></li>
                                        </ul>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">AED 50.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">AED 50.00</span>

                                        <a href="#" class="remove"><i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-buttons">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-sm-7 col-md-7">
                                <a href="{{ route('product-detail') }}" class="optional-btn">Continue Shopping</a>
                            </div>

                            <div class="col-lg-5 col-sm-5 col-md-5 text-end">
                                <a href="#" class="default-btn">Update Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="cart-totals">
                        <h3>Cart Totals</h3>

                        <ul>
                            <li>Subtotal <span>AED 50.00</span></li>
                            <li>Shipping <span>AED 10.00</span></li>
                            <li>Total <span>AED 60.00</span></li>
                        </ul>
                        
                        <a href="#" class="default-btn">Proceed to Checkout</a>
                    </div>
                </form>
            </div>
        </section>
        <!-- End Cart Area -->
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection