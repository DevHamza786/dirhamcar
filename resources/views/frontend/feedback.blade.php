@extends('frontend.partials.master')
@section('styles')
<link rel="stylesheet" href="/public/assets/css/frontcss/feedback.css">
@endsection
@section('content')

<div class="feedback-container">
        
        <div class="feedback-heading">

            <h1>We Value Your Feedback.</h1>
            <h2>Share With Us Your Dirham Experience.</h2>
            
        </div>

        <div class="feedback-content px-3 py-4 py-md-5 px-md-5 mt-4 mx-auto">
            <p>Please share feedback about our website below. <span>To receive customer service or share feedback about a rental experience, please visit our <a class="clr-primary fw-bold" href="contact.php">Contact Us</a> Page</span> </p>

            <p><span>Please Rate Your Experience Today.1*</span></p>
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


            <form class="feedback-form" action="/feedback-store" method="post">
                 @csrf
    <label for="">Share Feedback.</label>
    <select required="" class="form-select" aria-label="Default select example" name="share">
        <option disabled="" selected="">Select</option>
        <option value="Booking">Booking</option>
        <option value="Payment">Payment</option>
        <option value="Overall Features">Overall Features</option>
        <option value="Customer Experience">Customer Experience</option>
    </select>

    <div class="feedback-input-div my-3">
        <div>
            <label for="">Email</label> <br>
            <input type="email" name="email" required="">
        </div>

        <div>
            <label for="">Contact No</label> <br>
            <input type="tel" required="" name="contact">
        </div>
    </div>

    <label class="ps-0 mb-3">Please Explain Your Feedback.</label>
    <p>Please provide as much information as possible to help us understand your experience.</p>
    <p>Please do not include personal information such as name, email, or phone numbers.</p>

    <textarea required="" name="message" id="" placeholder="Feedback Message" rows="5"></textarea>

    <input class="feedback-btn" type="submit">
</form>




           

        </div>

    </div>

<div class='clearfix'></div>



@endsection

