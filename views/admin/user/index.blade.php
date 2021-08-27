@extends('layouts.master')

@section('title')
User List | Wend Travel 
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="margin-bottom: 20px">User List
					<a href="{{route('admin.user.create')}}" class="btn btn-primary float-right" style="margin:0 0 15px 0">ADD</a>
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
                            <th>Email</th>
                            <th>Phone</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($data as $model)
                            <tr>
                                <td>{{$model->id}}</td>
                                <td>{{$model->name}}</td>
                                <td>{{$model->email}}</td>
                                <td>{{$model->phone}}</td>
                                <td>
                                    <form action="{{route('admin.user.destroy',$model->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <!-- <a href="{{route('admin.user.show',$model->id)}}" class="btn btn-primary btn-sm">Roles</a> -->
                                        <a href="{{route('admin.user.edit',$model->id)}}" class="btn btn-success btn-sm">Sửa</a>
                                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-footer">
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection


@section('scripts')

@endsection