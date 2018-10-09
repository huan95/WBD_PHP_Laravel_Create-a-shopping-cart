@extends('layout.master')
@section('content')

    <!-- Hiển thị thông báo đăng nhập thành công hay không -->
    @if (Session::has('login-fail'))
        <div class="login-fail">
            <p class="text-danger">{{ Session::get('login-fail') }}</p>
        </div>
    @endif

    <!-- Hiển thị trạng thái chưa đăng nhập -->
    @if (Session::has('not-login'))
        <div class="not-login">
            <p class="text-danger">{{ Session::get('not-login') }}</p>
        </div>
    @endif

    <div class="form-login">
        <form  method="post" action="{{ route('userLogin') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputUsername">User Name</label>
                <input type="text"
                       class="form-control"
                       id="inputUsername"
                       name="inputUsername"
                       placeholder="Enter username"
                       required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password"
                       class="form-control"
                       id="inputPassword"
                       name="inputPassword"
                       placeholder="Password"
                       required>
            </div>
            <input type="submit" value="Log In">
        </form>
    </div>
@endsection