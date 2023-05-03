@extends('layouts.IndexPage')
@section('body')

    <div class="list-group">
        <a href="{{route('autocompleteSearch.index')}}" class="list-group-item list-group-item-action list-group-item-primary">Autocomplete Search</a>
    </div>
    <div class="list-group">
        <a href="{{route('sendmail.index')}}" class="list-group-item list-group-item-action list-group-item-primary">Send Email</a>
    </div>
    <div class="list-group">
        <a href="{{route('javascripttest.index')}}" class="list-group-item list-group-item-action list-group-item-primary">JavaScript</a>
    </div>
    <div class="list-group">
        <a href="{{route('testdbrelationcontroller.index')}}" class="list-group-item list-group-item-action list-group-item-primary">TestDbRelation</a>
    </div>
    <div class="list-group">
        <a href="{{route('test-queue.index')}}" class="list-group-item list-group-item-action list-group-item-primary">TestQueue</a>
    </div>
    <div class="list-group">
        <a href="{{route('test-redis.index')}}" class="list-group-item list-group-item-action list-group-item-primary">TestRedis</a>
    </div>
    <div class="list-group">
        <a href="{{route('math-executor.index')}}" class="list-group-item list-group-item-action list-group-item-primary">TestDownloadLibMathExecutorController</a>
    </div>
    <div class="list-group">
        <a href="{{route('generate-short-link.index')}}" class="list-group-item list-group-item-action list-group-item-primary">GenerateShortLink</a>
    </div>
    <div class="list-group">
        <a href="{{route('parsing.index')}}" class="list-group-item list-group-item-action list-group-item-primary">Parsing data with site</a>
    </div>
    <div class="list-group">
        <a href="{{route('get.data.from.api.index')}}" class="list-group-item list-group-item-action list-group-item-primary">getDateFromApi</a>
    </div>
    <div class="list-group">
        <a href="{{route('test.iterator.index')}}" class="list-group-item list-group-item-action list-group-item-primary">TestIterator</a>
    </div>
    <div class="list-group">
        <a href="{{route('test.cache.index')}}" class="list-group-item list-group-item-action list-group-item-primary">Test Cache</a>
    </div>
    <div class="list-group">
        <a href="{{route('test-session.index')}}" class="list-group-item list-group-item-action list-group-item-primary">Test Session</a>
    </div>
    <div class="list-group">
        <a href="{{route('request-after-time.index')}}" class="list-group-item list-group-item-action list-group-item-primary">Request after a certain time</a>
    </div>
    <div class="list-group">
        <a href="{{route('other-test.index')}}" class="list-group-item list-group-item-action list-group-item-primary">Other Test</a>
    </div>


@stop
