@extends('admin.layouts.app')


@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <a href="{{ route('admin.feature.create') }}" class="btn btn-primary">Add Features</a>
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
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                                $ids = 1;
                                            @endphp
                                            @foreach ($carFeatures as $list)
                                                <tr>
                                                    <td>{{ $ids++ }}</td>
                                                    <td>{{ $list->name }}</td>
                                                    <td>
                                                        <img style="width: 100px;height: 50px;"
                                                            src="{{ asset('/assets/admin/cars/feature/' . $list->car_image) }}"
                                                            alt="Car Image">
                                                    </td>


                                                    <td>
                                                        {!! $list->status == 1
                                                            ? '<a href="#" class="btn btn-sm btn-success">Active</a>'
                                                            : '<a href="#" class="btn btn-sm btn-danger">Inactive</a>' !!}
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('admin.feature.edit', ['id' => $list->id]) }}"
                                                            class="btn btn-sm btn-secondary buttons-csv">Edit</a>

                                                        <button class="btn  btn-sm btn-danger" id="swal-6"
                                                            onclick="getdelete({{ $list->id }})">Delete</button>

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
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Select Layout</h6>
                        <div class="selectgroup layout-color w-50">
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="1"
                                    class="selectgroup-input-radio select-layout" checked>
                                <span class="selectgroup-button">Light</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="2"
                                    class="selectgroup-input-radio select-layout">
                                <span class="selectgroup-button">Dark</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Sidebar Color</h6>
                        <div class="selectgroup selectgroup-pills sidebar-color">
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="1"
                                    class="selectgroup-input select-sidebar">
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="2"
                                    class="selectgroup-input select-sidebar" checked>
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Color Theme</h6>
                        <div class="theme-setting-options">
                            <ul class="choose-theme list-unstyled mb-0">
                                <li title="white" class="active">
                                    <div class="white"></div>
                                </li>
                                <li title="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li title="black">
                                    <div class="black"></div>
                                </li>
                                <li title="purple">
                                    <div class="purple"></div>
                                </li>
                                <li title="orange">
                                    <div class="orange"></div>
                                </li>
                                <li title="green">
                                    <div class="green"></div>
                                </li>
                                <li title="red">
                                    <div class="red"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="mini_sidebar_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Mini Sidebar</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="sticky_header_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Sticky Header</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                            <i class="fas fa-undo"></i> Restore Default
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            @if (session('success'))
                iziToast.show({
                    title: 'New Success Message',
                    message: "{{ session('success') }}",
                    theme: 'success',
                    position: 'topRight',
                    timeout: 5000,
                    progressBarColor: '#4CAF50',
                });
            @endif






        });

        function getdelete(id) {
            swal({
                    title: 'Are you sure?',
                    text: 'Are you sure you want to delete this row?',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        $.ajax({
                            url: "{{ route('admin.feature.destory') }}",
                            type: "get",
                            data: {
                                id: id
                            },
                            success: function(response) {

                                    iziToast.show({
                                        title: 'New Success Message',
                                        message: "{{ session('error') }}",
                                        theme: 'success',
                                        position: 'topRight',
                                        timeout: 5000,
                                        progressBarColor: '##fb160a',
                                    });

                                swal('Row has been deleted!', {
                                    icon: 'success',
                                });
                                window.location.href = "{{ route('admin.feature.index') }}";
                            }
                        });

                    } else {
                        swal('Your imaginary file is safe!');
                    }
                });
        }
    </script>
@endsection
