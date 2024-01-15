@extends('frontend.partials.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/frontcss/car-detail.css') }}">
@endsection
@section('content')
<style>
      .errorMsg {
            color: red;
            text-align: center;
        }
        .pac-container {
            z-index: 9999 !important; /* Adjust the value based on your requirements */
        }
        .googlemapicon{
            position:absolute;
            max-width:40px;
            width:100%;
            right:5%;
            top:50%;
            transform: translateY(-50%)
        }
</style>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 90% !important">
            <div class="modal-content ">
                <div class="container car-pick-form my-3 my-md-5 px-sm-5">
                    <form class="checkoutform" action="#" enctype="multipart/form-data"
                        onsubmit="return validateForm()">
                        <div class="row g-4">


                            <!-- // Pickup location -->

                            <div class="col-lg-4 col-md-6">
                                <p><i class="fa-solid fa-location-dot"></i> Pick-up Location</p>

                                <!-- <div class="dropdown "> -->


                                    <div style="position:relative" class="promo-code-input">
                                        <input type="text" class="location pickup-up-dropdown">
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
                                    <input type="text" value="" class="location2 pickup-up-dropdown">
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



    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">5
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos neque consequuntur sint earum facilis.
                    Inventore at quae dolore quidem nostrum, vero numquam
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="car-view-background">
        <div class="container py-5 px-0">
            <div class="car-view-container">
                <div class="row bg-white py-5 px-3 m-0 rounded">

                    <div class="col-md-7 p-2 p-md-3  ">


                        <div class="car-view-col-1">

                            <div id="carouselExampleControls" class="carousel bootslider slide" data-bs-ride="carousel">
                                <div class="carousel-inner bootsliderInner" id="carouselContainer">
                                   @foreach($car_images as $index => $img_path)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                            <div class="car-view-img">
                                                <img src="{{ asset('assets/admin/cars/') }}/{{$img_path}}" alt="">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                @if(count($car_images) > 1)                                    
                                    <button class="carousel-control-prev btn-danger" id="cardetailprevbtn" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next " type="button" id="cardetailnextbtn"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon next-btn" aria-hidden="false"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                @endif

                            </div>








                        </div>

                    </div>


                    <div class="col-md-5 ">
                        <div class="car-view-col-2" id="carInformation">
                            <div class="side-dots-container">
                                <div class="side-dots">
                                    <i class="fa-solid fa-ellipsis"></i>
                                    <div class="side-dot-list">
                                        <span>
                                            <a href="mailto:info@dirhamcars.com"> <i class="fa-regular fa-envelope"></i>
                                                Email</a>
                                        </span>
                                        <hr>
                                        <span>
                                            <a href="tel:+971509617499"> <i class="fa-solid fa-phone"></i> Call </a>
                                        </span>
                                        <hr>
                                        <span>
                                            <a href="whatsapp:contact=@s.whatsapp.com"> <i
                                                    class="fa-brands fa-whatsapp"></i> WhatsApp </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <h4>{{$car->model}}</h4>
                            <span class="or-similar">or Similar | {{$car_types !== null ? $car_types->name : ""}}</span>
                            <div class="car-listing-features">
                                <div class="car-feature-icon">
                                    <img src="images/car-feature-icons/user-icon.svg" alt="">
                                    <span>0</span>
                                </div>
                                <div class="car-feature-icon">
                                    <img src="images/car-feature-icons/car-door.svg" alt="">
                                    <span>{{$car->door}}</span>
                                </div>
                                <div class="car-feature-icon">
                                    <img src="images/car-feature-icons/car-gear.svg" alt="">
                                    <span>{{$car->gear_shift}}</span>
                                </div>
                                <div class="car-feature-icon">
                                    <img src="images/car-feature-icons/car-baggage.svg" alt="">
                                    <span>{{$car->baggage}}</span>
                                </div>
                                {{-- <div class="car-feature-icon">
                                    <img src="images/car-feature-icons/car-engline.svg" alt="">
                                    <span>?</span>
                                </div>
                                <div class="car-feature-icon border-none">
                                    <img src="images/car-feature-icons/car-ac.png   " alt="">
                                    <span>?</span>
                                </div> --}}


                            </div>

                            <hr>
                            <div>
                                <p class="clr-primary fw-bold my-2 ">Vehicle Features</p>
                                <p class=" text-secondary" id="vehicle-features">

                                    @foreach ($car_features as $list)
                                        {{ $list->name }}
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </p>
                            </div>
                            <div>
                                <p class="clr-primary fw-bold my-2 ">Car Color</p>
                                <p class=" text-secondary" id="car_color">{{ $car->car_color }}</p>
                            </div>

                            <hr>

                            <label class="form-control car-view-radio">
                                <input type="radio" name="radio" value="1" />
                                <div class="ps-3">
                                    <h5>Pay Now
                                        <span>{{ $currency == 'aed' ? 'AED' : 'USD' }}</span><span>{{ $currency == 'aed' ? $car->price_aed * $days : $car->price_usd * $days }}</span><span>|
                                            {{ $days }}days</span>
                                    </h5>
                                    <p>Save Money Instantly</p>
                                </div>

                            </label>

                            <label class="form-control car-view-radio">
                                <input type="radio" name="radio" value="2" />
                                <div class="ps-3">
                                    <h5>Pay Partial
                                        <span>{{ $currency == 'aed' ? 'AED' : 'USD' }}</span><span>{{ $currency == 'aed' ? $car->price_aed * $days : $car->price_usd * $days }}</span><span>|
                                            {{ $days }} days</span>
                                    </h5>
                                    <p>When you pay some & pick your keys</p>
                                </div>

                            </label>
                            <label class="form-control car-view-radio">
                                <input type="radio" name="radio" value="3" />
                                <div class="ps-3">
                                    @if ($currency == 'aed')
                                        @php
                                            $total = $car->price_aed * $days;
                                        @endphp
                                    @else
                                        @php
                                            $total = $car->price_usd * $days;

                                        @endphp
                                    @endif
                                    <h5>Pay Later
@php
$originalString = $car->tax;
$numericPart = filter_var($originalString, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);


@endphp
@if($numericPart==1 || $numericPart=="")

@php
$totalResult=$total;
@endphp

@else
@php
$totalResult=$total / $numericPart + $total;
@endphp
@endif


                                        <span>{{ $currency == 'aed' ? 'AED' : 'USD' }}</span><span>{{ $totalResult }}</span><span>|
                                            {{ $days }} days</span>
                                    </h5>
                                    <p>When you pick your keys</p>
                                </div>

                            </label>
                            </form>

                            <div class="car-view-book-btn">
                                <a class="car-detail-a">Book Now</a>
                            </div>

                        </div>
                    </div>



                    <div class="col-12 ">
                        <iframe class="border mt-4 rounded"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.610561983419!2d55.34819827539544!3d25.28368277765535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5c9592daf781%3A0x5f2288a3d4259400!2s15C%20St%20-%20Deira%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1697817069719!5m2!1sen!2s"
                            width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>





            </div>
        </div>
    </div>
    <div class='clearfix'></div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".car-detail-a").click(function() {
                if ($('input[name="radio"]').is(':checked')) {
                    var paymentId = $('input[name="radio"]:checked').val();
                    var location = `{{ $pickUp }}`;
                    var location2 = `{{ $ReturenPickUp }}`;
                    var carId = `{{ $carId }}`;
                    var pickupDate = `{{ $pickupDate }}`;
                    var returnDate = `{{ $returnDate }}`;
                    var pickupTime = `{{ $pickupTime }}`;
                    var returnTime = `{{ $returnTime }}`;
                    if (paymentId == "" || location == "" || location2 == "" || carId == "" || pickupDate ==
                        "" || returnDate == "" || pickupTime == "" || returnTime == "") {
                        $('#exampleModal').modal('show');
                    } else {
                        window.location.href =
                            `{{ route('checkout') }}?paymentId=${paymentId}&carId=${carId}&pickUp=${location}&ReturenPickUp=${location2}&pickupDate=${pickupDate}&returnDate=${returnDate}&pickupTime=${pickupTime}&returnTime=${returnTime}`;

                    }




                } else {
                    alert("Payment button is not selected");
                }
            });
            // $.ajax({
            //     url: "{{ route('fleets.get-filter-date') }}",
            //     type: 'get',
            //     data: {
            //         pickupDate: pickupDate,
            //         returnDate: returnDate,
            //     },
            //     dataType: 'json',
            //     success: function(dataRequest) {
            //         var counter = dataRequest.counter;
            //         var days = dataRequest.days;

            //         // console.log(days);
            //         for (var i = 1; i <= counter; i++) {
            //             // Do something with each number
            //             var get_days = $("#days_" + i).html(days);
            //             var get_price = $(".get_price_" + i).html();
            //             var result = get_price * days;
            //             $(".get_price_" + i).html(result);

            //         }
            //     },
            //     error: function(xhr, status, error) {
            //         $(".filterData").html('error');
            //     }
            // });
        });


        function searchFilterCars() {
            var location = $(".location").val();
            var location2 = $(".location2").val();

            if (location == "" || location2 == "") {
                $(".errorMsg").html("Pick-up Location & Return Pick-up Location are aslo required");
            } else {
                var paymentId = $('input[name="radio"]:checked').val();
                var location = $(".location").val();
                var location2 = $(".location2").val();
                var carId = `{{ $carId }}`;
                var pickupDate = $("#pickupDate").val();

                var returnDate = $("#returnDate").val();
                var pickupTime = $("#pickupTime").val();
                var returnTime = $("#returnTime").val();

                window.location.href =
                    `{{ route('checkout') }}?paymentId=${paymentId}&carId=${carId}&pickUp=${location}&ReturenPickUp=${location2}&pickupDate=${pickupDate}&returnDate=${returnDate}&pickupTime=${pickupTime}&returnTime=${returnTime}`;


            }

            return false;
        }
    </script>

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

        // Set the z-index of the autocomplete dropdown
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var pacContainer = $('.pac-container');
            if (pacContainer.length > 0) {
                pacContainer.css('z-index', 9999); /* Adjust the value based on your requirements */
            }
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

        // Set the z-index of the autocomplete dropdown
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var pacContainer = $('.pac-container');
            if (pacContainer.length > 0) {
                pacContainer.css('z-index', 9999); /* Adjust the value based on your requirements */
            }
        });
    });
</script>

@endsection
