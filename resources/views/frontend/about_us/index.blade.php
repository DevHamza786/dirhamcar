<!-- resources/views/admin/about_us/index.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title">About Us Content</h5>
                                <p class="card-text">{{ $aboutUs->content ?? 'No content available' }}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
