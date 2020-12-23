@extends('layout.master')

@section('content')
    @include('layout.partial.data-tables')
@endsection

@push('scripts')
<script src=" {{asset('adminLTE/plugins/datatables/jquery.dataTables.js')}} "></script>
<script src=" {{asset('adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}} "></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush