@extends('layouts.main')

@section('main')

<!-- blog-banner start-->
<section id="blog-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-banner-text wow zoomIn text-center" data-wow-duration="2s">
                    <div class="common-heading">
                        <h1>Blog Single</h1>
                    </div>
                    <div class="commom-sub-heading">
                        <h6>
                            <a href="{{route('index')}}">Home</a>
                            <span>/</span>
                            <a href="#!">Blog Single</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  blog-banner end-->

<!--  blog-single-content start-->
<section id="blog-single-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="all-single-cover">
                    <div class="blog-sighn-img  wow fadeIn" data-wow-duration="3s">
                        <a href="#!"><img src="{{url('public/images/uploads')}}/{{$blogs->image}}" alt="img"></a>
                    </div>
                    <div class="authour-single">
                        <div class="al-img-at2">
                            <a href="#!"><i class="fas fa-calendar-alt"></i></a>
                            <p>{{date('d-m-Y',strtotime($blogs->created_at))}}</p>
                        </div>
                        <div class="al-img-at2">
                            <a href="#!"><i class="fas fa-comments"></i></a>
                            <p>{{$comment_count->count()}}</p>
                        </div>
                    </div>
                    <div class="blog-single-dd-hed">
                        <h4>{{$blogs->name}}</h4>
                        <p>{!! $blogs->content !!}</p>
                    </div>
                    <div class="inner-tahes">
                        <ul>
                            <li><a href="#!"><i class="fas fa-pen-nib"></i></a></li>
                            @foreach($blogs->tags as $tag)
                            <li><a href="{{url('pages/blog')}}/{{$tag->slug}}">{{$tag->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- comment    -->
                    <div class="lave-cooment">
                        <h4>Viết bình luận</h4>
                        @if(Auth::guard('cus')->check())
                        <div class="leav-form">
                            <form action="{{route('comment',$blogs->slug)}}" method="POST" role="form">
                                @csrf
                                <div class="text-are form-group">
                                    <label for="exampleWrite">Nội Dung<span>*</span></label>
                                    <textarea rows="6" class="form-control" name="content"></textarea>
                                </div>
                                <div class="form-for-btn">
                                    <button type="submit" class="btn for-pag-btn">Bình luận</button>
                                </div>
                            </form>
                        </div>
                        @else
                        <div class="comment-required">
                            <h3>Bạn cần phải đăng nhập thì mới bình luận được bài viết</h3>
                            <a href="{{route('account')}}" class="btn btn-2">Đăng nhập</a>
                        </div>
                        @endif
                    </div>
                    <div class="all-clien-sayt">
                        <!-- comment section -->
                        <h2>{{$comment_count->count()}} Bình Luận</h2>
                        @foreach($comments as $com)
                        <div class="coom-2-client">
                            <div class="coomm-2client-img">
                                @if($com->customers->image)
                                <img src="{{url('public/images/customers')}}/{{$com->customers->image}}" alt="img">
                                @else
                                <img src="{{url('public/images/')}}/unknown-avatar.png" alt="img">
                                @endif
                            </div>
                            <div class="coomm-2cliebt-hed">
                                <div class="alow-rasta">
                                    <div class="all-kal">
                                        <h5>{{$com->customers->f_name}}</h5>
                                        <p class="dadate-titm">{{date('d-m-Y',strtotime($com->created_at))}}</p>
                                    </div>
                                </div>
                                <div class="all-text-emar">
                                    <p>{{$com->content}}</p>
                                </div>
                                @if($com->customers->id != Auth::guard('cus')->user()->id)
                                <div class="darkan-mara">
                                    <p class="comment-reply">Trả lời</p>
                                </div>
                                @else
                                <div class="darkan-mara" style="display: none">
                                    <p class="comment-reply">Trả lời</p>
                                </div>
                                @endif
                                <div class="reply-form">
                                    <form action="{{route('reply-comment',['slug'=>$blogs->slug,'id'=>$com->id])}}" method="POST" class="form-inline" role="form">
                                        @csrf
                                    <h6>Trả lời bình luận</h6>     
                                        <div class="form-group">
                                            <label for="">Nội dung</label>
                                            <textarea rows="6" cols="84" class="form-control" name="content"></textarea>
                                        </div>
                                        <div class="form-for-btn">
                                            <button type="submit" class="btn for-pag-btn">Trả lời</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                            @if($com->replies)
                            @foreach($com->replies as $comrep)
                                @if($comrep->status == 1)
                                <div class="coom-2-client mar-nened">
                                    <div class="coomm-2client-img">
                                        @if($comrep->customers->image)
                                        <img src="{{url('public/images/customers')}}/{{$comrep->customers->image}}" alt="img">
                                        @else
                                        <img src="{{url('public/images/')}}/unknown-avatar.png" alt="img">
                                        @endif
                                    </div>
                                    <div class="coomm-2cliebt-hed">
                                        <div class="alow-rasta">
                                            <div class="all-kal">
                                                <h5>{{$comrep->customers->f_name}}</h5>
                                                <p class="dadate-titm">{{date('d-m-Y',strtotime($comrep->created_at))}}</p>
                                            </div>
                                        </div>
                                        <div class="all-text-emar">
                                            <p>{{$comrep->content}}</p>
                                        </div>
                                        <div class="darkan-mara">
                                            <p class="reply-comment">Trả lời</p>
                                        </div>
                                        <div class="reply-form-reply">
                                            <form action="{{route('reply-comment',['slug'=>$blogs->slug,'id'=>$comrep->id])}}" method="POST" class="form-inline" role="form">
                                                @csrf
                                            <h6>Trả lời bình luận</h6>     
                                                <div class="form-group">
                                                    <label for="">Nội dung</label>
                                                    <textarea rows="6" cols="84" class="form-control" name="content"></textarea>
                                                </div>
                                                <div class="form-for-btn">
                                                    <button type="submit" class="btn for-pag-btn">Trả lời</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>                               
                                @endif
                            @endforeach
                            @endif
                        @endforeach 
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="left-blog-tree">    
                    <div class="alo-search">
                        <form action="{{route('blog-search')}}" method="GET" role="form">
                            <div class="form-group d-flex">
                                <input type="text" placeholder="Search" name="blog_search" class="form-control">
                                <button type="submit" class="btn search-icon-blog"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="coomm-seclitor">
                        <div class="blog-hki-hed">
                            <h5>Categories</h5>
                        </div>
                        <div class="all-boytr">
                            @foreach($tags as $tg)
                            <div class="item-cata">
                                <div class="icon-catr">
                                    <a href="{{url('pages/blog')}}/{{$tg->slug}}"><i class="far fa-dot-circle"></i>{{$tg->name}}</a>
                                </div>
                                <div class="co-num">
                                    <a href="#"></a>
                                </div>
                            </div>
                            @endforeach                     
                        </div>

                    </div>
                    <div class="coomm-seclitor">
                        <div class="blog-hki-hed">
                            <h5>Recent Posts</h5>
                        </div>
                        <div class="blog-cljg">
                            @foreach($blg as $bl)
                            <div class="blog-cliccs">
                                <div class="blog-clss-img  wow zoomIn" data-wow-duration="1s">
                                    <a href="{{route('blog-detail',['slug'=>$bl->slug])}}">
                                        <img src="{{url('public/images/uploads')}}/{{$bl->image}}" alt="">
                                    </a>
                                </div>
                                <div class="alo-blog-clss-text">
                                    <h6><a href="{{route('blog-detail',['slug'=>$bl->slug])}}">{{$bl->name}}</a></h6>
                                    <p class="datre">{{date('d-m-Y',strtotime($bl->created_at))}}</p>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--  blog-single-content end-->
@endsection

@section('js')
<script type="text/javascript">
    $('.reply-form').hide();
    $('.comment-reply').click(function(){
        $('.reply-form').toggle();
        $('.reply-form-reply').hide();
    });
    $('.reply-form-reply').hide();
    $('.reply-comment').click(function(){
        $('.reply-form-reply').toggle();
        $('.reply-form').hide();
    });
</script>

@stop