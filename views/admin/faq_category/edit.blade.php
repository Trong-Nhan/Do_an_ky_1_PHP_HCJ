@extends('layouts.master')

@section('title')
Edit Faq Category | Wend Travel 
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Chỉnh sửa danh mục Faq</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="{{route('admin.faq_category.update',$faq_category->id)}}" method="POST" role="form" class="form">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$faq_category->name}}">
                    </div>
                    @error('name')
                        <small class="help-block text-danger">
                            {{$message}}
                        </small>
                    @enderror
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
                    <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
  
@endsection