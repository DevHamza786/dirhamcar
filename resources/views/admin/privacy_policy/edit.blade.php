@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('admin.privacy-policy.index') }}" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="needs-validation" action="{{ route('admin.privacy-policy.update') }}" method="post"
                                novalidate="" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ isset($privacyPolicy) ? $privacyPolicy->id : '' }}" />
                                <div class="card-body">
                                    
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Privacy Policy Content</label>
                                            <textarea name="content" class="summernote-simple" required="" name="content">
                                                {{ isset($privacyPolicy) ? $privacyPolicy->content : old('content') }}
                                            </textarea>
                                            <div class="invalid-feedback">
                                                Required Content
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add other fields as needed -->

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
        <!-- Add your sidebar and theme setting code if needed -->
    </div>
@endsection

<script src="/assets/tinymce/tinymce.min.js"></script>

<script>
    tinymce.init({
        selector: 'textarea.summernote-simple',
        plugins: [
            'link image',
            'media',
            'code',
            'table'
        ],
        toolbar: [
            'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | link image media | code table'
        ],
        formats: {
            bold: { inline: 'b' },
            italic: { inline: 'i' },
            underline: { inline: 'u' },
            strikethrough: { inline: 'strike' },
            alignleft: { block: 'div', styles: { textAlign: 'left' } },
            aligncenter: { block: 'div', styles: { textAlign: 'center' } },
            alignright: { block: 'div', styles: { textAlign: 'right' } },
            alignjustify: { block: 'div', styles: { textAlign: 'justify' } },
        },
        // Add other configuration options as needed
    });
</script>
