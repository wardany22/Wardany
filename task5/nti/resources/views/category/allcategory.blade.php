@extends('layouts.parent')

@section('title', 'All Category')

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}" />
@endsection

@section('content')
<div class="col-12">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
</div>
<div class="col-12">
    <table class="table" id="example1">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Creation Date</th>
                <th scope="col">Update Date</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $cat)
            <tr>
                <th>{{$cat->id}}</th>
                <td>{{$cat->name_en}} - {{$cat->name_ar}}</td>
                <td>{{$cat->status == 1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$cat->created_at}}</td>
                <td>{{$cat->updated_at}}</td>
                <td>
                    <a class="btn btn-outline-warning" href=""> Edit </a>
                    <form action="" method="post">
                        @csrf
                        @method('Delete')
                        <button class="btn btn-outline-danger">Delete</button>
                    </form>

                    <!-- <a class="btn btn-outline-danger" href=""> Delete </a> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
    $(function() {
        $("#example1")
            .DataTable({
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
            })
            .buttons()
            .container()
            .appendTo("#example1_wrapper .col-md-6:eq(0)");
    });
</script>
@endsection