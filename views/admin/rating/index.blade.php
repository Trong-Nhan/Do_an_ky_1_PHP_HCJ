@extends('layouts.master')

@section('title')
Rating | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="margin-bottom: 20px">Rating
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
                            <th>Tour</th>
                            <th>Customer</th>
                            <th>Comment</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            @foreach($rating as $rate)
                            <tr>
                                <td>{{$rate->id}}</td>
                                <td>{{$rate->tours->name}}</td>
                                <td>{{$rate->customers->f_name}}</td>
                                <td>{{$rate->comment}}</td>
                                <td>
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($rate->rating - $i >= 1)
                                            {{--Full Start--}}
                                            <i class="fas fa-star full-star"> </i>
                                        @else
                                            {{--Empty Start--}}
                                            <i class="far fa-star empty-star"> </i>
                                        @endif
                                    @endfor
                                    <b class="rating_score">{{$rate->rating}}</b>
                                </td>
                                <td>
                                    <input data-id="{{$rate->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Hiện" data-off="Ẩn" {{ $rate->status ? 'checked' : '' }}>
                                </td>
                                <td>
                                    <form action="{{route('admin.rating.destroy',$rate->id)}}" method="POST">
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
            {{$rating->links()}}
        </div>
    </div>
</div>

@endsection


@section('scripts')
<script type="text/javascript">
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var rating_id = $(this).data('id'); 

        $.ajax({
            type: "GET",
            // dataType: "json",/
            url: '{{route("admin.rating.status")}}',
            data: {'status': status, 'rating_id': rating_id},
            success: function(res){
              console.log(res);
            }
        });
    })
</script>
@endsection