@extends('layouts.master')

@section('title')
TourGuide | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="margin-bottom: 20px">Tour Guide
					<a href="{{route('admin.tourguide.create')}}" class="btn btn-primary float-right" style="margin:0 0 15px 0">ADD</a>
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
                            <th>Image</th>
                            <th>Age</th>
                            <th>Content</th>
                            <th>Fb_link</th>
                            <th>Tw_link</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            @foreach($tourguide as $tg)
                            <tr>
                                <td>{{$tg->id}}</td>
                                <td>{{$tg->name}}</td>
                                <td>
                                    <img src="{{url('public/images/tourguide')}}/{{$tg->image}}" alt="" style="width: 70px">
                                </td>
                                <td>
                                    {{$tg->age}}
                                </td>
                                <td>
                                    {{$tg->content}}
                                </td>
                                <td>{{$tg->facebook_link}}</td>
                                <td>{{$tg->twitter_link}}</td>
                                <td>
                                    <a href="{{route('admin.tourguide.edit',$tg->id)}}" class="btn btn-success btn-sm">EDIT</a>
                                </td>
                                <td>
                                    <form action="{{route('admin.tourguide.destroy',$tg->id)}}" method="POST">
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
           {{$tourguide->links()}}
        </div>
    </div>
</div>

@endsection


@section('scripts')

@endsection