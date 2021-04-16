@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher</title>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.css">
<style>
    .nav{
        display: block !important;
    }
    .nav li{
        margin: 10px 0px;
    }
    .main-nav2 li{
        margin: 0px 0px !important;
    }
    .main-nav2 li a{
        color: #5B5E65;
    }
    .nav-pills1 .nav-link1.active, .nav-pills1 .show>.nav-link1{
        color: #02BC4D !important;
    }
    .nav-pills .nav-item{
        box-shadow: 1px 1px 4px 0px rgba(25,25,25,0.15), -1.5px -1.5px 2px 0px rgba(255,255,255,0.8) !important;
        background-image: linear-gradient(to right, #edeef3 , #f4f5f9);
        border: 1px solid rgba(255,255,255,0.3);
        border-radius: 0;
        border-radius: 0;
    }
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
        background-color: inherit;
        color: inherit;
        border-bottom: 5px solid #02BC4D;
        border-radius: 0;
    }
    .nav-link{
        padding: 0px;
    }
    .inner-side{
        box-shadow: 1px 1px 4px 0px rgba(25,25,25,0.15), -1.5px -1.5px 2px 0px rgba(255,255,255,0.8) !important;
        background-image: linear-gradient(to right, #edeef3 , #f4f5f9);
        border: 1px solid rgba(255,255,255,0.3);
    }
    .media-pt-1{
        padding-top: 0.45rem;
    }
    @media only screen and (max-width: 745px) {
        .media-center{
            text-align: center;
        }
    }
</style>
@endsection

@section('content')
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0">
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title uppercase">news & articles</h6>
            <h4 class="font-black text-black font-35 marT-10">Crypto Cipher Newsroom</h4>
        </div>
        <!-- content -->
        <div class="row px-4 pb-2">
            <div class="col-md-4 pl-2 mobile-pr-2">
                <!-- search -->
                <div class="search">
                    <input type="text" id="myFilter" class="form-control" onkeyup="myFunction()" placeholder="Search Via Keyword..">
                </div>
                <div id="myItems">
                    @if($news->count())
                    <ul id="myTabs" class="nav nav-pills" role="tablist" data-tabs="tabs">
                        @foreach($news as $index => $row)
                        <li class="nav-item mobile-mb-3">
                            <a class="nav-link {{$index == 0 ? 'active' : '' }}" href="#tab{{$index+1}}" data-toggle="tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="lazy" data-original="{{env('image_url')}}/news/{{$row->image}}" width="100%">
                                    </div>
                                    <div class="title d-none">
                                        {{$row->title}}
                                    </div>
                                    <div class="col-md-12 py-2 px-4">
                                        <div class="row">
                                            <div class="col-md-4 col-6 media-center" align="left">
                                                <h6 class="mt-2">
                                                    <button class="page-4-btn font-regular" onclick="document.location.href='{{route('newsroom.show',$row->slug)}}';">
                                                        Open News <i class="fas fa-angle-right pl-1"></i>
                                                    </button>
                                                </h6>
                                            </div>
                                            <div class="col-md-8 col-6 media-pt-1 media-center" align="right">
                                                <button class="desktop-d-none page-4-btn font-regular" data-toggle="modal" data-target="#myModal{{$index+1}}">
                                                    Read More <i class="fas fa-angle-right pl-1"></i>
                                                </button>
                                                <span class="font-regular font-11 mobile-d-none text-dark">{{$row->created_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            <div class="col-md-8 mobile-d-none">
                @if($news->count())
                <div class="tab-content inner-side">
                    @foreach($news as $key => $row)
                    <div role="tabpanel" class="tab-pane {{$key == 0 ? 'active' : '' }}" id="tab{{$key+1}}">
                        <div class="row py-1">
                            <div class="col-md-12 col-12">
                                <img data-original="{{env('image_url')}}/news/{{$row->image}}" class="lazy d-block mx-auto" width="98%">
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="font-bold text-black font-13 pt-3 px-3">
                                    {{$row->title}}
                                </div>
                                <div class="font-regular text-grey2 font-13 py-2 px-3">
                                    {!! $row->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </section>
</div>

<!-- modal details in mobile -->
<div class="desktop-d-none">
    @if($news->count())
    @foreach($news as $index => $row)
    <div class="modal fade" id="myModal{{$index+1}}" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-1">
                    <img data-original="{{env('image_url')}}/news/{{$row->image}}" class="lazy d-block mx-auto" width="100%">
                    <div class="font-bold text-black pt-3 px-2" style="text-align: justify;">{{$row->title}}</div>
                    <p class="font-regular text-grey2 px-2 pt-2">{!! $row->content !!}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>
@endsection

@section('script')
<!-- search filter -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script>
function myFunction() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("myItems");
    cards = cardContainer.getElementsByClassName("nav-item");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".nav-link .row .title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
</script>
<!-- lazyloader -->
<script src="js/customLazy.js"></script>
<script src="https://rawgit.com/intoro/Lazy_Load_JQuery/master/js/2_2_4_jquery.min.js"></script>
<script src="https://rawgit.com/intoro/Lazy_Load_JQuery/master/js/1_9_7_jquery.lazyload.js"></script>
<script>
$(document).ready(function(){
  $('img.lazy').lazyload({
    effect: "fadeIn"
  });
});
</script>
@endsection