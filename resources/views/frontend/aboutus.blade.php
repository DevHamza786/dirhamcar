@extends('frontend.partials.master')
@section('styles')

<link rel="stylesheet" href="{{asset('assets/css/frontcss/about.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/frontcss/team.css')}}">

@endsection
@section('content')




    <div class='clearfix'></div>

<!-- ------- car modal here --------- -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullwidth">
      <div class="modal-content">

        <div class="modal-body" id="carModalContainer">
          <img class='carmodalimg' src="{{asset('images/about-page/gallery/Rectangle (1).png')}}" alt="">
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>







    <!-- About Container Start -->
    <div class="about-container">

        <!-- // About SEction 1 Start -->
        <div class="container">
        <div class="about-section-1">
                <div class="row g-2">

                    <!-- first row  -->
                    <div class="col-md-6">
                        <div class="flex-about about-col-text">
                            <h1>About Us</h1>
                            @foreach($aboutUsContent as $content)
    <p>{!! strip_tags($content->content) !!}</p>
@endforeach
                        
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('images/about-page/about-1.png')}}" alt="">
                        </div>
                    </div>
                    <!-- first row end -->

                    <!-- second row  -->
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('images/about-page/about-2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="flex-about-1 about-col-text">
                            <h1>Our mission</h1>
                               @foreach($aboutUsContent as $content)
                                <p>{!! strip_tags($content->content_one) !!}</p>
                               @endforeach
                        </div>
                    </div>

                    <!-- second row end -->

                    <!-- first row  -->
                    <div class="col-md-6">
                        <div class="flex-about about-col-text">
                            <h1>Our Vision</h1>
                             @foreach($aboutUsContent as $content)
                                <p>{!! strip_tags($content->content_two) !!}</p>
                               @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('images/about-page/about-3.png')}}" alt="">
                        </div>
                    </div>
                    <!-- first row end -->

                    <!-- second row  -->
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('images/about-page/attention-details-particle-view-modern-luxury-white-car-parked-indoors-daytime.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="flex-about-1 about-col-text">
                            <h1>Service Area</h1>
                            @foreach($aboutUsContent as $content)
                                <p>{!! strip_tags($content->content_three) !!}</p>
                               @endforeach
                        </div>
                    </div>

                    <!-- second row end -->

                    <!-- first row  -->
                    <div class="col-md-6">
                        <div class="flex-about about-col-text">
                            <h1>Quality Assurance</h1>
                            @foreach($aboutUsContent as $content)
                                <p>{!! strip_tags($content->content_four) !!}</p>
                               @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('images/about-page/machenic.jpg')}}" alt="">
                        </div>
                    </div>
                    <!-- first row end -->

                    <!-- second row  -->
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="{{asset('images/about-page/handshake.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="flex-about-1 about-col-text">
                            <h1>Awards and Recognition</h1>
                            @foreach($aboutUsContent as $content)
                                <p>{!! strip_tags($content->content_five) !!}</p>
                               @endforeach
                        </div>
                    </div>

                    <!-- second row end -->



                </div>
            </div>
        </div><!--Container end-->
            <!-- about-section-1 end -->



            <!-- // About Banner Start -->

            <div class="about-banner">
                <div class="container">

                    <div class="row gy-5">
                        <!-- //col 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="flex-center">
                                <div class="banner-inner">
                                    <img class="img-fluid" src="{{asset('images/about-page/banner-people.png')}}" alt="">
                                    <div class="about-banner-text">
                                        <h1>15+</h1>
                                        <p>Dedicated Employees</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //col 2 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="flex-center">
                                <div class="banner-inner">
                                    <img class="img-fluid" src="{{asset('images/about-page/banner-like.png')}}" alt="">
                                    <div class="about-banner-text">
                                        <h1>9053+</h1>
                                        <p>Satisfied Customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //col 3 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="flex-center">
                                <div class="banner-inner right-border-none">
                                    <img class="img-fluid" src="{{asset('images/about-page/banner-car.png')}}" alt="">
                                    <div class="about-banner-text ">
                                        <h1>90+</h1>
                                        <p>100% Fit Vehicles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- // About Banner End -->





            <div class="about-car-gallery">
                <div class="container">
                    <div class="row g-4">

                        <!-- car 1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="gallery-car">
                                <a onclick='carModal("{{asset("images/about-page/gallery/86ea264233bf3c2b9f13c4fc8fb8f989.png")}}")'>
                                    <img class="img-fluid" src="{{asset('images/about-page/gallery/86ea264233bf3c2b9f13c4fc8fb8f989.png')}}" alt="">
                                    <div class="car-link">
                                        <i class="fa-solid fa-link"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- car 1 end -->
                        <!-- car 2 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="gallery-car">
                                <a onclick='carModal("{{asset("images/about-page/gallery/057833049f456ce9a0a426f5a67a69e9.png")}}")'>
                                    <img class="img-fluid" src="{{asset('images/about-page/gallery/057833049f456ce9a0a426f5a67a69e9.png')}}" alt="">
                                    <div class="car-link">
                                        <i class="fa-solid fa-link"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- car 2 end -->
                        <!-- car 1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="gallery-car">
                                <a onclick='carModal("{{asset("images/about-page/gallery/815e0098d85e19697b8e62cd88321967.png")}}")'>
                                    <img class="img-fluid" src="{{asset('/images/about-page/gallery/815e0098d85e19697b8e62cd88321967.png')}}" alt="">
                                    <div class="car-link">
                                        <i class="fa-solid fa-link"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- car 1 end -->
                        <!-- car 1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="gallery-car">
                                <a onclick='carModal("{{asset("images/about-page/gallery/9c163b8c4683f69384126374f1f0ddc5.png")}}")'>
                                    <img class="img-fluid" src="{{asset('images/about-page/gallery/9c163b8c4683f69384126374f1f0ddc5.png')}}" alt="">
                                    <div class="car-link">
                                        <i class="fa-solid fa-link"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- car 1 end -->
                        <!-- car 1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="gallery-car">
                                <a onclick='carModal("{{asset("images/about-page/gallery/Rectangle (5).png")}}")'>
                                    <img class="img-fluid" src="{{asset('/images/about-page/gallery/Rectangle (5).png')}}" alt="">
                                    <div class="car-link">
                                        <i class="fa-solid fa-link"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- car 1 end -->
                        <!-- car 1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="gallery-car">
                                <a onclick='carModal("{{asset("images/about-page/gallery/6ee51d3e068fa39d0bb2cb1ffd6f58b6.png")}}")'>
                                    <img class="img-fluid" src="{{asset('images/about-page/gallery/6ee51d3e068fa39d0bb2cb1ffd6f58b6.png')}}" alt="">
                                    <div class="car-link">
                                        <i class="fa-solid fa-link"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- car 1 end -->

                    </div><!-- row end -->




                </div><!-- container end -->
            </div><!-- gallery end -->










    </div><!--About Container End-->


    <!-- Team Container Start -->
    <div class="team-container my-5" style="margin-bottom: 150px !important;">
        <div class="container">
            <div class="team-heading">
                <h1>Our Team</h1>
                <p>Cruising Towards Excellence, as a Unit</p>
            </div>

            <div class="team-card-container">
                <div class="row gy-5">


                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('images/team/riyad.png')}}" alt="">
                            </div>
                            <div class="team-text">
                                <!-- <p>Riyad al ithawi</p> -->
                                <p>CEO</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('images/team/shaheen.png')}}" alt="">
                            </div>
                            <div class="team-text">
                                <!-- <p>Shaheen al ithawi</p> -->
                                <p>Managing Director</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('images/team/osama.png')}}" alt="">
                            </div>
                            <div class="team-text">
                                <!-- <p>osama said</p> -->
                                <p>operations manager</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('images/team/ahmed.png')}}" alt="">
                            </div>
                            <div class="team-text">
                                <!-- <p>AHMED MOSTAFA</p> -->
                                <p>Accountant</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('images/team/gulzar.png')}}" alt="">
                            </div>
                            <div class="team-text">
                                <!-- <p>GULZAR AHMED</p> -->
                                <p>Operations Manager</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('images/team/m.ameer.png')}}" alt="">
                            </div>
                            <div class="team-text">
                                <!-- <p>Mohammed amer</p> -->
                                <p>chauffeur</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('images/team/m.naseer.png')}}" alt="">
                            </div>
                            <div class="team-text">
                                <!-- <p>MAHMOUD NASSER</p> -->
                                <p>chauffeur</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <div class="team-img">
                                <img src="{{asset('images/team/m.alkatib.png')}}" alt="">
                            </div>
                            <div class="team-text">
                                <!-- <p>Mohammed alkatib</p> -->
                                <p>chauffeur</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- Team Container end -->

@endsection

