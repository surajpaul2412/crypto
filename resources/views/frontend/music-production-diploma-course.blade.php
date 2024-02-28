@extends('layouts.frontend.app')
@section('metas')
<title>Crypto Cipher’s Music Production Courses in Delhi, India| Crypto Cipher ®</title>
<meta name="description" content="Best Foundation Music Production Course & Advanced Sound Engineering in India | Logic Pro X | Ableton Live course in Delhi. Advance Sound Engineering & Complete Music production Course in India.">
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
            <h1 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title">Music Production Diploma Course</h1>
            <h4 class="font-black text-black font-35 marT-10">Music Production Diploma Courses</h4>
        </div>
        <!-- content -->
        <div class="row px-3">
            <div class="col-md-6 my-2">
                <div class="" align="left">
                    @if($musicProductionDiploma->count())
                    @foreach($musicProductionDiploma as $row)
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
            <h4 class="font-black text-black font-18">Course Content & Direction of Course</h4>
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
</div>
@endsection


@section('script')
@endsection