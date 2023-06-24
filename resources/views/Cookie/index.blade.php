@extends('layouts.IndexPage')

@section('body')
    <div class="list-group">
        <a href="{{route('cookie.set')}}" class="list-group-item list-group-item-action list-group-item-primary">Cookie Set</a>
    </div>
    <div class="list-group">
        <a href="{{route('cookie.get')}}" class="list-group-item list-group-item-action list-group-item-primary">Cookie Get</a>
    </div>
@stop
