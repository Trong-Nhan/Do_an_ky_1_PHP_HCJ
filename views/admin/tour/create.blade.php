@extends('layouts.master')

@section('title')
Create New Tour | Wend Travel 
@endsection

@section('css')
<link rel="stylesheet" href="{{url('public')}}/css/zebra_datepicker_bs.min.css">
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create New Tour</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.tour.store')}}" method="POST" role="form" class="form" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tour Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                            @error('name')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tour Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug" readonly>
                        </div>
                        <div class="form-group">
                            <label>Destination</label>
                            <select name="destination_id" class="form-control">
                                <option value="">Choose one</option>
                                @foreach($destination as $dest)
                                <option value="{{$dest->id}}">{{$dest->name}}</option>
                                @endforeach
                            </select>
                            @error('destination_id')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="image" id="image">
                                <div class="input-group-btn" style="padding:0">
                                    <a href="#modal-file" data-toggle="modal" class="btn btn-default" style="margin:0">Select</a>
                                </div>
                                <div class="show_img" style="float: left">
                                    <img src="" alt="" id="show_img" style="width: 100%">
                                </div>
                            </div>
                            @error('destination_id')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Summary</label>
                            <textarea name="summary" class="form-control" rows="3"></textarea>
                            @error('summary')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" id="content" class="form-control" rows="7"></textarea>
                            @error('content')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Adult Price</label>
                            <input type="text" class="form-control" name="adult_price" placeholder="Adult Price">
                            @error('adult_price')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Child Price</label>
                            <input type="text" class="form-control" name="children_price" placeholder="Child Price">
                            @error('children_price')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ngày Khởi Hành</label>
                            <input type="text" class="form-control number_input" id="start_date" name="start_date" placeholder="Ngày Khởi Hành">
                        </div>
                        <div class="form-group">
                            <label>Duration</label>
                            <input type="text" class="form-control number_input" name="duration" id="duration" placeholder="Tour's Duration">
                            @error('duration')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ngày Kết Thúc</label>
                            <input type="text" class="form-control" name="end_date" id="end_date" placeholder="Ngày Kết Thúc" readonly>
                        </div>
                        <div class="form-group">
                            <label>Package</label>
                            @foreach($package as $pac)
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="{{$pac->id}}" name="package[]">
                                    {{$pac->name}}
                                </label>
                            </div>
                            @endforeach
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
                        <div class="form-group">
                            <label>Location</label>
                            <input type="adult_price" class="form-control" name="location" placeholder="Location">
                            @error('location')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Meta Keywords</label>
                            <input type="text" class="form-control" name="meta_keywords" placeholder="Meta Keywords">
                        </div>
                        <div class="form-group">
                            <label>Meta Description</label>
                            <input type="text" class="form-control" name="meta_descriptions" placeholder="Meta Descriptions">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tạo mới</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-file">
    <div class="modal-dialog" style="max-width: 85%; width: 85%" >
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Quản lý File</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <iframe src="{{url('file')}}/dialog.php?akey=wendwebsite&field_id=image" style="width: 100%; height: 500px; border: 0; overflow-y: auto"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    <!-- <script type="text/javascript">
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script> -->
    <script src="{{url('public/js')}}/slug.js"></script>    
    <script src="{{url('public/backend')}}/tinymce/tinymce.min.js"></script>    
    <script src="{{url('public/backend')}}/tinymce/config.js"></script>    
    <script src="{{url('public')}}/js/zebra_datepicker.min.js"></script>
    <script type="text/javascript">
        $('#modal-file').on('hide.bs.modal', function(){
            var _img = $('input#image').val();
            $('img#show_img').attr('src',_img);
        })
        $('#start_date').Zebra_DatePicker({
            direction: 1,
            readonly_element: false

        });

        $('.number_input').on('change', function(){
            var start_date = $('#start_date').val();
            var duration = $('#duration').val();
            duration = parseInt(duration);

            var date = new Date(start_date);
            var end_date = new Date(date);

            end_date.setDate(end_date.getDate() + duration);

            var dd = ('0' + end_date.getDate()).slice(-2);
            var mm = ('0' + (end_date.getMonth() + 1)).slice(-2); //do getMonth chạy từ 0-11 nên phải +1
            var y = end_date.getFullYear();

            var formatted_date = y + '-' + mm + '-' + dd;

            $('#end_date').val(formatted_date)
        });


    </script>
@endsection