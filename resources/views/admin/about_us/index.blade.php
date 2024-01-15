@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('admin.about-us.edit') }}" class="btn btn-primary">Add About Us Content</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Meta Title</th>
                                                <th>Meta Description</th>
                                                <th>Content</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $ids = 1;
                                            @endphp
                                            @foreach ($aboutUsContent as $content)
    <tr>
        <td>{{ $ids++ }}</td>
        @if ($content)  <!-- Check if $content is not false -->
            <td>{{ $content->meta_title }}</td>
            <td>{{ $content->meta_description }}</td>
            <td>{!! nl2br(strip_tags($content->content)) !!}</td>
            
            <td>
                <a href="{{ route('admin.about-us.edit', ['id' => $content->id]) }}" class="btn btn-sm btn-secondary buttons-csv">Edit</a>
                <button class="btn btn-sm btn-danger" onclick="getdelete({{ $content->id }})">Delete</button>
            </td>
        @else
            <td colspan="6">No data available.</td>
        @endif
    </tr>
@endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>