@extends('layouts.master')

@section('top-styles')
@endsection

@section('content')  
<!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>2001 The Mountain Cat In A Pocket VNTG Tie Dye T-Shirt</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Product</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Product Details Area -->
        <section class="product-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="products-details-image">
                            <ul class="products-details-image-slides">
                                <li><img src="{{url('')}}/assets/img/products/product-detail1.jpg" alt="image"></li>
                                <li><img src="{{url('')}}/assets/img/products/product-detail2.jpg" alt="image"></li>
                                <li><img src="{{url('')}}/assets/img/products/product-detail3.jpg" alt="image"></li>
                                <li><img src="{{url('')}}/assets/img/products/product-detail4.jpg" alt="image"></li>
                            </ul>

                            <div class="slick-thumbs">
                                <ul>
                                    <li><img src="{{url('')}}/assets/img/products/product-detail1.jpg" alt="image"></li>
                                    <li><img src="{{url('')}}/assets/img/products/product-detail2.jpg" alt="image"></li>
                                    <li><img src="{{url('')}}/assets/img/products/product-detail3.jpg" alt="image"></li>
                                    <li><img src="{{url('')}}/assets/img/products/product-detail4.jpg" alt="image"></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="products-details-desc">
                            <h3>2001 The Mountain Cat In A Pocket VNTG Tie Dye T-Shirt</h3>

                            <div class="price">
                                <span class="new-price">AED 50.00</span>
                                <!-- <span class="old-price">$321.00</span> -->
                            </div>

                            <ul class="products-info">
                                <li><span>SKU:</span> <b>A0139352</b></li>
                                <li><span>Brand:</span> <b>The Mountain</b></li>
                                <li><span>Brand Size:</span> <b>M</b></li>
                                <li><span>Chart Size:</span> <b>M</b></li>
                                <li><span>Weight:</span> <b>0.223Kg</b></li>
                                <li><span>Condition:</span> <b>Excellent</b></li>
                                <!-- <li><span>Availability:</span> <a href="#">In stock (7 items)</a></li> -->
                            </ul>

                            <div class="products-color-switch">
                                <span>Color:</span>

                                <ul>
                                    <li><a href="#" title="Black" class="color-black"></a></li>
                                    <li><a href="#" title="White" class="color-white"></a></li>
                                    <li class="active"><a href="#" title="Green" class="color-green"></a></li>
                                    <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>
                                    <li><a href="#" title="Teal" class="color-teal"></a></li>
                                </ul>
                            </div>

                            <div class="products-size-wrapper">
                                <span>Size:</span>

                                <ul>
                                    <li><a href="#">XS</a></li>
                                    <li class="active"><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>

                            <div class="products-info-btn">
                                <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#sizeGuideModal"><i class='bx bx-crop'></i> Size guide</a> -->
                                <a href="#" data-bs-toggle="modal" data-bs-target="#productsShippingModal"><i class='bx bxs-truck' ></i> Shipping</a>
                                <a href="contact"><i class='bx bx-envelope'></i> Ask about this products</a>
                            </div>

                            <div class="products-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" value="1">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>

                                <button type="submit" class="default-btn"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                            </div>

                            <div class="wishlist-compare-btn">
                                <!-- <a href="#" class="optional-btn"><i class='bx bx-heart'></i> Add to Wishlist</a> -->
                                <a href="{{ route('size-guide') }}" class="optional-btn" target="_blank"><i class='bx bx-ruler'></i> Chart Size Guide</a>
                            </div>

                            <div class="buy-checkbox-btn">
                                <div class="item">
                                    <input class="inp-cbx" id="cbx" type="checkbox">
                                    <label class="cbx" for="cbx">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>I agree with the terms and conditions</span>
                                    </label>
                                </div>

                                <div class="item">
                                    <a href="#" class="default-btn">Buy it now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab products-details-tab">
                    <ul class="tabs">
                        <li><a href="#">
                            <div class="dot"></div> Description
                        </a></li>

                        <li><a href="#">
                            <div class="dot"></div> Condition
                        </a></li>
                        
                        <li><a href="#">
                            <div class="dot"></div> Additional Information
                        </a></li>

                        <li><a href="#">
                            <div class="dot"></div> Shipping
                        </a></li>

                        <li><a href="#">
                            <div class="dot"></div> Measurements
                        </a></li>

                        <!-- <li><a href="#">
                            <div class="dot"></div> Reviews
                        </a></li> -->
                    </ul>

                    <div class="tab-content">
                        <div class="tabs-item">
                            <div class="products-details-tab-content">
                                <p>Design inspiration lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum.  Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nulla libero. Vivamus pharetra posuere sapien.</p>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li>Fabric 1: 100% Polyester</li>
                                            <li>Fabric 2: 100% Polyester, Lining: 100% Polyester</li>
                                            <li>Fabric 3: 75% Polyester, 20% Viscose, 5% Elastane</li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <ol>
                                            <li>Fabric 3: 75% Polyester, 20% Viscose, 5% Elastane</li>
                                            <li>Fabric 2: 100% Polyester, Lining: 100% Polyester</li>
                                            <li>Fabric 1: 100% Polyester</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs-item">
                            <div class="products-details-tab-content">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Excellent</td>
                                                <td>Previously worn, with only very slight wash wear. No flaws.</td>
                                            </tr>

                                            <tr>
                                                <td>Very Good</td>
                                                <td>Previously worn, with minor wash wear and/or fade, but no visible flaw(s).</td>
                                            </tr>

                                            <tr>
                                                <td>Good</td>
                                                <td>Previously worn, with significant wash wear and/or fade, and minor visible flaw(s). Any button or zipper is still fully functional.</td>
                                            </tr>

                                            <tr>
                                                <td>Fair</td>
                                                <td>Previously worn, with heavy wash wear and/or fade, and significant visible flaw(s).</td>
                                            </tr>

                                            <tr>
                                                <td>Poor</td>
                                                <td>Previously worn, with excessive wash wear and/or fade and/or stains. The item is not in perfect appearance. May also need some repair.</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <span>*Flaws might include spots, stains, pin holes, tear, fabric irregularities, problem with button, zippers, snaps etc.</span>
                                </div>
                            </div>
                        </div>

                        <div class="tabs-item">
                            <div class="products-details-tab-content">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>Color:</td>
                                                <td>Blue, Purple, White</td>
                                            </tr>
                                            <tr>
                                                <td>Size:</td>
                                                <td>20, 24</td>
                                            </tr>
                                            <tr>
                                                <td>Material:</td>
                                                <td>100% Polyester</td>
                                            </tr>
                                            <tr>
                                                <td>Height:</td>
                                                <td>180 cm - 5' 11”</td>
                                            </tr>
                                            <tr>
                                                <td>Bust:</td>
                                                <td>83 cm - 32”</td>
                                            </tr>
                                            <tr>
                                                <td>Waist:</td>
                                                <td>57 cm - 22”</td>
                                            </tr>
                                            <tr>
                                                <td>Hips:</td>
                                                <td>88 cm - 35</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping:</td>
                                                <td>Free</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tabs-item">
                            <div class="products-details-tab-content">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>This item Ship to USA</td>
                                            </tr>

                                            <tr>
                                                <td>Delivery</td>
                                                <td>
                                                    Estimated between Wednesday 07/31/2021 and Monday 08/05/2021 <br>
                                                    Will usually ship within 1 bussiness day.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tabs-item">
                            <div class="products-details-tab-content">
                                <div class="table-responsive">
                                	<p>*All measurements are approximate and are provided for informational purposes only.</p>
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>Sleeve:</td>
                                                <td>21 cm</td>
                                                <td>8 in</td>
                                            </tr>
                                            <tr>
                                                <td>Length:</td>
                                                <td>77 cm</td>
                                                <td>30 in</td>
                                            </tr>
                                            <tr>
                                                <td>Pit to Pit:</td>
                                                <td>49 cm</td>
                                                <td>19 in</td>
                                            </tr>
                                            <tr>
                                                <td>Chest:</td>
                                                <td>98 cm</td>
                                                <td>39 in</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <p><b>Fabric</b></p>
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>Cotton:</td>
                                                <td>100%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="tabs-item">
                            <div class="products-details-tab-content">
                                <div class="products-review-form">
                                    <h3>Customer Reviews</h3>

                                    <div class="review-title">
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                        <p>Based on 3 reviews</p>
                                        <a href="#" class="default-btn">Write a Review</a>
                                    </div>

                                    <div class="review-comments">
                                        <div class="review-item">
                                            <div class="rating">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bx-star'></i>
                                            </div>
                                            <h3>Good</h3>
                                            <span><strong>Admin</strong> on <strong>Sep 21, 2021</strong></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                        </div>

                                        <div class="review-item">
                                            <div class="rating">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bx-star'></i>
                                            </div>
                                            <h3>Good</h3>
                                            <span><strong>Admin</strong> on <strong>Sep 21, 2021</strong></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                        </div>

                                        <div class="review-item">
                                            <div class="rating">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bx-star'></i>
                                            </div>
                                            <h3>Good</h3>
                                            <span><strong>Admin</strong> on <strong>Sep 21, 2021</strong></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                        </div>
                                    </div>

                                    <div class="review-form">
                                        <h3>Write a Review</h3>

                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" id="review-title" name="review-title" placeholder="Enter your review a title" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="review-body" id="review-body" cols="30" rows="6" placeholder="Write your comments here" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <button type="submit" class="default-btn">Submit Review</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="related-products">
                <div class="container">
                    <div class="section-title">
                        <span class="sub-title">Our Shop</span>
                        <h2>Related Products</h2>
                    </div>
                    <div class="products-slides owl-carousel owl-theme">
                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{url('')}}/assets/img/products/product1.jpg" class="main-image" alt="image">
                                    <img src="{{url('')}}/assets/img/products/product1.jpg" class="hover-image" alt="image">
                                </a>

                                <div class="products-button">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="{{ route('product-detail') }}">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3><a href="{{ route('product-detail') }}" style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">1999 The Mountain Black Panther Vintage Tie Dye T-Shirt</a></h3>
                                    <p style="margin-bottom: 0;">The Mountain | M</p>
                                    <p>Chart Size | M</p>
                                <div class="price">
                                    <!-- <span class="old-price">$321</span> -->
                                    <span class="new-price">AED 50.00</span>
                                </div>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>

                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{url('')}}/assets/img/products/product2.jpg" class="main-image" alt="image">
                                    <img src="{{url('')}}/assets/img/products/product2.jpg" class="hover-image" alt="image">
                                </a>

                                <div class="products-button">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="{{ route('product-detail') }}">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3><a href="{{ route('product-detail') }}" style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">2001 The Mountain Fire Department USA Flag VNTG Tie Dye T-Shirt </a></h3>
                                    <p style="margin-bottom: 0;">The Mountain | L</p>
                                    <p>Chart Size | L</p>
                                <div class="price">
                                    <!-- <span class="old-price">$321</span> -->
                                    <span class="new-price">AED 60.00</span>
                                </div>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>

                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{url('')}}/assets/img/products/product3.jpg" class="main-image" alt="image">
                                    <img src="{{url('')}}/assets/img/products/product3.jpg" class="hover-image" alt="image">
                                </a>

                                <div class="products-button">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="{{ route('product-detail') }}">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="{{ route('product-detail') }}" style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">90's Nike Center Swoosh Embroidered VNTG Pullover Hoodie </a>
                                </h3>
                                    <p style="margin-bottom: 0;">Nike | XL</p>
                                    <p>Chart Size | XXL</p>
                                <div class="price">
                                    <!-- <span class="old-price">$321</span> -->
                                    <span class="new-price">AED 400.00</span>
                                </div>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>

                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{url('')}}/assets/img/products/product4.jpg" class="main-image" alt="image">
                                    <img src="{{url('')}}/assets/img/products/product4.jpg" class="hover-image" alt="image">
                                </a>

                                <div class="products-button">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="{{ route('product-detail') }}">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="{{ route('product-detail') }}" style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">90's Nike Swoosh Embroidered VNTG Pullover Hoodie Made In USA </a>
                                </h3>
                                    <p style="margin-bottom: 0;">Nike | M</p>
                                    <p>Chart Size | L</p>
                                <div class="price">
                                    <!-- <span class="old-price">$321</span> -->
                                    <span class="new-price">AED 275.00</span>
                                </div>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>

                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{url('')}}/assets/img/products/product5.jpg" class="main-image" alt="image">
                                    <img src="{{url('')}}/assets/img/products/product5.jpg" class="hover-image" alt="image">
                                </a>

                                <div class="products-button">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="{{ route('product-detail') }}">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="{{ route('product-detail') }}" style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">Boys Youth Hurley Black Pullover Hoodie </a>
                                </h3>
                                    <p style="margin-bottom: 0;">Hurly | 14/16</p>
                                    <p>Chart Size | XL</p>
                                <div class="price">
                                    <!-- <span class="old-price">$321</span> -->
                                    <span class="new-price">AED 40.00</span>
                                </div>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>

                        <div class="single-products-box">
                            <div class="products-image">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{url('')}}/assets/img/products/product6.jpg" class="main-image" alt="image">
                                    <img src="{{url('')}}/assets/img/products/product6.jpg" class="hover-image" alt="image">
                                </a>

                                <div class="products-button">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="{{ route('product-detail') }}">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="quick-view-btn">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                    <i class='bx bx-search-alt'></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="products-content">
                                <h3>
                                    <a href="{{ route('product-detail') }}" style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">Colours by Alexander Julian VTG Knitted Sweater Made in USA </a>
                                </h3>
                                    <p style="margin-bottom: 0;">Other-Vintage | M</p>
                                    <p>Chart Size | L</p>
                                <div class="price">
                                    <!-- <span class="old-price">$321</span> -->
                                    <span class="new-price">AED 125.00</span>
                                </div>
                                <a href="#" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Details Area -->
        
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection