@extends('layouts.main')

@section('main')

<div class="account-main">
    <div class="container">
        <div class="row">
            <div class="login-main">
                <h1 class="text-center">Đăng Nhập</h1>
                <div class="login-form" style="border-left: none">
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
                    <form action="{{route('postlogin')}}" method="POST" role="form">
                    @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Địa chỉ Email">
                            @error('email')
                                <small class="help-block text-error">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            @error('password')
                                <small class="help-block text-error">
                                    {{$message}}
                                </small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="" id="input" value="remember" value="1">
                                        Ghi nhớ đăng nhập
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pull-right fg-pass">
                            <a data-toggle="modal" href='#modal-id'>Quên mật khẩu ?</a>
                        </div>

                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        <a href="{{route('index')}}" type="submit" class="btn btn-danger">Hủy</a>
                    </form>
                    <h5>Không có tài khoản ? <a href="{{route('customer_register')}}">Đăng ký ngay</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade forgot-pass-modal" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Quên Mật Khẩu</h4>
            </div>
            <form action="{{route('post-reset-password')}}" method="POST" class="form-inline" role="form">
                @csrf
            <div class="modal-body">
                <h5>Vui lòng nhập địa chỉ email mà bạn đã đăng ký</h5>
                <div class="form-group">
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary" >Gửi</button>
            </div>
            </form>
        </div>
    </div>
</div>

@stop