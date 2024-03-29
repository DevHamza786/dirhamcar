@extends('admin.layouts.app')


@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <a href="{{ route('admin.blog.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="needs-validation" action="{{ route('admin.blog.store') }}" method="post"
                                novalidate="" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $id !== '' ? $blog->id : '' }}" />
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Title</label>



                                            <input type="text" class="form-control"
                                                value="{{ $id !== '' ? $blog->title : old('title') }}" required=""
                                                id="title" name="title">


                                            <div class="invalid-feedback">
                                                Title
                                            </div>
                                        </div>

                                        <div class="form-group col-6">
                                            <label>Seo Title</label>



                                            <input type="text" class="form-control"
                                                value="{{ $id !== '' ? $blog->seo_title : old('seo_title') }}"
                                                required="" id="seo_title" name="seo_title">


                                            <div class="invalid-feedback">
                                                Seo Title
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>Description</label>
                                            <textarea class="form-control" required="" name="description"> {{ $id == '' ? old('description')  : $blog->description }}</textarea>
                                            <div class="invalid-feedback">
                                                Required Description
                                            </div>

                                        </div>
                                        <div class="form-group col-6">


                                            <label for="exampleFormControlSelect1">Categories</label>
                                            <select class="form-control" required="" id="categorie" name="categorie">

                                                @if ($id !== '')
                                                
                                                    <option {{$blog->categorie=='car' ? 'selected' : ''}} value="car">Car</option>
                                                    <option {{$blog->categorie=='travel' ? 'selected' : ''}} value="travel">Travel</option>
                                                    <option {{$blog->categorie=='museums' ? 'selected' : ''}} value="museums">Museums</option>
                                                    <option {{$blog->categorie=='mountains' ? 'selected' : ''}} value="mountains">Mountains</option>
                                                    <option {{$blog->categorie=='cultural-events' ? 'selected' : ''}} value="cultural-events">Cultural events</option>
                                                    <option {{$blog->categorie=='beauty-beaches' ? 'selected' : ''}} value="beauty-beaches">Beauty beaches</option>
                                                @else
                                                    <option value="car">Car</option>
                                                    <option value="travel">Travel</option>
                                                    <option value="museums">Museums</option>
                                                    <option value="mountains">Mountains</option>
                                                    <option value="cultural-events">Cultural events</option>
                                                    <option value="beauty-beaches">Beauty beaches</option>
                                                @endif


                                            </select>
                                            <div class="invalid-feedback">
                                                Oh no! Categories Name is invalid.
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
                                                    src="{{ asset('/assets/admin/cars/blog/' . $blog->car_image) }}"
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
                                                    <option {{ $blog->status == 1 ? 'selected' : '' }} value="1">
                                                        Active
                                                    </option>
                                                    <option {{ $blog->status == 0 ? 'selected' : '' }} value="0">
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
                                        <div class="form-group col-11">
                                            <label>Content</label>
                                            <div class="">
                                                <textarea name="content" class="summernote-simple">{{ $id=='' ?  old('content') :  $blog->content}}</textarea>
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
