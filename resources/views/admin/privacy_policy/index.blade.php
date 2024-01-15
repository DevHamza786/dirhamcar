@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('admin.privacy-policy.edit') }}" class="btn btn-primary">Edit Privacy Policy Content</a>
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
                                                <th>Content</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @foreach($privacyPolicy as $index => $policy)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                
                                                    <td>{!! nl2br(strip_tags($policy->content)) !!}</td>
                                                    <!-- Add other table cells based on your model properties -->
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
