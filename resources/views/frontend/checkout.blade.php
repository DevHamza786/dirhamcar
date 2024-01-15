@extends('frontend.partials.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/frontcss/checkout.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css">
@endsection
<style>
    body .modal-backdrop.fade {
    height: unset !important;
    width: unset !important;
}
</style>
@section('content')
    <!--<div id="loader" class="loader-container">-->

    <!--<div class="loading-window">-->
    <!--    <div class="car">--> 
    <!--    <div class="strike"></div>-->
    <!--    <div class="strike strike2"></div>-->
    <!--    <div class="strike strike3"></div>-->
    <!--    <div class="strike strike4"></div>-->
    <!--    <div class="strike strike5"></div>-->
    <!--    <div class="car-detail spoiler"></div>-->
    <!--    <div class="car-detail back"></div>-->
    <!--    <div class="car-detail center"></div>-->
    <!--    <div class="car-detail center1"></div>-->
    <!--    <div class="car-detail front"></div>-->
    <!--    <div class="car-detail wheel"></div>-->
    <!--    <div class="car-detail wheel wheel2"></div>-->
    <!--</div>-->

    <!--<div class="text">-->
    <!--    <span>Loading</span><span class = "dots">...</span>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!-- ------- Loader end ---------- -->



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

    <div class="checkout-header d-none d-lg-flex">
        <div class="checkout-inner-header checkout-header-active">
            <i class="fa-solid fa-circle-check "></i>
            <p>Location & Vehicle</p>
            <i class="fa-solid fa-arrow-right"></i>
        </div>
        <div class="checkout-inner-header checkout-header-active">
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

    <div class="checkout-container-background-color">
        <div class="checkout-container px-0 container py-5">

            <!-- Section 1 Locatins  -->
            <div class="location-section">
                <div class="location-col p-4">

                    <div class="row">
                        <div id="pickupLocationContainer" class="col-md-6">

                            <small>Pickup Location</small>
                            <h4>{{ $pickUp }} </h4>
                            <br>
                            <small>Pickup Date And Pickup Time</small><br>
                            <p class="p-2">{{ $pickupDate }} / {{ $pickupTime }}</p>
                        </div>
                        <div id="returnLocationContainer" class="col-md-6">
                            <small>Return Location</small>
                            <h4>{{ $_GET['ReturenPickUp'] }}</h4>
                            <br>
                            <small>Return Date And Return Time</small><br>
                            <p class="p-2">{{ $returnDate }} / {{ $returnTime }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 1 Locatins end -->

            <!-- Section 2 Protection start -->
            {{-- <div class="protection-section p-4">
                <div class="row">
                    <div class="col-12">
                        <p class="checkout-heading"><i class="fa-solid fa-user-shield"></i> Add Protection</p>
                    </div>
                    <div class="col-md-4 ">
                        <div class="personal-accident-container mt-3">
                            <p>Personal Accident Insurance</p>
                            <div class="personal-accident-inner-div">
                                <div>
                                    <p class="price-aed">AED {{ $days }} /Day</p>
                                    <p class="price-usd">USD {{ $days }} /Day</p>
                                    <a href="#">View Details</a>
                                </div>
                                <div class="form-check form-switch">
                                    <input value='{{ 20 * $days }}' class="form-check-input" type="checkbox"
                                        role="switch" id="paiSwicth">
                                    <input value='{{ 10 * $days }}' class="form-check-input price-usd" type="checkbox"
                                        role="switch" id="paiSwicthUsd">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="personal-accident-container mt-3">
                            <p>Super Collision Damage Waiver</p>
                            <div class="personal-accident-inner-div">
                                <div>
                                    <p class="price-aed"> AED {{ $days }} /Day</p>
                                    <p class="price-usd">USD {{ $days }} /Day</p>
                                    <a href="#">View Details</a>
                                </div>
                                <div class="form-check form-switch">
                                    <input value='{{ 40 * $days }}' class="form-check-input" type="checkbox"
                                        role="switch" id="scdw">
                                    <input value='{{ 20 * $days }}' class="form-check-input price-usd"
                                        type="checkbox" role="switch" id="scdwUsd">
                                    <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id='protection-addon' class="protection-price">
                            <p class="price-aed">AED <span class="ammount">00.00</span></p>
                            <p class="price-usd">USD <span>00.00</span></p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Section 2 Protection end -->



            <!-- Section 3 Add on start -->

            {{-- <div class="addon-container p-4">
                <div class="row">
                    <div class="col-12">
                        <p class="checkout-heading"><i class="fa-solid fa-user-shield"></i> Rental Add-ons</p>
                    </div>

                    <div class="col-md-10">
                        <div class="row gy-4 m-0">
                            <div class="col-md-6">
                                <div class="addon-div">
                                    <div class="addon-inner-div">
                                        <div class="img">
                                            <img class="img-fluid" src="images/addon-image-1.png" alt="">
                                        </div>
                                        <div>
                                            <h6>Global Positioning System</h6>
                                            <p class="price-aed">AED {{ $days }} /Day</p>
                                            <p class="price-usd">USD {{ $days }} /Day</p>
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input value='{{ 35 * $days }}' class="form-check-input" type="checkbox"
                                            role="switch" id="gpsSwitch">
                                        <input value='{{ 12 * $days }}' class="form-check-input price-usd"
                                            type="checkbox" role="switch" id="gpsSwitchUsd">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="addon-div">
                                    <div class="addon-inner-div">
                                        <div class="img">
                                            <img class="img-fluid" src="images/addon-image-2.png" alt="">
                                        </div>
                                        <div>
                                            <h6>Additional Driver</h6>
                                            <p class="price-aed">AED {{ $days }} /Day</p>
                                            <p class="price-usd">USD {{ $days }} /Day</p>
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input Value="{{ 25.0 * $days }}" class="form-check-input" type="checkbox"
                                            role="switch" id="addDriveSwitch">
                                        <input Value="{{ 8 * $days }}" class="form-check-input price-usd"
                                            type="checkbox" role="switch" id="addDriveSwitchUsd">
                                        <!-- <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="addon-div">
                                    <div class="addon-inner-div">
                                        <div class="img">
                                            <img class="img-fluid" src="images/addon-image-3.png" alt="">
                                        </div>
                                        <div>
                                            <h6>Child Seat</h6>
                                            <p class="price-aed">AED  {{ $days }} /Day</p>
                                            <p class="price-usd">USD {{  $days }} /Day</p>
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                    <input type="hidden" id="childSeat" value="{{ 35 * $days }}">
                                    <select id="childSeatInput" class="form-select" aria-label="Default select example">
                                        <option value="0" selected>0</option>
                                        <option value="{{ 35 * $days }}">1</option>
                                        <option value="{{ 35 * $days * 2 }}">2</option>
                                        <option value="{{ 35 * $days * 3 }}">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div id='rentalAddonCon' class="protection-price">
                            <p class="price-aed">AED <span class="addon_on_set">00.00</span></p>
                            <p class="price-usd">USD <span>00.00</span></p>
                        </div>
                    </div>


                </div>
            </div> --}}


            

            <div class="addon-container p-4">
                <div class="row">
                    <div class="col-12">
                        <p class="checkout-heading"><i class="fa-solid fa-user-shield"></i> Rental Add-ons & Add
                            Protection
                        </p>
                    </div>

                    <div class="col-md-10">
                        <div class="row gy-4 m-0">


                            @foreach ($addons as $list)
                                @if ($currency == 'aed')
                                    @php
                                        $priceCurrency = $list->price_aed;

                                    @endphp
                                @else
                                    @php
                                        $priceCurrency = $list->price_usd;

                                    @endphp
                                @endif
                                <div class="col-md-6">
                                    <div class="addon-div">
                                                    <div class="addon-inner-div">

                                                        <div class="img">
                                                            <img class="img-fluid" src="images/addon-image-1.png" alt="">
                                                        </div>

                                                        <div>
                                                            <h6>{{ $list->name }}</h6>
                                                            <p class="price-aed"> {{ strtoupper($currency) }}
                                                            {{$priceCurrency}} *  {{  $days }} /Day</p>
                                                            <a href="#">View Details</a>
                                                        </div>

                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input
                                                            onclick="getValue({{ $list->id }},{{ $priceCurrency }},'{{ $list->name }}',{{ $days }},'{{ strtoupper($currency) }}')"
                                                            value='{{ $list->price_aed * $days }}' class="form-check-input"
                                                            type="checkbox" role="switch" id="gpsSwitch_{{ $list->id }}"
                                                            data-addonId-type='{{ $list->id }}'>
                                                    </div>
                        
                                    </div>
                                </div>
                            @endforeach

{{--                             
                            <div class="col-md-6">
                                <div class="addon-div ">


                                    <div class="col-3 row">
                                        <div class="col-3 img">
                                            <img class="img-fluid" src="images/addon-image-3.png" alt="">
                                        </div>
                                        <div class="col-6">
                                            <h6>Child Seat</h6>
                                            <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }}
                                              35 * {{ $days }} /Day</p>
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <input type="hidden" id="childSeat" value="{{ 35 }}">
                                        <select id="childSeatInputNew" class="form-select"
                                            aria-label="Default select example">
                                            <option value="0" selected>0</option>
                                            <option value="{{ 35 * $days }}">1</option>
                                            <option value="{{ 35 * $days * 2 }}">2</option>
                                            <option value="{{ 35 * $days * 3 }}">3</option>
                                        </select>
                                    </div>


                                    <div class="col-md-3">
                                        <div id='rentalAddonCon' class="protection-price">
                                            <p class="price-aed">AED <span class="addon_on_set">00.00</span></p>
                                        </div>
                                    </div>
                                </div>

                            </div> --}}


                         




                        </div>
                        
                    </div>

                    <div class="col-md-2">
                        <div id='rentalAddonCon' class="protection-price">
                            <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                    class="addon_on">00.00</span></p>
                            {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                        </div>
                    </div>

                </div>
            </div>
{{-- -------------------------------------------------------------  --}}
            <div class="addon-container p-4">
                <div class="row">
                    <div class="col-12">
                        <p class="checkout-heading"><i class="fa-solid fa-user-shield"></i> Rental Add-ons & Add
                            Protection
                        </p>
                    </div>

                    <div class="col-md-10">
                        <div class="row gy-4 m-0">
                            <div class="col-md-6">
                                <div class="addon-div">
                                    <div class="addon-inner-div"> 
                                        <div class="img">
                                            <img class="img-fluid" src="images/addon-image-3.png" alt="">
                                        </div>
                                        <div>
                                            <h6>Child Seat</h6>
                                             <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }}
                                          35 * {{ $days }} /Day</p>
                                            <a href="#">View Details</a>
                                        </div>
                                    </div>  
                                    <input type="hidden" id="childSeat" value="{{ 35 }}">
                                    <select id="childSeatInputNew" class="form-select"
                                        aria-label="Default select example">
                                        <option value="0" selected>0</option>
                                        <option value="{{ 35 * $days }}">1</option>
                                        <option value="{{ 35 * $days * 2 }}">2</option>
                                        <option value="{{ 35 * $days * 3 }}">3</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        
                    </div>

                    <div class="col-md-2">
                        <div id='rentalAddonCon' class="protection-price">
                            <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }}<span class="addon_on_set">00.00</span></p>
                        </div>
                    </div>


                </div>
            </div>
                    <!-- Section 3 Add on end -->


                    <!-- Section 4 car start -->
                    <div class="car-conatiner p-4">
                        <div class="row">


                            <div class="col-lg-6 border-right">

                                <div class="row m-0">

                                    <div id="headingDiv" class="col-12 ">
                                        <h5 class="font-bold mb-1"></h5>
                                        <p class="opacity-50  text-black">or similar | Electric</p>
                                    </div>


                                        @php
                            $images = explode(',', $car->car_image);
                            $firstImage = $images[0];
                        @endphp


                                    <div class="col-md-8 ">
                                        <div class="car-img" id='CarImgCon'>
                                            <img class="img-fluid " src="{{asset('assets/admin/cars/')}}/{{$firstImage}}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-4 ">
                                        <ul class="car-spec-list" id="carSpecListCon">
                                            <li>Features</li>
                                            <li><i class="fa-solid fa-user"></i> {{$car->passager}} </li>
                                            <li><i class="fa-solid fa-car-side"></i>{{$car->door}}</li>
                                            <li><i class="fa-duotone fa-gears"></i> {{$car->baggage}}</li>
                                            <li><i class="fa-solid fa-suitcase"></i> 2 Luggage Space</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                                <p class="clr-primary fw-bold my-2 mx-3">Vehicle Features</p>
                                <p class="mx-3 text-secondary" id="vehicleFeatureCon">
                                    <!--Cruise control, Power 231hp / 330-->
                                    <!--nm, Single-->
                                    <!--Motor 170kW, Rear View Camera, Keyless entry-->
                                    @if(count($car_features) !==0){
                            @foreach($car_features as $list)
                            {{$list->name}}
                            @if (!$loop->last)
                ,
            @endif
                            @endforeach
                                    }@else{
                                 
                                 
                                            echo '';
                                    }
                                    @endif
                             
                                    
                                    </p>

                               <ul class="car-key-features">
    @foreach($policies as $policy)
        @if (!$policy->is_featured)
        
            @php
                 $policy_title = explode(' ', str_replace(' ', '', $policy->title))
            @endphp
        
            <li>
                <i class="fa-solid fa-check"></i> {{ $policy->title }}
                <i class="fa-light fa-circle-info circle-information" 
                   data-bs-toggle="modal" 
                   data-bs-target="#{{ strtolower($policy_title[0]) }}"
                   data-description="{{ $policy->description }}"></i>
            </li>

            <!-- Modal -->
            <div class="modal fade" id="{{ strtolower($policy_title[0]) }}" tabindex="-1" aria-labelledby="{{ strtolower($policy_title[0]) }}Label" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="{{ strtolower($policy_title[0]) }}Label">{{ $policy->title }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ $policy->description }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</ul>

                            </div>


                            <div class="col-lg-6">
                                <div class="checkout-item-body pt-3 px-2 px-md-3">
                                    <div class="item-data-div">
                                        <h5>Total Days </h5>
                                        <p id="totalDays" class="p2">{{ $days }}</p>
                                    </div>
                                    <hr>
                                    <div class="item-data-div my-3">
                                        <h6>Booking Detials </h6>
                                    </div>
                                    @if ($currency == 'aed')
                                        @php
                                            $paymentCurrency = $car->price_aed;
                                        @endphp
                                    @else
                                        @php
                                            $paymentCurrency = $car->price_usd;
                                        @endphp
                                    @endif
                                    @php
                                        $paymentAmount = $paymentCurrency;
                                        $subTotal = $paymentAmount * $days;
                                        $taxAmount = $subTotal * 0.05;
                                        $grandAmmount = $subTotal + $taxAmount;
                                    @endphp

                                    @if ($paymentId == 1)
                                        <div class="item-data-div mb-3" id='rentalCarges'>
                                            <div class="pe-2">
                                                <p class="p2">Rental Charge</p>
                                                <p class="p1">( {{ $days }} day(s) x {{ $paymentAmount }} )|
                                                    Applied
                                                    10%
                                                    online payment discount</p>
                                            </div>
                                            <div class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                                        class="carAmount">{{ $subTotal }}</span></p>
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                        <div id="additionalChargesContainer" class="additional-charges-container">
                                        </div>
                                        <hr>
                                        <div class="item-data-div ">
                                            <h6>Sub Total</h6>
                                            <div id="subTotalDiv" class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                                        class="subTotalAmount">{{ $subTotal }}</span></p>
                                                <input type="hidden" id="remainingSubTotalAmount"
                                                    value="{{ $subTotal }}">
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                        <div class="item-data-div">
                                            <div class="pe-2">
                                                <h6>Tax Total</h6>
                                            </div>

                                            <div id="taxToalDiv" class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                                        class="taxAmount">{{ $taxAmount }}</span></p>
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="item-data-div grand-total">
                                            <div class="pe-2">
                                                <h5 class="clr-primary">Grand Total</h5>
                                            </div>
                                            <div id="grandTotalDiv" class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                                        id="grandAmmount">{{ $grandAmmount }}</span></p>
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                    @elseif ($paymentId == 2)
                                        <div class="item-data-div mb-3" id='rentalCarges'>
                                            <div class="pe-2">
                                                <p class="p2">Rental Charge</p>
                                                <p class="p1">( {{ $days }} day(s) x {{ $paymentAmount }} )|
                                                    Applied
                                                    10%
                                                    online payment discount</p>
                                            </div>
                                            <div class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }}
                                                    <span class="carAmount">{{ $subTotal }}</span>
                                                </p>
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                        <div id="additionalChargesContainer" class="additional-charges-container">
                                        </div>
                                        <hr>
                                        <div class="item-data-div ">
                                            <h6>Sub Total</h6>
                                            <div id="subTotalDiv" class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                                        class="subTotalAmount">{{ $subTotal  }}</span></p>
                                                <input type="hidden" id="remainingSubTotalAmount"
                                                    value="{{ $subTotal }}">
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                        <div class="item-data-div">
                                            <div class="pe-2">
                                                <h6>Tax Total</h6>
                                            </div>

                                            <div id="taxToalDiv" class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                                        class="taxAmount">{{ $taxAmount  }}</span></p>
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="item-data-div grand-total">
                                            <div class="pe-2">
                                                <h5 class="clr-primary">Grand Total</h5>
                                            </div>
                                            <div id="grandTotalDiv" class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                                        id="grandAmmount">{{ $grandAmmount }}</span></p>
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                         @if ($days == 1)
                                              @php
                                                $minOneDay =1;
                                                
                                                $paymentAmountSet=$grandAmmount / 2;
                                                $remainingAmmount = abs($grandAmmount - $paymentAmountSet);


                                            @endphp
                                        @else
                                            @php
                                                $minOneDay = $days - 1;
                                                $remainingAmmount = $paymentAmount * $minOneDay + $taxAmount;
                                                     $paymentAmountSet=$paymentAmount;
                                            @endphp
                                        @endif
                                        <div class="item-data-div grand-total">
                                            <div class="pe-2">
                                                <h5 class="clr-primary">PayNow Total</h5>
                                            </div>
                                            <div id="grandTotalDiv" class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                                        id="paynow">{{ $paymentAmountSet }}</span></p>
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                       
                                       

                                        <div class="item-data-div grand-total">
                                            <div class="pe-2">
                                                <h5 class="clr-primary">PayLater Total</h5>
                                            </div>
                                            <div id="grandTotalDiv" class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                                        id="remainingAmmount">{{$remainingAmmount }}</span></p>
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                    @else
                                        @if ($currency == 'aed')
                                            @php
                                                $paymentCurrency = $car->price_aed;
                                            @endphp
                                        @else
                                            @php
                                                $paymentCurrency = $car->price_usd;
                                            @endphp
                                        @endif
                                        @if ($car->tax == '')
                                        @php
                                             $result=$paymentCurrency;
                                        @endphp
                                        @else
@php
$originalString = $car->tax;
$numericPart = filter_var($originalString, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

   $result= ($paymentCurrency / 100) * $numericPart + $paymentCurrency;
   
@endphp

                                        @endif
                                        @php
                                        $paymentAmount = $result;
                                        $subTotal = $paymentAmount * $days;
                                        $taxAmount = $subTotal * 0.05;
                                        $grandAmmount = $subTotal + $taxAmount;
                                    @endphp
                                        <div class="item-data-div mb-3" id='rentalCarges'>
                                            <div class="pe-2">
                                                <p class="p2">Rental Charge</p>
                                                <p class="p1">( {{ $days }} day(s) x {{ $paymentAmount }} )|
                                                    Applied
                                                    10%
                                                    online payment discount</p>
                                            </div>
                                            <div class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }}
                                                    <span class="carAmount">{{ $subTotal }}</span>
                                                </p>

                                            </div>
                                        </div>
                                        <div id="additionalChargesContainer" class="additional-charges-container">
                                        </div>
                                        <hr>
                                        <div class="item-data-div ">
                                            <h6>Sub Total</h6>
                                            <div id="subTotalDiv" class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                                        class="subTotalAmount">{{ $subTotal }}</span></p>
                                                <input type="hidden" id="remainingSubTotalAmount"
                                                    value="{{ $subTotal }}">
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                        <div class="item-data-div">
                                            <div class="pe-2">
                                                <h6>Tax Total</h6>
                                            </div>

                                            <div id="taxToalDiv" class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                                        class="taxAmount">{{ $taxAmount }}</span></p>
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="item-data-div grand-total">
                                            <div class="pe-2">
                                                <h5 class="clr-primary">Grand Total</h5>
                                            </div>
                                            <div id="grandTotalDiv" class="protection-price">
                                                <p class="price-aed">{{ $currency == 'aed' ? 'AED' : 'USD' }} <span
                                                        id="grandAmmount">{{$grandAmmount }}</span></p>
                                                {{-- <p class="price-usd">USD <span>00.00</span></p> --}}
                                            </div>
                                        </div>
                                    @endif







                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Section 4 car end -->






                    <!-- Section 5 driver detail start -->
                    <div class="driver-detail-container p-4">
                        <div class="row">
                            <div class="col-12">
                                <p class="checkout-heading"><i class="fa-solid fa-user"></i> Driver Details</p>
                            </div>

                            <form class="checkoutform" action="#" enctype="multipart/form-data"
                                onsubmit="return validateForm()">
                                <div class="row g-4">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="checkout-field">
                                            <label>First Name</label>
                                            <input type="text" id="firstName" name='first_name'
                                                placeholder="First Name">
                                            <div class="error" id="first-name-error"><i
                                                    class="fas fa-exclamation-circle"></i>
                                                Please enter your first name</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="checkout-field">
                                            <label>Last Name</label>
                                            <input type="text" id="lastName" name='last_name'
                                                placeholder="Last Name">
                                            <div class="error" id="last-name-error"><i
                                                    class="fas fa-exclamation-circle"></i>
                                                Please enter your last name</div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="checkout-field">
                                            <label>Phone</label>
                                            <input type="tel" id="phone" name='contact' placeholder="Phone">
                                            <div class="error" id="phone-error"><i
                                                    class="fas fa-exclamation-circle"></i> Please
                                                enter a valid phone number</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="checkout-field">
                                            <label>Email</label>
                                            <input type="email" id="email" placeholder="Email">
                                            <div class="error" id="email-error"><i
                                                    class="fas fa-exclamation-circle"></i> Please
                                                enter a valid email address</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="checkout-field">
                                            <label>Nationality</label>
                                            <select name='nationality' id="country" class="checkout-country-dropdown">
                                                <option value="select country">Select Country</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Aland Islands">Aland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curacao">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Barthelemy">Saint Barthelemy</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Martin">Saint Martin</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                  <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Viet Nam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.s.</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                            </select>

                                            <span class="error" id="country-error"><i
                                                    class="fas fa-exclamation-circle"></i>
                                                Please select a country</span>
                                        </div>
                                    </div>



                                    <div class="col-lg-4 col-sm-6">
                                        <div class="flex-end-driver">

                                            <div class="checkout-form-driver-age">
                                                <div>
                                                    <p>Drivers age is above 22 years?</p>
                                                    <p>I here by confirm that the driver age is above 22 years</p>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="flexSwitchCheckDefault">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="error" id="driver-error"><i class="fas fa-exclamation-circle"></i>
                                            Please
                                            Confirm Age.</div>
                                    </div>




                                    <div class="col-12 col-md-8">
                                        <div class="checkout-field">
                                            <label>Address</label>
                                            <input type="text" id="address" placeholder="Address">
                                            <div class="error" id="address-error"><i
                                                    class="fas fa-exclamation-circle"></i>
                                                Please enter your address</div>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                    <!-- Section 5 driver detial end -->



                    <!-- Section 6 document start -->

                    <div class="documents-container p-4 ">
                        <div class="row gy-3">
                            <div class="col-lg-5">
                                <div class="document-col-1">
                                    <div>
                                        <i class="fa-regular fa-circle-three-quarters-stroke"></i>
                                    </div>
                                    <div>
                                        <h4>Save Time At The Counter</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nobis maiores
                                            praesentium
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="document-col-2">
                                    <label class="form-control">
                                        <input onclick="openRadio()" id="provideDocu" type="radio" checked
                                            name="radio" />
                                        <div class="ps-3">
                                            <h6 class="m-0">Provide Documents Now.</h6>
                                            <p class="m-0 text-secondary">Upload Driver's License & ID</p>
                                        </div>

                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="document-col-2">
                                    <label class="form-control">
                                        <input type="radio" id="docuLater" onclick="closeRadio()" name="radio" />
                                        <div class="ps-3">
                                            <h6 class="m-0">Provide Documents Later</h6>
                                            <p class="m-0 text-secondary">Submit Driver's License & ID at Counter</p>
                                        </div>

                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="document-upload-container p-4" id="uploadDocument">
                        <div class="row gy-3">

                            <div class="col-12">
                                <p class="checkout-heading"><i class="fa-regular fa-passport"></i> Upload Verification
                                    Documents
                                </p>
                            </div>

                            <div class="col-md-6">
                                <div class="upload">
                                    <label>Driver's License
                                        <input type="file" id="licenseInput" placeholder="Upload">
                                        <span>Upload</span><br>
                                    </label>
                                    <p id="selectedLicense" class="selected-file text-center py-2"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="upload">
                                    <label>Driver's Passport
                                        <input type="file" id="passportInput" placeholder="Upload">
                                        <span>Upload</span><br>
                                    </label>
                                    <p id="selectedPassport" class="selected-file text-center py-2"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section 6 documents end -->



                    <!-- Section 7 policies start -->
                    <div class="policies-container p-4">
                        <div class="row gy-3">
                            <div class="col-12">
                                <p class="checkout-heading"><i class="fa-solid fa-gavel"></i> Rental Policies</p>
                            </div>
                            <div class="col-12">

                                <p>Dirham Corporation, its rental and other rental-related businesses, our company respects
                                    the
                                    privacy rights of
                                    Our customers and We are committed to protecting your privacy. This Privacy Policy (the
                                    "Policy") explains Our
                                    data handling practices as a "Controller" with regard to your Personal Data, as well as
                                    your
                                    rights associated with
                                    your Personal Data. This Policy was last updated on January 2, 2023.
                                </p>
                                <p>Scope
                                    This policy covers the information We obtain from you in connection with Our vehicle
                                    rental and
                                    other associated businesses, which identifies you as an individual.
                                    This policy does not cover information that cannot be used to identify you as an
                                    individual</p>
                                <span id="text">
                                    <p>Information We collect (what & how)
                                        We, Our advertisers, licensees, business partners, and discount sponsors may collect
                                        information from you in a multitude of ways, including, but not limited to, phone
                                        calls,
                                        customer
                                        service contacts, mobile apps, websites, and other sources.
                                        We collect information from customers during the process of reservation and rental
                                        transactions, such as name, address, and payment card information.
                                        Personal data to provide you with exceptional rental services, including, but not
                                        limited
                                        to;
                                        Name, phone number, address, date of birth.
                                        Driver’s licence or other forms of identification.
                                        Pictures and facial scans, some of which may be considered biometric data under
                                        applicable
                                        laws.
                                        Employer information (number, address, contact information).
                                        Credit worthiness or other background information</p>
                                </span>

                                <div class="btn-container">
                                    <button id="toggle">Read More</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="policies-btns">
    @foreach($policies as $policy)
        @if($policy->is_featured)
            <li data-bs-toggle="modal" data-bs-target="#{{ Str::slug($policy->title, '-') }}">
                {{ $policy->title }}
            </li>
        @endif
    @endforeach
</ul>

@foreach($policies as $policy)
    @if($policy->is_featured)
        <div class="modal fade" id="{{ Str::slug($policy->title, '-') }}" tabindex="-1" aria-labelledby="{{ Str::slug($policy->title, '-') }}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="{{ Str::slug($policy->title, '-') }}Label">{{ $policy->title }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ $policy->description }}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach


                            </div>

                        </div>
                    </div>
                    <!-- Section 7 policies end -->

                    <div class="paynow-btn-container">
                        <a onclick="paynowBtn()" class="paynow-btn">Book & Pay Online</a>
                        <!-- <p id='finalErrorMsg' class="mt-3 error_message"><i class="fa-solid fa-circle-exclamation"></i> Please fill in all Required Fields.</p> -->
                    </div>

                </div>
            </div>

</div>
</div>
            <div class='clearfix'></div>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



            <script>
                            $(document).ready(function() {
                    $("#toggle").click(function() {
                        let elem = $("#toggle").text();
                        if (elem == "Read More") {
                        //Stuff to do when btn is in the read more state
                        $("#toggle").text("Read Less");
                        $("#text").slideDown();
                        } else {
                        //Stuff to do when btn is in the read less state
                        $("#toggle").text("Read More");
                        $("#text").slideUp();
                        }
                    });
                });
                $(document).ready(function() {

                    $("#uploadButton").click(function() {
                        $("#licenseInput").click();
                    });

                    // Listen for changes in the file input
                    $("#licenseInput").change(function() {
                        // Get the selected file name
                        var fileName = $(this).val().split('\\').pop();
                        var fileNameVal = "Selected file: " + fileName;
                        $("#selectedLicense").html(fileNameVal);
                    });

                    $("#passportInput").click(function() {
                        $("#passportInput").click();
                    });

                    $("#passportInput").change(function() {

                        // Get the selected file name
                        var fileName = $(this).val().split('\\').pop();
                        var fileNameVal = "Selected file: " + fileName;
                        $("#selectedPassport").html(fileNameVal);
                    });

                    $("#childSeatInputNew").on("change", function() {

                        var selectedOptionText = $(this).find(':selected').text();
                        var currency = `{{ strtoupper($currency) }}`
                        var selectedValueNum = parseFloat($(this).val()) || 0; // Parse as float and handle NaN
                        $(".addon_on_set").html(selectedValueNum);
                        var days = `{{ $days }}`;
                        var childSeat = $("#childSeat").val();
                        var result = parseFloat(days) + parseFloat(childSeat);
                        var addonList = `<div id="childSeatCharger" class="item-data-div mb-3">
                       <div class="pe-2">
                       <p class="p2">Child Seat Charge</p>
                       <p class="p1">( ${days} day(s) x ${childSeat} x ${selectedOptionText})</p>
                       </div>
                       <div class="protection-price">
                       <p>${currency} <span>${selectedValueNum}</span></p>
                       </div>
                       </div>`;
                        if (selectedOptionText == 0) {
                        
                          var addon_on = parseFloat($(".addon_on").html()) || 0;
                          var carAmount = parseFloat($(".carAmount").html()) || 0;
      
                             $("#childSeatCharger").remove();
                           var resultToggle=carAmount + addon_on;
                           var resultTaxToggle=resultToggle * 0.05;
                            $(".subTotalAmount").html(resultToggle);
                             $(".taxAmount").html(resultTaxToggle);
                             $("#grandAmmount").html(resultToggle + resultTaxToggle);
                             
                             var grandAmmountpaynow=(resultToggle + resultTaxToggle) / 2;
             var paynow = $("#paynow").html(grandAmmountpaynow);
                      $("#remainingAmmount").html(Math.abs(grandAmmountpaynow));
                        } else {
                           
                            $('#childSeatCharger').remove();
                          var addon_on = parseFloat($(".addon_on").html()) || 0;
                          var addon_on_set = selectedValueNum;
                          var carAmount = parseFloat($(".carAmount").html()) || 0;
                       
                          var resultToggle=carAmount + addon_on + addon_on_set;
                          var resultTaxToggle=resultToggle * 0.05;
            
                         var grandAmmountpaynow=(resultToggle + resultTaxToggle) / 2;
         
                              $(".subTotalAmount").html(resultToggle);
                             $(".taxAmount").html(resultTaxToggle);
                             $("#grandAmmount").html(resultToggle + resultTaxToggle);
                            $("#additionalChargesContainer").append(addonList);
                       
                           
                       
                          var paynow = $("#paynow").html(grandAmmountpaynow);
                      $("#remainingAmmount").html(Math.abs(grandAmmountpaynow));
               
                            //  $("#childSeatCharger").remove();
                            //  $resultToggle=carAmount + addon_on + addon_on_set;
                          
                            // $resultTaxToggle=$resultToggle * 0.05;
                            // alert($resultToggle);
                           
                            // $(".subTotalAmount").html($resultToggle);
                            //  $(".taxAmount").html($resultTaxToggle);
                            //  $("#grandAmmount").html($resultToggle + $resultTaxToggle);
                            
                            
                            
                            
                            
                        //     $("#additionalChargesContainer").append(addonList);
                        //      var subTotalAmount = parseFloat($(".subTotalAmount").html()) || 0;
                        // var remainingSubTotalAmount = parseFloat($("#remainingSubTotalAmount").val()) || 0;

                        // var selectedValueNum = parseFloat($(this).val()) || 0;
                        // var subTotalAmount = remainingSubTotalAmount + selectedValueNum;

                        // $(".subTotalAmount").html(subTotalAmount);
                        // $('.taxAmount').html(subTotalAmount * 0.05);
                        // var subTotalAmount = parseFloat($(".subTotalAmount").html()) || 0;
                        // var taxAmount = parseFloat($(".taxAmount").html()) || 0;
                        // var grandAmmount = subTotalAmount + taxAmount;
                        // $("#grandAmmount").html(grandAmmount);
                        // var paynow = parseFloat($("#paynow").html()) || 0;
                        // $("#remainingAmmount").html(Math.abs(grandAmmount - paynow));
                        }

                       
                       
                    });


                });


                function getValue(id, price, name, days, currency) {
                  
                    var gpsSwitchStatus = $("#gpsSwitch_" + id).prop("checked");
                    var addon_on = $(".addon_on").html();
                    var checkAmountValueaddDriveSwitch = parseFloat(addon_on);
                    
                    var priceWithDays = price * days;
                    if (gpsSwitchStatus == true) {
                        //
                        $(".addon_on").html(checkAmountValueaddDriveSwitch + priceWithDays);

                        var addonList = `<div id="append_${id}" class="item-data-div mb-3">
                        <div class="pe-2">
                                 <p class="p2">${name}</p>
                                 <p class="p1">( ${days} day(s) x ${price})</p>
                             </div>
                             <div class="protection-price">
                                 <p>${currency} <span class="addonAmount">${priceWithDays}</span></p>
                             </div>
                         </div>`;
 
                        $("#additionalChargesContainer").append(addonList);
                         var subTotalAmount = parseFloat($(".subTotalAmount").html()) || 0;
                          
                      
                        var subTotalAmountNew = subTotalAmount + priceWithDays;
              
                        $(".subTotalAmount").html(subTotalAmountNew);
                        $("#remainingSubTotalAmount").val(subTotalAmountNew);
                        $('.taxAmount').html(subTotalAmountNew * 0.05);
                        var taxAmount = parseFloat($(".taxAmount").html()) || 0;
                        var grandAmmount = subTotalAmountNew + taxAmount;
             
                        $("#grandAmmount").html( grandAmmount.toLocaleString());
                        
                            if(days==1){
                               var paynow = $("#paynow").html() || 0;
                             
                        }else{
                            var paynow = parseFloat($("#paynow").html()) || 0;
                        }
                        var grandAmmount = parseFloat(grandAmmount);
                       var paynow = parseFloat(paynow) || 0;
                      
                        $("#remainingAmmount").html(Math.abs(grandAmmount - paynow));
                    } else {
                          
                        $("#append_" + id).remove();
                        $(".addon_on").html(checkAmountValueaddDriveSwitch - priceWithDays);
                         var carAmount = parseFloat($(".carAmount").html()) || 0;
                        var addon_on = parseFloat($(".addon_on").html()) || 0;
                        var addon_on_set = parseFloat($(".addon_on_set").html()) || 0;
                   
                  
                
                           var resultToggle=carAmount + addon_on + addon_on_set;
                         
                         var resultTaxToggle=resultToggle * 0.05;
            var grandAmmountpaynow=  (resultToggle + resultTaxToggle) / 2; 

                             $(".subTotalAmount").html(resultToggle);
                             $(".taxAmount").html(resultTaxToggle);
                             $("#grandAmmount").html(resultToggle + resultTaxToggle);

                          var paynow = $("#paynow").html(grandAmmountpaynow);
                      $("#remainingAmmount").html(Math.abs(grandAmmountpaynow));
                    }


                }




                // addon_on
            </script>
            <script>
                function generateUUID() {
                    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                        var r = Math.random() * 16 | 0,
                            v = c === 'x' ? r : (r & 0x3 | 0x8);
                        return v.toString(16);
                    });
                }

                // Check if the session ID is already stored in local storage
                var sessionId = localStorage.getItem('session_id');

                // If not, generate a new one and store it
                if (!sessionId) {
                    sessionId = generateUUID();
                    localStorage.setItem('session_id', sessionId);
                }



                $(document).ready(function() {
                    var sessionId = localStorage.getItem('session_id');
                    $.ajax({
                        url: "{{ route('checkout.user-sessionId') }}",
                        type: "get",
                        dataType: "json",
                        data: {
                            session_id: sessionId,
                        },
                        success: function(response) {
                            if (response.status == 200) {
                                $('#firstName').val(response.first_name);
                                $('#lastName').val(response.last_name);
                                $('#email').val(response.email);
                                $('#phone').val(response.phone_number);
                                $('#address').val(response.address);
                                localStorage.setItem('user_id', response.id);
                                $("#flexSwitchCheckDefault").prop('checked', true);
                            }

                        }
                    });

                });

                // $("#docuLater").val("chec")

                function openRadio() {
                    $("#uploadDocument").css("display", "block");
                }

                function closeRadio() {
                    $("#uploadDocument").css("display", "none");
                }

                function msgDisplay() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Messages!',
                        text: 'All field Are Required',

                    });
                }
                function togglePreloader(show) {
        if (show) {
            $('#preloader').show();
        } else {
            $('#preloader').hide();
        }
    }

                function paynowBtn() {


                    // Reset error messages
                    document.getElementById('first-name-error').style.display = 'none';
                    document.getElementById('last-name-error').style.display = 'none';
                    document.getElementById('phone-error').style.display = 'none';
                    document.getElementById('email-error').style.display = 'none';
                    document.getElementById('country-error').style.display = 'none';
                    document.getElementById('driver-error').style.display = 'none';
                    document.getElementById('address-error').style.display = 'none';

                    var docuLater = document.getElementById("docuLater").checked;




                    // Get form input values
                    var firstName = document.getElementById('firstName').value;
                    var lastName = document.getElementById('lastName').value;
                    var phone = document.getElementById('phone').value;
                    var email = document.getElementById('email').value;
                    var country = document.getElementById('country').value;
                    var isDriverConfirmed = document.getElementById('flexSwitchCheckDefault').checked;
                    var address = document.getElementById('address').value;

                    var licenseInput = $('#licenseInput').val().split('\\').pop();
                    var passportInput = $("#passportInput").val().split('\\').pop();
                    // Validate each field

                    if (firstName.trim() === '') {
                        document.getElementById('first-name-error').style.display = 'block';
                        return msgDisplay();
                    }

                    if (lastName.trim() === '') {
                        document.getElementById('last-name-error').style.display = 'block';
                        return msgDisplay();
                    }

                    // You can add more validation rules for other fields...

                    // Example: Validate phone number using a simple regex
                    //  var phoneRegex = /^\d{10}$/;
                    //  var phoneRegex = "1234567890";
                    // if (!phone == "") {
                    //     document.getElementById('phone-error').style.display = 'block';
                    //     return $fieldStatus = false;
                    // }
                    function msgDisplay() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error Messages!',
                            text: 'All field Are Required',

                        });
                    }

                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(email)) {
                        document.getElementById('email-error').style.display = 'block';
                        return msgDisplay();
                    }

                    if (country === 'select country') {
                        document.getElementById('country-error').style.display = 'block';
                        return msgDisplay();
                    }

                    if (!isDriverConfirmed) {
                        document.getElementById('driver-error').style.display = 'block';
                        return msgDisplay();
                    }

                    if (address.trim() === '') {
                        document.getElementById('address-error').style.display = 'block';
                        return msgDisplay();
                    }
                    var docuLater = document.getElementById("docuLater");
                    if (!docuLater.checked) {
                        if (licenseInput == "" || passportInput == "") {
                            return msgDisplay();
                        }
                    }

                    var grandAmmount = $("#grandAmmount").html();
                    var paynow = $("#paynow").html();
                    var remainingAmmount = $("#remainingAmmount").html();
                    var paymentId = `{{ $paymentId }}`;
                    var carId = `{{ $carId }}`;
                    var pickUp = `{{ $pickUp }}`;
                    var pickupDate = `{{ $pickupDate }}`;
                    var ReturenPickUp = `{{ $ReturenPickUp }}`;
                    var returnDate = `{{ $returnDate }}`;
                    var pickupTime = `{{ $pickupTime }}`;
                    var returnTime = `{{ $returnTime }}`;
                    var user_id = localStorage.getItem('user_id');
                    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                    var checkedDataIdTypes = [];
                    checkboxes.forEach(function(checkbox) {
                        if (checkbox.checked) {
                            var dataIdType = checkbox.getAttribute('data-addonId-type');
                            checkedDataIdTypes.push(dataIdType);
                        }
                    });
                    var subTotalAmount = $(".subTotalAmount").html();
                    var childSeat = $("#childSeatInputNew").find(':selected').text();
                    var taxAmount = $(".taxAmount").html();
                    var licensefileInput = document.getElementById('licenseInput');
                    var licensefile = licensefileInput.files[0];
                    var passportInput = document.getElementById('passportInput');
                    var passportfile = passportInput.files[0];

                    var formDataObject = {
                        firstName: firstName,
                        lastName: lastName,
                        phone: phone,
                        email: email,
                        country: country,
                        isDriverConfirmed: isDriverConfirmed,
                        address: address,
                        paymentId: paymentId,
                        carId: carId,
                        subTotalAmount: subTotalAmount,
                        addonDetails: checkedDataIdTypes,
                        childSeat: childSeat,
                        subTotalAmount: subTotalAmount,
                        taxAmount: taxAmount,
                        grandAmmount: grandAmmount,
                        paynow: paynow,
                        pickUp: pickUp,
                        ReturenPickUp: ReturenPickUp,
                        pickupDate: pickupDate,
                        returnDate: returnDate,
                        pickupTime: pickupTime,
                        returnTime: returnTime,
                        remainingAmmount: remainingAmmount,
                        sessionId: sessionId,
                        user_id: user_id,
                    };

  togglePreloader(true);

                    $.ajax({
                        url: "{{ route('checkout.store') }}",
                        type: "post",
                        dataType: "json",
                        data: formDataObject,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        success: function(response) {



                            if (licenseInput !== "") {
                                var formDataObject2 = new FormData();
                                formDataObject2.append('licensefile', licensefile);
                                formDataObject2.append('passportfile', passportfile);
                                formDataObject2.append('reservationId', response.reservationId);
                                formDataObject2.append('paymentId', response.paymentId);
                                
                                $.ajax({
                                    url: "{{ route('checkout.store.checked') }}",
                                    type: "post",
                                    data: formDataObject2,
                                    contentType: false, // Set to false to prevent jQuery from setting the content type
                                    processData: false, // Set to false to prevent jQuery from processing the data
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    success: function(response) {
                                        console.log(response.paymentId);


                                        if (response.paymentId == 1 || response.paymentId == 2) {
                                            window.location.href = "{{ route('checkout.user-payment') }}";

                                        }else{
                                                                                window.location.href = "{{ route('checkout.send-invoice') }}";
                                        }

                                    },
                                    error: function(error) {
                                        // Handle error
                                        console.error('Error:', error);
                                    }
                                });
                            } else {
                                 togglePreloader(false); 
                                if (response.paymentId == 1 || response.paymentId == 2) {
                                    window.location.href = "{{ route('checkout.user-payment') }}";

                                }else{
                                                                        window.location.href = "{{ route('checkout.send-invoice') }}";
                                }
                            }




                        },


                        error: function(error) {
                            alert("error");
                        }
                    });

                }
            </script>
            
            <script>
        // JavaScript for showing modal description
        document.addEventListener('DOMContentLoaded', function () {
            var modalTriggers = document.querySelectorAll('.fa-circle-info');

            modalTriggers.forEach(function (trigger) {
                trigger.addEventListener('click', function () {
                    var description = this.getAttribute('data-description');
                    var modalId = this.getAttribute('data-bs-target').substring(1);

                    var modalBody = document.getElementById(modalId).querySelector('.modal-body');
                    modalBody.innerHTML = description;
                });
            });
        });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var policiesBtns = document.querySelectorAll('.policies-btns li');

        policiesBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                var targetModalId = btn.getAttribute('data-bs-target');
                var targetModal = document.getElementById(targetModalId.replace('#', ''));

                var modal = new bootstrap.Modal(targetModal);
                modal.show();
            });
        });
    });
</script>
 <script>
        // JavaScript for showing modal description
        document.addEventListener('DOMContentLoaded', function () {
            var modalTriggers = document.querySelectorAll('.fa-circle-info');

            modalTriggers.forEach(function (trigger) {
                trigger.addEventListener('click', function () {
                    var description = this.getAttribute('data-description');
                    var modalId = this.getAttribute('data-bs-target').substring(1);

                    var modalBody = document.getElementById(modalId).querySelector('.modal-body');
                    modalBody.innerHTML = description;
                });
            });
        });
    </script>
        @endsection
