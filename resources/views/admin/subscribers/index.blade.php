<!-- resources/views/admin/contacts/index.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <!-- Add any additional buttons or content as needed -->
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
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Email</th>
                                                <th>Created At</th>
                                                <!-- Add any additional columns as needed -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $ids = 1;
                                            @endphp
                                            @foreach ($contactss as $contact)
                                                <tr>
                                                    <td>{{ $ids++ }}</td>
                                                    <td>{{ $contact->email }}</td>
                                                    <td>{{ $contact->created_at }}</td>
                                                    <td style="display: flex;padding: 22px 0px;">
                                                        <button class="btn btn-sm btn-danger"
                                                            onclick="getdelete({{ $contact->id }})">Delete</button>
                                                    </td
                                                    
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
    </div>
    
@endsection
