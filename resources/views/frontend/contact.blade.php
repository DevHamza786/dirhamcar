@extends('frontend.partials.master')
@section('styles')

<link rel="stylesheet" href="{{ asset('/assets/css/frontcss/contact.css') }}">

@endsection
@section('content')
<section class="contact">
<div class="container">


        <div class="contact-form-container">
            <div class="row g-0">


                <!-- // Contact Form Col 1 start//-->
                <div class="col-lg-5">
                    <div class="contact-form-col-1">
                        <div class="contact-form-inner-container py-5 py-lg-1">

                            <h1>Let's talk with us</h1>
                            <p>We're here to assist you. Feel free to get in touch using  he following contact details!</p>

                            <div class="contact-detail-container">

                                <!-- //No Detail -->
                            <div class="contact-detail-div">
                                <div class="contact-media-icon"><i class="fa-solid fa-phone-volume"></i></div>
                                <div class="contact-media-text">
                                    <p class="media-title-p m-0">Phone No:</p>
                                    <p class="m-0">+971509617499</p>
                                </div>
                            </div>
                            <!-- //Whatsapp Detail -->
                            <div class="contact-detail-div">
                                <div class="contact-media-icon"><i class="fa-brands fa-whatsapp"></i></div>
                                <div class="contact-media-text">
                                    <p class="media-title-p m-0">Whats App:</p>
                                    <p class="m-0">+971502885566</p>
                                </div>
                            </div>
                            <!-- //Email Detail -->
                            <div class="contact-detail-div">
                                <div class="contact-media-icon"><i class="fa-solid fa-envelope"></i></div>
                                <div class="contact-media-text">
                                    <p class="media-title-p m-0">Email:</p>
                                    <p class="m-0">info@dirhamcars.com</p>
                                </div>
                            </div>
                            <!-- //Address Detail -->
                            <div class="contact-detail-div">
                                <div class="contact-media-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <div class="contact-media-text">
                                    <p class="media-title-p m-0">Address:</p>
                                    <p class="m-0">Palm Jumeirah , Dukes hotel
                                       <br>
                                        Abu hail , Deira , Dubai</p>
                                    </div>
                                </div>
                                <!-- //Address end -->


                            </div>
                        </div>
                    </div>
                </div>
                <!-- // Contact Form Col 1 end//-->




                <!-- // Contact Form Col 2 Start //-->

                <div class="col-lg-6">

                    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

                    <div class="contact-form-col-2">
    <form action="/contact" method="post">
        @csrf
        <!-- //input div -->
        <div class="input-div">
            <p>Full Name</p>
            <input type="text" name="name" placeholder="Enter Your Full Name..." required>
            <div id="fullNameError" class="error-message">Please Enter a Valid Name <i class="fa-solid fa-circle-exclamation"></i></div>
        </div>
        <!-- //input div end -->
        <!-- //input div -->
        <div class="input-div">
            <p>Email Address</p>
            <input type="email" name="email" placeholder="Enter your email address..." required>
            <div id="emailError" class="error-message">Please Enter a Valid Email <i class="fa-solid fa-circle-exclamation"></i></div>
        </div>
        <!-- //input div end -->
        <!-- //input div -->
        <div class="input-div">
            <p>Contact No</p>
            <input type="tel" name="phone" placeholder="Enter your contact no..." required>
            <div id="contactNoError" class="error-message">Please Enter a Valid Contact <i class="fa-solid fa-circle-exclamation"></i></div>
        </div>
        <!-- //input div end -->
        <!-- //input div -->
        <div class="input-div">
            <p>Message</p>
            <textarea name="message" placeholder="Please Write your messages..." rows="5" required></textarea>
            <div id="messageError" class="error-message">Please Enter a Valid Message <i class="fa-solid fa-circle-exclamation"></i></div>
        </div>
        <!-- //input div end -->
        <input type="submit" class="contact-btn">
    </form>
</div>



                </div>
                <!-- // Contact Form Col 2 end //-->

            </div><!--row end-->
        </div><!--contact form container end-->



        <div class="contact-map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.6286043445207!2d55.34866747516403!3d25.283076128217395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d95dc0a1aa1%3A0xfd31ef7c3bc9f09c!2sDirham%20Car%20Rental!5e0!3m2!1sen!2s!4v1696611727255!5m2!1sen!2s" width="100%" height="420px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>




    </div>
</section>
@endsection
