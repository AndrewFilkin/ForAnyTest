@extends('layouts.IndexPage')
@section('body')
    <form class="col-lg-6 offset-lg-3" method="POST" action="{{route('send-message')}}">
        @csrf
        <div class="row justify-content-center">
            <div class="form-group">
                <label for="name">Message</label>
                <input type="text" class="form-control" id="message" name="message">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </span>
        </div>

    </form>
@stop
