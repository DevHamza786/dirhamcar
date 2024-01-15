@extends('admin.layouts.app')

@section('content')

<style>
    .td-flex{
        display:flex;
        align-items:center;
        justify-content:center;
        gap:20px;
    }
</style>

    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('admin.policy.create') }}" class="btn btn-primary">Add policy</a>
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
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $ids = 1; @endphp
                                            @foreach ($policys as $list)
                                                <tr>
                                                    <td>{{ $ids++ }}</td>
                                                    <td>{{ $list->title }}</td>
                                                    <td>{{ $list->description }}</td>
                                                    <td>
                                                    {!! $list->is_featured == 1
                                                        ? '<a href="#" class="btn btn-sm btn-success">Yes</a>'
                                                        : '<a href="#" class="btn btn-sm btn-danger">No</a>' !!}
                                                     </td>
                                                    <td>
                                                        {!! $list->status == 1
                                                            ? '<a href="#" class="btn btn-sm btn-success">Active</a>'
                                                            : '<a href="#" class="btn btn-sm btn-danger">Inactive</a>' !!}
                                                    </td>
                                                    <td class="td-flex">
                                                        <a href="{{ route('admin.policy.edit', ['id' => $list->id]) }}"
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
            <!-- ... (rest of your code) ... -->
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
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "{{ route('admin.policy.destory') }}",
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
                            window.location.href = "{{ route('admin.policy.index') }}";
                        }
                    });
                } else {
                    swal('Your imaginary file is safe!');
                }
            });
        }
    </script>
@endsection
