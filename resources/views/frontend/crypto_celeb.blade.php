@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher | About Us</title>
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
</style>
@endsection

@section('content')
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0 pb-4">
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title">SUCCESS STORIES</h6>
            <h4 class="font-black text-black font-35 marT-10">Few Words From The Pros</h4>
        </div>
        <!-- content -->
        @if($pros->count())
        <div class="row px-3" style="margin-bottom: -33px;">
            @foreach($pros as $row)
            <div class="col-md-4 my-5">
                <div class="slider-header bg-theme" align="center">
                    <img src="{{asset('images/pros/')}}/{{$row->image}}" width="55%" class="mx-auto d-block p-2 bg-theme shadow-round mar-T-26">
                    <h6 class="font-bold font-14 text-dark pt-4">{{$row->name}}</h6>
                    <div class="about-title px-4 pt-2 bold">{!! \Illuminate\Support\Str::limit($row->brief, 98, $end='...') !!}</div>
                    <div class="py-2 bold about-symbol"><i>"</i></div>
                    <div class="about-desc px-4 pb-2"><i>{!! \Illuminate\Support\Str::limit($row->description, 290, $end='...') !!}</i></div>
                    <div class="my-2 px-3">
                        <a class="" href="#">
                            <div class="about-see-more w-100 font-regular bold pt-2">
                              <img src="{{ asset('assets/frontend/img/wallpaper.svg') }}" class="" width="20px">
                              <span class="pl-1"> See More</span>
                            </div>
                        </a>
                        <a class="d-none" href="#">
                            <div class="about-see-more w-100 font-regular bold">
                              <img src="{{ asset('assets/frontend/img/play_circle_outline.svg') }}" class="pb-0" width="20px">
                              <span class="pl-1"> See More</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        @endif
    </section>
</div>
@endsection


@section('script')
@endsection