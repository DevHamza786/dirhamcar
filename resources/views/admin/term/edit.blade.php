<!-- resources/views/admin/term/edit.blade.php -->

@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('admin.term.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="needs-validation"
                            
                                action="{{ route('admin.term.update') }}"
                                method="post" novalidate="" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $term ? $term->id : '' }}" />
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Content</label>
                                            <textarea name="content" class="summernote" required="" name="content">{{ $term && $term->content ? $term->content : old('content') }}</textarea>
                                            <div class="invalid-feedback">
                                                Required Content
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8 m-auto">
                                        @if ($errors->any())
                                            <div>
                                                <ul class="alert alert-danger"
                                                    style="display: flex; justify-content: center; padding: 1rem 0rem;">
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
            <!-- ... (rest of your code) ... -->
        </div>
    </div>
@endsection
