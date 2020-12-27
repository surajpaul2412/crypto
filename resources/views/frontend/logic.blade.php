@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher</title>
@endsection

@section('css')
<style>
    .ul-logic {
        list-style: none;
        padding-left: 0px;
    }
    .ul-logic li {
        background:url('{{ asset('assets/frontend/img/book.svg') }}') no-repeat 0px 15px;
        background-size: 20px;
        padding-left: 34px;
        padding-top: 8px;
        padding-bottom: 3px;
    }
    .quick-info{
        list-style: none;
    }
    .quick-info li {
        background:url('{{ asset('assets/frontend/img/Ellipse.png') }}') no-repeat 0px 10px;
        background-size: 8px;
        padding-left: 18px;
        padding-bottom: 3px;
    }
</style>
@endsection


@section('content')
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0">
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title">LOGIC PRO X & ABLETON LIVE</h6>
            <h4 class="font-black text-black font-35 marT-10">Music Production Course : Foundation Course</h4>
        </div>
        <!-- content -->
        <div class="row px-3">
            <div class="col-md-6 my-2">
                <div class="" align="left">
                    @if($productionCourse->count())
                    @foreach($productionCourse as $row)
                        {!! $row->content !!}
                    @endforeach
                    @endif
                    <div class="mobile-center">
                        <a href="{{url('register')}}">
                            <div class="font-regular mb-2 mt-4 page-12-btn">
                                APPLY NOW
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-2">
                <div class="slider-header bg-theme p-4" align="left">
                    <h4 class="font-black text-black font-18">Quick Info</h4>
                    <ul class="font-regular text-black font-15 pl-0 quick-info">
                        @if($quick->count())
                        @foreach($quick as $row)
                            <li>{!!$row->content!!}</li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Course Content & Direction of Course : Advanced Logic Pro X  -->
    <section class="container slider-header mt-4 px-3" id="logic">
        <!-- title -->
        <div class="px-2 pt-4 pl-0">
            <h4 class="font-black text-black font-18">Course Content & Direction of Course : Advanced Logic Pro X</h4>
            <h4 class="font-black text-black font-18">Learning Tools & Application in Music Production Process</h4>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-md-12 mx-2">
                <ul class="font-regular text-grey2 font-13 ul-logic">
                    @if($logic->count())
                    @foreach($logic as $row)
                    <li>{!! $row->content !!}</li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </section>
    <!--  Pro Ableton Live Course -->
    <section class="container slider-header mt-4 px-3" id="ableton">
        <!-- title -->
        <div class="px-2 pt-4 pl-0">
            <h4 class="font-black text-black font-18">Course Content & Direction of Course : Pro Ableton Live Course</h4>
            <h4 class="font-black text-black font-18">Learning Tools & Application in Music Production Process</h4>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-md-12 mx-2">
                <ul class="font-regular text-grey2 font-13 ul-logic">
                    @if($pro->count())
                    @foreach($pro as $row)
                        <li>
                        <?php $str = "$row->content"; echo htmlspecialchars_decode($str);?>
                        </li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </section>
    <!--  footer black text -->
    <section class="container my-4 px-3">
        <!-- content -->
        <div class="row">
            <div class="col-md-12 col-12 mx-2 font-bold text-black font-13">
                By the end of this course, you will walk out as a professional Logic Pro X & Ableton Live user with strong fundamentals of audio engineering.<br>Able to work as an independent artist, as a recording engineer in studio or as a freelancer doing various audio related work.
            </div>
        </div>
    </section>
</div>
@endsection


@section('script')
@endsection