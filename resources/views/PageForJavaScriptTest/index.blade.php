@extends('layouts.IndexPage')

@push('custom-scripts')
    <script type="module" src="{{ URL::asset('my-js/main.js')}}"></script>
@endpush
@section('body')

@stop
