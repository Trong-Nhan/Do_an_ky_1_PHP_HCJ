@extends('layouts.master')

@section('title')
Create New Gallery | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Create New Gallery</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.gallery.store')}}" method="POST" role="form" class="form" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gallery Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Destination Name">
                            
                        </div>
                        <div class="form-group">
                            <label>Destination</label>
                            <select name="destination_id" class="form-control">
                                <option value="">Choose one</option>
                                @foreach($destination as $dest)
                                <option value="{{$dest->id}}">{{$dest->name}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <!-- <div class="form-group">
                            <label>Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="upload">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @error('upload')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div> -->
                        <div class="form-group">
                            <label>Image</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="image" id="image" readonly>
                                <div class="input-group-btn" style="padding:0">
                                    <a href="#modal-file" data-toggle="modal" class="btn btn-default" style="margin:0">Select</a>
                                </div>
                                <div class="show_img" style="float: left">
                                    <img src="" alt="" id="show_img" style="width: 100%">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="custom-control custom-radio">
                                <label>
                                    <input type="radio" name="status" value="1" checked>
                                    Hi???n
                                </label>
                                <label>
                                    <input type="radio" name="status" value="0">
                                    ???n
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">T???o m???i</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal ch???n 1 ???nh -->
<div class="modal fade" id="modal-file">
    <div class="modal-dialog" style="max-width: 85%; width: 85%" >
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Qu???n l?? File</h4>
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

    <script type="text/javascript">
        $('#modal-file').on('hide.bs.modal', function(){
            var _img = $('input#image').val();
            $('img#show_img').attr('src',_img);
        })
    </script>
@endsection