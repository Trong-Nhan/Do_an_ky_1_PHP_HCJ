@extends('layouts.master')

@section('title')
Edit TourGuide | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit TourGuide</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="{{route('admin.tourguide.update',$tourguide->id)}}" method="POST" role="form" class="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$tourguide->name}}">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="upload">
                            <label class="custom-file-label" for="customFile">Chọn tệp ảnh</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" name="age" value="{{$tourguide->age}}">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input name="content" class="form-control" rows="7" required="required" value="{{$tourguide->content}}"></input>
                    </div>
                    <div class="form-group">
                        <label>Fb_link</label>
                        <input type="text" class="form-control" name="facebook_link" value="{{$tourguide->facebook_link}}">
                    </div>
                    <div class="form-group">
                        <label>Tw_link</label>
                        <input type="text" class="form-control" name="twitter_link" value="{{$tourguide->twitter_link}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
    <script type="text/javascript">
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>    
@endsection