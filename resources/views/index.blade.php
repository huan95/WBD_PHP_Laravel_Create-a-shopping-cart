@extends('layout.masterList')
@section('content')
    <div class="title m-b-md">
        <center><h1 style="color: white; font-size: 50px"> Danh sách sản phẩm </h1></center>
    </div>

    <div class="row">

        <!-- Kiểm tra biến $products được truyền sang từ ProductController -->
        <!-- Nếu biến $products không tồn tại hoặc có số lượng băng 0 (không có sản phẩm nào) thì hiển thị thông báo -->
        @if(!isset($lists) || count($lists) === 0)
            <p class="text-danger">Không có sản phẩm nào.</p>
        @else

        <!-- Nếu biến $products tồn tại thì hiển thị sản phẩm -->
            @foreach($lists as $key => $list)
                <div class="col-3">
                    <div class="card text-left" style="width: 12rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center">{{ $list->name }}</h5>
                            <p class="card-text" style="text-align: center">{{ $list->description }}</p><br>
                            <p class="card-text text-dark" style="text-align: center">{{ $list->price }}</p><br>
                            <p class="card-text text-danger" style="text-align: center">Số lượt
                                xem: {{ $list->view_count }}</p><br>
                            <p>
                                <img src="{{ asset('storage/images/' . $list->image) }}" alt="" style="width: 150px">
                            </p>

                            <!-- Nút XEM chuyển hướng người dùng sang trang chi tiết -->
                            <a href="{{ route('show', $list->id) }}" class="btn btn-primary">Xem</a>
                            <a id="{{$list->id}}"
                               onclick=" return confirm('Do you want to delete?')" style="color: white"
                               class="btn btn-primary delete-task">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection