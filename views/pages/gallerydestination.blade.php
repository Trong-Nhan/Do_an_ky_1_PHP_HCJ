@extends('layouts.main')


@section('main')
 <!-- gallery-banner start-->
 <section id="gallery-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-banner-text  wow zoomIn text-center" data-wow-duration="2s">
                    <div class="common-heading">
                        <h1>{{$destination->name}}</h1>
                    </div>
                    <div class="commom-sub-heading">
                        <h6>
                            <a href="{{route('index')}}">Home</a>
                            <span>/</span>
                            <a href="#!">{{$destination->name}}</a>
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
            <div class="destination-gallery">
                <h1 class="text-center">{{$destinations->name}}</h1>
            </div>
            @foreach($gallery as $gal)
            <div class="col-md-3 gallery">
                <a href="{{url('public/images/uploads')}}/{{$gal->image}}" class="thumbnail" data-lightbox="example-set" data-title="{{$gal->name}}">
                    <img src="{{url('public/images/uploads')}}/{{$gal->image}}" alt="">
                </a>
            </div>
            @endforeach
            
        </div>
    </div>
    
</section>
@endsection

@section('js')

<script type="text/javascript">
    
</script>
@stop