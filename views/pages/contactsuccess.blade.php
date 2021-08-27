@extends('layouts.main')

@section('main')

<div class="jumbotron">
    <div class="container">
        <h1>Chúng tôi đã nhận được thông tin liên hệ của bạn</h1>
        <p>Cảm ơn bạn đã gửi cho chúng tôi thắc mắc của bạn!!</p>
        <p>Chúng tôi sẽ phản hồi thắc mắc của bạn trong thời gian sớm nhất, vui lòng kiểm tra hòm thư điện tử của bạn thường xuyên!!</p>
        <p>
            <a href="{{route('index')}}" class="btn btn-primary btn-lg">Quay về trang chủ</a>
        </p>
    </div>
</div>

@stop