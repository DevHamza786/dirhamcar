@extends('admin.layouts.app')

@section('content')
    <!-- resources/views/admin/about_us/edit.blade.php -->

    <form action="{{ route('about_us.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <label for="content">Content:</label>
        <textarea name="content" id="content">{{ $aboutUs->content ?? '' }}</textarea>

        <label for="image">Image:</label>
        <input type="file" name="image" id="image">

        @if ($aboutUs && $aboutUs->image)
            <img src="{{ asset('assets/admin/cars/aboutUs/') . '/' . $aboutUs->image }}" alt="About Us Image">
        @endif

        <button type="submit">Save</button>
    </form>
@endsection
