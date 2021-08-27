@extends('layouts.main')

@section('main')

<!-- about-banner start-->
<section id="about-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="common-banner-text wow zoomIn text-center" data-wow-duration="2s">
                    <div class="common-heading">
                        <h1>Về Chúng Tôi</h1>
                    </div>
                    <div class="commom-sub-heading">
                        <h6>
                            <a href="{{route('index')}}">Trang Chủ</a>
                            <span>/</span>
                            <a href="#!">Về Chúng Tôi</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  about-banner end-->

<!-- who-are start-->
<section id="who-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="who-img wow zoomIn" data-wow-duration="2s">
                    <img src="{{url('public')}}/images/about/pl.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="left-side-text-ab mar-o res-raju">
                    <h6>Chúng tôi có hơn 10 năm kinh nghiệm </h6>
                    <h2 class="left-op">Chúng tôi luôn cố gắng để phục vụ tốt nhất</h2>
                    <p>Với mỗi trải nghiệm của khách hàng là mỗi lần chúng tôi mong muốn được phục vụ một cách tốt nhất, đem đến cho khách hàng của chúng tôi sự tin tưởng và thoải mái</p>
                </div>
            </div>
        </div>
        <div class="sec-who">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="who-headinf-inner">
                        <h2>Chúng tôi là ai?</h2>
                        <p>Chúng tôi là công ty chuyên cung cấp các Tour du lịch trên khắp đất nước Việt Nam qua website của chúng tôi</p>
                        <p>Chúng tôi kết nối với nhiều điểm đến cũng như các dịch vụ tốt nhất cho khách hàng</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="who-box">
                        <h6>Tầm nhìn của chúng tôi </h6>
                        <p>Chúng tôi mong muốn tập trung vào việc kết nối các khách hàng đến với tất cả các điểm đến thú vị trên khắp đất nước Việt Nam, và cả các điểm đến khác trên toàn Thế Giới</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="who-box">
                        <h6>Sứ mệnh của chúng tôi</h6>
                        <p>Sứ mệnh của chúng tôi là đưa đến cho các khách hàng những trải nghiệm và dịch vụ tốt nhất, để khiến cho bất cứ ai dù ở bất cứ độ tuổi nào cũng có thể trải nghiệm các dịch vụ du lịch</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- who-are end-->

<!-- best-service start-->
<section id="best-service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="best-service-heading">
                    <h2>Các dịch vụ tốt nhất</h2>
                    <p>Chúng tôi luôn cung cấp cho quý khách các dịch vụ tốt nhất</p>
                </div>
            </div>
        </div>
        <div class="ter-icon-flash">
            <div class="row">
                <div class="col-lg-12">
                    <div class="all-item-ter">
                        <div class="ter-item-one">
                            <div class="gift-img wow zoomIn" data-wow-duration="1.5s">
                                <img src="{{url('public')}}/images/about/gifft.png" alt="img">
                            </div>
                            <div class="des-ter">
                                <h6>Các gói dịch vụ</h6>
                                <p>Nhiều gói dịch vụ độc đáo đi kèm với các Tour của chúng tôi</p>
                            </div>
                        </div>
                        <div class="all-ineer-der-ter">
                            <img src="{{url('public')}}/images/about/ter.png" alt="img" class="shape-2">
                        </div>
                        <div class="ter-item-one">
                            <div class="gift-img wow zoomIn" data-wow-duration="2.5s">
                                <img src="{{url('public')}}/images/about/plan.png" alt="img">
                            </div>
                            <div class="des-ter">
                                <h6>Di chuyển thuận tiện</h6>
                                <p>Đến những địa điểm quý khách mong muốn một cách thuận tiện</p>
                            </div>
                        </div>
                        <div class="all-ineer-der-ter">
                            <img src="{{url('public')}}/images/about/ter.png" alt="img" class="shape-2">
                        </div>
                        <div class="ter-item-one">
                            <div class="gift-img wow zoomIn" data-wow-duration="3.5s">
                                <img src="{{url('public')}}/images/about/tak.png" alt="img">
                            </div>
                            <div class="des-ter">
                                <h6>Bảo hiểm du lịch</h6>
                                <p>An tâm hơi với mỗi chuyến đi của quý khách</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- best-service end-->



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