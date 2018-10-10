@extends('layout.masterAdd')
@section('content')
    <form method="post" action="{{ route('add') }}"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputName" style="color: white">Name</label>
            <input type="text"
                   class="form-control"
                   id="inputName"
                   name="inputName"
                   required>
        </div>
        <div class="form-group">
            <label for="inputDescription" style="color: white">Description</label>
            <textarea class="form-control"
                      id="inputDescription"
                      name="inputDescription"
                      required></textarea>
        </div>
        <div class="form-group">
            <label for="inputPrice" style="color: white">Price</label>
            <input type="text"
                   class="form-control"
                   id="inputPrice"
                   name="inputPrice"
                   required>
        </div>
        <div class="form-group">
            <label for="inputViewCount" style="color: white">View count</label>
            <input type="text"
                   class="form-control"
                   id="inputViewCount"
                   name="inputViewCount"
                   required>
        </div>
        <div class="form-group">
            <label for="inputFileName" style="color: white">File Name</label>
            <input type="text"
                   class="form-control"
                   id="inputFileName"
                   name="inputFileName">
            <input type="file"
                   class="form-control-file"
                   id="inputFile"
                   name="inputFile">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
    <a href="{{ route('index') }}" class="btn btn-info">BACK</a>
@endsection