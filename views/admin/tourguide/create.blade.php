@extends('layouts.master')

@section('title')
Create New Tour Guide | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tạo Hướng Dẫn Viên Mới</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="{{route('admin.tourguide.store')}}" method="POST" role="form" class="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Nhập Tên">
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
                        <input type="text" class="form-control" name="age" placeholder="Nhập tuổi">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input name="content" class="form-control" rows="7" required="required"></input>
                    </div>
                    <div class="form-group">
                        <label>Fb_link</label>
                        <input type="text" class="form-control" name="facebook_link" placeholder="Fb link">
                    </div>
                    <div class="form-group">
                        <label>Tw_link</label>
                        <input type="text" class="form-control" name="twitter_link" placeholder="Twitter link">
                    </div>
                        <button type="submit" class="btn btn-primary">Tạo Mới</button>
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