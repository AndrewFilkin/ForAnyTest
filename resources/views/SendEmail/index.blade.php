@extends('layouts.IndexPage')
@section('body')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    <form class="col-lg-6 offset-lg-3" method="POST" action="{{route('sendLetter')}}">
        @csrf
        <div class="row justify-content-center">
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="info">Info</label>
                <input type="text" class="form-control" id="info" name="info">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </span>
        </div>

    </form>
@stop
