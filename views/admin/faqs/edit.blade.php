@extends('layouts.master')

@section('title')
Edit FAQs | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit FAQs</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="{{route('admin.faq.update',$faq->id)}}" method="POST" role="form" class="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$faq->name}}">
                        @error('name')
                            <small class="help-block text-danger">
                                {{$message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Danh Mục FAQ</label>
                        <select name="faq_category_id" class="form-control" required="required">
                            <option value="">Chọn một</option>
                            @foreach($faq_category as $fcate)
                            <option value="{{$fcate->id}}">{{$fcate->name}}</option>
                            @endforeach
                        </select>                        
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="content" rows="5" id="content"></textarea>
                        @error('content')
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
                                Publish
                            </label>
                            <label>
                                <input type="radio" name="status" value="0">
                                Un Publish
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Meta Keywords</label>
                        <input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords">
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <input type="text" class="form-control" name="meta_descriptions" placeholder="Meta Descriptions">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit FAQ</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
    <script src="{{url('public/backend')}}/tinymce/tinymce.min.js"></script>    
    <script src="{{url('public/backend')}}/tinymce/config.js"></script>    
@endsection