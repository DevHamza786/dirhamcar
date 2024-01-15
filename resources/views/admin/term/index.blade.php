<!-- resources/views/admin/term/index.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('admin.term.edit') }}" class="btn btn-primary">Add Term</a>
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
                                                <th>Content</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $ids = 1; @endphp
                                            @foreach ($terms as $term)
                                                <tr>
                                                    <td>{{ $ids++ }}</td>
                                                    <td>{!! nl2br(strip_tags($term->content)) !!}</td>
                                                    <td>
                                                        <a href="{{ route('admin.term.edit', ['id' => $term->id]) }}"
                                                            class="btn btn-sm btn-secondary buttons-csv">Edit</a>
                                                        <button class="btn btn-sm btn-danger" id="swal-6"
                                                            onclick="getdelete({{ $term->id }})">Delete</button>
                                                    </td>
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
        <div class="settingSidebar">
            <!-- ... (rest of your code) ... -->
        </div>
    </div>
    <script>
        // Add your JavaScript code here for sweetalert and toastr notifications
    </script>
@endsection
