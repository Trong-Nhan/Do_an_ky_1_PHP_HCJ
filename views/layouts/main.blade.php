<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Wend - Best Travel</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{url('public')}}/css/zebra_datepicker_bs.min.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
		<link rel="stylesheet" href="{{url('public')}}/css/owl.carousel.min.css">
		<link rel="stylesheet" href="{{url('public')}}/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="{{url('public')}}/css/style.css">
		<link rel="stylesheet" href="{{url('public/css')}}/lightbox.css">

		@yield('css')
	</head>
	<body>
		<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-4">
							<p><i class="fas fa-envelope"></i> tson.nguyen3112@gmail.com</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-8 pull-left">
							<p><i class="fas fa-map-marker-alt"></i> 236 Hoàng Quốc Việt, Hà Nội</p>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="sign-in">
								@if(Auth::guard('cus')->check())
								<!-- <div class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown">
										<p>{{Auth::guard('cus')->user()->name}}</p>
									</a>
									<a href="{{route('home.logout')}}" class="dropdown-menu">
										<p>Sign Out</p>
									</a>
								</div> -->
								<div class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown">
										<p>Xin Chào: 
											@if(Auth::guard('cus')->user()->image)
											<img src="{{url('public/images/customers')}}/{{Auth::guard('cus')->user()->image}}" alt=""
											style="width: 30px; border-radius: 100%">
											{{Auth::guard('cus')->user()->f_name}}
											@else
											<img src="{{url('public/images/')}}/unknown-avatar.png" alt=""
											style="width: 30px; border-radius: 100%">
											{{Auth::guard('cus')->user()->f_name}}
											@endif
										</p>
									</a>
									<div class="dropdown-menu">
										<a href="{{route('account-info')}}">
											<p>Thông Tin Tài Khoản</p>
										</a>
										<a href="{{route('home.logout')}}">
											<p>Đăng Xuất</p>
										</a>
									</div>
								</div>
								<div class="col-md-4">
									
								</div>
								@else
								<a href="{{route('account')}}">
									<p><i class="fas fa-user"></i> Đăng Nhập</p>
								</a>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-nav">	
				<div class="container">
					<div class="col-md-2 col-xs-12">
						<div class="col-xs-6">
							<img src="{{url('public')}}/images/logo.png" alt="">
						</div>
						<div class="col-xs-6">
							<div class="responsive-icon"><i class="fas fa-bars"></i></div>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="nav-menu" id="navMenu">
							<ul>
								<li><a href="{{route('index')}}">Trang Chủ</a></li>
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown">Tour <i class="fas fa-chevron-down"></i></a>
									<ul class="dropdown-menu">
										<li>
											@foreach($destination as $dest)
											<a href="{{route('home.destination',['slug'=>$dest->slug])}}">{{$dest->name}}</a>
											@endforeach
										</li>
									</ul>
								</li>
								<li><a href="{{route('service')}}">Dịch Vụ</a></li>
								<li><a href="{{route('gallery')}}">Ảnh</a></li>
								<li><a href="{{route('blog')}}">Blog</a></li>
								<li class="dropdown">
									<a href="" class="dropdown-toggle" data-toggle="dropdown">Xem Thêm  <i class="fas fa-chevron-down"></i></a>
									<ul class="dropdown-menu">
										<li><a href="{{route('about')}}">Về Chúng Tôi</a></li>
										<li><a href="{{route('contact')}}">Liên Hệ</a></li>
										<li><a href="{{route('faq')}}">FAQ</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 nav-contact">
						<i class="fas fa-phone-volume"></i>
						<div class="contact-text">
							<h4>096-827-6996</h4>
							<h6>Liên Hệ Mọi Lúc Mọi Nơi</h6>
						</div>
					</div>
				</div>
			</div>
		</header>

		@yield('main')

		<footer id="footer-all-page">
			<div class="container">
			  <div class="row">
			    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
			      <div class="all-fott-cov">
			        <div class="footer-logo">
			          <a href="#"><img src="{{url('public')}}/images/logo.png" alt="img" /></a>
			        </div>
			        <div class="footer-para">
			          <p>
			            Wend Travel, website đặt tour thuận tiện, nhanh chóng, giúp bạn đi đến bất cứ đâu
			          </p>
			        </div>
			        <div class="footer-form">
			          <form action="{{route('info-receive')}}" method="POST">
			          	@csrf
			          	<div class="form-group d-flex">
			     		@error('email')
                            <small class="help-block text-error">
                                {{$message}}
                            </small>
                        @enderror
			          	  <input type="text" name="email" placeholder="Nhận thông tin" class="form-control" />
			          	  <button type="submit" class="btn plean-footer">
			          	    <i class="fab fa-telegram-plane"></i>
			          	  </button>
			          	</div>
			          </form>
			        </div>
			      </div>
			    </div>
			    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
			      <div class="quick-link">
			        <div class="comm-foot-hed">
			          <h6>Liên Kết</h6>
			        </div>
			        <div class="foot-list">
			          <ul>
			            <li><a href="{{route('about')}}">Về Chúng Tôi</a></li>
			            <li><a href="">Tours</a></li>
			            <li><a href="{{route('contact')}}">Liên Hệ</a></li>
			            <li><a href="{{route('faq')}}">FAQ</a></li>
			          </ul>
			        </div>
			      </div>
			    </div>
			    <div class="col-lg-2 col-md-6 col-sm-6 col-6">
			      <div class="quick-link-2">
			        <div class="foot-list-2">
			          <ul>
			            <li><a href="{{route('index')}}">Home</a></li>
			            <li><a href="{{route('gallery')}}">Thư Viện Ảnh</a></li>
			            <li><a href="{{route('service')}}">Dịch Vụ</a></li>
			            <li><a href="{{route('blog')}}">Bài Viết</a></li>
			          </ul>
			        </div>
			      </div>
			    </div>
			    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
			      <div class="recent-fot-post mar-top-responsive">
			        <div class="comm-foot-hed">
			          <h6>Bài Viết Gần Đây</h6>
			        </div>
			        <div class="post-cover-foot">
			        	@foreach($blg as $bl)
			          <div class="pos-rece-1">
			            <div class="post-rect-img">
							<a href="{{route('blog-detail',['slug'=>$bl->slug])}}">
							    <img src="{{url('public/images/uploads')}}/{{$bl->image}}" alt="">
							</a>
			            </div>
			            <div class="podt-text-1">
			              <p>
			                <a href="{{route('blog-detail',['slug'=>$bl->slug])}}">{{$bl->name}}</a>
			              </p>
			              <span>{{date('d-m-Y',strtotime($bl->created_at))}}</span>
			            </div>
			          </div>
			          @endforeach   
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
		</footer>
		<!-- footer end -->
		<!-- footer-bottom -->
		<div class="footre-bottom">
			<div class="container">
			  <div class="row">
			    <div class="col-lg-6 col-md-8 col-sm-8 col-8">
			      <div class="copy-right-para">
			        <p>Đồ Án Cuối Kỳ 1 - Nhóm 3 - C1930I</p>
			      </div>
			    </div>
			    <div class="col-lg-6 col-md-4 col-sm-4 col-4">
			      <div class="copy-right-icon">
			        <a href="https://www.facebook.com/groups/2230486443661009"><i class="fab fa-facebook-f face no-ag"></i></a>
			      </div>
			    </div>
			  </div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
 		<script type="text/javascript" src="{{url('public/js')}}/lightbox.min.js"></script>
		<!-- Zebra Datepicker -->
		<script src="{{url('public')}}/js/zebra_datepicker.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{url('public')}}/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script type="text/javascript" src="{{url('public')}}/js/owl.carousel.min.js"></script>
 		<script type="text/javascript" src="{{url('public')}}/js/function.js"></script>
 		@yield('js')
 		@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
	</body>
</html>