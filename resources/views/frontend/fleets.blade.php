@extends('frontend.partials.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/assets/css/frontcss/car-listing-2.css') }}">
    <style>
        .all_close {
            display: none;
        }

        .errorMsg {
            color: red;
            text-align: center;
        }
    </style>
    
@endsection
@section('content')

 {{-- // Fancy Box --}}
<div id="fancybox" class="fancybox">
    {{-- <div class="fancyslider_container"> --}}
        <i class="fa-solid fa-square-xmark returnArrow" onclick="closefancybox()"></i>
        <div id="fancySlider" class="facncySlider">
        </div>
    {{-- </div> --}}
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <input type="hidden" class="carId">
    <div class="modal-dialog" style="max-width: 90% !important">
        <div class="modal-content ">
            <div class="container car-pick-form my-3  px-sm-5">
                <form class="checkoutform" action="#" enctype="multipart/form-data"
                    onsubmit="return validateForm()">
                    <div class="row g-4">


                        <!-- // Pickup location -->

                        <div class="col-lg-4 col-md-6">
                            <p><i class="fa-solid fa-location-dot"></i> Pick-up Location</p>

                            <!-- <div class="dropdown "> -->


                            
                            <div style="position:relative"  class="promo-code-input">
                                <input type="text" value="{{ $pickup == '' ? '' : $pickup }}" class="location pickup-up-dropdown">
                                <img class="googlemapicon" src="https://cdn-icons-png.flaticon.com/128/854/854878.png" alt="">
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
                                    <input type="date" id="pickupDate" min="{{ date('Y-m-d') }}" required
                                        value="{{ $pickupDate == '' ? date('Y-m-d') : $pickupDate }}">
                                </div>
                                <div class="right-input">
                                    <input type="time" id="pickupTime" min="" value="{{ date('H:i') }}"
                                        required>
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
                                    <input type="date" id="returnDate"
                                        min="{{ date('Y-m-d', strtotime('+1 days')) }}"
                                        value="{{ $returnDate == '' ? date('Y-m-d', strtotime('+1 days')) : $returnDate }}"
                                        required>
                                </div>
                                <div class="right-input">
                                    <input type="time" id="returnTime" min="" value="{{ date('H:i') }}"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <p><i class="fa-solid fa-location-dot"></i> Return Pick-up Location</p>
                            <div class="promo-code-input">
                                <input type="text" value="{{ $returnPickUp == '' ? '' : $returnPickUp }}"
                                    class="location2 pickup-up-dropdown">
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
            <!-- //////////// Car Appointment End  ////////////////-->
        </div>
    </div>
</div>


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

    <div class="checkout-header d-none d-lg-flex">
        <div class="checkout-inner-header checkout-header-active">
            <i class="fa-solid fa-circle-check "></i>
            <p>Location & Vehicle</p>
            <i class="fa-solid fa-arrow-right"></i>
        </div>
        <div class="checkout-inner-header ">
            <i class="fa-solid fa-circle-check"></i>
            <p>Add-Ons & Documents</p>
            <i class="fa-solid fa-arrow-right"></i>
        </div>
        <div class="checkout-inner-header">
            <i class="fa-solid fa-circle-check"></i>
            <p>Payment & Confirmation</p>
            <i class="fa-solid fa-arrow-right"></i>
        </div>
    </div>

    <div class="car-listing-container  py-5">
        <div class="container">

            <div class="car-listing-header">
                <h1 class="car-listing-heading">Choose your wheels</h1>


                <!-- <div class="car-listing-sort">

                                                                                                                                                                                                                                                                                                                                    <p><i class="fa-solid fa-arrow-up-arrow-down"> </i>Sort by</p>
                                                                                                                                                                                                                                                                                                                                    <select class="form-select" aria-label="Default select example" >
                                                                                                                                                                                                                                                                                                                                        <option value="1">high to low</option>
                                                                                                                                                                                                                                                                                                                                        <option value="2">Low to high</option>
                                                                                                                                                                                                                                                                                                                                        <option value="3">Best Seller</option>
                                                                                                                                                                                                                                                                                                                                    </select>
                                                                                                                                                                                                                                                                                                                                </div> -->
            </div>

            <hr>


            <div class="container">


                <div id="carCategories" class="car-listing-filter">
                    <div class="filter-card-all filter-cards {{ isset($_GET['id']) ? ($_GET['id'] == 0 ? 'active-filter-card' : '') : 'active-filter-card' }}"
                        onclick="openCategory(this,0,'{{$currency}}')">
                        All
                    </div>
                    @foreach ($carTypes as $list)
                        <div class="filter-card filter-cards {{ isset($_GET['id']) ? ($_GET['id'] == $list->id ? 'active-filter-card' : '') : '' }}"
                            onclick="openCategory(this, {{ $list->id }},'{{$currency}}')">
                            <p>{{ $list->name }}</p>
                            <div class="filter-card-img">
                                <img src="{{ asset('assets/admin/cars/') }}/{{ $list->car_icon }}" alt="">
                            </div>
                            <p>Starting from</p>
                            <p class="price-aed" style="display: block;">
                                {{ $list->price_aed }}</p>
                                
                                <p class="price-usd" style="display: none;">
                                {{ $list->price_usd }}</p>
                        </div>
                    @endforeach

                </div>
            </div>
            <hr>

            <!-- Car Listing Inner Container -->
            <div class="car-listing-inner-container my-5 all_filter">

                <div id="CarListingContainer" class="row gy-5">

                    <!-- featured card -->
  @foreach ($cars as $list)
                        @php
                            $images = explode(',', $list['car_image']);
                            $firstImage = $images[0];
                        @endphp
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="featured-car-slide">
                                @if (isset($_GET['id']) && $_GET['id'] == $list->id)
                                      
                                    <div class="featured-car-img">
                                        <img onclick="openfancybox({{ $list->id }})" src="{{ asset('assets/admin/cars/') }}/{{ $firstImage }}"
                                            alt="">

                                        @if (!$list->is_feature == 0)
                                            <p class="car-title">Featured</p>
                                        @endif


                                    </div>
                                    <div class="featured-car-text">
                                        <p class="feated-car-card-title">{{ $list->model }}</p>
                                        <div class="car-detial">
                                            <p><img src="images/car-details/user.png"
                                                    alt="">{{ $list->passager }}
                                            </p>
                                            <p><img src="images/car-details/car-gear.png"
                                                    alt="">{{ $list->gear_shift }}</p>
                                            <p><img src="images/car-details/car-door.png"
                                                    alt="">{{ $list->door }}
                                            </p>
                                            <p><img src="images/car-details/bag.png" alt="">{{ $list->baggage }}
                                            </p>
                                        </div>

                                        <!--<p class="car-price"> {{ $currency == 'aed' ? 'AED' : 'USD' }}-->
                                        <!--    <span class="get_price_{{ $list->id }}">-->
                                        <!--        {{ $currency == 'aed' ? $list->price_aed * $days : $list->price_usd * $days }}-->
                                        <!--    </span> /-->
                                        <!--    <span id="days_{{ $list->id }}">{{ $days }}</span> Day-->
                                        <!--</p>-->

                                        <div class="book-car-card">
                                            <div class="call-icon-card"><i class="fa-solid fa-phone"></i></div>
                                            <a href="javascript:void(0);" onclick="getCar({{ $list->id }})"
                                                class="book-btn-card"> Book Now</a>

                                            <div class="whatsapp-icon-card"><img
                                                    src="{{ asset('images/whastsapp-icon.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    
                                
                                    
                                    
                                    <div onclick="openfancybox({{ $list->id }})" class="featured-car-img">
                                        <img src="{{ asset('assets/admin/cars/') }}/{{ $firstImage }}"
                                            alt="">

                                        @if (!$list->is_feature == 0)
                                            <p class="car-title">Featured</p>
                                        @endif

                                    </div>
                                    <div class="featured-car-text">
                                        <p class="feated-car-card-title">{{ $list->model }}</p>
                                        <div class="car-detial">
                                            <p><img src="images/car-details/user.png"
                                                    alt="">{{ $list->passager }}
                                            </p>
                                            <p><img src="images/car-details/car-gear.png"
                                                    alt="">{{ $list->gear_shift }}</p>
                                            <p><img src="images/car-details/car-door.png"
                                                    alt="">{{ $list->door }}
                                            </p>
                                            <p><img src="images/car-details/bag.png" alt="">{{ $list->baggage }}
                                            </p>
                                        </div>

                                        <p class="car-price price-aed">AED
                                            <span class="get_price_{{ $list->id }}">
                                                {{ $list->price_aed * $days }}
                                            </span> /
                                            <span id="days_{{ $list->id }}">{{ $days }}</span> Day
                                        </p>
                                        
                                           <p class="car-price price-usd" style="display: none;"> USD
                                            <span class="get_price_{{ $list->id }}">
                                                {{ $list->price_usd * $days }}
                                            </span> /
                                            <span id="days_{{ $list->id }}">{{ $days }}</span> Day
                                        </p>

                                        <div class="book-car-card">
                                            <div class="call-icon-card"><i class="fa-solid fa-phone"></i></div>
                                            <a href="javascript:void(0);" onclick="getCar({{ $list->id }})"
                                                class="book-btn-card"> Book Now</a>

                                            <div class="whatsapp-icon-card"><img
                                                    src="{{ asset('images/whastsapp-icon.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach




                </div>





            </div>
            <div class="car-listing-inner-container my-5 filterData row">
            </div>





        </div>
        </div>
        <div class='clearfix'></div>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script>

            $(document).ready(function(){
                document.getElementById("loader").style.display = "none"
            })

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



            function getCar(id) {
                $('#exampleModal').modal('show');
                $(".carId").val(id);

            }

            function openCategory(clickedCard, id,currency) {
                document.getElementById("loader").style.display = "block"


                $('.filter-card-all').removeClass('active-filter-card');
                var filterCards = document.querySelectorAll('.filter-card');
                filterCards.forEach(function(card) {
                    card.classList.remove('active-filter-card');
                });
                if (id == 0) {
                    $('.filter-card-all').addClass('active-filter-card');

                }
                if (clickedCard) {
                    clickedCard.classList.add('active-filter-card');

                }
                var pickupDate = $("#pickupDate").val();
                var returnDate = $("#returnDate").val();
                @if (isset($_GET['id']))
                    @php
                        $carType = $_GET['id'];
                    @endphp
                @else
                    @php
                        $carType =0;
                    @endphp
                @endif
                $.ajax({
                    url: "{{ route('fleets.filter-data') }}",
                    type: 'get',
                    data: {
                        id: id,
                        pickupDate: pickupDate,
                        returnDate: returnDate,
                        carType: `{{$carType}}`,
                        currency:currency,

                    },
                    dataType: 'json',
                    success: function(dataRequest) {
                        document.getElementById("loader").style.display = "none"

                        if (dataRequest.data == 'all') {

                            $('.all_filter').removeClass('all_close');
                            $('.filterData').addClass('all_close');
                        } else {
                            $('.filterData').removeClass('all_close');
                            $('.all_filter').addClass('all_close');
                            $('.filterData').html(dataRequest.data);
                        }


                    },
                    error: function(xhr, status, error) {
                        $(".filterData").html('error');
                    }
                });
            }

            function searchFilterCars() {
                var location = $(".location").val();
                var location2 = $(".location2").val();

                if (location == "" || location2 == "") {
                    $(".errorMsg").html("Pick-up Location & Return Pick-up Location are aslo required");
                } else {
                    var carId = $(".carId").val();
                    var pickupDate = $("#pickupDate").val();
                    var returnDate = $("#returnDate").val();
                    var pickupTime = $("#pickupTime").val();
                    var returnTime = $("#returnTime").val();

                    window.location.href =
                        `{{ route('car-details') }}?carId=${carId}&pickUp=${location}&ReturenPickUp=${location2}&pickupDate=${pickupDate}&returnDate=${returnDate}&pickupTime=${pickupTime}&returnTime=${returnTime}`;


                }

                return false;
            }
        </script>
    @endsection
