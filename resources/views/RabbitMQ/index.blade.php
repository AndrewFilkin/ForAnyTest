@extends('layouts.IndexPage')

@section('body')

    <div class="list-group">
        <a href="{{ route('send.message.from.rabbitmq') }}"
           class="list-group-item list-group-item-action list-group-item-primary">Send</a>
    </div>
    <div class="list-group">
        <a href="{{ route('get.message.from.rabbitmq') }}"
           class="list-group-item list-group-item-action list-group-item-primary">Get</a>
    </div>

@stop
