@extends('layouts.master')

@section('title')
Edit Package | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Chỉnh sửa Package</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="{{route('admin.package.update',$package->id)}}" method="POST" role="form" class="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$package->name}}">
                        @error('name')
                            <small class="help-block text-danger">
                                {{$message}}
                            </small>
                        @enderror
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
                    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

@endsection