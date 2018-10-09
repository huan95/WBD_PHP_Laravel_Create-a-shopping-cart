@extends('layout.master')
@section('content')
    <div class="title m-b-md">
        <center><h1 style="color: white; font-size: 50px">Chi tiết sản phẩm</h1></center>
    </div>

    <div class="row">

        <!-- Kiểm tra biến $product được truyền sang từ ProductController -->
        <!-- Nếu biến $products không tồn tại thì hiển thị thông báo -->
        @if(!isset($list))
            <p class="text-danger">Không có sản phẩn nào.</p>
        @else

        <!-- Nếu biến $product tồn tại thì hiển thị sản phẩm -->
            <div class="col-12">
                <div class="card text-left" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title"
                            style="color: white; font-size: 30px; text-align: center">{{ $list->name }}</h5>
                        <p class="card-text" style="color: white">{{ $list->description }}</p><br>
                        <p class="card-text text-dark" style="color: white">${{ $list->price }}</p><br>
                        <p class="card-text text-danger" style="color: white">Số lượt xem: {{ $list->view_count }}</p>
                        <br>
                        <p>
                            <img src="{{ asset('storage/images/' . $list->image) }}" alt="" style="width: 150px">
                        </p>

                        <!-- Nút XEM chuyển hướng người dùng quay lại trang danh sách sản phẩm -->
                        <a href="{{ route('index') }}" class="btn btn-primary">< Quay lại </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection