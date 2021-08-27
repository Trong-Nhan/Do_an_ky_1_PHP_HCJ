@extends('layouts.master')

@section('title')
Edit Role | Wend Travel 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="margin-bottom: 20px">Edit Role</h4>
                @if($errors->count())
                    @foreach($errors as $er)
                        <p>{{$er}}</p>
                    @endforeach
                @endif
            </div>


            <div class="card-body">
                <form action="{{route('admin.user.update',$user->id)}}" method="POST" role="form">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}">
                            @error('name') <p>{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            @error('email') <p>{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                            @error('password') <p>{{$message}}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword">
                            @error('cpassword') <p>{{$message}}</p> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Roles</label>
                            @foreach($roles as $role)
                            <?php $checked = in_array($role->name, $role_assignment) ? 'checked' : ''; ?>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" {{$checked}} name="role[]" value="{{$role->id}}">
                                    {{$role->name}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</div>

@endsection


@section('scripts')

@endsection