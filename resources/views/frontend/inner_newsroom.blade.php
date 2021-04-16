@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher | {{$news->id}}</title>
@endsection

@section('css')
<style type="text/css">
    .my-5{
        margin-top: 4rem!important;
        margin-bottom: 3rem!important;
    }
    .about-see-more img{
        padding-bottom: 1.4px;
        width: 24px;
        margin-top: -3px;
    }
    .about-see-more span{
        font-size: 13px;
    }
    .font-1vw{
        font-size: 1vw;
    }
</style>
@endsection

@section('content')
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0 pb-3">
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title">Crypto Cipher Newsroom</h6>
            <h4 class="font-black text-black font-35 marT-10">{!! \Illuminate\Support\Str::limit($news->title, 120, $end='...') !!}</h4>
        </div>
        <!-- content -->
        @if($news->count())
        <div class="row px-3">
            <div class="col-md-12 col-12">
                <img class="lazy" data-original="{{env('image_url')}}/news/{{$news->image}}" width="100%">
                <h4 class="font-bold text-black pt-3">{{$news->title}}</h4>
                <p class="font-regular text-grey2 pt-2">{!! $news->content !!}</p>
            </div>
        </div>
        @else
        @endif
    </section>
</div>
@endsection

@section('script')
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