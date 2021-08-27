@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{url('public/css')}}/star-rating.css">
@endsection

@section('main')
<!-- tour-banner start-->
<section id="tour-packes-deatils">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="common-banner-text  wow zoomIn text-center" data-wow-duration="2s">
                    <div class="common-heading">
                        <h1>{{$tour->name}}</h1>
                    </div>
                    <div class="commom-sub-heading">
                        <h6>
                            <a href="{{route('index')}}">Home</a>
                            <span>/</span>
                            <a href="#!">{{$tour->name}}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tour-banner end-->

<!-- tour-details info-->
<section id="tour-detailes-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="all-details-tour">
                    <div class="all-price">
                        <div class="tour-heading-detailse">
                            <h2>{{$tour->name}}</h2>
                            <div class="start-text-details">
                                <!-- <div class="start-icon-deta">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                </div> -->
                                <div class="stars-outer">
                                    <div class="stars-inner"></div>
                                </div>
                                <div class="review-score">
                                    <h6>{{number_format($average,1)}}</h6>
                                    <input type="hidden" id="average" value="{{$average}}">
                                </div>
                                <div class="revews">
                                    <h6>{{$rating->count()}} Đánh giá</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-main-informa">
                        <h6>Giá người lớn: </h6>
                        <h6>{{number_format($tour->adult_price)}} VNĐ<span>|</span></h6>
                        <h6>Giá trẻ em: </h6>
                        <h6>{{number_format($tour->children_price)}} VNĐ</h6>
<!--                         <h6>25 September</h6> -->
                    </div>
                    <div class="det-asor-img">
                        <img src="{{url('public/images/uploads')}}/{{$tour->image}}" alt="img">
                    </div>
                    <div class="rweal-reat">
                        <h5>Giới thiệu về Tour</h5>
                        <p>{!! $tour->content !!}</p>
                    </div>
                    <div class="packages-includ">
                        <h5>Gói Dịch Vụ Đi Kèm</h5>
                        <div class="all-ul-includ">
                            <div class="right-includ">
                                <ul>
                                    @foreach($tour->packages as $pac)
                                    <li>
                                        <i class="far fa-check-circle"></i>{{$pac->name}}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="map-inclid">
                        <h5>Vị Trí Tour</h5>
                        <iframe
                            src="{{$tour->location}}"
                            width="600" height="450" allowfullscreen=""></iframe>
                    </div>
                    <div class="client-revews">
                        <h5>Đánh Giá</h5>
                        @foreach($rating as $rate)
                        <div class="client-info-rev">
                            <div class="cliennt-img">
                                @if($rate->customers->image)
                                <img src="{{url('public/images/customers')}}/{{$rate->customers->image}}" alt="img">
                                @else
                                <img src="{{url('public/images/')}}/unknown-avatar.png" alt="img">
                                @endif
                            </div>
                            <div class="clients-desnigation">
                                <h5>{{$rate->customers->f_name}}</h5>
                                <h6>
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($rate->rating - $i >= 1)
                                            {{--Full Start--}}
                                            <i class="fas fa-star full-star"> </i>
                                        @else
                                            {{--Empty Start--}}
                                            <i class="far fa-star empty-star"> </i>
                                        @endif
                                    @endfor
                                    {{$rate->rating}}
                                </h6>
                                <input type="hidden" id="user_rating" value="{{$rate->rating}}">
                                <p>{{$rate->comment}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @if(!Auth::guard('cus')->check())
                        <div class="client-start-comment">
                            <div class="login-required">
                                <h6>Vui lòng đăng nhập để viết đánh giá này</h6>
                                <a href="{{route('account')}}" class="btn btn-login">Đăng Nhập</a>
                            </div>
                        </div>
                    @else
                        <div class="client-start-comment">
                            <div class="all-women-heading">
                                <h3>Viết Đánh Giá</h3>
                            </div>
                            <div class="revs-form">
                                <div class="row"> 
                                    <form action="{{route('home.rating',['slug'=>$tour->slug])}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="number" id="rating-system" name="rating" class="rating" min="0" max="5" step="1">
                                        </div>
                                        <div class="form-group nessage-text">
                                            <textarea name="comment" id="message" rows="6" class="form-control"
                                                placeholder="Đánh Giá Của Bạn" required=""></textarea>
                                        </div>
                                        <div class="contact-sub-btn">
                                            <button type="submit" class="btn submit">Gửi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="bookoing-secrty">
                    <div class="all-pacj-dfgh">
                        <h6>Book Tour</h6>
                    </div>
                    <div class="bookk0-natd-form">
                    @if(Auth::guard('cus')->check())
                        <form action="{{route('booking',$tour->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Họ và Tên</label>
                                <input type="text" class="form-control" value="{{Auth::guard('cus')->user()->l_name}} {{Auth::guard('cus')->user()->f_name}}" >
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="{{Auth::guard('cus')->user()->email}}" >
                            </div>
                            <div class="form-group">
                                <label for="phone">Số Điện Thoại</label>
                                <input type="text" class="form-control" value="{{Auth::guard('cus')->user()->phone}}" >
                            </div>
                            <div class="form-group">
                                <label for="start_date">Ngày đi</label>
                                <input type="text" id="start_date" class="form-control date_input" name="start_date" value="{{date('d-m-Y',strtotime($tour->start_date))}}" readonly>
                            </div>
                            .<div class="form-group">
                                <label for="end_date">Ngày về</label>
                                <input type="text" id="end_date" class="form-control date_input" name="end_date" value="{{date('d-m-Y',strtotime($tour->end_date))}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="adult_number">Người Lớn</label>
                                <input type="text" name="adult_number" id="adult_number" class="form-control number_input">
                            </div>
                            <div class="form-group">
                                <label for="children_number">Trẻ Em</label>
                                <input type="text" name="children_number" id="children_number" class="form-control number_input">
                            </div>
                            <input type="hidden" value="{{$tour->adult_price}}" id="adult_price">
                            <input type="hidden" value="{{$tour->children_price}}" id="children_price">
                            <div class="form-group">
                                <label for="note">Ghi chú</label>
                                <textarea name="note" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="hotel_status">Bạn có muốn ở khách sạn chúng tôi sắp đặt?</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="hotel_status" value="1" checked>
                                        Có
                                    </label>
                                    <label class="pull-right">
                                        <input type="radio" name="hotel_status" value="0">
                                        Không
                                    </label>
                                </div>
                            </div>
                            <div class="travel-tyepe">  
                                <div class="flex-type">
                                    <label for="text">Thành tiền: (VND)</label>
                                </div>
                                <input type="text" name="total_price" class="total_price" id="total_price" readonly> 
                            </div>
                            <div class="sunb-btn-naple">
                                <button type="submit" class="btn submit widet">Gửi</button>
                            </div>
                        </form>
                    @else
                        <div class="login-required">
                            <h6>Vui lòng đăng nhập để đặt Tour</h6>
                            <a href="{{route('account')}}" class="btn btn-login">Đăng Nhập</a>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tour-details end-->
@endsection

@section('js')
<script type="text/javascript" src="{{url('public/js')}}/simple.money.format.js"></script>
<script type="text/javascript" src="{{url('public/js')}}/star-rating.js"></script>
<script type="text/javascript">
    

    //auto calculate price
        $('.number_input').on('change',function(){
            var x = 0;
            var y = 0;
            var ap = 0;
            var cp = 0;
            x = $('#adult_number').val();
            x = parseInt(x);

            ap = $('#adult_price').val();
            ap = parseInt(ap);

            cp = $('#children_price').val();
            cp = parseInt(cp);

            y = $('#children_number').val();
            y = parseInt(y);

            if(Number.isNaN(x)){
                x = 0;
            }else if(Number.isNaN(y)){
                y = 0;
            };
            $('#total_price').val(x*ap + y*cp);
            $('.total_price').simpleMoneyFormat();
        });
    
    //display average star tour
    var average_star = $('#average').val();
    var totalStar = 5;

    document.addEventListener('DOMContentLoaded', getAverage);

    function getAverage(){
        //Calculate Percentage
        var starPercentage = (average_star / totalStar) * 100 + "%";
        // //Set width to stars-inner to percentage
        $('.stars-inner').css('width',starPercentage);

    }
   
</script>
@stop