@extends('layouts.master')

@section('title')
Faq Category | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="margin-bottom: 20px">Danh Mục Faq
					<a href="{{route('admin.faq_category.create')}}" class="btn btn-primary float-right" style="margin:0 0 15px 0">ADD</a>
                </h4>
                @if (session('status-success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status-success') }}
                    </div>
                @endif
                @if (session('status-danger'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('status-danger') }}
                    </div>
                @endif
                <form class="form-inline" role="form" method="GET">
                    <div class="form-group">
                        <input type="text" class="form-control" name="key" placeholder="Search Key">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            @foreach($faq_category as $fcate)
                            <tr>
                                <td>{{$fcate->id}}</td>
                                <td>{{$fcate->name}}</td>
                                <td>
                                    <input data-id="{{$fcate->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Hiện" data-off="Ẩn" {{ $fcate->status ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <a href="{{route('admin.faq_category.edit',$fcate->id)}}" class="btn btn-success btn-sm">EDIT</a>
                                </td>
                                <td>
                                    <form action="{{route('admin.faq_category.destroy',$fcate->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
<script type="text/javascript">
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var faq_category_id = $(this).data('id'); 

        $.ajax({
            type: "GET",
            // dataType: "json",/
            url: '{{route("admin.faq_category.status")}}',
            data: {'status': status, 'faq_category_id': faq_category_id},
            success: function(res){
              console.log(res);
            }
        });
    })
</script>
@endsection