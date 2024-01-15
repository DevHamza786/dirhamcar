@extends('frontend.partials.master')
@section('styles')

<link rel="stylesheet" href="{{asset('assets/css/frontcss/blogs.css')}}">

@endsection
@section('content')




    <div class='clearfix'></div>

<body class="awe-booking" cz-shortcut-listen="true">

   

    <div class="body-wrapper">
     
        <div id="content-area">
            <div class="page-archive pb-4">
                <div class="blogs-banner">
                    <img src="images/blog-images/blog main image.jpg" alt="">
                </div>
                <div class="container">
                   
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="page-content">
                                <h1 class="page-title my-5">Blogs</h1>
                                <div class="page-content-inner">
                                    <div class="row gy-4" id="blogtroot">
                                        
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
                                       
                                        
                                        <!-- // Blog  Card 1 -->
                                        <!-- <div class="col-md-6">
                                            <div class="flex-center">
                                                <a href="single-blog.php">
                                                    <div class="blogs-card">
                                                        <div class="blog-card-img">
                                                            <img src="images/blog-images/blog-2.jpg" alt="">
                                                             <p class="blog-img-title">09-12-2022</p>
                                                         </div>
                                                        <div class="blog-card-text">
                                                            <p class="blog-title">Mercedes Benz AMG GT</p>
                                                            <p class="blog-desc">Finding the best car rental and rental solution in the Emirates is easier than ever today...</p>
                                                            <button class="blog-btn">View details <i class="fa-solid fa-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div> -->
                                        <!-- // Blog  Card 1 End -->
                                       
                                        
                                        <!-- // Blog  Card 1 -->
                                        <!-- <div class="col-md-6">
                                            <div class="flex-center">
                                                <a href="single-blog.php">
                                                    <div class="blogs-card">
                                                        <div class="blog-card-img">
                                                            <img src="images/blog-images/blog-3.jpg" alt="">
                                                             <p class="blog-img-title">09-12-2022</p>
                                                         </div>
                                                        <div class="blog-card-text">
                                                            <p class="blog-title">Mercedes Benz AMG GT</p>
                                                            <p class="blog-desc">Finding the best car rental and rental solution in the Emirates is easier than ever today...</p>
                                                            <button class="blog-btn">View details <i class="fa-solid fa-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div> -->
                                        <!-- // Blog  Card 1 End -->
                                       
                                        
                                        <!-- // Blog  Card 1 -->
                                        <!-- <div class="col-md-6">
                                            <div class="flex-center">
                                                <a href="single-blog.php">
                                                    <div class="blogs-card">
                                                        <div class="blog-card-img">
                                                            <img src="images/blog-images/blog-4.jpg" alt="">
                                                             <p class="blog-img-title">09-12-2022</p>
                                                         </div>
                                                        <div class="blog-card-text">
                                                            <p class="blog-title">Mercedes Benz AMG GT</p>
                                                            <p class="blog-desc">Finding the best car rental and rental solution in the Emirates is easier than ever today...</p>
                                                            <button class="blog-btn">View details <i class="fa-solid fa-arrow-right"></i></button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div> -->
                                        <!-- // Blog  Card 1 End -->
                                       
                                        
                                   
                                        
                               

                                    </div><!--row end--> 


                                    <!--<div class="blogs-pagination">-->
                                        
                                    <!--    <div class="pagination d-none" >-->
                                    <!--        <ul>  </ul>-->
                                    <!--    </div>-->
                                        
                                    <!--  <nav aria-label="...">-->
                                    <!--        <ul class="pagination pagination-lg">-->
                                    <!--            <li class="page-item active" aria-current="page">-->
                                    <!--                <span class="page-link">1</span>-->
                                    <!--            </li>-->
                                    <!--            <li class="page-item"><a class="page-link" href="#">2</a></li>-->
                                    <!--            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                                    <!--        </ul>-->
                                    <!--    </nav> -->
                                    <!--</div><!--Pagination end-->

                                    </div><!--page inner content end--> 
                                  
                                </div>
                            </div>
                            <?php
                            /*
                            <div class="col-12 col-lg-3">
                            <div class="page-sidebar">

                                <div class="widget-item category">
                                    <h3 class="widget-title">Categories</h3>
                                    <div class="widget-content widget-content-ul">
                                        
                                        <a href="#">Cars</a>
                                        <a href="#">Travel</a> <a
                                            href="#">Museums</a> <a
                                            href="#">Mountains</a> <a
                                            href="#">Cultural events</a>
                                        <a href="#">Beauty beaches</a>
                                    </div>
                                </div>

                                <div class="widget-item post-recent">
                                    <h3 class="widget-title">Recent posts</h3>
                                    <div class="widget-content">

                                        <div class="post-item">
                                            <div class="thumbnail-wrapper"> <a
                                                    href="#"> <img
                                                        src="images/blog-images/blog-1.jpg"
                                                        alt="Mercedes Benz AMG GT" class="img-fluid"> </a> </div>
                                            <div class="content">
                                                <h3 class="title"> <a
                                                        href="#">Mercedes
                                                        Benz AMG GT</a> </h3>
                                                <p class="date">Aug 13, 2022</p>
                                            </div>
                                        </div>

                                        <div class="post-item">
                                            <div class="thumbnail-wrapper"> <a
                                                    href="#"> <img
                                                        src="images/blog-images/blog-2.jpg"
                                                        alt="What Is The Best Used Car To Buy?" class="img-fluid"> </a>
                                            </div>
                                            <div class="content">
                                                <h3 class="title"> <a
                                                        href="#">What
                                                        Is The Best Used Car To Buy?</a> </h3>
                                                <p class="date">Jun 12, 2022</p>
                                            </div>
                                        </div>

                                        <div class="post-item">
                                            <div class="thumbnail-wrapper"> <a
                                                    href="#">
                                                    <img src="blog-asset/d39425ab-ea12-4eec-9bc4-7e15ef8dc21f-1-1653927996-100x100.jpg"
                                                        alt="How Bad Can Cheap Old Luxury Cars Like The BMW 7, Mercedes S And Lexus LS Be At Off-Roading?"
                                                        class="img-fluid"> </a> </div>
                                            <div class="content">
                                                <h3 class="title"> <a
                                                        href="#">How
                                                        Bad Can Cheap Old Luxury Cars Like The BMW 7, Mercedes S And
                                                        Lexus LS Be At Off-Roading?</a> </h3>
                                                <p class="date">Jun 12, 2022</p>
                                            </div>
                                        </div>

                                        <!-- <div class="post-item">
                                            <div class="thumbnail-wrapper"> <a
                                                    href="#">
                                                    <img src="blog-asset/2-1650624032-100x100.jpg"
                                                        alt="Rent a Porsche Cayenne" class="img-fluid"> </a> </div>
                                            <div class="content">
                                                <h3 class="title"> <a
                                                        href="#">Rent
                                                        a Porsche Cayenne</a> </h3>
                                                <p class="date">Jun 11, 2022</p>
                                            </div>
                                        </div>

                                        <div class="post-item">
                                            <div class="thumbnail-wrapper"> <a
                                                    href="#">
                                                    <img src="blog-asset/2-1650624032-100x100.jpg"
                                                        alt="Why are there Abandoned Supercars in Dubai and What happens to those Supercars?"
                                                        class="img-fluid"> </a> </div>
                                            <div class="content">
                                                <h3 class="title"> <a
                                                        href="#">Why
                                                        are there Abandoned Supercars in Dubai and What happens to those
                                                        Supercars?</a> </h3>
                                                <p class="date">Jun 05, 2022</p>
                                            </div>
                                        </div> -->

                                    </div>
                                </div>

                                <div class="widget-item">
                                    <a href="#"><img src="blog-asset/5-1648298430.jpeg" alt="Widget sidebar" class="img-fluid img-side-page-last"></a> 
                                </div>

                            </div>
                        </div>
                            */
                            ?>
                        
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    
    <script src="js/blog.js"></script>

</body>
   

@endsection

   
