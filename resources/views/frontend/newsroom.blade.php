@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher</title>
@endsection

@section('css')
<!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.css">
<style>
    .modal-backdrop.show{
        display: none;
    }
    /*try ends*/
    .wrapper{
      width:100%;
      padding-top: 20px;
      text-align:center;
    }
    .carousel{
      width:100%;
      margin:0px auto;
    }
    .slick-slide{
      margin:10px;
    }
    .slick-slide img{
      width:100%;
    }
    .slick-prev, .slick-next{
      background: #5B5E65;
      border-radius: 15px;
      border-color: transparent;
    }
    .nav-link{
        padding: 0rem 1rem;
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
        border-radius: 0;
    }
    .inner-side{
        box-shadow: 1px 1px 4px 0px rgba(25,25,25,0.15), -1.5px -1.5px 2px 0px rgba(255,255,255,0.8) !important;
        background-image: linear-gradient(to right, #edeef3 , #f4f5f9);
        border: 1px solid rgba(255,255,255,0.3);
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
        <div class="row px-3">
            @if($news->count())
            <div class="col-md-4 pl-3">
                <div class="">
                    <ul id="myTabs" class="nav nav-pills" role="tablist" data-tabs="tabs">
                        @foreach($news as $index => $row)
                        <li class="nav-item mt-2 mb-3">
                            <a class="nav-link {{$index == 0 ? 'active' : '' }}" href="#tab{{$index+1}}" data-toggle="tab">
                                <div class="row p-0">
                                    <div class="col-md-12 col-12 p-0">
                                        <img src="{{asset('images/news/')}}/{{$row->image}}" width="100%">
                                    </div>
                                    <div class="col-md-12 py-3">
                                        <div class="text-dark font-bold font-13">
                                            {{$row->title}}
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pt-2 mobile-d-none" align="left">
                                                <div class="page-4-btn font-regular">
                                                    Read More <i class="fas fa-angle-right pl-1"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pt-2 desktop-d-none" align="left">
                                                <a class="page-4-btn font-regular ml-3 px-3" data-toggle="modal" data-target="#myModal{{$index+1}}">
                                                    Read More <i class="fas fa-angle-right pl-1"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-6 pt-2 font-regular font-11" align="right">
                                                <span style="color: #707070;">{{$row->created_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-8 pt-2 pb-3 mobile-d-none">
                <div class="tab-content inner-side">
                    @foreach($news as $index => $row)
                    <div role="tabpanel" class="tab-pane {{$index == 0 ? 'active' : '' }}" id="tab{{$index+1}}">
                        <div class="row">
                            <div class="col-md-12 col-12 pl-3 p-0">
                                <img src="{{asset('images/news/')}}/{{$row->image}}" class="d-block mx-auto" width="98%">
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
            </div>
            @else
            @endif
        </div>
    </section>
</div>

<!-- momdal details in mobile -->
<div class="desktop-d-none">
    @foreach($news as $index => $row)
    <div class="modal fade" id="myModal{{$index+1}}" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{asset('images/news/')}}/{{$row->image}}" class="d-block mx-auto" width="100%">
                    <div class="font-bold text-black" style="text-align: justify;">{{$row->title}}</div>
                    <p class="font-regular text-grey2">{!! $row->content !!}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

@section('script')
@endsection
