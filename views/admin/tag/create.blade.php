@extends('layouts.master')

@section('title')
Create New Tag | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create New Tag</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="{{route('admin.tag.store')}}" method="POST" role="form" class="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Tag Name">
                        @error('name')
                            <small class="help-block text-danger">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tag Slug</label>
                        <input type="text" class="form-control" name="slug" id="slug">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <div class="custom-control custom-radio">
                            <label>
                                <input type="radio" name="status" value="1" checked>
                                Hiện
                            </label>
                            <label>
                                <input type="radio" name="status" value="0">
                                Ẩn
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tạo Mới</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
  <script src="{{url('public/js')}}/slug.js"></script>
@endsection