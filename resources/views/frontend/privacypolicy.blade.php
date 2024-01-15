@extends('frontend.partials.master')
@section('styles')

<link rel="stylesheet" href="{{asset('assets/css/frontcss/termscondition.css')}}">

@endsection
@section('content')

<div class="container">
        
        
        

            <div class="text-tc-1">
                
                
                
                @if(isset($noPolicy) && $noPolicy)
                                    <p>No privacy policy found.</p>
                                @else
                                    
                                    <p>{!! $privacyPolicy->content !!}</p>
                                    <!-- Add other content fields if needed -->
                                @endif
    
                    
            </div>
    </div>
@endsection