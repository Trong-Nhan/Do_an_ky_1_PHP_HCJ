@extends('layouts.main')

@section('main')

 <!-- gallery-banner start-->
 <section id="gallery-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-banner-text  wow zoomIn text-center" data-wow-duration="2s">
                    <div class="common-heading">
                        <h1>Thư viện ảnh</h1>
                    </div>
                    <div class="commom-sub-heading">
                        <h6>
                            <a href="{{route('index')}}">Home</a>
                            <span>/</span>
                            <a href="#!">Thư viện ảnh</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  gallery-banner end-->

<!-- gallery-are start-->
<section id="gallery-area">
    <div class="container">
        <div class="row">
            @foreach($destination as $dest)
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="gallery-main-hover wow fadeIn" data-wow-duration="1s">
                    <img src="{{url('public/images/uploads')}}/{{$dest->image}}" alt="">
                    <div class="gall-overlay">
                        <div class="all-cover-hall">
                            <div class="icon-tsdg">
                                <a href="{{route('gallery-destination',['slug'=>$dest->slug])}}"><i class="fas fa-search-location"></i></a>
                            </div>
                            <div class="gall-heding-travel">
                                <h6>{{$dest->name}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</section>
@stop