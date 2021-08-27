@extends('layouts.main')

@section('main')

<div class="jumbotron">
    <div class="container">
        <h1>Book Tour thành công</h1>
        <p>Cảm ơn bạn đã lựa chọn công ty chúng tôi cho chuyến đi của bạn!!</p>
        <p>Chúng tôi đã gửi thông tin đặt tour của bạn về email {{Auth::guard('cus')->user()->email}}. Vui lòng kiểm tra các thông tin về tour, cũng như cách thức thanh toán trong email của bạn!!! </p>
        <p>
            <a href="{{route('index')}}" class="btn btn-primary btn-lg">Quay về trang chủ</a>
        </p>
    </div>
</div>

@stop