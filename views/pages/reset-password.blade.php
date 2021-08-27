@extends('layouts.main')

@section('main')

<div class="container">
  <div class="row">
    <div class="col-md-5 col-md-offset-4" style="margin-top: 50px; margin-bottom: 50px">
      <form action="{{route('password-save')}}" method="POST" role="form">
        @csrf
        <legend>Đặt lại mật khẩu</legend>
        <input type="text" name="token" value="{{$token->token}}" hidden="">
        <div class="form-group">
          <label for="">Mật khẩu mới</label>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
          <label for="">Xác nhận mật khẩu</label>
          <input type="password" class="form-control" name="cpassword">
        </div>
        <button type="submit" class="btn btn-2">Submit</button>
      </form>
    </div>
  </div>
</div>

@stop