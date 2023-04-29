@extends('layouts.IndexPage')
@section('body')
    <form class="col-lg-6 offset-lg-3" method="GET" action="{{route('get.parsing.data')}}">
{{--        @csrf--}}
        <div class="row justify-content-center">
            <div class="form-group">
                <label for="name">Site</label>
                <input type="text" class="form-control" id="main_link" name="main_link">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Div class name</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            </span>
        </div>
    </form>
@stop
