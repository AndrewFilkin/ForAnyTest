@extends('layouts.IndexPage')

@push('custom-scripts')
    <script type="module" src="{{ URL::asset('my-js/likeCounter/like.js')}}"></script>
@endpush
@section('body')

    <div class="container text-center">
        <div class="row">
            <div class="col">
                Title
            </div>
            <div class="col">
                Like count
            </div>
            <div class="col">

            </div>
        </div>
        <br>
        <hr>
        <div class="row">
            @foreach($posts as $post)
                <div class="col">
                {{$post->title}}
                </div>
                <div class="col">
                {{$post->counter_likes}}
                </div>
                <div class="col">
                    <img class="likePhoto" src="{{asset('img/like/like-disable.png')}}" title="{{$post->id}}">
                </div>
                <hr>
            @endforeach
        </div>
    </div>

@stop
