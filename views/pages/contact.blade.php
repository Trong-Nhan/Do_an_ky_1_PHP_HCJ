@extends('layouts.main')

@section('main')

<!-- contact-banner start-->
<section id="contact-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-banner-text  wow zoomIn text-center" data-wow-duration="2s">
                    <div class="common-heading">
                        <h1>Liên hệ với chúng tôi</h1>
                    </div>
                    <div class="commom-sub-heading">
                        <h6>
                            <a href="{{route('index')}}">Home</a>
                            <span>/</span>
                            <a href="#!">Liên hệ</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  contact-banner end-->

<!-- contact-are start-->
<section id="contact-main-area">
    <div class="conta-main-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"
            width="600" height="450" allowfullscreen="">
        </iframe>
    </div>
    <div class="container">
        <div class="all-dfkj">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                    <div class="contact-3-cover">
                        <div class="contact-heading">
                            <h2>Bạn có bất cứ thắc mắc gì không?</h2>
                            <p>Chúng tôi sẽ luôn giải đáp, tiếp thu những nhận xét của quý khách gửi về cho chúng tôi</p>
                        </div>
                        <div class="contact-form">
                            <form action="{{route('postcontact')}}" method="POST" role="form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name:" name="name" required>
                                            @error('name')
                                                <small class="help-block text-danger">
                                                    {{$message}}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email:" name="email" required>
                                            @error('email')
                                                <small class="help-block text-danger">
                                                    {{$message}}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group nessage-text">
                                            <textarea name="content" rows="6" class="form-control" placeholder="Enter Your Message:" id="content" required></textarea>
                                            @error('content')
                                                <small class="help-block text-danger">
                                                    {{$message}}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="contact-sub-btn">
                                            <button type="submit" class="btn submit contactsuccess">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                    <div class="adress-cover-main">
                        <div class="adserg">
                            <h6>Địa chỉ</h6>
                            <p>238 Hoàng Quốc Việt, Hà Nội</p>
                        </div>
                        <div class="adserg con-ader">
                            <h6>Số Điện Thoại</h6>
                            <p>+8496-827-6996</p>
                            <p>+8497-407-9806</p>
                        </div>
                        <div class="adserg con-ader">
                            <h6>Mail</h6>
                            <p><a href="mailto:">tson.nguyen3112@gmail.com</a></p>
                        </div>
                        <div class="adserg con-ader">
                            <h6>Follow</h6>
                            <ul>
                                <li><a href="https://www.facebook.com/groups/2230486443661009"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-are end-->

@stop