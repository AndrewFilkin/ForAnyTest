@extends('layouts.IndexPage')

@section('body')
    <div class="container">
        <h1>Test localization</h1>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Please choice language
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{url('/test-localization/ru')}}">ru</a>
                <a class="dropdown-item" href="{{url('/test-localization/en')}}">en</a>
            </div>
        </div>
        <br>
        @if(isset($variable))
            {{ trans('message.welcome')}} {{ trans('message.status')}}
        @endif

        @if(isset($choiceText))
            {{$choiceText}}
        @else {{ trans('message.text')}}
        @endif

    </div>
@stop
