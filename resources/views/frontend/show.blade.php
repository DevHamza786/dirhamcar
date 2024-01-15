@extends('frontend.partials.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('/assets/css/frontcss/h-frontend-clone.css') }}">
    
@endsection

@section('content')
    <div class='clearfix'></div>
    
        
          
    <div class="page-archive pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="page-content">
                        <div class="body-wrapper">
                            <div id="content-area">
                                <div class="container">
                                   
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <div class="page-content">
                                                
                                                <h1 id="carheading" class="title my-5">{{ $blogs->title }}</h1>
                                                <div class="page-content-inner">
                                                    <div id="singleBlogRoot">
                                <ul class="post-meta">
                                    <li> By Dirham Car Rental </li>
                                    <li> Published on {{ $blogs->created_at->format('F d, Y') }}</li>
                                </ul>
                                <div class="image">
                                    @if ($blogs->car_image)
                                        <img class="img-fluid"
                                            src="{{ asset('assets/admin/cars/blog/') . '/' . $blogs->car_image }}"
                                            alt="{{ $blogs->title }}">
                                    @endif
                                </div>
                                <p>{{ $blogs->description }}</p>
                                <p>{!! $blogs->content !!}</p>
                                                 
                                                </div>
                                            </div>
                                        </div>
                            
                                    </div>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
        
        
        
    
@endsection


