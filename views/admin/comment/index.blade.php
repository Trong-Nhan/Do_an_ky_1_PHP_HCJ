@extends('layouts.master')

@section('title')
Comment | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="margin-bottom: 20px">Comment
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
            </div>


            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>ID</th>
                            <th>Blog</th>
                            <th>Customer</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            @foreach($comment as $com)
                            <tr>
                                <td>{{$com->id}}</td>
                                <td>{{$com->blogs->name}}</td>
                                <td>{{$com->customers->f_name}}</td>
                                <td>{{$com->content}}</td>
                                <td>
                                    <input data-id="{{$com->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Hiện" data-off="Ẩn" {{ $com->status ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <form action="{{route('admin.comment.destroy',$com->id)}}" method="POST">
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
            {{$comment->links()}}
        </div>
    </div>
</div>

@endsection


@section('scripts')
<script type="text/javascript">
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var comment_id = $(this).data('id'); 

        $.ajax({
            type: "GET",
            // dataType: "json",/
            url: '{{route("admin.comment.status")}}',
            data: {'status': status, 'comment_id': comment_id},
            success: function(res){
              console.log(res);
            }
        });
    })
</script>
@endsection