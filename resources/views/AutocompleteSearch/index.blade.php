@extends('layouts.IndexPage')

@section('body')
    <div class="container">
        <h1>Laravel 9 Autocomplete Search from Database - ItSolutionStuff.com</h1>
        <input class="typeahead form-control" id="search" type="text">
    </div>

    <script type="text/javascript">
        var path = "{{ route('autocompleteSearch') }}";

        $('#search').typeahead({
            source: function (query, process) {
                return $.get(path, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });

    </script>
@stop
