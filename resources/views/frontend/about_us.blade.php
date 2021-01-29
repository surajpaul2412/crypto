@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher</title>
@endsection

@section('css')
<style type="text/css">
    .faculty-btn{
        border-radius: 16px;
        font-weight: 400;
        color: #7dc34f;
        padding: 5px 18px;
        font-size: 11px;
        box-shadow: 1px 1px 3px 0px rgba(50,50,50,0.10), -1.8px -1.8px 3px 0px rgba(255,255,255,0.8);
        background-image: linear-gradient(to right, #eeeff4, #f4f5f9);
    }
    .page-12-btn{
        box-shadow: 2px 2px 4px 0px rgba(50,50,50,0.10), -1px -1px 3px 0px rgba(255,255,255,0.8);
        background-image: linear-gradient(to right, #edeef3 , #f4f5f9);
        border: 1px solid rgba(255,255,255,0.3);
        font-size: 11px;
        font-weight: 600;
        text-align: center;
        color: #5b5e65;
        padding: 7px 0px;
        width: 170px;
    }
    .page-12-btn:hover{
        transition: 6s;
        transition-delay: all 5s ease;
        -webkit-transition-delay: all 5s ease;
        box-shadow: inset 1px 1px 4px -1px rgba(0,0,0,0.1),
                    inset -4px -3px 6px -1px rgba(255,255,255,0.7),
                    -0.1px -0.1px 0 rgba(255,255,255,1),
                    0.1px 0.1px 0 rgba(0,0,0,0.15),
                    0px 12px 10px -14px rgba(0,0,0,0.05);
        background-image: linear-gradient(to bottom right, #f1f2f7, #f2f3f7);
    }
</style>
@endsection


@section('content')
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0">
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title uppercase">MISSION & VISION STATEMENT</h6>
            <h4 class="font-black text-black font-35 marT-10">Crypto Cipher Audio Lab</h4>
        </div>
        <!-- content -->
        @if($aboutUs->count())
        <div class="row px-3">
            @foreach($aboutUs as $row)
            <div class="col-md-5 mb-3 mt-1">
                <h5 class="font-medium text-black font-400 font-18">
                    {{$row->heading}}
                </h5>
                <div class="font-regular text-grey2 font-13">
                    {!! $row->content !!}
                </div>
                <div class="mobile-center">
                    <a href="{{url('crypto_celeb')}}">
                        <div class="font-regular mt-3 page-12-btn">
                            Few Words From The Pros
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-7 my-2">
                <img src="{{asset('images/aboutUs/')}}/{{$row->image}}" width="100%">
            </div>
            @endforeach
        </div>
        @endif
    </section>
    <!-- indian sample library development -->
    @if($aboutUsLibrary->count())
    <section class="container slider-header mt-4">
        @foreach($aboutUsLibrary as $row)
        <div class="px-4 pt-4 pb-4">
            <h6 class="font-regular text-black pb-0 font-18 bold">{{$row->heading}}</h6>
            <div class="font-regular text-grey2 font-13">
                {!!$row->content!!}
            </div>
            <!-- <div class="row pl-0">
                <div class="col-md-12 pl-0">
                    <img src="{{ asset('assets/frontend/img/del.png') }}" width="100%">
                </div>
            </div> -->
            <div class="mobile-center">
                <a href="">
                    <div class="font-regular mt-3 page-12-btn">
                        Visit Online Store
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </section>
    @endif
    <!-- Advanced Audio Technology Education -->
    @if($aboutUsLibrary->count())
    <section class="container slider-header mt-4">
        <!-- title -->
        <div class="px-4 pt-4 pb-4" style="margin-bottom: -6px;">
            <h6 class="font-regular text-black pb-0 font-18 bold">Advanced Audio Technology Education</h6>
            <div class="row">
                <div class="col-md-12 col-12 pt-3">
                    <div class="font-regular text-grey2 font-13">
                        Advances in Audio technology has evolved in the music industry and Crypto Cipher is dedicated to educating Musicians, Composers , Music Students and Music Aspirants on latest trends in audio technology and their applications through its various advanced education programmes in line with the education system of India. Crypto Cipher seeks to develop interest, capacity and expertise in the use of latest audio technology tools by Sound Engineers, Musicians and Students.
                    </div>
                </div>
                <div class="col-md-6 col-12 pt-3">
                    <div class="font-regular text-grey2 font-13">
                        Crypto Cipher Mission is provide most advance audio technology education in India. Making our student powerhouse of knowledge by giving them most involving & informative process, finally developing an audio researching attitude in their practice.<br><br>
                        This proven process develops most fundamental concepts strong to stay updated with ever evolving Audio Technology. This one complete process is developed & trained by Industry  successful experts with international standards of course structure for most rewarding career in the field of audio.<br><br>
                        Crypto Cipher Audio Lab Provides you with sound proof classrooms for theory sessions & all practical sessions will be done inside the professional studio. A separate control room & recording studio set is just dedicated for student practice so that they do enough practice before they enter professional industry. Candidate after completing the Sound Engineering Diploma will be able to work in studio with all digital technologies related to music production and also will be able to construct complete professional studio single handily.
                    </div>
                </div>
                <div class="col-md-6 col-12 pt-3">
                    <div class="font-regular text-grey2 font-13">
                        Crypto Cipher Future Vision, plans to launch India’s first Audio Research library where all our student after classes can practice endlessly in a library environment under various knowledgeable mentors trained in D.A.W ( Logic Pro X, Ableton Live, Fruity Loops etc ), Audio Electronics, Acoustics, EDM, Acoustics and various audio technology Dimensions.<br><br>
                        Crypto Cipher also has vision of developing a professional career for students under same roof by giving ample career Opportunities by developing a separate professional studio where industry commercial work will be offered to students. Students will get chance of working with clients under guidance of studio experts before they enter professional industry creating a strong portfolio beforehand. 
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- Global Promotion of Indian Artists -->
    @if($aboutUsPromotion->count())
    <section class="container slider-header mt-4">
        @foreach($aboutUsPromotion as $row)
        <div class="px-4 pt-4 pb-4">
            <h6 class="font-regular text-black pb-0 bold font-18">{{$row->heading}}</h6>
            <div class="font-regular text-grey2 font-13">
                {!!$row->content!!}
            </div>
            <div class="row carousel">
                @foreach($aboutUsPromotionImage as $new)
                <div class="col-md-2 page-12-col-md-2 pt-3">
                    <img src="{{asset('images/aboutUs/')}}/{{$new->image}}" width="100%">
                </div>
                @endforeach
            </div>
            <div class="mobile-center">
                <a href="">
                    <div class="font-regular mt-3 page-12-btn">
                        Performance
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </section>
    @endif
</div>
@endsection


@section('script')
<!-- slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('.carousel').slick({
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    dots:false,
    arrows:false,
    centerMode: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 2,
        dots: false,
        arrows:false,
        infinite: true,
      }
    },  {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        arrows:false,
        autoplay: false,
        autoplaySpeed: 2000,
      }
    }]
  });
});
</script>
@endsection