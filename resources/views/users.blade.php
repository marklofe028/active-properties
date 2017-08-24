@extends('layouts.master')

@section('content')
    <div class="row justify-content-md-center">
        <div class="col-md">
            {!! $dataTable->table(['class' => 'table table-bordered table-responsive responsive']) !!}
        </div>
    </div>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.datatables.net/buttons/1.4.0/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.4.0/js/buttons.html5.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
    {!! $dataTable->scripts() !!}
@endpush