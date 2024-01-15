@extends('frontend.partials.master')
@section('styles')

<link rel="stylesheet" href="{{asset('assets/css/frontcss/termscondition.css')}}">

@endsection
@section('content')
    <div class="container">
        

        @foreach ($term as $term)
            <div>
               <p>{!! $term->content !!}</p>
            </div>
            <hr>
        @endforeach
    </div>
@endsection