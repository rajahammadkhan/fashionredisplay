@extends('layouts.master')

@section('top-styles')
@endsection

@section('content')  
<!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Chart Size Guide</h2>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Chart Size Guide</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->


        <!-- Start Product Details Area -->
        <section class="product-details-area pt-100 pb-70">
            <div class="container">
                <div class="products-details-tab">
                    <ul class="tabs">
                        <li><a style="border: 1px solid black;" href="#women-size">
                            <div class="dot"></div> Women
                        </a></li>
                        
                        <li><a style="border: 1px solid black;" href="#youth-girls-size">
                            <div class="dot"></div> Youth Girls
                        </a></li>

                        <li><a style="border: 1px solid black;" href="#girls-size">
                            <div class="dot"></div> Girls
                        </a></li>

                        <li><a style="border: 1px solid black;" href="#men-size">
                            <div class="dot"></div> Men
                        </a></li>

                        <li><a style="border: 1px solid black;" href="#youth-boys-size">
                            <div class="dot"></div> Youth Boys
                        </a></li>

                        <li><a style="border: 1px solid black;" href="#boys-size">
                            <div class="dot"></div> Boys
                        </a></li>

                        <li><a style="border: 1px solid black;" href="#measure">
                            <div class="dot"></div> How to Measure
                        </a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Product Details Area -->
        
        <section class="sizing-guide-area">
            <div class="container">
                <div class="sizing-guide-table">
                    <h3 id="women-size">WOMEN MEASUREMENT</h3>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>BUST</th>
                                    <th>XS</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>XXL</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>81-85</td>
                                    <td>86-90</td>
                                    <td>91-95</td>
                                    <td>96-103</td>
                                    <td>104-123</td>
                                    <td>124-132</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>32-33</td>
                                    <td>34-35</td>
                                    <td>36-37</td>
                                    <td>38-40</td>
                                    <td>41-48</td>
                                    <td>49-132</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>WAIST</th>
                                    <th>XS</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>XXL</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>71-77</td>
                                    <td>78-81</td>
                                    <td>82-86</td>
                                    <td>87-91</td>
                                    <td>92-98</td>
                                    <td>99-111</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>28-30</td>
                                    <td>30-32</td>
                                    <td>32-34</td>
                                    <td>34-36</td>
                                    <td>36-38</td>
                                    <td>40-44</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <a href="#measure">Click to see Reference Images for Measurement</a>

                <div class="sizing-guide-table">
                    <h3>HIGH WAIST MEASUREMENT</h3>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>WAIST</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>XXL</th>
                                    <th>XXXL</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>63-65</td>
                                    <td>66-69</td>
                                    <td>70-73</td>
                                    <td>74-77</td>
                                    <td>78-81</td>
                                    <td>82-85</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>24-25</td>
                                    <td>25-27</td>
                                    <td>27-28</td>
                                    <td>29-30</td>
                                    <td>30-31</td>
                                    <td>32-33</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <a href="#measure">Click to see Reference Images for Measurement</a>

                <div class="sizing-guide-table">
                    <h3 id="youth-girls-size">YOUTH GIRLS MEASUREMENT</h3>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>AGE</th>
                                    <th>12-13</th>
                                    <th>14-15</th>
                                    <th>15-16</th>
                                    <th>16-18</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th>BUST</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>XXL</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>69-73</td>
                                    <td>74-78</td>
                                    <td>79-83</td>
                                    <td>84-88</td>
                                    <td>89-93</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>32-33</td>
                                    <td>34-35</td>
                                    <td>36-37</td>
                                    <td>38-40</td>
                                    <td>41-48</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>WAIST</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>61-65</td>
                                    <td>66-70</td>
                                    <td>71-75</td>
                                    <td>76-80</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>24-25</td>
                                    <td>26-27</td>
                                    <td>28-29</td>
                                    <td>30-31</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <a href="#measure">Click to see Reference Images for Measurement</a>

                 <div class="sizing-guide-table">
                    <h3 id="girls-size">GIRLS MEASUREMENT</h3>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>AGE</th>
                                    <th>5-6</th>
                                    <th>6-7</th>
                                    <th>7-9</th>
                                    <th>10-12</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th>BUST</th>
                                    <th>XS</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>60-63</td>
                                    <td>64-68</td>
                                    <td>69-73</td>
                                    <td>74-78</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>23-24</td>
                                    <td>25-26</td>
                                    <td>27-28</td>
                                    <td>29-30</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>WAIST</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>51-55</td>
                                    <td>56-60</td>
                                    <td>61-65</td>
                                    <td>66-70</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>20-21</td>
                                    <td>22-23</td>
                                    <td>24-25</td>
                                    <td>26-27</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <a href="#measure">Click to see Reference Images for Measurement</a>

                <div class="sizing-guide-table">
                    <h3 id="men-size">MENS MEASUREMENT</h3>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>CHEST</th>
                                    <th>XS</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>XXL</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>76-85</td>
                                    <td>86-93</td>
                                    <td>94-103</td>
                                    <td>104-113</td>
                                    <td>114-123</td>
                                    <td>124-132</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>30-33</td>
                                    <td>34-36</td>
                                    <td>37-40</td>
                                    <td>41-44</td>
                                    <td>45-48</td>
                                    <td>49-52</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>WAIST</th>
                                    <th>XS</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>XXL</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>63-67</td>
                                    <td>68-75</td>
                                    <td>76-82</td>
                                    <td>83-95</td>
                                    <td>96-105</td>
                                    <td>106-116</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>25-26</td>
                                    <td>27-29</td>
                                    <td>30-32</td>
                                    <td>33-37</td>
                                    <td>38-41</td>
                                    <td>42-46</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="sizing-guide-table">
                    <h3 id="youth-boys-size">YOUTH BOYS MEASUREMENT</h3>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>AGE</th>
                                    <th>12-13</th>
                                    <th>14-15</th>
                                    <th>15-16</th>
                                    <th>16-18</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th>CHEST</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>XXL</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>69-73</td>
                                    <td>74-78</td>
                                    <td>79-83</td>
                                    <td>84-88</td>
                                    <td>89-93</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>27-28</td>
                                    <td>29-30</td>
                                    <td>31-32</td>
                                    <td>33-34</td>
                                    <td>35-36</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>WAIST</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>XXL</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>64-66</td>
                                    <td>68-73</td>
                                    <td>74-78</td>
                                    <td>79-83</td>
                                    <td>84-88</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>25-26</td>
                                    <td>27-28</td>
                                    <td>29-30</td>
                                    <td>31-32</td>
                                    <td>33-34</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <a href="#measure">Click to see Reference Images for Measurement</a>

                <div class="sizing-guide-table">
                    <h3 id="boys-size">BOYS MEASUREMENT</h3>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>AGE</th>
                                    <th>5-6</th>
                                    <th>6-8</th>
                                    <th>9-12</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th>CHEST</th>
                                    <th>XS</th>
                                    <th>S</th>
                                    <th>M</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>51-58</td>
                                    <td>59-65</td>
                                    <td>66-70</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>20-22</td>
                                    <td>23-25</td>
                                    <td>26-27</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>WAIST</th>
                                    <th>XS</th>
                                    <th>S</th>
                                    <th>M</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>CM</td>
                                    <td>53-58</td>
                                    <td>59-63</td>
                                    <td>64-68</td>
                                </tr>

                                <tr>
                                    <td>INCHES</td>
                                    <td>21-22</td>
                                    <td>23-24</td>
                                    <td>25-26</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="sizing-guide-table">
                    <h3 id="measure">How to Measure</h3>
                    <p>To choose the correct size for you, measure your body as follows:</p>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <center>
                                <h3 style="margin-bottom: 0;">Vintage T-Shirts</h3>
                                <p style="margin-bottom: 0;">Measure around as per the image</p>
                                <img src="{{url('')}}/assets/img/size/vintage-shirt.jpg">
                            </center>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <center>
                                <h3 style="margin-bottom: 0;">Modern T-Shirts</h3>
                                <p style="margin-bottom: 0;">Measure around as per the image</p>
                                <img src="{{url('')}}/assets/img/size/modern-shirt.jpg">
                            </center>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <center>
                                <h3 style="margin-bottom: 0;">Pants</h3>
                                <p style="margin-bottom: 0;">Measure around as per the image</p>
                                <img src="{{url('')}}/assets/img/size/new-pants.jpg" style="height: 360px;">
                            </center>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <center>
                                <h3 style="margin-bottom: 0;">Jumpsuits</h3>
                                <p style="margin-bottom: 0;">Measure around as per the image</p>
                                <img src="{{url('')}}/assets/img/size/new-jumpsuits.jpg" style="height: 400px;">
                            </center>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <center>
                                <h3 style="margin-bottom: 0;">Dresses</h3>
                                <p style="margin-bottom: 0;">Measure around as per the image</p>
                                <img src="{{url('')}}/assets/img/size/new-dresses.jpg" style="height: 400px;">
                            </center>
                        </div>
                        
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <center>
                                <h3 style="margin-bottom: 0;">Jumpers</h3>
                                <p style="margin-bottom: 0;">Measure around as per the image</p>
                                <img src="{{url('')}}/assets/img/size/new-jumpers.jpg" style="height: 400px;">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
@endsection

@section('bottom-mid-scripts')
@endsection

@section('bottom-bot-scripts')
@endsection