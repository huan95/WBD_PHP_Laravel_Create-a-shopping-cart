@extends('layout.master')
@section('content')

    <div class="title m-b-md">
        <h1>Raising the bar</h1>
    </div>

    <a href="{{route('index')}}">
        <input type="submit" value="List">
    </a>

    <a href="{{ route('userLogout') }}">
        <input type="submit" value="Log Out">
    </a>
    <hr>

@endsection