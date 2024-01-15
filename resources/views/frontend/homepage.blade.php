@extends('frontend.partials.master')
<style>
    .errorMsg {
        color: red;
        text-align: center;
    }
     #loader{
        display: none
    }
     .googlemapicon{
            position:absolute;
            max-width:40px;
            width:100%;
            right:5%;
            top:50%;
            transform: translateY(-50%);
            border: none;
        }
</style>
@section('content')

<div id="loader" class="loader-container">

    <div class="loading-window">
        <div class="car">
        <div class="strike"></div>
        <div class="strike strike2"></div>
        <div class="strike strike3"></div>
        <div class="strike strike4"></div>
        <div class="strike strike5"></div>
        <div class="car-detail spoiler"></div>
        <div class="car-detail back"></div>
        <div class="car-detail center"></div>
        <div class="car-detail center1"></div>
        <div class="car-detail front"></div>
        <div class="car-detail wheel"></div>
        <div class="car-detail wheel wheel2"></div>
    </div>

    <div class="text">
        <span>Loading</span><span class = "dots">...</span>
    </div>
    </div>
</div>

      
  <div id="fancybox" class="fancybox">
        {{-- <div class="fancyslider_container"> --}}
            <i class="fa-solid fa-square-xmark returnArrow" onclick="closefancybox()"></i>
            <div id="fancySlider" class="facncySlider">
            </div>
        {{-- </div> --}}
    </div>


    <!-- //////////// Car Apointment start  ////////////////-->
    <div class="container car-pick-form my-3 my-md-5 px-sm-5">
        <form class="checkoutform" action="#" enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class="row g-4">


                <!-- // Pickup location -->

                <div class="col-lg-4 col-md-6">
                    <p><i class="fa-solid fa-location-dot"></i> Pick-up Location</p>

                    <!-- <div class="dropdown "> -->


                    <div style="position:relative" class="promo-code-input">
                        <input type="text" class="location pickup-up-dropdown">
                        <button type="button" class='googlemapicon' id="findLocation"><img src="/images/maps.png"></button>
                    </div>
                </div>

                <!-- // Pickup date and time -->
                <div class="col-lg-4 col-md-6">
                    <div class="time-date-text">
                        <p><i class="fa-solid fa-calendar-days"></i> Pick-up Date</p>
                        <p class="pe-4">Pick-up Time</p>
                    </div>
                    <div class="time-date-container">
                        <div class="left-input">
                            <input type="date" id="pickupDate" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}"
                                required>
                        </div>
                        <div class="right-input">
                            <input type="time" id="pickupTime" min="" value="{{ date('H:i') }}" required>
                        </div>
                    </div>
                </div>


                <!-- // Return date and time -->
                <div class="col-lg-4 col-md-6">
                    <div class="time-date-text">
                        <p><i class="fa-solid fa-calendar-days"></i> Return Date</p>
                        <p class="pe-4">Return Time</p>
                    </div>
                    <div class="time-date-container">
                        <div class="left-input">
                            <input type="date" id="returnDate" value="{{ date('Y-m-d', strtotime('+3 days')) }}"
                                min="{{ date('Y-m-d', strtotime('+1 days')) }}" required>
                        </div>
                        <div class="right-input">
                            <input type="time" id="returnTime" min="" required value="{{ date('H:i') }}">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <p><i class="fa-solid fa-location-dot"></i> Return Location</p>
                    <div class="promo-code-input">
                        <input type="text" class="location2 pickup-up-dropdown">
                    </div>
                </div>



                <!-- // Promo Code -->
                <div class="col-lg-4 col-md-6">
                    <p> Promo Code</p>
                    <div class="promo-code-input">
                        <input type="text" placeholder="Promo Code" class="border rounded">
                    </div>
                </div>

                <!-- //Search Button -->
                <div class="col-lg-4 col-md-6">
                    <div class="flex-end-vert">
                        <a style='cursor:pointer' onclick="searchFilterCars()" class="promo-btn"><i
                                class="fa-solid fa-magnifying-glass"></i> Search</a>
                    </div>
                </div>

                <span class="errorMsg">

                </span>

            </div>


        </form>



        <p style="color: #dd2d2d;margin: 20px 0px 0px 0px;" id='errorMsg'></p>

    </div>





    <div class="header-slider" id="headerSlider">
        <!-- -- Header Slide 1 -- -->
        <div class="header-slide">
            <div class="header-img">
                <img src="{{ asset('/images/banner-replace.jpg') }}" alt="">
                <div class="header-slider-text">
                    <div class="container">
                        <div class="header-slider-inner-text">
                            <h2>Drive Your Dreams with <br> Dirham Car Rental</h2>
                            <a href="{{route('fleets')}}" class="yellow-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -- Header Slide 2 -- -->
        <div class="header-slide">
            <div class="header-img">
                <img src="{{ asset('images/headerbanner2.jpg') }}" alt="">
                <div class="header-slider-text">
                    <div class="container">
                        <div class="header-slider-inner-text">
                            <h2>Dirham Car Rental Redefining <br> Your Road Adventure</h2>
                            <!-- <h1>Drive Your Dreams with <br> Dirha  m Car Rental</h1> -->
                            <a href="{{route('fleets')}}" class="yellow-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -- Header Slide 3 -- -->
        <div class="header-slide">
            <div class="header-img">
                <img src="{{ asset('images/headerbanner3.jpg') }}" alt="">
                <div class="header-slider-text">
                    <div class="container">
                        <div class="header-slider-inner-text">
                            <h2>Dirham Where Convenience <br> Meets Luxury on Wheels</h2>
                            <!-- <h1>Drive Your Dreams with <br> Dirham Car Rental</h1> -->
                            <a href="{{route('fleets')}}" class="yellow-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- //////////// HeaderBanner End  ////////////////--> 

    <!-- //////////// featurd cars start  ////////////////-->
    <div class="featured-car-container">
        <div class="container">
            <h1 class="heading-blue">Featured Cars</h1>
            <p class="p-heading">enjoy your every ride with super comfort</p>

            <div id="featuredCarContainer" class="featured-car-slider-container">



                @foreach ($cars as $list)
                     @php
                            $images = explode(',', $list->car_image);
                            $firstImage = $images[0];
                        @endphp
                    <div class="featured-car-slide">
                        
                            <div class="featured-car-img">
                                <img onclick="openfancybox({{ $list->id }})" src="{{ asset('assets/admin/cars/' . $firstImage) }}" alt="">
                                <p class="car-title">Featured</p>
                            </div>
                            <div class="featured-car-text">
                                <p class="feated-car-card-title">{{ $list->model }} {{ $list->year }}</p>
                                <div class="car-detial">
                                    <p><img src="{{ asset('/images/car-details/user.png') }}" alt=""> {{ $list->passager }}</p>
                                    <p><img src="{{ asset('/images/car-details/car-gear.png') }}" alt="">{{ $list->gear_shift }}</p>
                                    <p><img src="{{ asset('/images/car-details/car-door.png') }}" alt=""> {{ $list->door }}</p>
                                    <p><img src="{{ asset('/images/car-details/bag.png') }}" alt=""> {{ $list->baggage }}</p>

                                </div>
                                @if (Session::has('currency') && Session::get('currency') == 'usd')
                                    @php
                                        $priceCurrency = $list->price_usd;
                                    @endphp
                                @else
                                    @php
                                        $priceCurrency = $list->price_aed;
                                    @endphp
                                @endif
                                <p class="car-price">
                                    {{ Session::has('currency') ? strtoupper(Session::get('currency')) : 'AED' }}

                                    {{ $priceCurrency }} / Day</p>
                                
                                
                                <!-- <p class="car-price price-aed" style="display: block;">-->
                                <!--{{$list->price_aed}} AED / Day</p>-->
                                
                                <!--<p class="car-price price-usd" style="display: none;">-->
                                <!--{{$list->price_usd}} USD/ Day</p>-->

                                <div class="book-car-card">
                                        <a href="tel:+971509617499"><div class="call-icon-card">  <i class="fa-solid fa-phone"></i></div></a>
                                        <a href="{{ route('car-details') }}?carId={{ $list->id }}"  class="book-btn-card"> Book Now</a>
                                        <div class="whatsapp-icon-card"><a href="https://wa.me/971566955172" target="_blank"><img src="{{ asset('images/whastsapp-icon.png') }}" alt=""></a></div>

                                    </div>
                                
                                
                            </div>
                        
                    </div>
                @endforeach



            </div>





        </div>
    </div><!--Featured-car-container end-->
    <!-- //////////// featurd cars end  ////////////////-->

    <!-- //////////// Our Feets start  ////////////////-->
    <div class="ourfeet-container">
        <div class="container">

            <h1 class="heading-white">Our Fleet</h1>

            <p class="p-heading-white">Driving excellence, Every Mile</p>



            <div id="ourfeetContainer" class="outfeet-slider-container">
                @foreach ($carTypes as $list)
                    <div class="ourfeet-slide">
                        <a href="{{ route('fleets') }}?id={{ $list->id }}">
                            <div class="ourfeet-slide-img">
                                <img src="{{ asset('assets/admin/cars/') }}/{{ $list->car_image }}" alt="">
                            </div>
                            <p>{{ $list->name }}</p>
                        </a>
                    </div>
                @endforeach
            </div>


        </div><!--container end-->

    </div>
    <!-- //////////// Our Feets end  ////////////////-->


    <!-- //////////// Top Destinations Start  ////////////////-->
    <div class="container">
        <div class="top-destination-container" style="margin-bottom:100px !important; margin-top:70px !important;">
            <h1 class="heading-blue">Wheels and Wonders</h1>
            <p class="p-heading">UAE traveler's choice</p>

            <div id="topDestinatoinContainer" class="top-destination-slider">

                <div class="top-dest-slide">
                    <a href="/fleets">
                        <img src="{{ asset('images/top-dest-2.png') }}" alt="">
                        <div class="top-dest-slide-text">
                            <p>Ferris Wheel<i class="fa-solid fa-arrow-right clr-secondary"></i></p>
                        </div>
                    </a>
                </div>
                <div class="top-dest-slide">
                    <a href="/fleets">
                        <img src="{{ asset('images/top-dest-1.png') }}" alt="">
                        <div class="top-dest-slide-text">
                            <p>Ski Dubai<i class="fa-solid fa-arrow-right clr-secondary"></i></p>
                        </div>
                    </a>
                </div>
                <div class="top-dest-slide">
                    <a href="/fleets">
                        <img src="{{ asset('images/6ee51d3e068fa39d0bb2cb1ffd6f58b6.png') }}" alt="">
                        <div class="top-dest-slide-text">
                            <p>Burj Khalifa <i class="fa-solid fa-arrow-right clr-secondary"></i></p>
                        </div>
                    </a>
                </div>
                <div class="top-dest-slide">
                    <a href="/fleets">
                        <img src="{{ asset('images/2cc67f41ea4380a06086aa605af630c2.jpg') }}" alt="">
                        <div class="top-dest-slide-text">
                            <p>Burj Al Arab<i class="fa-solid fa-arrow-right clr-secondary"></i></p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- //////////// Top Destinations end  ////////////////-->

    <!-- //////////// news later start ////////////////-->
    <div class="news-later-container">
        <div class="container">
            <h2>News Letter</h2>
            <p>Stay Informed, Stay Connected, Dirham Car Rental Newsletter!</p>

            <div class="news-later-input">
                <input type="email" placeholder="Enter your email Address">
                <button>Submit</button>
            </div>
        </div>

        <img class="news-later-car-image" src="{{ asset('/images/news-later-img.png') }}" alt="">

    </div>
    <!-- //////////// news later end   ////////////////-->

    <!-- //////////// Our Blogs start   ////////////////-->
    <div class="blog-container">


        <h1 class="heading-blue">Our Blogs</h1>
        <p class="p-heading">Beyond the Horizon Dirham Car Rental's Travel Insights</p>

        <div class="container blog-card-main-container">

            <div id="homeBlogsContainer" class="row gy-5">


                @foreach ($blogs as $list)
                    <!-- Blog Card -->
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ route('show', $list->slug) }}">
                            <div class="flex-center">
                                <div class="blog-card">
                                    <div class="blog-card-img">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/admin/cars/blog/') . '/' . $list->car_image }}"
                                            alt="">
                                        <p class="blog-img-title">{{ $list->created_at }}</p>
                                    </div>
                                    <div class="blog-card-text">
                                        <p class="blog-title">{{ $list->title }}</p>
                                        <p class="blog-desc">{{ $list->description }}</p>
                                        <button class="blog-btn">View details <i
                                                class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- End Blog Card -->
                {{--
                <!-- Blog Card -->
                <div class="col-md-6 col-lg-4">
                    <a href="single-blog.php?id=2">
                        <div class="flex-center">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img class="img-fluid"
                                        src="https://dirhamcars.com/admin/assets/public/images/blog/3227f0d3f680630dd8731cace5651934.jpg"
                                        alt="">
                                    <p class="blog-img-title">2023-12-07 11:04:52</p>
                                </div>
                                <div class="blog-card-text">
                                    <p class="blog-title">Best Places to Visit in the UAE with a Rental Car</p>
                                    <p class="blog-desc">The United Arab Emirates is a land of captivating contrasts. It
                                        welcomes travelers with its blend of......</p>
                                    <button class="blog-btn">View details <i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End Blog Card -->

                <!-- Blog Card -->
                <div class="col-md-6 col-lg-4">
                    <a href="single-blog.php?id=1">
                        <div class="flex-center">
                            <div class="blog-card">
                                <div class="blog-card-img">
                                    <img class="img-fluid"
                                        src="https://dirhamcars.com/admin/assets/public/images/blog/db7c8f2597ef30e0af9d131b898c941c.png"
                                        alt="">
                                    <p class="blog-img-title">2023-12-07 10:51:19</p>
                                </div>
                                <div class="blog-card-text">
                                    <p class="blog-title">Tips for Renting Luxury Cars in UAE</p>
                                    <p class="blog-desc">Suppose you find yourself in the dazzling UAE region, surrounded
                                        by opulence and grandeur. In that c......</p>
                                    <button class="blog-btn">View details <i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> --}}
                <!-- End Blog Card -->
            </div><!--row end-->

        </div>
    </div>
    <!-- //////////// Our Blogs end   ////////////////-->


    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="seo-content">
                    <h1 style="font-size:2.5rem" class='heading-blue text-start'>Dirham Cars Rental – Most Reliable &
                        Leading Car Rental in the UAE</h1>
                    <p>Are you looking to rent a car in the United Arab Emirates and experience the epitome of luxury and
                        convenience? Look no further than Dirham Car Rental. We stand out as the best choice for car rental
                        in the UAE, offering the finest selection of vehicles to ensure your journey through this vibrant
                        region is nothing short of extraordinary.</p>
                    <h2 class='heading-blue  text-start' style="  font-size: 2.3em;">What Sets Us Apart?</h2>
                    <p>At Dirham Car Rental, we take pride in going above and beyond to make your experience exceptional.
                        Here's what makes us better than the rest:</p>
                    <ul class="seo-content">
                        <li><span>Diverse Fleet:</span>
                            <p>Choose from our extensive range of vehicles, including stylish luxury cars for a touch of
                                elegance, reliable options for business needs, and spacious vehicles perfect for memorable
                                family vacations.</p>
                        </li>
                        <li><span>Tailored Services:</span>
                            <p>We understand that every traveler has unique needs. That's why we tailor our services to
                                accommodate your preferences, ensuring that you're not just renting a car but embarking on a
                                personalized journey.</p>
                        </li>
                        <li><span>Transparent Pricing:</span>
                            <p>Enjoy peace of mind with our transparent pricing. No hidden fees or surprises – what you see
                                is what you get.</p>
                        </li>
                        <li><span>Reliability:</span>
                            <p>Count on us for reliable and well-maintained vehicles. Our commitment to excellence extends
                                to the reliability of our fleet, ensuring a smooth and worry-free driving experience.</p>
                        </li>
                        <li><span>Customer-Centric Approach:</span>
                            <p>Your satisfaction is our priority. Our customer-centric approach means that we are dedicated
                                to meeting and exceeding your expectations at every step of your car rental journey.</p>
                        </li>
                    </ul>
                    <p>Choose Dirham Car Rental for your next adventure in the UAE, and let us be your trusted partner on
                        the road. Your journey begins with us – book your dream vehicle today!</p>
                </div>

            </div>
        </div>
    </div>

    <div class='clearfix'></div>
    
    
    
    
    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNDINM9ypjZrKHQFa3WoU2_shx7tDHDRc&libraries=places"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var autocomplete;
        var className = 'location';

        var uaeBounds = new google.maps.LatLngBounds(
            new google.maps.LatLng(22.496948, 51.579514), // Southwest corner of the UAE
            new google.maps.LatLng(26.055464, 56.396331)  // Northeast corner of the UAE
        );

        autocomplete = new google.maps.places.Autocomplete($('.' + className)[0], {
            types: ['geocode'],
            bounds: uaeBounds,
            componentRestrictions: { country: 'AE' } // Restrict to United Arab Emirates
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        var autocomplete;
        var className = 'location2';

        var uaeBounds = new google.maps.LatLngBounds(
            new google.maps.LatLng(22.496948, 51.579514), // Southwest corner of the UAE
            new google.maps.LatLng(26.055464, 56.396331)  // Northeast corner of the UAE
        );

        autocomplete = new google.maps.places.Autocomplete($('.' + className)[0], {
            types: ['geocode'],
            bounds: uaeBounds,
            componentRestrictions: { country: 'AE' } // Restrict to United Arab Emirates
        });
    });
</script>

    
    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    
    <script>
    
    
      // Facncy box slider 
            $('.facncySlider').slick({
                 infinite: false,
                // arrow:true,
                nextArrow:'<span class="fancybox-next-arrow"><i class="fa-solid fa-arrow-right"></i></span>',
                prevArrow:'<span class="fancybox-prev-arrow"><i class="fa-solid fa-arrow-left"></i></span>',
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false ,
                dots:false,
                centerPadding: '0px',  
            });
            //Fancy box specific car imgs
            function openfancybox(car_id){
                

               //body disable Scrolable
                var body = document.body;
                if (body.style.overflow === 'hidden') {
                    body.style.overflow = 'auto';
                } else {
                    body.style.overflow = 'hidden';
                }


                // Loader Start
                document.getElementById("loader").style.display = "block"

                console.log(car_id)
                let fancybox = document.getElementById('fancybox')
                fancybox.style.display = 'flex'
                $.ajax({
                    url: "{{ route('car_imgs') }}",
                    type: 'get',
                    data: {
                        carId: car_id,
                    },
                    dataType: 'json',
                    success: function(data) {   
                        document.getElementById("loader").style.display = "none"

                        console.log(data)
                        if (data.data.length > 1) {
                            data.data.forEach(function (img_path) {
                                var newSlide = `<div class="fancy_slides"><img class="img-fluid" src="{{asset('assets/admin/cars/')}}/${img_path}" alt=""></div>`;
                                jQuery('#fancySlider').slick('slickAdd', newSlide);
                            })
                        } else {
                            var newSlide = `<div class="fancy_slides"><img class="img-fluid" src="{{asset('assets/admin/cars/')}}/${data.data[0]}" alt=""></div>`;
                            jQuery('#fancySlider').slick('slickAdd', newSlide);
                        }

                    },
                    error: function(xhr, status, error) {
                        $(".filterData").html('error');
                    }
                });
            }
            function closefancybox(){
                
                //body Scrolable               
                var body = document.body;
                if (body.style.overflow === 'hidden') {
                    body.style.overflow = 'auto';
                } else {
                    body.style.overflow = 'hidden';
                }
                
                document.getElementsByClassName('slick-track')[0].innerHTML = '';
                $('#fancybox').hide()
            }

    
    
    
    
        function searchFilterCars() {
            var location = $(".location").val();
            var location2 = $(".location2").val();

            if (location == "" || location2 == "") {
                $(".errorMsg").html("Pick-up Location & Return Pick-up Location are aslo required");
            } 
            else {
                var carId = $(".carId").val();
                var pickupDate = $("#pickupDate").val();
                var returnDate = $("#returnDate").val();
                var pickupTime = $("#pickupTime").val();
                var returnTime = $("#returnTime").val();

                window.location.href =
                    `{{ route('fleets') }}?pickup=${location}&returnPickUp=${location2}&pickupDate=${pickupDate}&returnDate=${returnDate}&pickupTime=${pickupTime}&returnTime=${returnTime}`;

            }

            return false;
        }
    </script>

    {{-- footer --}}
@endsection
