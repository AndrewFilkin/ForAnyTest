@extends('layouts.IndexPage')
@section('body')

    <div class="list-group">
        <a href="{{route('autocompleteSearch.index')}}" class="list-group-item list-group-item-action list-group-item-primary">Autocomplete Search</a>
    </div>
    <div class="list-group">
        <a href="{{route('sendmail.index')}}" class="list-group-item list-group-item-action list-group-item-primary">Send Email</a>
    </div>

@stop
