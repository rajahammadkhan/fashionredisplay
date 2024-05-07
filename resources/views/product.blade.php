@extends('layouts.master')

@section('top-styles')
<style type="text/css">
	.label{
		font-weight: 600;
		margin-left: 5px;
	}
	.label_total{
		font-weight: 600;
		margin-left: 5px;
		float: right;
	}
	.hover1:hover{
		color: #66bf01;
	}
</style>
@endsection

@section('content') 

<!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Products</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Products</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Products Area -->
        <section class="products-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <div class="woocommerce-widget-area">
                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#chart-size" aria-expanded="true" style="cursor: pointer;">Chart Size <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse show" id="chart-size" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="XS" name="chart_size[]" value="XS"> 
                                    			<label for="XS" class="label"> XS</label> 
                                    			<label for="XS" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="S" name="chart_size[]" value="S">  
                                    			<label for="S" class="label"> S</label> 
                                    			<label for="S" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="M" name="chart_size[]" value="M">  
                                    			<label for="M" class="label"> M</label>
	                                    		<label for="M" class="label_total"> (6)</label>
	                                    	</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="L" name="chart_size[]" value="L">  
                                    			<label for="L" class="label"> L</label>
                                    			<label for="L" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="XL" name="chart_size[]" value="XL">  
                                    			<label for="XL" class="label"> XL</label>
                                    			<label for="XL" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="XL" name="chart_size[]" value="XXL">  
                                    			<label for="XXL" class="label"> XXL</label>
                                    			<label for="XXL" class="label_total"> (6)</label>
                                    		</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#category" aria-expanded="true" style="cursor: pointer;">Category <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="category" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="MEN" name="category[]" value="MEN"> 
                                    			<label for="MEN" class="label"> MEN</label> 
                                    			<label for="MEN" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="WOMEN" name="category[]" value="WOMEN">  
                                    			<label for="WOMEN" class="label"> WOMEN</label> 
                                    			<label for="WOMEN" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="YOUTH" name="category[]" value="YOUTH">  
                                    			<label for="YOUTH" class="label"> YOUTH</label>
	                                    		<label for="YOUTH" class="label_total"> (6)</label>
	                                    	</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="YOUTH BOYS" name="category[]" value="YOUTH BOYS">  
                                    			<label for="YOUTH BOYS" class="label"> YOUTH BOYS</label>
                                    			<label for="YOUTH BOYS" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="XYOUTH GIRLS" name="category[]" value="XYOUTH GIRLS">  
                                    			<label for="XYOUTH GIRLS" class="label"> YOUTH GIRLS</label>
                                    			<label for="XYOUTH GIRLS" class="label_total"> (6)</label>
                                    		</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget color-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#color" aria-expanded="true" style="cursor: pointer;">Color <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="color" style="">
                                    <div class="color-list-row">
                                    	<ul style="padding: 0 !important;">
                                    		<li class="hover1">
                                    			<input type="checkbox" id="black" name="color[]" value="black" style="visibility: hidden;"> 
                                    			<a href="javascript:void(0)" for="black"  title="Black" class="color-black"></a>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="red" name="color[]" value="red" style="visibility: hidden;"> 
                                    			<a href="javascript:void(0)" for="red"  title="Black" class="color-red"></a>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="yellow" name="color[]" value="yellow" style="visibility: hidden;"> 
                                    			<a href="javascript:void(0)" for="yellow"  title="Black" class="color-yellow"></a>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="white" name="color[]" value="white" style="visibility: hidden;"> 
                                    			<a href="javascript:void(0)" for="white"  title="Black" class="color-white"></a>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="blue" name="color[]" value="blue" style="visibility: hidden;"> 
                                    			<a href="javascript:void(0)" for="blue"  title="Black" class="color-blue"></a>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="green" name="color[]" value="green" style="visibility: hidden;"> 
                                    			<a href="javascript:void(0)" for="green"  title="Black" class="color-green"></a>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="yellowgreen" name="color[]" value="yellowgreen" style="visibility: hidden;"> 
                                    			<a href="javascript:void(0)" for="yellowgreen"  title="Black" class="color-yellowgreen"></a>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="pink" name="color[]" value="pink" style="visibility: hidden;"> 
                                    			<a href="javascript:void(0)" for="pink"  title="Black" class="color-pink"></a>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="violet" name="color[]" value="violet" style="visibility: hidden;"> 
                                    			<a href="javascript:void(0)" for="violet"  title="Black" class="color-violet"></a>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="lime" name="color[]" value="lime" style="visibility: hidden;"> 
                                    			<a href="javascript:void(0)" for="lime"  title="Black" class="color-lime"></a>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="plum" name="color[]" value="plum" style="visibility: hidden;"> 
                                    			<a href="javascript:void(0)" for="plum"  title="Black" class="color-plum"></a>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="teal" name="color[]" value="teal" style="visibility: hidden;"> 
                                    			<a href="javascript:void(0)" for="teal"  title="Black" class="color-teal"></a>
                                    		</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#brand" aria-expanded="true" style="cursor: pointer;">Brand <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="brand" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="1st Kiss" name="brand[]" value="1st Kiss"> 
                                    			<label for="1st Kiss" class="label"> 1st Kiss</label> 
                                    			<label for="1st Kiss" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="725 Originals" name="brand[]" value="725 Originals">  
                                    			<label for="725 Originals" class="label"> 725 Originals</label> 
                                    			<label for="725 Originals" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Adidas" name="brand[]" value="Adidas">  
                                    			<label for="Adidas" class="label"> Adidas</label>
	                                    		<label for="Adidas" class="label_total"> (6)</label>
	                                    	</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Aeropostale" name="brand[]" value="Aeropostale">  
                                    			<label for="Aeropostale" class="label"> Aeropostale</label>
                                    			<label for="Aeropostale" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Alstyle & Activewear" name="brand[]" value="Alstyle & Activewear">  
                                    			<label for="Alstyle & Activewear" class="label"> Alstyle & Activewear</label>
                                    			<label for="Alstyle & Activewear" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="American Apparel" name="brand[]" value="American Apparel">  
                                    			<label for="American Apparel" class="label"> American Apparel</label>
                                    			<label for="American Apparel" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="American Eagle" name="brand[]" value="American Eagle">  
                                    			<label for="American Eagle" class="label"> American Eagle</label>
                                    			<label for="American Eagle" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="AND" name="brand[]" value="AND">  
                                    			<label for="AND" class="label"> AND</label>
                                    			<label for="AND" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Anvil" name="brand[]" value="Anvil">  
                                    			<label for="Anvil" class="label"> Anvil</label>
                                    			<label for="Anvil" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Armani" name="brand[]" value="Armani">  
                                    			<label for="Armani" class="label"> Armani</label>
                                    			<label for="Armani" class="label_total"> (6)</label>
                                    		</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget price-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="true" style="cursor: pointer;">Price <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="collection-filter-by-price collapse" id="price" style="">
                                    <input class="js-range-of-price" type="text" data-min="0" data-max="1055" name="filter_by_price" data-step="10">
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#condition" aria-expanded="true" style="cursor: pointer;">Condition <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="condition" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="Good" name="condition[]" value="Good"> 
                                    			<label for="Good" class="label"> Good</label> 
                                    			<label for="Good" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Very Good" name="condition[]" value="Very Good">  
                                    			<label for="Very Good" class="label"> Very Good</label> 
                                    			<label for="Very Good" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Excellent" name="condition[]" value="Excellent">  
                                    			<label for="Excellent" class="label"> Excellent</label>
	                                    		<label for="Excellent" class="label_total"> (6)</label>
	                                    	</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#shirts" aria-expanded="true" style="cursor: pointer;">Shirts <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="shirts" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="Long Sleeve Shirts" name="shirts[]" value="Long Sleeve Shirts"> 
                                    			<label for="Long Sleeve Shirts" class="label"> Long Sleeve Shirts</label> 
                                    			<label for="Long Sleeve Shirts" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Short Sleeve Shirts" name="shirts[]" value="Short Sleeve Shirts">  
                                    			<label for="Short Sleeve Shirts" class="label"> Short Sleeve Shirts</label> 
                                    			<label for="Short Sleeve Shirts" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Hawaii Shirts" name="shirts[]" value="Hawaii Shirts">  
                                    			<label for="Hawaii Shirts" class="label"> Hawaii Shirts</label>
	                                    		<label for="Hawaii Shirts" class="label_total"> (6)</label>
	                                    	</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#product_label" aria-expanded="true" style="cursor: pointer;">Product Label <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="product_label" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="Vintage" name="product_label[]" value="Vintage"> 
                                    			<label for="Vintage" class="label"> Vintage</label> 
                                    			<label for="Vintage" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Retro" name="product_label[]" value="Retro">  
                                    			<label for="Retro" class="label"> Retro</label> 
                                    			<label for="Retro" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Thrift" name="product_label[]" value="Thrift">  
                                    			<label for="Thrift" class="label"> Thrift</label>
	                                    		<label for="Thrift" class="label_total"> (6)</label>
	                                    	</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#jeans" aria-expanded="true" style="cursor: pointer;">Jeans <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="jeans" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="Straight Jeans" name="jeans[]" value="Straight Jeans"> 
                                    			<label for="Straight Jeans" class="label"> Straight Jeans</label> 
                                    			<label for="Straight Jeans" class="label_total"> (6)</label>
                                    		</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#skirts" aria-expanded="true" style="cursor: pointer;">Skirts <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="skirts" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="Midi Skirts" name="skirts[]" value="Midi Skirts"> 
                                    			<label for="Midi Skirts" class="label"> Midi Skirts</label> 
                                    			<label for="Midi Skirts" class="label_total"> (6)</label>
                                    		</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#blouse_tops" aria-expanded="true" style="cursor: pointer;">Blouse & Tops <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="blouse_tops" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="Casual Long Sleeves" name="blouse_tops[]" value="Casual Long Sleeves"> 
                                    			<label for="Casual Long Sleeves" class="label"> Casual Long Sleeves</label> 
                                    			<label for="Casual Long Sleeves" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Casual Short Sleeves" name="blouse_tops[]" value="Casual Short Sleeves">  
                                    			<label for="Casual Short Sleeves" class="label"> Casual Short Sleeves</label> 
                                    			<label for="Casual Short Sleeves" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Flannel Blouses" name="blouse_tops[]" value="Flannel Blouses">  
                                    			<label for="Flannel Blouses" class="label"> Flannel Blouses</label>
	                                    		<label for="Flannel Blouses" class="label_total"> (6)</label>
	                                    	</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#shorts" aria-expanded="true" style="cursor: pointer;">Shorts <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="shorts" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="Cargo Shorts" name="shorts[]" value="Cargo Shorts"> 
                                    			<label for="Cargo Shorts" class="label"> Cargo Shorts</label> 
                                    			<label for="Cargo Shorts" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Casual Shorts" name="shorts[]" value="Casual Shorts">  
                                    			<label for="Casual Shorts" class="label"> Casual Shorts</label> 
                                    			<label for="Casual Shorts" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Denim Shorts" name="shorts[]" value="Denim Shorts">  
                                    			<label for="Denim Shorts" class="label"> Denim Shorts</label>
	                                    		<label for="Denim Shorts" class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="Sports Shorts" name="shorts[]" value="Sports Shorts">  
                                    			<label for="Sports Shorts" class="label"> Sports Shorts</label>
	                                    		<label for="Sports Shorts" class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="Swim / Board Shorts" name="shorts[]" value="Swim / Board Shorts">  
                                    			<label for="Swim / Board Shorts" class="label"> Swim / Board Shorts</label>
	                                    		<label for="Swim / Board Shorts" class="label_total"> (6)</label>
	                                    	</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#Hoodies_Sweatshirts" aria-expanded="true" style="cursor: pointer;">Hoodies & Sweatshirts <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="Hoodies_Sweatshirts" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="Hoodies" name="Hoodies_Sweatshirts[]" value="Hoodies"> 
                                    			<label for="Hoodies" class="label"> Hoodies</label> 
                                    			<label for="Hoodies" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Sweatshirts" name="Hoodies_Sweatshirts[]" value="Sweatshirts">  
                                    			<label for="Sweatshirts" class="label"> Sweatshirts</label> 
                                    			<label for="Sweatshirts" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Hoodies & Sweatshirts" name="Hoodies_Sweatshirts[]" value="Hoodies & Sweatshirts">  
                                    			<label for="Hoodies & Sweatshirts" class="label"> Hoodies & Sweatshirts</label>
	                                    		<label for="Hoodies & Sweatshirts" class="label_total"> (6)</label>
	                                    	</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#pants" aria-expanded="true" style="cursor: pointer;">Pants <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="pants" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="Casual Pants" name="pants[]" value="Casual Pants"> 
                                    			<label for="Casual Pants" class="label"> Casual Pants</label> 
                                    			<label for="Casual Pants" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Jogger Pants" name="pants[]" value="Jogger Pants">  
                                    			<label for="Jogger Pants" class="label"> Jogger Pants</label> 
                                    			<label for="Jogger Pants" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Leggings" name="pants[]" value="Leggings">  
                                    			<label for="Leggings" class="label"> Leggings</label>
	                                    		<label for="Leggings" class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="Sports Pants" name="pants[]" value="Sports Pants">  
                                    			<label for="Sports Pants" class="label"> Sports Pants</label>
	                                    		<label for="Sports Pants" class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="Pants" name="pants[]" value="Pants">  
                                    			<label for="Pants" class="label"> Pants</label>
	                                    		<label for="Pants" class="label_total"> (6)</label>
	                                    	</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#jerseys" aria-expanded="true" style="cursor: pointer;">Jerseys <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="jerseys" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="Jerseys" name="jerseys[]" value="Jerseys"> 
                                    			<label for="Jerseys" class="label"> Jerseys</label> 
                                    			<label for="Jerseys" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Basketball" name="jerseys[]" value="Basketball">  
                                    			<label for="Basketball" class="label"> Basketball</label> 
                                    			<label for="Basketball" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Football / Soccer" name="jerseys[]" value="Football / Soccer">  
                                    			<label for="Football / Soccer" class="label"> Football / Soccer</label>
	                                    		<label for="Football / Soccer" class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="Baseball " name="jerseys[]" value="Baseball ">  
                                    			<label for="Baseball " class="label"> Baseball </label>
	                                    		<label for="Baseball " class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="NFL" name="jerseys[]" value="NFL">  
                                    			<label for="NFL" class="label"> NFL</label>
	                                    		<label for="NFL" class="label_total"> (6)</label>
	                                    	</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#t_shirts" aria-expanded="true" style="cursor: pointer;">T-Shirts <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="t_shirts" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="Collar T-Shirts" name="t_shirts[]" value="Collar T-Shirts"> 
                                    			<label for="Collar T-Shirts" class="label"> Collar T-Shirts</label> 
                                    			<label for="Collar T-Shirts" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Long Sleeve T-Shirts" name="t_shirts[]" value="Long Sleeve T-Shirts">  
                                    			<label for="Long Sleeve T-Shirts" class="label"> Long Sleeve T-Shirts</label> 
                                    			<label for="Long Sleeve T-Shirts" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Round Neck / V-Neck T-Shirts" name="t_shirts[]" value="Round Neck / V-Neck T-Shirts">  
                                    			<label for="Round Neck / V-Neck T-Shirts" class="label"> Round Neck / V-Neck T-Shirts</label>
	                                    		<label for="Round Neck / V-Neck T-Shirts" class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="Singlet / Sleeveless T-Shirts " name="t_shirts[]" value="Singlet / Sleeveless T-Shirts ">  
                                    			<label for="Singlet / Sleeveless T-Shirts " class="label"> Singlet / Sleeveless T-Shirts </label>
	                                    		<label for="Singlet / Sleeveless T-Shirts " class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="Sports T-Shirts" name="t_shirts[]" value="Sports T-Shirts">  
                                    			<label for="Sports T-Shirts" class="label"> Sports T-Shirts</label>
	                                    		<label for="Sports T-Shirts" class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="T-Shirts" name="t_shirts[]" value="T-Shirts">  
                                    			<label for="T-Shirts" class="label"> T-Shirts</label> 
                                    			<label for="T-Shirts" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Harley Davidson T-Shirts" name="t_shirts[]" value="Harley Davidson T-Shirts">  
                                    			<label for="Harley Davidson T-Shirts" class="label"> Harley Davidson T-Shirts</label>
	                                    		<label for="Harley Davidson T-Shirts" class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="Nascar T-Shirts" name="t_shirts[]" value="Nascar T-Shirts">  
                                    			<label for="Nascar T-Shirts" class="label"> Nascar T-Shirts</label>
	                                    		<label for="Nascar T-Shirts" class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="Branded T-Shirts" name="t_shirts[]" value="Branded T-Shirts">  
                                    			<label for="Branded T-Shirts" class="label"> Branded T-Shirts</label>
	                                    		<label for="Branded T-Shirts" class="label_total"> (6)</label>
	                                    	</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#jackets" aria-expanded="true" style="cursor: pointer;">Jackets <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="jackets" style="">
                                    <div class="brands-list-row">
                                    	<ul>
                                    		<li class="hover1">
                                    			<input type="checkbox" id="Casual Jackets" name="jackets[]" value="Casual Jackets"> 
                                    			<label for="Casual Jackets" class="label"> Casual Jackets</label> 
                                    			<label for="Casual Jackets" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Denim Jackets" name="jackets[]" value="Denim Jackets">  
                                    			<label for="Denim Jackets" class="label"> Denim Jackets</label> 
                                    			<label for="Denim Jackets" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Puffer Jackets" name="jackets[]" value="Puffer Jackets">  
                                    			<label for="Puffer Jackets" class="label"> Puffer Jackets</label>
	                                    		<label for="Puffer Jackets" class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="Sports Jackets" name="jackets[]" value="Sports Jackets">  
                                    			<label for="Sports Jackets" class="label"> Sports Jackets</label>
	                                    		<label for="Sports Jackets" class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="Vests" name="jackets[]" value="Vests">  
                                    			<label for="Vests" class="label"> Vests</label>
	                                    		<label for="Vests" class="label_total"> (6)</label>
	                                    	</li>

	                                    	<li class="hover1">
                                    			<input type="checkbox" id="Winter Jackets" name="jackets[]" value="Winter Jackets">  
                                    			<label for="Winter Jackets" class="label"> Winter Jackets</label> 
                                    			<label for="Winter Jackets" class="label_total"> (6)</label>
                                    		</li>

                                    		<li class="hover1">
                                    			<input type="checkbox" id="Jackets" name="jackets[]" value="Jackets">  
                                    			<label for="Jackets" class="label"> Jackets</label>
	                                    		<label for="Jackets" class="label_total"> (6)</label>
	                                    	</li>
                                    	</ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10 col-md-12">
                        <div class="products-filter-options">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="d-lg-flex d-md-flex align-items-center">
                                        <span class="sub-title d-lg-none"><a  data-bs-toggle="modal" data-bs-target="#productsFilterModal"><i class='bx bx-filter-alt'></i> Filter</a></span>
                                        
                                        <span class="sub-title d-none d-lg-block d-md-block">View:</span>

                                        <div class="view-list-row d-none d-lg-block d-md-block">
                                            <div class="view-column">
                                                <a href="#" class="icon-view-one">
                                                    <span></span>
                                                </a>

                                                <a href="#" class="icon-view-two">
                                                    <span></span>
                                                    <span></span>
                                                </a>

                                                <a href="#" class="icon-view-three active">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </a>

                                                <a href="#" class="view-grid-switch">
                                                    <span></span>
                                                    <span></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <p>Total 100</p>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="products-ordering-list">
                                        <select>
                                            <option>Sort by Price: Low to High</option>
                                            <option>Default Sorting</option>
                                            <option>Sort by Popularity</option>
                                            <option>Sort by Average Rating</option>
                                            <option>Sort by Latest</option>
                                            <option>Sort by Price: High to Low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="products-collections-filter" class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 products-col-item">
                                <div class="single-products-box">
		                            <div class="products-image">
		                                <a href="{{ route('product-detail') }}">
		                                    <img src="assets/img/products/product1.jpg" class="main-image" alt="image">
		                                    <img src="assets/img/products/product1.jpg" class="hover-image" alt="image">
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
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 products-col-item">
                                <div class="single-products-box">
		                            <div class="products-image">
		                                <a href="{{ route('product-detail') }}">
		                                    <img src="assets/img/products/product2.jpg" class="main-image" alt="image">
		                                    <img src="assets/img/products/product2.jpg" class="hover-image" alt="image">
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
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 products-col-item">
                                <div class="single-products-box">
		                            <div class="products-image">
		                                <a href="{{ route('product-detail') }}">
		                                    <img src="assets/img/products/product3.jpg" class="main-image" alt="image">
		                                    <img src="assets/img/products/product3.jpg" class="hover-image" alt="image">
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
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 products-col-item">
                                <div class="single-products-box">
		                            <div class="products-image">
		                                <a href="{{ route('product-detail') }}">
		                                    <img src="assets/img/products/product4.jpg" class="main-image" alt="image">
		                                    <img src="assets/img/products/product4.jpg" class="hover-image" alt="image">
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
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 products-col-item">
                                <div class="single-products-box">
		                            <div class="products-image">
		                                <a href="{{ route('product-detail') }}">
		                                    <img src="assets/img/products/product5.jpg" class="main-image" alt="image">
		                                    <img src="assets/img/products/product5.jpg" class="hover-image" alt="image">
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
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 products-col-item">
                                <div class="single-products-box">
		                            <div class="products-image">
		                                <a href="{{ route('product-detail') }}">
		                                    <img src="assets/img/products/product6.jpg" class="main-image" alt="image">
		                                    <img src="assets/img/products/product6.jpg" class="hover-image" alt="image">
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

                        <!-- <div class="pagination-area text-center">
                            <a href="#" class="prev page-numbers"><i class='bx bx-chevron-left'></i></a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="page-numbers">5</a>
                            <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Products Area -->
        <!-- Start Products Filter Modal Area -->
        <div class="modal left fade productsFilterModal" id="productsFilterModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class='bx bx-x'></i> Close</span>
                    </button>

                    <div class="modal-body">
                        <div class="woocommerce-widget-area">
                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#chart-size" aria-expanded="true" style="cursor: pointer;">Chart Size <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse show" id="chart-size" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="XS" name="chart_size[]" value="XS"> 
                                                <label for="XS" class="label"> XS</label> 
                                                <label for="XS" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="S" name="chart_size[]" value="S">  
                                                <label for="S" class="label"> S</label> 
                                                <label for="S" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="M" name="chart_size[]" value="M">  
                                                <label for="M" class="label"> M</label>
                                                <label for="M" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="L" name="chart_size[]" value="L">  
                                                <label for="L" class="label"> L</label>
                                                <label for="L" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="XL" name="chart_size[]" value="XL">  
                                                <label for="XL" class="label"> XL</label>
                                                <label for="XL" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="XL" name="chart_size[]" value="XXL">  
                                                <label for="XXL" class="label"> XXL</label>
                                                <label for="XXL" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#category" aria-expanded="true" style="cursor: pointer;">Category <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="category" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="MEN" name="category[]" value="MEN"> 
                                                <label for="MEN" class="label"> MEN</label> 
                                                <label for="MEN" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="WOMEN" name="category[]" value="WOMEN">  
                                                <label for="WOMEN" class="label"> WOMEN</label> 
                                                <label for="WOMEN" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="YOUTH" name="category[]" value="YOUTH">  
                                                <label for="YOUTH" class="label"> YOUTH</label>
                                                <label for="YOUTH" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="YOUTH BOYS" name="category[]" value="YOUTH BOYS">  
                                                <label for="YOUTH BOYS" class="label"> YOUTH BOYS</label>
                                                <label for="YOUTH BOYS" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="XYOUTH GIRLS" name="category[]" value="XYOUTH GIRLS">  
                                                <label for="XYOUTH GIRLS" class="label"> YOUTH GIRLS</label>
                                                <label for="XYOUTH GIRLS" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget color-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#color" aria-expanded="true" style="cursor: pointer;">Color <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="color" style="">
                                    <div class="color-list-row">
                                        <ul style="padding: 0 !important;">
                                            <li class="hover1">
                                                <input type="checkbox" id="black" name="color[]" value="black" style="visibility: hidden;"> 
                                                <a href="javascript:void(0)" for="black"  title="Black" class="color-black"></a>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="red" name="color[]" value="red" style="visibility: hidden;"> 
                                                <a href="javascript:void(0)" for="red"  title="Black" class="color-red"></a>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="yellow" name="color[]" value="yellow" style="visibility: hidden;"> 
                                                <a href="javascript:void(0)" for="yellow"  title="Black" class="color-yellow"></a>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="white" name="color[]" value="white" style="visibility: hidden;"> 
                                                <a href="javascript:void(0)" for="white"  title="Black" class="color-white"></a>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="blue" name="color[]" value="blue" style="visibility: hidden;"> 
                                                <a href="javascript:void(0)" for="blue"  title="Black" class="color-blue"></a>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="green" name="color[]" value="green" style="visibility: hidden;"> 
                                                <a href="javascript:void(0)" for="green"  title="Black" class="color-green"></a>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="yellowgreen" name="color[]" value="yellowgreen" style="visibility: hidden;"> 
                                                <a href="javascript:void(0)" for="yellowgreen"  title="Black" class="color-yellowgreen"></a>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="pink" name="color[]" value="pink" style="visibility: hidden;"> 
                                                <a href="javascript:void(0)" for="pink"  title="Black" class="color-pink"></a>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="violet" name="color[]" value="violet" style="visibility: hidden;"> 
                                                <a href="javascript:void(0)" for="violet"  title="Black" class="color-violet"></a>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="lime" name="color[]" value="lime" style="visibility: hidden;"> 
                                                <a href="javascript:void(0)" for="lime"  title="Black" class="color-lime"></a>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="plum" name="color[]" value="plum" style="visibility: hidden;"> 
                                                <a href="javascript:void(0)" for="plum"  title="Black" class="color-plum"></a>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="teal" name="color[]" value="teal" style="visibility: hidden;"> 
                                                <a href="javascript:void(0)" for="teal"  title="Black" class="color-teal"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#brand" aria-expanded="true" style="cursor: pointer;">Brand <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="brand" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="1st Kiss" name="brand[]" value="1st Kiss"> 
                                                <label for="1st Kiss" class="label"> 1st Kiss</label> 
                                                <label for="1st Kiss" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="725 Originals" name="brand[]" value="725 Originals">  
                                                <label for="725 Originals" class="label"> 725 Originals</label> 
                                                <label for="725 Originals" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Adidas" name="brand[]" value="Adidas">  
                                                <label for="Adidas" class="label"> Adidas</label>
                                                <label for="Adidas" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Aeropostale" name="brand[]" value="Aeropostale">  
                                                <label for="Aeropostale" class="label"> Aeropostale</label>
                                                <label for="Aeropostale" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Alstyle & Activewear" name="brand[]" value="Alstyle & Activewear">  
                                                <label for="Alstyle & Activewear" class="label"> Alstyle & Activewear</label>
                                                <label for="Alstyle & Activewear" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="American Apparel" name="brand[]" value="American Apparel">  
                                                <label for="American Apparel" class="label"> American Apparel</label>
                                                <label for="American Apparel" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="American Eagle" name="brand[]" value="American Eagle">  
                                                <label for="American Eagle" class="label"> American Eagle</label>
                                                <label for="American Eagle" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="AND" name="brand[]" value="AND">  
                                                <label for="AND" class="label"> AND</label>
                                                <label for="AND" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Anvil" name="brand[]" value="Anvil">  
                                                <label for="Anvil" class="label"> Anvil</label>
                                                <label for="Anvil" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Armani" name="brand[]" value="Armani">  
                                                <label for="Armani" class="label"> Armani</label>
                                                <label for="Armani" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget price-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="true" style="cursor: pointer;">Price <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="collection-filter-by-price collapse" id="price" style="">
                                    <input class="js-range-of-price" type="text" data-min="0" data-max="1055" name="filter_by_price" data-step="10">
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#condition" aria-expanded="true" style="cursor: pointer;">Condition <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="condition" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="Good" name="condition[]" value="Good"> 
                                                <label for="Good" class="label"> Good</label> 
                                                <label for="Good" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Very Good" name="condition[]" value="Very Good">  
                                                <label for="Very Good" class="label"> Very Good</label> 
                                                <label for="Very Good" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Excellent" name="condition[]" value="Excellent">  
                                                <label for="Excellent" class="label"> Excellent</label>
                                                <label for="Excellent" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#shirts" aria-expanded="true" style="cursor: pointer;">Shirts <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="shirts" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="Long Sleeve Shirts" name="shirts[]" value="Long Sleeve Shirts"> 
                                                <label for="Long Sleeve Shirts" class="label"> Long Sleeve Shirts</label> 
                                                <label for="Long Sleeve Shirts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Short Sleeve Shirts" name="shirts[]" value="Short Sleeve Shirts">  
                                                <label for="Short Sleeve Shirts" class="label"> Short Sleeve Shirts</label> 
                                                <label for="Short Sleeve Shirts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Hawaii Shirts" name="shirts[]" value="Hawaii Shirts">  
                                                <label for="Hawaii Shirts" class="label"> Hawaii Shirts</label>
                                                <label for="Hawaii Shirts" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#product_label" aria-expanded="true" style="cursor: pointer;">Product Label <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="product_label" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="Vintage" name="product_label[]" value="Vintage"> 
                                                <label for="Vintage" class="label"> Vintage</label> 
                                                <label for="Vintage" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Retro" name="product_label[]" value="Retro">  
                                                <label for="Retro" class="label"> Retro</label> 
                                                <label for="Retro" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Thrift" name="product_label[]" value="Thrift">  
                                                <label for="Thrift" class="label"> Thrift</label>
                                                <label for="Thrift" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#jeans" aria-expanded="true" style="cursor: pointer;">Jeans <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="jeans" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="Straight Jeans" name="jeans[]" value="Straight Jeans"> 
                                                <label for="Straight Jeans" class="label"> Straight Jeans</label> 
                                                <label for="Straight Jeans" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#skirts" aria-expanded="true" style="cursor: pointer;">Skirts <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="skirts" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="Midi Skirts" name="skirts[]" value="Midi Skirts"> 
                                                <label for="Midi Skirts" class="label"> Midi Skirts</label> 
                                                <label for="Midi Skirts" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#blouse_tops" aria-expanded="true" style="cursor: pointer;">Blouse & Tops <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="blouse_tops" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="Casual Long Sleeves" name="blouse_tops[]" value="Casual Long Sleeves"> 
                                                <label for="Casual Long Sleeves" class="label"> Casual Long Sleeves</label> 
                                                <label for="Casual Long Sleeves" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Casual Short Sleeves" name="blouse_tops[]" value="Casual Short Sleeves">  
                                                <label for="Casual Short Sleeves" class="label"> Casual Short Sleeves</label> 
                                                <label for="Casual Short Sleeves" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Flannel Blouses" name="blouse_tops[]" value="Flannel Blouses">  
                                                <label for="Flannel Blouses" class="label"> Flannel Blouses</label>
                                                <label for="Flannel Blouses" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#shorts" aria-expanded="true" style="cursor: pointer;">Shorts <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="shorts" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="Cargo Shorts" name="shorts[]" value="Cargo Shorts"> 
                                                <label for="Cargo Shorts" class="label"> Cargo Shorts</label> 
                                                <label for="Cargo Shorts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Casual Shorts" name="shorts[]" value="Casual Shorts">  
                                                <label for="Casual Shorts" class="label"> Casual Shorts</label> 
                                                <label for="Casual Shorts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Denim Shorts" name="shorts[]" value="Denim Shorts">  
                                                <label for="Denim Shorts" class="label"> Denim Shorts</label>
                                                <label for="Denim Shorts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Sports Shorts" name="shorts[]" value="Sports Shorts">  
                                                <label for="Sports Shorts" class="label"> Sports Shorts</label>
                                                <label for="Sports Shorts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Swim / Board Shorts" name="shorts[]" value="Swim / Board Shorts">  
                                                <label for="Swim / Board Shorts" class="label"> Swim / Board Shorts</label>
                                                <label for="Swim / Board Shorts" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#Hoodies_Sweatshirts" aria-expanded="true" style="cursor: pointer;">Hoodies & Sweatshirts <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="Hoodies_Sweatshirts" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="Hoodies" name="Hoodies_Sweatshirts[]" value="Hoodies"> 
                                                <label for="Hoodies" class="label"> Hoodies</label> 
                                                <label for="Hoodies" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Sweatshirts" name="Hoodies_Sweatshirts[]" value="Sweatshirts">  
                                                <label for="Sweatshirts" class="label"> Sweatshirts</label> 
                                                <label for="Sweatshirts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Hoodies & Sweatshirts" name="Hoodies_Sweatshirts[]" value="Hoodies & Sweatshirts">  
                                                <label for="Hoodies & Sweatshirts" class="label"> Hoodies & Sweatshirts</label>
                                                <label for="Hoodies & Sweatshirts" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#pants" aria-expanded="true" style="cursor: pointer;">Pants <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="pants" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="Casual Pants" name="pants[]" value="Casual Pants"> 
                                                <label for="Casual Pants" class="label"> Casual Pants</label> 
                                                <label for="Casual Pants" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Jogger Pants" name="pants[]" value="Jogger Pants">  
                                                <label for="Jogger Pants" class="label"> Jogger Pants</label> 
                                                <label for="Jogger Pants" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Leggings" name="pants[]" value="Leggings">  
                                                <label for="Leggings" class="label"> Leggings</label>
                                                <label for="Leggings" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Sports Pants" name="pants[]" value="Sports Pants">  
                                                <label for="Sports Pants" class="label"> Sports Pants</label>
                                                <label for="Sports Pants" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Pants" name="pants[]" value="Pants">  
                                                <label for="Pants" class="label"> Pants</label>
                                                <label for="Pants" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#jerseys" aria-expanded="true" style="cursor: pointer;">Jerseys <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="jerseys" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="Jerseys" name="jerseys[]" value="Jerseys"> 
                                                <label for="Jerseys" class="label"> Jerseys</label> 
                                                <label for="Jerseys" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Basketball" name="jerseys[]" value="Basketball">  
                                                <label for="Basketball" class="label"> Basketball</label> 
                                                <label for="Basketball" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Football / Soccer" name="jerseys[]" value="Football / Soccer">  
                                                <label for="Football / Soccer" class="label"> Football / Soccer</label>
                                                <label for="Football / Soccer" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Baseball " name="jerseys[]" value="Baseball ">  
                                                <label for="Baseball " class="label"> Baseball </label>
                                                <label for="Baseball " class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="NFL" name="jerseys[]" value="NFL">  
                                                <label for="NFL" class="label"> NFL</label>
                                                <label for="NFL" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#t_shirts" aria-expanded="true" style="cursor: pointer;">T-Shirts <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="t_shirts" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="Collar T-Shirts" name="t_shirts[]" value="Collar T-Shirts"> 
                                                <label for="Collar T-Shirts" class="label"> Collar T-Shirts</label> 
                                                <label for="Collar T-Shirts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Long Sleeve T-Shirts" name="t_shirts[]" value="Long Sleeve T-Shirts">  
                                                <label for="Long Sleeve T-Shirts" class="label"> Long Sleeve T-Shirts</label> 
                                                <label for="Long Sleeve T-Shirts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Round Neck / V-Neck T-Shirts" name="t_shirts[]" value="Round Neck / V-Neck T-Shirts">  
                                                <label for="Round Neck / V-Neck T-Shirts" class="label"> Round Neck / V-Neck T-Shirts</label>
                                                <label for="Round Neck / V-Neck T-Shirts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Singlet / Sleeveless T-Shirts " name="t_shirts[]" value="Singlet / Sleeveless T-Shirts ">  
                                                <label for="Singlet / Sleeveless T-Shirts " class="label"> Singlet / Sleeveless T-Shirts </label>
                                                <label for="Singlet / Sleeveless T-Shirts " class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Sports T-Shirts" name="t_shirts[]" value="Sports T-Shirts">  
                                                <label for="Sports T-Shirts" class="label"> Sports T-Shirts</label>
                                                <label for="Sports T-Shirts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="T-Shirts" name="t_shirts[]" value="T-Shirts">  
                                                <label for="T-Shirts" class="label"> T-Shirts</label> 
                                                <label for="T-Shirts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Harley Davidson T-Shirts" name="t_shirts[]" value="Harley Davidson T-Shirts">  
                                                <label for="Harley Davidson T-Shirts" class="label"> Harley Davidson T-Shirts</label>
                                                <label for="Harley Davidson T-Shirts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Nascar T-Shirts" name="t_shirts[]" value="Nascar T-Shirts">  
                                                <label for="Nascar T-Shirts" class="label"> Nascar T-Shirts</label>
                                                <label for="Nascar T-Shirts" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Branded T-Shirts" name="t_shirts[]" value="Branded T-Shirts">  
                                                <label for="Branded T-Shirts" class="label"> Branded T-Shirts</label>
                                                <label for="Branded T-Shirts" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="woocommerce-widget filter-list-widget">
                                <h3 class="woocommerce-widget-title" data-bs-toggle="collapse" data-bs-target="#jackets" aria-expanded="true" style="cursor: pointer;">Jackets <i class='bx bx-chevron-down' style="float: right;"></i></h3>

                                <div class="selected-filters-wrap-list collapse" id="jackets" style="">
                                    <div class="brands-list-row">
                                        <ul>
                                            <li class="hover1">
                                                <input type="checkbox" id="Casual Jackets" name="jackets[]" value="Casual Jackets"> 
                                                <label for="Casual Jackets" class="label"> Casual Jackets</label> 
                                                <label for="Casual Jackets" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Denim Jackets" name="jackets[]" value="Denim Jackets">  
                                                <label for="Denim Jackets" class="label"> Denim Jackets</label> 
                                                <label for="Denim Jackets" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Puffer Jackets" name="jackets[]" value="Puffer Jackets">  
                                                <label for="Puffer Jackets" class="label"> Puffer Jackets</label>
                                                <label for="Puffer Jackets" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Sports Jackets" name="jackets[]" value="Sports Jackets">  
                                                <label for="Sports Jackets" class="label"> Sports Jackets</label>
                                                <label for="Sports Jackets" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Vests" name="jackets[]" value="Vests">  
                                                <label for="Vests" class="label"> Vests</label>
                                                <label for="Vests" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Winter Jackets" name="jackets[]" value="Winter Jackets">  
                                                <label for="Winter Jackets" class="label"> Winter Jackets</label> 
                                                <label for="Winter Jackets" class="label_total"> (6)</label>
                                            </li>

                                            <li class="hover1">
                                                <input type="checkbox" id="Jackets" name="jackets[]" value="Jackets">  
                                                <label for="Jackets" class="label"> Jackets</label>
                                                <label for="Jackets" class="label_total"> (6)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Products Filter Modal Area -->
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection