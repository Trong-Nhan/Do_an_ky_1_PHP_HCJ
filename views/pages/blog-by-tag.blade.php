@extends('layouts.main')

@section('main')

<!-- blog-banner start-->
<section id="blog-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="common-banner-text wow zoomIn text-center" data-wow-duration="2s">
            <div class="common-heading">
              <h1>{{$tag->name}}</h1>
            </div>
            <div class="commom-sub-heading">
              <h6>
                <a href="{{route('index')}}">Home</a>
                <span>/</span>
                <a href="#!">{{$tag->name}}</a>
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  blog-banner end-->
  <section id="blog-content">
    <div class="container">
      <div class="row">
        @foreach($tag->blogs as $bl)
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow fadeIn" data-wow-duration="1s">
          <div class="blog-items clas-mar">
            <div class="blog-item-img">
              <a href="{{route('blog-detail',['slug'=>$bl->slug])}}"><img src="{{url('public/images/uploads')}}/{{$bl->image}}" alt="img" style="width: 100%; height: 220px"/></a>
            </div>
            <div class="dtes-not">
              <div class="blog-item-det">
                <h6>
                  <a href="{{route('blog-detail',['slug'=>$bl->slug])}}">{{$bl->name}}</a>
                </h6>
              </div>
              <div class="blog-author">
                <div class="blog-flex-same">
                  <div class="blog-times">
                    <i class="far fa-clock"></i>
                    <p>{{date('d-m-Y',strtotime($bl->created_at))}}</p>
                  </div>
                </div>
                <div class="icon-blog-item">
                  <a href="#!"><i class="fas fa-comments"></i></a>
                  <a href="#!"><i class="fas fa-share-alt"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- pagination start -->
      <div class="blog-pagination d-flex justify-content-center text-center">
        <div class="wrapper blog-wrapper">
          <p id="pagination-here"></p>
        </div>
      </div>
      <!-- pagination end -->
    </div>
  </section>

@stop