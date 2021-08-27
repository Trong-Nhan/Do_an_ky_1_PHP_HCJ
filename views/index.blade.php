@extends('layouts.main')

@section('main')
	<div class="banner-home">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="banner-text">
							<h6>CHÀO MỪNG TỚI <b>WEND TRAVEL</b></h6>
							<h1>Khám phá những vùng đất đẹp đẽ ở Việt Nam</h1>
							<p>Bạn có rất nhiều lựa chọn với các Tour du lịch của chúng tôi</p>
						</div>
						<div class="banner-btn">
							<a href="" class="btn btn-3">Tìm Hiểu Thêm</a>
						</div>
					</div>
					<div class="col-md-5">
						<div class="banner-video">
							<a href="https://www.youtube.com/watch?v=M2o-AnFChT4" class="video-play-btn">
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="search-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 search-main">
						<nav class="navbar">
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="#">Tìm kiếm Tour</a>
								</li>
							</ul>
						</nav>
						<form action="{{route('search')}}" method="GET">
							<div class="option-select">
								<div class="col-md-12 tour-search-bar">
									<input type="text" name="search_key" class="form-control" placeholder="Tìm kiếm Tour">
								</div>
								<div class="col-md-6">
									<input type="text" id="start-date" name="from_date" class="form-control" placeholder="Từ Ngày">
								</div>
								<div class="col-md-6">
									<input type="text" id="end-date" name="to_date" class="form-control" placeholder="Đến Ngày">
								</div>
							</div>
							<div class="search-btn pull-right">
								<button type="submit" class="btn btn-2">TÌM KIẾM</button>
							</div>
						</form>
					</div>
					<div class="col-md-6">
						<div class="left-banner-text">
							<h6>Nơi Tuyệt Vời Để Bắt Đầu Chuyến Đi Của Bạn</h6>
							<h2>
								Về <span>Công Ty</span> Của Chúng Tôi
							</h2>
							<p>Chúng tôi có nhiều năm kinh nghiệm trong việc tổ chức các Tour du lịch trên khắp lãnh thổ Việt Nam, từ tour nhiều ngày cho đến các tour ngắn ngày</p>
							<p>Đến với chúng tôi, các bạn có thể tận hưởng những trải nghiệm tuyệt vời trong suốt chuyến đi của mình</p>
							<a href="{{route('gallery')}}" class="btn btn-2">Thư viện ảnh</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right-banner-img">
							<div class="owl-carousel owl-theme banner-slide" >
								@foreach($destination as $des)
								<div class="item">
									<img src="{{url('public/images/uploads')}}/{{$des->image}}" style="height: 346px">
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="amazing">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="amazing-left-img">
							<img src="{{url('public')}}/images/amagin.png" alt="">
						</div>
					</div>
					<div class="col-md-7">
						<div class="amazing-right-text">
							<h6>Để tăng thêm trải nghiệm của quý khách</h6>
							<h2>
								Các dịch vụ dành cho <span>khách hàng của chúng tôi</span>
							</h2>
							<p>
								Chúng tôi đem đến các dịch vụ đi kèm cũng như các phương tiện vận chuyển đa dạng, phù hợp với từng nhu cầu của quý khách.
							</p>
						</div>
						<div class="amazing-right-img">
							<img src="{{url('public')}}/images/roted.png" alt="">
						</div>
						<div class="amazing-travel">
							<div class="travel-service">
								<i class="fas fa-plane"></i>
								<p>Máy Bay</p>
							</div>
							<div class="travel-service">
								<i class="fas fa-ship"></i>
								<p>Thuyền</p>
							</div>
							<div class="travel-service">
								<i class="fas fa-car"></i>
								<p>Xe Hơi</p>
							</div>
							<div class="travel-service">
								<i class="fas fa-subway"></i>
								<p>Tàu Hỏa</p>
							</div>
							<div class="travel-service">
								<i class="fas fa-bed"></i>
								<p>Khách Sạn</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- amazing end -->
		<!-- tour start -->
		<div class="tour-describe">
			<div class="content-box text-center">
				<h6>Những Điểm Đến Thú Vị</h6>
				<h2>Danh sách các Tour <span>Mới Nhất</span></h2>
				<p>Chúng tôi luôn cập nhật các Tour du lịch mới mỗi ngày</p>
			</div>
			<div class="container">
				<div class="tour-slider owl-carousel owl-theme">
					@foreach($tour as $tr)
					<div class="des-cov item">
			          <div class="des-img">
			            <a href="{{route('home.destination',['slug'=>$tr->slug])}}"><img src="{{url('public/images/uploads')}}/{{$tr->image}}" alt="img" /></a>
			          </div>
			          <div class="des-para">
			            <div class="dayt">
			              <h6>
			              	<a href="{{route('home.destination',['slug'=>$tr->slug])}}">{{$tr->name}}</a>
			              </h6>
			              <p>{{$tr->duration}} Ngày</p>
			            </div>
			            <div class="real-dat-para">
			              <p>
			                {{$tr->summary}}
			              </p>
			            </div>
			            <div class="des-button-icon">
			              <div class="das-into-btn">
			                <a href="{{route('home.destination',['slug'=>$tr->slug])}}" class="btn btn-3">Xem chi tiết</a>
			              </div>
			              <div class="start-icon-des">
			                <i class="fas fa-star"></i>
			                <i class="fas fa-star"></i>
			                <i class="fas fa-star"></i>
			                <i class="fas fa-star"></i>
			                <i class="fas fa-star"></i>
			              </div>
			            </div>
			          </div>
			        </div>
			        @endforeach
				</div>
			</div>
		</div>
		<!-- end tour -->
		<!-- start discount -->
		<div class="discount-des">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-lg-offset-2">
						<div class="discount-main-section">
							<div class="discount-cover text-center">
								<h6>Ưu đãi đặc biệt</h6>
								<p>
									<span>25%</span> off
								</p>
								<h6>Trải nghiệm mùa hè tuyệt vời với chúng tôi</h6>
								<h2>Tour Du lịch Phú Quốc</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end discount -->
		<!-- start team -->
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
		<!-- end team -->
		<!-- start video -->
		<section id="home-testimonial-top">
			<div class="content-box text-center">
			  <h6 class="color-1">Giới Thiệu</h6>
			  <h2 class="color-2"><span>Video</span></h2>
			</div>
		</section>
		<!-- testimonial-top end-->

		<!-- testimonial start-->
		<section id="home-testimonial">
			<div class="container">
			  <div class="row">
			    <div class="col-lg-12">
			      <div class="vt-img">
			        <img src="{{url('public')}}/images/video.png" alt="img" />
			      </div>
			      <div class="video-play-test">
			        <a href="https://www.youtube.com/watch?v=M2o-AnFChT4" class="video-play-btn video-link venobox"
			          data-autoplay="true" data-vbtype="video"><i class="fas fa-play"></i></a>
			      </div>
			    </div>
			  </div>
			</div>
		</section>
		<!-- video and review end -->
		<!-- contact begin -->
		  <!-- contact start-->
		<section id="home-contact">
			<div class="map-inner">
			  <iframe
			    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6962663570607!2d89.56355961427838!3d22.813715829827952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff901efac79b59%3A0x5be01a1bc0dc7eba!2sAnd+IT!5e0!3m2!1sen!2sbd!4v1557901943656!5m2!1sen!2sbd"
			    width="600" height="450" allowfullscreen=""></iframe>
			</div>
			<div class="container">
			  <div class="row">
			    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
			      <div class="contact-cover">
			        <div class="contact-heading">
			          <h2>Bạn có câu hỏi gì không? </h2>
			          <p>
			            Chúng tôi sẽ luôn giải đáp, tiếp thu những nhận xét của quý khách gửi về cho chúng tôi
			          </p>
			        </div>
			        <div class="info-office">
			          <div class="phone-deta">
			            <div class="phone-info">
			              <i class="fas fa-phone-alt"></i>
			            </div>
			            <div class="sams">
			              <p>+8496-827-6996</p>
			              <p>+8497-407-9806</p>
			            </div>
			          </div>
			          <div class="email-deta">
			            <div class="phone-info">
			              <i class="far fa-paper-plane"></i>
			        	</div>
			            <div class="sams">
			              <p>tson.nguyen3112@gmail.com</p>
			              <p>info@gmail.com</p>
			            </div>
			          </div>
			        </div>
			        <div class="contact-form">
			          <form action="{{route('postcontact')}}" method="POST">
			          	@csrf
			            <div class="row">
			              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
			                <div class="form-group">
			                  <input type="text" class="form-control" name="name" placeholder="Tên Của Bạn" required />
			                  @error('name')
	                            <small class="help-block text-danger">
	                                {{$message}}
	                            </small>
	                        @enderror
			                </div>
			              </div>
			              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
			                <div class="form-group">
			                  <input type="text" class="form-control" name="email" placeholder="Email Của Bạn" required />
			                  	@error('email')
		                            <small class="help-block text-danger">
		                                {{$message}}
		                            </small>
		                        @enderror
			                </div>
			              </div>
			              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
			                <div class="form-group nessage-text">
			                  <textarea name="content" id="message" rows="6" class="form-control"
			                    placeholder="Thăc Mắc/Góp Ý" required></textarea>
			                    @error('message')
		                            <small class="help-block text-danger">
		                                {{$message}}
		                            </small>
		                        @enderror
			                </div>
			                <div class="contact-sub-btn">
			                  <button type="submit" class="btn submit contactsuccess">Gửi</button>
			                </div>
			              </div>
			            </div>
			          </form>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
		</section>
		<!-- contact end-->
		

@stop