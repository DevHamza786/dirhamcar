@extends('admin.layouts.app')


@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <a href="{{ route('admin.car.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="needs-validation" action="{{ route('admin.car.store') }}" method="post"
                                novalidate="" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $id !== '' ? $car->id : '' }}" />
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Model</label>

                                            <input type="text" class="form-control"
                                                value="{{ $id !== '' ? $car->model : old('model') }}" required=""
                                                id="model" name="model">


                                            <div class="invalid-feedback">
                                                Model Required
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Year</label>

                                            <input type="text" class="form-control"
                                                value="{{ $id !== '' ? $car->year : old('year') }}" required=""
                                                id="year" name="year">


                                            <div class="invalid-feedback">
                                                Year Required
                                            </div>
                                        </div>



                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Gear Shift</label>

                                            <input type="text" class="form-control"
                                                value="{{ $id !== '' ? $car->gear_shift : old('gear_shift') }}"
                                                required="" id="gear_shift" name="gear_shift">


                                            <div class="invalid-feedback">
                                                Gear Shift Required
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Baggage</label>

                                            <input type="number" class="form-control"
                                                value="{{ $id !== '' ? $car->baggage : old('baggage') }}" required=""
                                                id="baggage" name="baggage">


                                            <div class="invalid-feedback">
                                                Baggage Required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Door</label>

                                            <input type="number" class="form-control"
                                                value="{{ $id !== '' ? $car->door : old('door') }}" required=""
                                                id="door" name="door">


                                            <div class="invalid-feedback">
                                                Door Required
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Car Detail</label>
                                            <textarea class="form-control"  name="car_detail">{{ $id == '' ? old('car_detail') : $car->car_detail }}</textarea>
                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Price Aed</label>
                                            <input type="number" step="0.01" class="form-control"
                                                value="{{ $id !== '' ? $car->price_aed : old('price_aed') }}" required=""
                                                id="price_aed" name="price_aed">
                                            <div class="invalid-feedback">
                                                Price Aed Required
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Price Usd</label>
                                            <input type="number" step="0.01" class="form-control"
                                                value="{{ $id !== '' ? $car->price_usd : old('price_usd') }}"
                                                required="" id="price_usd" name="price_usd">

                                            <div class="invalid-feedback">
                                                Price Aed Required
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Car Image</label>
                                            <input type="file" type="file" class="form-control"
                                                accept=".jpg, .png, image/jpeg, image/png" multiple id="car_image"
                                                name="car_image[]" {!! $id == '' ? 'required' : '' !!} value="{{ old('car_image') }}">
                                            @if ($id !== '')
                                             @php
                                         $imageArray = explode(',', $car->car_image);
                                       
                                                    @endphp
                                                    
                                                    @foreach($imageArray as $images)
                                                <img style="width: 100px;height: 50px;"
                                                    src="{{ asset('/assets/admin/cars/' . $images) }}"
                                                    alt="Car Icon">
                                                    @endforeach
                                            @endif
                                            <div class="invalid-feedback">
                                                Oh no! Car Image is invalid.
                                            </div>


                                        </div>
                                        <div class="form-group col-6">


                                            <label for="exampleFormControlSelect1">Car Type</label>
                                            <select class="form-control" required="" id="car_type_id"
                                                name="car_type_id">

                                                @if ($id !== '')
                                                    <option selected value="">select car types</option>
                                                    @foreach ($carTypes as $list)
                                                        <option {{ $list->id == $car->car_type_id ? 'selected' : '' }}
                                                            value="{{ $list->id }}">{{ $list->name }}</option>
                                                    @endforeach
                                                @else
                                                    <option selected value="">select car types</option>
                                                    @foreach ($carTypes as $list)
                                                        <option value="{{ $list->id }}">{{ $list->name }}</option>
                                                    @endforeach
                                                @endif


                                            </select>
                                            <div class="invalid-feedback">
                                                Oh no! Car Image Type is invalid.
                                            </div>

                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Milage</label>

                                            <input type="text" class="form-control"
                                                value="{{ $id !== '' ? $car->milage : old('milage') }}" required=""
                                                id="mileage" name="mileage">


                                            <div class="invalid-feedback">
                                                Milage Required
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Car Color</label>


                                            <input type="text" class="form-control"
                                                value="{{ $id !== '' ? $car->car_color : old('car_color') }}"
                                                required="" id="car_color" name="car_color">
                                            <div class="invalid-feedback">
                                                Car Color Required
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Tax : Paylater</label>

                                            <input type="text" class="form-control"
                                                value="{{ $id !== '' ? $car->tax : '10 %' }}" required=""
                                                id="tax" name="tax">


                                            <div class="invalid-feedback">
                                                Tax Required
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Branches</label>
                                            <select class="form-control" required="" id="branches" name="branches">


                                                @if ($id !== '')
                                                    <option {{ $car->branches == 1 ? 'selected' : '' }}
                                                        value="0">
                                                        Abu Hail Branch
                                                    </option>
                                                    <option {{ $car->branches == 0 ? 'Palm Jumeirah Branch' : '' }}
                                                        value="1">
                                                        Palm Jumeirah Branch
                                                    </option>
                                                @else
                                                    <option selected>
                                                        select branch
                                                    </option>
                                                    <option value="0">Abu Hail Branch</option>
                                                    <option value="1">Palm Jumeirah Branch
                                                    </option>
                                                @endif
                                            </select>
                                            <div class="invalid-feedback">
                                                Oh no! Branch Name is invalid.
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Title</label>

                                            <input type="text" class="form-control"
                                                value="{{ $id !== '' ? $car->title : old('title') }}" required=""
                                                id="title" name="title">


                                            <div class="invalid-feedback">
                                                Title Required
                                            </div>
                                        </div>

                                        <div class="form-group col-6">


                                            <label for="exampleFormControlSelect2">Car Features</label>
                                            <select class="form-control selectric" id="car_feature_id"
                                                name="car_feature_id[]" multiple>

                                                @if ($id !== '')
                                                  @foreach ($carFeatures as $list)
                                                  @if(in_array($list->id,$carFeatureSingle))
                                                  @php
                                                  $statusId="selected";
                                                  @endphp
                                                  @else
                                                   @php
                                                  $statusId="";
                                                  @endphp
                                                  @endif
                                                    <option {{$statusId}} {{ $list->id }} value="{{ $list->id }}">{{$list->name}}</option>      
                                                    @endforeach
                                                    @foreach($carFeatureSingle as $list2)
                                                   
                                           

                                                  
                                                    @endforeach
                                                      
                                             
                                                @else
                                                    <option value="">select car features</option>
                                                    @foreach ($carFeatures as $list)
                                                        <option value="{{ $list->id }}">{{ $list->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>

                                            <div class="invalid-feedback">
                                                Oh no! Car Features Type Required.
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Meta Title</label>

                                            <input type="text" class="form-control"
                                                value="{{ $id !== '' ? $car->meta_title : old('meta_title') }}"
                                                 id="meta_title" name="meta_title">


                                            <div class="invalid-feedback">
                                                Meta Title Required
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Passager</label>

                                            <input type="number" class="form-control"
                                                value="{{ $id !== '' ? $car->passager : old('passager') }}"
                                                required="" id="passager" name="passager">


                                            <div class="invalid-feedback">
                                                Passager Required
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Seo Content</label>
                                            <div class="">
                                                <textarea name="seo_content" class="summernote-simple">{{ $id == '' ? old('seo_content') : $car->seo_content }}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Meta Description</label>
                                            <div class="">
                                                <textarea name="meta_description" class="summernote-simple">{{ $id == '' ? old('meta_description') : $car->meta_description }}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="form-group col-6">


                                            <label for="exampleFormControlSelect1">Status</label>
                                            <select class="form-control" required="" id="status" name="status">

                                                @if ($id !== '')
                                                    <option {{ $car->status == 1 ? 'selected' : '' }} value="1">
                                                        Active
                                                    </option>
                                                    <option {{ $car->status == 0 ? 'selected' : '' }} value="0">
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
                                    <div class="row">

                                        <div class="form-group col-6">


                                           <label class="custom-switch mt-2">
                        <input type="checkbox" {{$id !== '' ? $car->is_feature==1 ? "checked" : "" : ''}} name="features_status" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">Is Features</span>
                      </label>

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
