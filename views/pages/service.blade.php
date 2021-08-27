@extends('layouts.main')

@section('main')

<!-- service-banner start-->
<section id="service-main-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-banner-text  wow zoomIn text-center" data-wow-duration="2s">
                    <div class="common-heading">
                        <h1>Dịch Vụ</h1>
                    </div>
                    <div class="commom-sub-heading">
                        <h6>
                            <a href="{{route('index')}}">Home</a>
                            <span>/</span>
                            <a href="#!">Dịch Vụ</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  service-banner end-->

<!-- who-are start-->
<section id="wer-service">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="ser-ab-deta">
                    <div class="service-ads-heading">
                        <h2>Chúng Tôi Luôn Cung Cấp Các <span>Dịch Vụ Tốt Nhất</span></h2>
                    </div>
                    <div class="services-pata">
                        <p>Khi đặt Tour du lịch từ công ty chúng tôi, quý khách sẽ không chỉ được trải nghiệm những địa danh, danh lam thắng cảnh đặc sắc, mà còn được trải nghiệm các dịch vụ đi kèm mà chúng tôi đưa ra một cách thoải mái nhất</p>
                        <p>Với mỗi dịch vụ, chúng tôi mong muốn đem đến cho quý khách sự tiện lợi, hài lòng khi đồng hành cùng với chúng tôi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="service-deta-ovjet ersd-2 wow fadeIn" data-wow-duration="1.5s">
                            <div class="weject-on">
                                <img src="{{url('public')}}/images/service/1.png" alt="img">
                                <h6>Hỗ Trợ & Liên Lạc</h6>
                                <p>Chúng tôi luôn sẵn sàng giải đáp các thắc mắc của quý khách</p>
                            </div>
                            <div class="weject-on ers wow fadeIn" data-wow-duration="2s">
                                <img src="{{url('public')}}/images/service/2.png" alt="img">
                                <h6>Khách Sạn</h6>
                                <p>Chúng tôi sẽ chọn cho quý khách những khách sạn hợp lý nhất</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="service-deta-ovjet ers-2 wow fadeIn" data-wow-duration="3s">
                            <div class="weject-on">
                                <img src="{{url('public')}}/images/service/3.png" alt="img">
                                <h6>Di chuyển tiện lợi</h6>
                                <p>Các loại hình di chuyển đa dạng, phù hợp với nhu cầu của quý khách</p>
                            </div>
                            <div class="weject-on ers  wow fadeIn" data-wow-duration="1s">
                                <img src="{{url('public')}}/images/service/4.png" alt="img">
                                <h6>Bảo hiểm du lịch</h6>
                                <p>Chúng tôi đảm bảo cho quý khách sự an tâm trong mỗi chuyến đi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- who-are end-->

<!-- team start-->
<div class="team-main">
      <div class="team-content text-center">
        <h6>Người Bạn Đồng Hành Trên Mỗi Chuyến Đi</h6>
        <h2>Hướng Dẫn Viên <span>Nhiệt Huyết</span></h2>
        <p>Các hướng dẫn viên của chúng tôi luôn sẵn sàng đem đến cho bạn những trải nghiệm khó quên, những lời khuyên bổ ích, cũng như hiểu biết về địa điểm mà quý khách muốn tới</p>
      </div>
      <div class="container">
        <div class="row owl-carousel owl-theme tourguide-slider">
          @foreach($tourguide as $tg)
          <div class="item">
            <div class="team-box">
              <img src="{{url('public/images/tourguide')}}/{{$tg->image}}" style="width: 360px; height: 300px">
              <div class="box-content">
                <h3 class="title">{{$tg->name}}</h3>
                <p class="position">{{$tg->age}} tuổi</p>
                <p class="position">{{$tg->content}}</p>
              </div>
              <ul class="icon">
                  <li>
                    <a href="{{$tg->facebook_link}}"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="{{$tg->twitter_link}}"><i class="fab fa-twitter"></i></a>
                  </li>
                </ul>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
<!-- team end-->

<!-- nature-img start-->
<section id="img-nature">
   <div class="container-fluid">
       <div class="img-nature-slider owl-carousel owl-theme">
            @foreach($destination as $dest)
           <div class="nuture-img-item item">
               <a href="#"><img src="{{url('public/images/uploads')}}/{{$dest->image}}" alt="" style="height: 170px"></a>
               <div class="overay-nutre">
                   <a href="{{route('gallery-destination',['slug'=>$dest->slug])}}"><i class="fas fa-search-plus"></i></a>
               </div>
           </div>
           @endforeach
       </div>
   </div>
</section>
<!-- nature-img end-->

@stop