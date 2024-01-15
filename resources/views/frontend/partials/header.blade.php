 <!-- ////////////////// Navbar Start  ////////////-->
 <div class="header">

     <div class="container">
         <!-- Header Media -->
         <div class="row ">
             <div class="col-lg-4">
                 <div class="contact-header">
                     <p><a href="tel:+971509617499"><i class="fa-solid fa-phone"></i> +971509617499</a></p>
                     <p><a href="mailto:info@dirhamcars.com"><i class="fa-solid fa-envelope"></i> info@dirhamcars.com</a>
                     </p>
                 </div>
             </div>

             <!-- Header Search -->
             <div class="col-lg-4 col-md-12">
                 <div class="flex-div flex-div-sm">

                     <div class="header-search flex-center">
                         <div class="input">
                             <input type="text" id="searchInput" name="search" placeholder="Type here to search...">
                             <ul id="suggestions">
                             </ul>
                             <a class="search-icon flex-center">
                                 <i class="fa-solid fa-magnifying-glass"></i>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Header Search end -->

             <!-- Header lang and Currency  -->
             <div class="col-lg-4">
                 <div class="flex-div-login">
                     <div class="flex-div">



                         <!-- Lang dropdown -->
                         <!-- <div class="dropdown mx-2">

                        <select id='languageChange' class="form-select currency-change  lang-dropdown" aria-label="Default select example">
                            <option  value="ENG" selected> <img src="public/images/uae-flag.svg" alt="">  ENG</option>
                            <option value="UAE"><img src="public/images/usa-flag.svg" alt=""> Arabic</option>
                        </select>

                    </div> -->
                         <!-- currency dropdown -->
                         <div class="dropdown">
                                   @if (Session::has('currency'))
                                     @php
                                         $currency = Session::get('currency');
                                     @endphp
                                 @else
                                     @php
                                         $currency = 'aed';
                                     @endphp
                                 @endif
                             <select id='currencyChange' onchange=""
                                 class="form-select   lang-dropdown" aria-label="Default select example">

                                 <option value="aed" {{ $currency == 'aed' ? 'selected' : ''}}> <img
                                         src="{{ asset('/images/images/uae-flag.svg') }}" alt=""> AED</option>
                                 <option value="usd" {{ $currency == 'usd' ? 'selected' : ''}}><img
                                         src="{{ asset('images/usa-flag.svg') }}" alt="">
                                     USD</option>      
                              
                                     
                                     
                                 <!-- <option value="aed" {{ $currency == 'aed' ? $currency : '' }}> <img-->
                                 <!--        src="{{ asset('/images/images/uae-flag.svg') }}" alt=""> AED</option>-->
                                 <!--<option value="usd" {{ $currency == 'usd' ? $currency : '' }}><img-->
                                 <!--        src="{{ asset('images/usa-flag.svg') }}" alt="">-->
                                 <!--    USD</option>                 -->
                             </select>
                         </div>
                         
                         
                     </div>

                     <?php if (isset($_SESSION['user_id'])){?>
                     <a href="logout.php">
                         <div class="header-profile flex-center">

                             <div class="header-profile-icon">
                                 <i class="fa-solid fa-user"></i>
                             </div>
                             <p>Logout</p>
                         </div>
                     </a>
                     <?php }else{?>
                     <a href="login.php">
                         <div class="header-profile flex-center">

                             <div class="header-profile-icon">
                                 <i class="fa-solid fa-user"></i>
                             </div>
                             <p>login</p>
                         </div>
                     </a>
                     <?php }?>

                 </div>
             </div>


         </div><!-- row end -->


     </div><!--container-->

     <hr>



     <!-- // Nav Start  -->

     <nav id="header-nav" class="flex-center">
         <div id="header-nav-side" class="header-nav-side">
             <hr>
             <div class="container">
                 <div class="header-nav-side-padding-container">
                     <div class="row gy-4">
                         <!--<div class="col-md-6 col-lg-3">-->
                         <!--    <ul>-->
                         <!--        <h3>Reservation</h3>-->
                         <!--        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Start a Reservation</a></li>-->
                         <!--        <li><a href="#"><i class="fa-solid fa-angle-right"></i> View, Modify, Cancel</a></li>-->
                         <!--        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Flexi Monthly</a></li>-->
                         <!--        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Request a Receipt</a></li>-->
                         <!--        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Support Zone</a></li>-->
                         <!--    </ul>-->
                         <!--</div>-->
                         <!--<div class="col-md-6 col-lg-3">-->
                         <!--    <ul>-->
                         <!--        <h3>Our Services</h3>-->
                         <!--        <li><a href="#"><i class="fa-solid fa-angle-right"></i> DirhamXpress</a></li>-->
                         <!--        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Dirham Prestige</a></li>-->
                         <!--        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Rental Add-Ons</a></li>-->
                         <!--        <li><a href="#"><i class="fa-solid fa-angle-right"></i> Book a Service</a></li>-->
                         <!--        <li><a href="offer.php"><i class="fa-solid fa-angle-right"></i> Offers</a></li>-->
                         <!--    </ul>-->
                         <!--</div>-->
                         <div class="col-md-6 col-lg-3 mobilemenu">
                             <ul>
                                 <h3>Quick Links</h3>
                                 <li><a href="{{ route('about-us') }}"><i class="fa-solid fa-angle-right"></i> About Us</a></li>
                                 <li><a href="{{ route('fleets') }}"><i class="fa-solid fa-angle-right"></i> Our
                                         Fleet</a></li>
                                 <li><a href="{{ route('offers') }}"><i class="fa-solid fa-angle-right"></i> Offers</a></li>
                                 <li><a href="{{ route('blogs') }}"><i class="fa-solid fa-angle-right"></i> Blogs</a></li>
                                 <li><a href="{{ route('contact') }}"><i class="fa-solid fa-angle-right"></i> Contact Us</a></li>



                                </ul>
                         </div>
                     </div>
                 </div>

             </div>
         </div>

         <div class="container">
             <div class="nav-flex">

                 <div class="hum-logo">

                     <div class="humbergerMain" id="humbergerMain">
                         <i class="fa-solid fa-bars"></i>
                     </div>

                     <div class="logo1 logo"><a href="{{ route('home') }}"><img <div class="logo1 logo"><a
                                 href="{{ route('home') }}"><img src="{{ asset('images/dirham-logo-eng.svg') }}"
                                     alt=""></a></div>
                 </div>
                 <ul id="navul">
                     <li class="nav-ul-logo logo-border-none"><img src="{{ asset('images/dirham-logo-eng.svg') }}"
                             alt=""></li>
                     <li><a href="{{ route('about-us') }}">About Us</a></li>
                     <li><a href="{{ route('fleets') }}">Our Fleet</a></li>
                     <li><a href="{{ route('offers') }}">Offers</a></li>
                     <li><a href="{{ route('blogs') }}">Blogs</a></li>
                     <li><a href="{{ route('contact') }}">Contact Us</a></li>
                 </ul>
                 <!-- <div class="humberger" id="humberger">
                        <i class="fa-solid fa-bars"></i>
                    </div> -->
                 <div class="logo2 logo"> <a href="{{ route('home') }}"><img <div class="logo2 logo"> <a
                             href="{{ route('home') }}"><img src="{{ asset('images/dirham-logo-arabic.svg') }}"
                                 alt=""></a></div>
             </div>
         </div>
     </nav>
     <!-- // Nav End  -->
 </div>
 <!-- //////////// Navbar End  ////////////////-->

 <!-- //Side Bar Start -->
 <div class="side-bar">
     <ul>
         <li><a href="https://www.facebook.com/dirhamcar?mibextid=ZbWKwL"><img
                     src="{{ asset('images/side-bar-icon/facebook.png') }}" alt=""></a></li>
         <!-- <li><a href="#"><img src="public/images/side-bar-icon/whatsapp.png" alt=""></a></li> -->
         <li><a href="https://instagram.com/dirham_car_rental?igshid=OGQ5ZDc2ODk2ZA=="><img
                     src="{{ asset('images/side-bar-icon/instagram.png') }}" alt=""></a></li>
         <li><a href="/branches"><img src="{{ asset('images/side-bar-icon/location 1.png') }}"
                     alt=""></a>
         </li>
     </ul>
 </div>
 <!-- //Side Bar end  -->

 <!-- // Side Bar Feedback -->
 <a href="/feedback" class="side-bar-feedback">FeedBack</a>
 <!-- // Side Bar Feedback  End -->

 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

 <script>
     $(document).ready(function() {
        //   var selectedCurrency = $("#currencyChange").val();
        //   if(selectedCurrency=="usd"){
        //                 $(".price-usd").css("display","block");
        //                 $(".price-aed").css("display","none");
        //              }else{
        //                 $(".price-usd").css("display","none");
        //                 $(".price-aed").css("display","block");
        //              }
         
       
         $("#currencyChange").on('change', function() {
             var selectedCurrency = $(this).val();

             $.ajax({
                 type: 'Get',
                 url: "{{ route('update.currency') }}", // Replace with your server endpoint
                 data: {
                     currency: selectedCurrency
                 },
                 success: function(response) {
                     
                  location.reload();
                     
      
                    //  if(response=="usd"){
                    //     $(".price-usd").css("display","block");
                    //     $(".price-aed").css("display","none");
                    //  }else{
                    //     $(".price-usd").css("display","none");
                    //     $(".price-aed").css("display","block");
                    //  }

                 }
             });

         });

         // public/js/search.js

         $(document).ready(function() {
             var searchInput = $('#searchInput');
             var suggestionsList = $('#suggestions');

             searchInput.on('input', function() {
                 var searchTerm = searchInput.val().trim();
                 $("#suggestions").css('display','block');
                 if (searchTerm.length > 0) {
                     // Make an Ajax request using jQuery
                     $.ajax({
                         url: '{{ route('cars.searching') }}',
                         method: 'GET',
                         data: {
                             search: searchTerm
                         },
                         success: function(response) {

                            $("#suggestions").html(response);

                         },
                         error: function(error) {
                             alert("error");
                         }
                     });
                 } else {
                     // Clear suggestions if search input is empty
                     suggestionsList.empty();
                 }
             });
         });

     });
 </script>
