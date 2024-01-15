@extends('frontend.partials.master')
@section('styles')

<link rel="stylesheet" href="{{asset('assets/css/frontcss/branches.css')}}">

@endsection
@section('content')




    <div class='clearfix'></div>

 <div class="branch-container px-3 px-md-0">

        <div class="container">

            <div class="branch-heading" >
                <h1>Our Branches</h1>
                <p>Exploring made easy, branch to branch</p>
            </div>


            <!-- <div> -->
                <button id="mainBranchBtn" class="btn branch-btn" onclick="showBranches(1)"><i class="fa-light fa-building"></i> Abu Hail Branch </button>
                <button id="subBranchBtn" class="btn branch-btn" onclick="showBranches(0)"><i class="fa-thin fa-buildings"></i> Palm Jumeirah Branch</button>
            <!-- </div> -->

            <div class="over-hidden" id="over-hidden">
                <div id="mainBranch">
                


                    <div class="sub-heading">
                        <h2>Abu Hail Branch</h2>
                        <p>Address : <span>15 C ST Abu Hail Hor Al Anz East, Diera Dubai, UAE</span></p>
                        <p>Phone : <span>+971 50 288 5566</span></p>
                    </div>
                    
                    <iframe class="border" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1803.814666914867!2d55.3496276!3d25.2830516!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d95dc0a1aa1%3A0xfd31ef7c3bc9f09c!2sDIRHAM%20CAR%20RENTAL%20-%20DUBAI%20%7C%20UAE.!5e0!3m2!1sen!2s!4v1701946582287!5m2!1sen!2s" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                     
                </div>
            </div>


            <div class="over-hidden" id="over-hidden2">

                <div id="subBranch">
                    <div class="sub-heading">
                    <h2>Palm Jumeirah Branch</h2>
                        <p>Address : <span>Dukes Hotel, Palm Jumeirah Dubai, UAE</span></p>
                        <p>Phone : <span>+971 56 695 5172</span></p>
                      </div>

                    <!--<iframe class="border" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.685164207559!2d55.13543727538991!3d25.112516677765676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6bc54d2458a7%3A0x674f830a935cb5d8!2sDukes%20The%20Palm%2C%20a%20Royal%20Hideaway%20Hotel!5e0!3m2!1sen!2s!4v1697817219751!5m2!1sen!2s" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                    <iframe class="border" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14450.739850357448!2d55.1380352!3d25.1125235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f15dced84478f%3A0xd736ed787186113e!2sDirham%20Car%20Rental!5e0!3m2!1sen!2s!4v1701946501245!5m2!1sen!2s" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                 
                
                </div>
            </div>
            
        </div>
            
    </div>
      <script src="/assets/js/branches.js"></script>
   

@endsection

   
