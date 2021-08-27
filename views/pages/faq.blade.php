@extends('layouts.main')

@section('main')

<section id="faq-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="common-banner-text wow zoomIn text-center" data-wow-duration="2s">
                    <div class="common-heading">
                        <h1>FAQs</h1>
                    </div>
                    <div class="commom-sub-heading">
                        <h6>
                            <a href="{{route('index')}}">Home</a>
                            <span>/</span>
                            <a href="#!">FAQs</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="faq-main">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="faq-group">
                    <div class="faq-section faq-list" id="accordion">
                        <?php $i = 0 ?>
                        @foreach($faq_category as $fcate)
                        <h3 id="{{$fcate->id}}">{{$fcate->name}}</h3>
                        <?php $faq = App\Models\Faq::where('faq_category_id',$fcate->id)->orderBy('id','ASC')->get() ?>
                        @foreach($faq as $f)
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="faq-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}">
                                {{$f->name}}</a>
                              </h4>
                            </div>
                            <div id="collapse{{$i}}" class="panel-collapse collapse">
                              <div class="panel-body">{{$f->content}}</div>
                            </div>
                          </div>

                          <?php $i++ ?>
                          @endforeach
                          <?php $i++ ?>
                          @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="faq-catalog">
                    <h5>All</h5>
                    @foreach($faq_category as $fcat)
                    <h6><a href="#{{$fcat->id}}">{{$fcat->name}}</a></h6>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script type="text/javascript" src="{{url('public/js')}}/accordiom.min.js"></script>
<script type="text/javascript">

</script>
@stop