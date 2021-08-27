@extends('layouts.main')

@section('main')
	<!-- tour-banner start-->
    <section id="tour-packes">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common-banner-text  wow zoomIn text-center" data-wow-duration="2s">
                        <div class="common-heading">
                            <h1>Danh Sách Tour</h1>
                        </div>
                        <div class="commom-sub-heading">
                            <h6>
                                <a href="{{route('index')}}">Trang Chủ</a>
                                <span>/</span>
                                <a href="#!">Danh Sách Tour</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
            </div>
        </div>
    </div>
    <!--  tour-banner end-->
    <!-- tour start-->
    <section id="tour-des">
        <div class="content-box can-if text-center">
            <h5><b>Tìm thấy <span style="color: #ff9d34">{{count($tour_search)}} kết quả</span></b></h5>
        </div>
        <div class="container">
            <div class="row">
                @foreach($tour_search as $tr)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="des-cov-1">
                        <div class="des-img-1">
                            <a href="{{route('home.destination',['slug'=>$tr->slug])}}"><img src="{{url('public/images/uploads')}}/{{$tr->image}}" alt="img"></a>
                        </div>
                        <div class="des-para">
                            <div class="dayt">
                                <h6><a href="{{route('home.destination',['slug'=>$tr->slug])}}">{{$tr->name}}</a></h6>
                                <p>{{$tr->duration}} Ngày</p>
                            </div>
                            <div class="real-dat-para">
                                <p>Ngày đi: {{date('d-m-Y', strtotime($tr->start_date))}}</p>
                            </div>
                            <div class="des-button-icon">
                                <div class="das-into-btn">
                                    <a href="{{route('home.destination',['slug'=>$tr->slug])}}" class="btn btn-3">View More</a>
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
                </div>
                @endforeach
            </div>
        </div>
    </section>

   <!-- start discount -->
    <div class="discount-des">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-offset-2">
                    <div class="discount-main-section">
                        <div class="discount-cover text-center">
                            <h6>Summer Special</h6>
                            <p>
                                <span>25%</span> off
                            </p>
                            <h6>Spend the best vacation with us</h6>
                            <h2>The nights of Thailand</h2>
                        </div>
                        <div class="discount-span">
                            <span>4days / 5nights</span>
                        </div>
                        <div class="discount-btn">
                            <a href="" class="btn btn-default">View Details</a>
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
            <h6>Travel Guides, Tips & Advice</h6>
            <h2>Travel <span>Agents</span></h2>
            <p>Aliquam erat volutpat. Curabitur tempor nibh quis arcu convallis, sed viverra quam sollicitudin. Proin sed augue sed neque ultricies condimentum.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="team-box">
                        <img src="{{url('public')}}/images/agents/t-1.png" alt="">
                        <div class="box-content">
                            <h3 class="title">William  Jason</h3>
                            <p class="position">Web desiner</p>
                            <a href="" class="btn btn-default">Hire</a>
                        </div>
                        <ul class="icon">
                          <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                          </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-box">
                        <img src="{{url('public')}}/images/agents/t-1.png" alt="">
                        <div class="box-content">
                            <h3 class="title">William  Jason</h3>
                            <p class="position">Web desiner</p>
                            <a href="" class="btn btn-default">Hire</a>
                        </div>
                        <ul class="icon">
                          <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                          </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-box">
                        <img src="{{url('public')}}/images/agents/t-1.png" alt="">
                        <div class="box-content">
                            <h3 class="title">William  Jason</h3>
                            <p class="position">Web desiner</p>
                            <a href="" class="btn btn-default">Hire</a>
                        </div>
                        <ul class="icon">
                          <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end team -->
    <!-- start video -->
    <section id="home-testimonial-top">
    <div class="content-box text-center">
      <h6 class="color-1">Motion</h6>
      <h2 class="color-2">Watch Our <span> Video Tour</span></h2>
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
                <a href="https://www.youtube.com/watch?v=V43FgG7kE00" class="video-play-btn video-link venobox"
                  data-autoplay="true" data-vbtype="video"><i class="fas fa-play"></i></a>
              </div>
            </div>
          </div>
          <div class="test-slider-home-1 owl-carousel owl-theme">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                  <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="test-monial-item">
                      <div class="test-heading">
                        <h6>Lots of Smiles</h6>
                        <h2>
                          More Than 960+ People <span>Are Happy With Us.</span>
                        </h2>
                      </div>
                      <div class="test-flex">
                        <p>
                          “Dignissimos asperiores vitae velit veniam totam fuga
                          molestias accusamus alias autem provident. Odit ab
                          aliquam dolor eius. Facilis ipsum reprehenderit nemo
                          molestias. Aut cum mollitia reprehenderit. Eos cumque
                          dicta adipisci architecto culpa amet.”
                        </p>
                        <h6>Carry Bradshow</h6>
                        <div class="start-icon">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                    <div class="qyaty">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="test-moinal-ing-left">
                      <img src="{{url('public')}}/images/client/client-1.jpg" alt="img" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                  <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="test-monial-item">
                      <div class="test-heading">
                        <h6>Lots of Smiles</h6>
                        <h2>
                          More Than 960+ People <span>Are Happy With Us.</span>
                        </h2>
                      </div>
                      <div class="test-flex">
                        <p>
                          “Dignissimos asperiores vitae velit veniam totam fuga
                          molestias accusamus alias autem provident. Odit ab
                          aliquam dolor eius. Facilis ipsum reprehenderit nemo
                          molestias. Aut cum mollitia reprehenderit. Eos cumque
                          dicta adipisci architecto culpa amet.”
                        </p>
                        <h6>Carry Bradshow</h6>
                        <div class="start-icon">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                    <div class="qyaty">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="test-moinal-ing-left">
                      <img src="{{url('public')}}/images/client/client-2.jpg" alt="img" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                  <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="test-monial-item">
                      <div class="test-heading">
                        <h6>Lots of Smiles</h6>
                        <h2>
                          More Than 960+ People <span>Are Happy With Us.</span>
                        </h2>
                      </div>
                      <div class="test-flex">
                        <p>
                          “Dignissimos asperiores vitae velit veniam totam fuga
                          molestias accusamus alias autem provident. Odit ab
                          aliquam dolor eius. Facilis ipsum reprehenderit nemo
                          molestias. Aut cum mollitia reprehenderit. Eos cumque
                          dicta adipisci architecto culpa amet.”
                        </p>
                        <h6>Carry Bradshow</h6>
                        <div class="start-icon">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                    <div class="qyaty">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="test-moinal-ing-left">
                      <img src="{{url('public')}}/images/client/client-3.jpg" alt="img" />
                    </div>
                  </div>
                </div>
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
                  <h2>Do You Have Any Questions?</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                    vehicula volutpat porta. Cras in vulputate est
                  </p>
                </div>
                <div class="info-office">
                  <div class="phone-deta">
                    <div class="phone-info">
                      <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="sams">
                      <p>+124 (2486) 444</p>
                      <p>+133 (4444) 878</p>
                    </div>
                  </div>
                  <div class="email-deta">
                    <div class="phone-info">
                      <i class="far fa-paper-plane"></i>
                    </div>
                    <div class="sams">
                      <p>mail@example.com</p>
                      <p>info@mail.com</p>
                    </div>
                  </div>
                </div>
                <div class="contact-form">
                  <form action="#">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Name:" required />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Email:" required />
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group nessage-text">
                          <textarea name="message" id="message" rows="6" class="form-control"
                            placeholder="Enter Your Message:" required></textarea>
                        </div>
                        <div class="contact-sub-btn">
                          <a href="#!" class="btn submit contactsuccess">Submit</a>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="success-msg alert alert-success" style="display: none;">
                    <strong>Success!</strong> Email Send Succesfully.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- contact end-->


@stop