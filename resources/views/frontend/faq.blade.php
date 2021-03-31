@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher</title>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        .nav-link{
            color: #6D7178;
        }
        .nav-link:hover{
            color: #6D7178;
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
            color: #202020;
            border-right: 5px solid #02BC4D;
            border-radius: 0;
        }
        .verticle-center{
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            padding-left: 10px;
        }
        .panel{
            margin-bottom: 20px;
        }
    </style>
@endsection


@section('content')
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0">
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title uppercase">course related queries<span class="px-2"> | </span>general questions<span class="px-2"> | </span>hostel<span class="px-2"> | </span>career</h6>
            <h4 class="font-black text-black font-35 marT-10">Candidate General Inquiries</h4>
        </div>
        <!-- content -->
        @if($faqs->count())
        <div class="row px-3 pt-2" style="margin-bottom: -8px;">
            @foreach($faqs as $row)
            <div class="col-md-6 col-12 mb-4">
                <div class="slider-header bg-theme px-2 pb-4">
                    <div class="row py-3">
                        <div class="col-md-2 pl-4 col-3">
                            <img class="pr-3" src="{{env('image_url')}}/faq/{{$row->image}}" width="70px">
                        </div>
                        <div class="col-md-10 col-9">
                            <div class="font-medium text-black font-18">
                                {{$row->heading}}
                            </div>
                        </div>
                    </div>
                    <div class="font-regular text-black font-13 px-2">
                        {!! $row->content !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </section>
    <!--  Crypto Cipher Audio Lab - Location | map-->
    <section class="container slider-header px-3 mt-4">
        <div class="row px-3" style="margin-bottom: 5px;">
            <div class="col-md-4 pl-2">
                <div class="">
                    <!-- try -->
                    <ul id="myTabs" class="nav nav-pills" role="tablist" data-tabs="tabs">
                        <li class="nav-item mt-4">
                            <a class="nav-link active" href="#tab1" data-toggle="tab">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <img src="{{ asset('assets/frontend/img/voice-message.svg') }}" width="30px">
                                    </div>
                                    <div class="col-md-10 px-0 col-10">
                                        <h6 class="font-13 font-bold verticle-center">Course Related Queries</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="nav-link" href="#tab2" data-toggle="tab">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <img src="{{ asset('assets/frontend/img/food.svg') }}" width="31px">
                                    </div>
                                    <div class="col-md-10 px-0 col-10">
                                        <h6 class="font-13 font-bold verticle-center">General Question</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="nav-link" href="#tab3" data-toggle="tab">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <img src="{{ asset('assets/frontend/img/XMLID_21_.svg') }}" width="27px">
                                    </div>
                                    <div class="col-md-10 px-0 col-10">
                                        <h6 class="font-13 font-bold verticle-center">Hostel</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="nav-link" href="#tab4" data-toggle="tab">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <img src="{{ asset('assets/frontend/img/career.svg') }}" width="29px">
                                    </div>
                                    <div class="col-md-10 px-0 col-10">
                                        <h6 class="font-13 font-bold verticle-center">Career</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 pt-4">
                <div class="">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab1">
                            <div class="demo1">
                                @if($faqCourse->count())
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <!-- card1 -->
                                    @foreach($faqCourse as $index => $row)
                                    <div class="panel panel-default">
                                        <div class="slider-header bg-theme" role="tab" id="headingcourses{{$index+1}}">
                                            <h2 class="mb-0 pl-3 py-3 font-regular text-black font-16 pr-90" data-toggle="collapse" data-target="#collapsecourses{{$index+1}}" aria-expanded="true" aria-controls="collapsecourses{{$index+1}}">
                                                {{$row->heading}}
                                            </h2>
                                        </div>
                                        <div id="collapsecourses{{$index+1}}" class="panel-collapse collapse <?php if($index+1 == "1"){ echo("show");} ?>" role="tabpanel" aria-labelledby="headingcourses{{$index+1}}">
                                            <div class="panel-body font-regular text-grey2 font-13 px-1 pt-3">
                                                {!! $row->content !!}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab2">
                            <!-- card2 -->
                            <div class="demo2">
                                @if($faqGeneral->count())
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    @foreach($faqGeneral as $index => $row)
                                    <div class="panel panel-default">
                                        <div class="slider-header bg-theme" role="tab" id="headingGeneral{{$index+1}}">
                                            <h2 class="mb-0 pl-3 py-3 font-regular text-black font-16 pr-90" data-toggle="collapse" data-target="#collapseGeneral{{$index+1}}" aria-expanded="true" aria-controls="collapseGeneral{{$index+1}}">
                                                {{$row->heading}}
                                            </h2>
                                        </div>
                                        <div id="collapseGeneral{{$index+1}}" class="panel-collapse collapse <?php if($index+1 == "1"){ echo("show");} ?>" role="tabpanel" aria-labelledby="headingGeneral{{$index+1}}">
                                            <div class="panel-body font-regular text-grey2 font-13 px-1 pt-3">
                                                {!! $row->content !!}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab3">
                            <!-- card3 -->
                            <div class="demo3">
                                @if($faqHostel->count())
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    @foreach($faqHostel as $index => $row)
                                    <div class="panel panel-default">
                                        <div class="slider-header bg-theme" role="tab" id="headingHostel{{$index+1}}">
                                            <h2 class="mb-0 pl-3 py-3 font-regular text-black font-16 pr-90" data-toggle="collapse" data-target="#collapseHostel{{$index+1}}" aria-expanded="true" aria-controls="collapseHostel{{$index+1}}">
                                                {{$row->heading}}
                                            </h2>
                                        </div>
                                        <div id="collapseHostel{{$index+1}}" class="panel-collapse collapse <?php if($index+1 == "1"){ echo("show");} ?>" role="tabpanel" aria-labelledby="headingHostel{{$index+1}}">
                                            <div class="panel-body font-regular text-grey2 font-13 px-1 pt-3">
                                                {!! $row->content !!}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab4">
                            <!-- card4 -->
                            <div class="demo4">
                                @if($faqCareer->count())
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    @foreach($faqCareer as $index => $row)
                                    <div class="panel panel-default">
                                        <div class="slider-header bg-theme" role="tab" id="headingCareer{{$index+1}}">
                                            <h2 class="mb-0 pl-3 py-3 font-regular text-black font-16 pr-90" data-toggle="collapse" data-target="#collapseCareer{{$index+1}}" aria-expanded="true" aria-controls="collapseCareer{{$index+1}}">
                                                {{$row->heading}}
                                            </h2>
                                        </div>
                                        <div id="collapseCareer{{$index+1}}" class="panel-collapse collapse <?php if($index+1 == "1"){ echo("show");} ?>" role="tabpanel" aria-labelledby="headingCareer{{$index+1}}">
                                            <div class="panel-body font-regular text-grey2 font-13 px-1 pt-3">
                                                {!! $row->content !!}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


@section('script')
@endsection