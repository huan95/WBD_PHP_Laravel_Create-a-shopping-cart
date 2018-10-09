@extends('layout.master')
@section('content')

    <div class="links">
        <a href="{{ route('userLogin') }}">
            <input type="submit" value="Log In">
        </a>
    </div>

@endsection