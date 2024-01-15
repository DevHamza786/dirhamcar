@extends('admin.layouts.app')


@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <a href="{{ route('admin.carType.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="needs-validation" action="{{ route('admin.carType.store') }}" method="post"
                                novalidate="" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $id !== '' ? $carType->id : '' }}" />
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Name</label>



                                            <input type="text" class="form-control"
                                                value="{{ $id !== '' ? $carType->name : old('name') }}" required=""
                                                id="name" name="name">


                                            <div class="invalid-feedback">
                                                Name
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Price Aed</label>
                                            <input type="number" class="form-control"
                                                value="{{ $id !== '' ? $carType->price_aed : old('price_aed') }}"
                                                required="" id="price_aed" name="price_aed">
                                            <div class="invalid-feedback">
                                                Price Aed
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="form-group col-6">
                                            <label>Price Usd</label>
                                            <input type="number" class="form-control"
                                                value="{{ $id !== '' ? $carType->price_usd : old('price_usd') }}"
                                                required="" id="price_usd" name="price_usd">

                                            <div class="invalid-feedback">
                                                Price Aed
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Icon Image</label>
                                            <input type="file" type="file" class="form-control"
                                                accept=".jpg, .png, image/jpeg, image/png" multiple id="icon_image"
                                                name="icon_image" {!! $id == '' ? 'required' : '' !!}>
                                            @if ($id !== '')
                                                <img style="width: 100px;height: 50px;"
                                                    src="{{ asset('/assets/admin/cars/' . $carType->car_icon) }}"
                                                    alt="Car Icon">
                                            @endif
                                            <div class="invalid-feedback">
                                                Oh no! Icon Image is invalid.
                                            </div>


                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Car Image</label>
                                            <input type="file" type="file" class="form-control"
                                                accept=".jpg, .png, image/jpeg, image/png" multiple id="car_image"
                                                name="car_image" {!! $id == '' ? 'required' : '' !!} value="{{ old('car_image') }}">
                                                @if ($id !== '')
                                                <img style="width: 100px;height: 50px;"
                                                    src="{{ asset('/assets/admin/cars/' . $carType->car_image) }}"
                                                    alt="Car Icon">
                                            @endif
                                            <div class="invalid-feedback">
                                                Oh no! Car Image is invalid.
                                            </div>


                                        </div>


                                        <div class="form-group col-6">


                                            <label for="exampleFormControlSelect1">Status</label>
                                            <select class="form-control" required="" id="status" name="status">

                                                @if ($id !== '')
                                                    <option {{ $carType->status == 1 ? 'selected' : '' }} value="1">
                                                        Active
                                                    </option>
                                                    <option {{ $carType->status == 0 ? 'selected' : '' }} value="0">
                                                        Inactive</option>
                                                @else
                                                    <option selected value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                @endif


                                            </select>
                                            <div class="invalid-feedback">
                                                Oh no! Status Name is invalid.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 m-auto">


                                    @if ($errors->any())
                                        <div>
                                            <ul class="alert alert-danger"
                                                style="display: flex;
                                            justify-content: center;
                                            padding: 1rem 0rem;">
                                                @foreach ($errors->all() as $error)
                                                    <li style="list-style: none;">{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="card-footer">
                                    <input type="submit" value="Submit" class="btn btn-primary" />
                                </div>
                            </form>
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
@endsection
