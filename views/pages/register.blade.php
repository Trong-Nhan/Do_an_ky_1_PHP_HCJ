@extends('layouts.main')

@section('main')

<div class="account-main">
    <div class="container">
        <div class="row">
            <div class="register-main">
                <h1 class="text-center">Register</h1>
                <div class="register-form" style="border-left: none">
                    @if (session('status-success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status-success') }}
                        </div>
                    @endif
                    @if (session('status-error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status-error') }}
                        </div>
                    @endif
                    <form action="{{route('customer_post_register')}}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="l_name" placeholder="Nhập họ">
                            @error('l_name')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="f_name" placeholder="Nhập tên">
                            @error('f_name')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                            @error('email')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">@error('password')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
                            @error('cpassword')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="birthday" id="birthday" class="form-control" placeholder="Birthday">
                            @error('birthday')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                            @error('phone')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                            @error('address')
                                <small class="help-block text-danger">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                        <a href="{{route('index')}}" type="submit" class="btn btn-danger">Cancel</a>
                    </form>
                    <h5>Already have an Account? <a href="{{route('account')}}">Login Now</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

<script type="text/javascript">
    $('#birthday').Zebra_DatePicker({
        format: 'Y-m-d',
        direction: -1
    });
</script>

@stop

