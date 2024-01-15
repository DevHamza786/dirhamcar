
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You - Car Rental</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    
    body {
    /* font-family: Arial, sans-serif; */
    margin: 0;
    padding: 0;
    /* display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; */
    background-color:#f4f4f4;
    }
    
    .payment-heading {
        /* border: 2px solid black; */
        display: flex;
        align-items: center;
        justify-content: center;
        /* gap: 20px; */
        /* margin-bottom: 20px; */
        margin-top: 80px;
    }


        .payment-heading img {
            width: 60px;
        }
        .payment-heading h1{
        padding-right: 20px;
        font-size: 2rem;
        margin-bottom: 0px;
        }

        .container {
        text-align: center;
        }

        .content {
            /* height: 100; */
        opacity: 0;
        transform: translateY(-20px);
        }

        .heading {
        font-size: 1.5rem;
        font-weight: bolder;
        color: #0c4778;
        margin-bottom: 20px;
        }

    .order-details {
        margin-top: 54px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

        .image-container {
        margin-right: 20px;
        }


        .details {
        text-align: left;
        opacity: 0;
        }

        p{
        color:#42666d ;
        font-weight: 500;
        }

        .pymnt-btn{
        /* color: #007bff; */
            text-decoration: none;
            background-color: transparent;
            border: 1px solid;
            display: inline-block;
            padding: 10px 80px;
            border-radius: 10px;
            transition: all .2s;
            font-weight: 500;
            text-decoration: none !important;
            background-color: #0c4778;
            color: white;
            margin-top: 20px;
        }
        .pymnt-btn:hover{
        color: darkblue;
        background-color: white;
        }
        h2{
            font-size: 1.5rem;
            margin-bottom: 20px;
            color:#42666d;
          }

          @media (max-width:991px){
            .car-image{
                width: 320px;
            }
            .payment-heading h1 {
                padding-right: 20px;
                font-size: 1.6rem;
                margin-bottom: 0px;
            }
            .heading {
                font-size: 1.3rem;
                font-weight: bold;
                color: #0c4778;
                margin-bottom: 20px;
            }
            .payment-heading {
                /* border: 2px solid black; */
                display: flex;
                align-items: center;
                justify-content: center;
                /* gap: 20px; */
                margin-bottom: 5px;
                margin-top: 100px;
            }
            h2 {
                margin-bottom: 19px;
                color: #42666d;
                font-size: 1.05rem;
                font-weight: bolder;
            }
            p {
                font-size: .8rem;
                color: #42666d;
                margin-bottom: 10px;
                font-weight: 500;
            }
            .pymnt-btn {
                margin-top: 15px;
                /* color: #007bff; */
                text-decoration: none;
                background-color: transparent;
                border: 1px solid;
                display: inline-block;
                padding: 8px 50px;
                border-radius: 10px;
                transition: all .2s;
                font-weight: 500;
                text-decoration: none !important;
                background-color: #0c4778;
                color: white;
                font-size: .8rem;
            }
            .order-details {
                margin-top: 39px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .payment-heading img{
                width: 45px; 
            }
          }
          @media (max-width:576px){
            .order-details {
                margin-top: 39px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                gap: 25px;
            }
            .payment-heading {
                margin-top: 70px;
            }
            .details {
                text-align: center;
            }
          }
          @media (max-width:500px){
            .payment-heading img {
                width: 29px;
            }
            .heading {
                font-size: 1rem;
                font-weight: bold;
                color: #0c4778;
                margin-bottom: 20px;
            }
            .car-image {
                width: 270px;
            }
            .content {
                opacity: 0;
                transform: translateY(-20px);
                padding: 0px 10px;
            }
          }
          @media (max-width:430px){
            .payment-heading img {
                width: 22px;
            }
            .car-image {
                width: 200px;
            }
            .payment-heading h1 {
                padding-right: 8px;
                font-size: 1rem;
                margin-bottom: 2px;
            }

            .payment-heading img {
                width: 22px;
            }
            .heading {
                font-size: .8rem;
              
            }
            h2 {
                margin-bottom: 15px;
                color: #42666d;
                font-size: .8rem;
                font-weight: bolder;
            }
            .pymnt-btn {
                margin-top: 10px;
        
                font-size: .8rem;
            }
            .payment-heading {
                margin-top: 80px;
            }
          }

            .car-image{
              max-width: 400px;
              width: 100%;
            }
  </style>

</head>
<body>
  <div class="container">
    <div class="content">
      <div class="payment-heading">
        <h1 class="heading">	
            Your reservation has been Confirmed.</h1>
        <img class="check-img" src="{{asset('images')}}/paymentCheck.png" alt="">
      </div>
      <h1 class="heading">Your Wheels Await Rental Confirmed</h1>
      <div class="order-details">
        <div class="image-container">
          <img id="car-image" class="car-image" src="{{ $data['carimg'] }}" alt="Car Image">
        </div>
        <div id="car-details" class="details">
           <h2>{{ $data['car_model_name'] .' '. $data['car_model_year'] }}</h2>

          
            <p>Total Amount: {{ $data['amount'] }} {{ strtoupper($data['currency']) }} </p>


          <p>Pickup Location: {{ $data['pick_up'] }}</p>
          <p>Return Location: {{ $data['return_pickup'] }}</p>
          <p>Pickup Date Time: {{ $data['pickup_date'] }} {{ $data['pickup_time'] }}</p>
          <p>Return Date Time: {{ $data['return_date'] }} {{ $data['return_time'] }}</p>
          <a class="pymnt-btn" href="{{url('/')}}">Done</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script>
    // GSAP animations
gsap.to('.content', { opacity: 1, y: 0, duration: 1, ease: 'power2.out' });
gsap.to('.details', { opacity: 1, delay: 0.5, duration: 1, ease: 'power2.out' });
  </script>
</body>
</html>
