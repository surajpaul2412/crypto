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
        <div class="row px-3 pt-2" style="margin-bottom: -8px;">
            <div class="col-md-6 col-12 mb-4">
                <div class="slider-header bg-theme px-2 pb-4">
                    <div class="row py-3">
                        <div class="col-md-2 pl-4 col-3">
                            <img class="pr-3" src="{{ asset('assets/frontend/img/course.svg') }}" width="70px">
                        </div>
                        <div class="col-md-10 col-9">
                            <div class="font-medium text-black font-18">
                                Music Production Course : Foundation of Music Technology
                            </div>
                        </div>
                    </div>
                    <div class="font-regular text-black font-13 px-2">
                        <strong class="bold">SHORT TERM COURSE :</strong> 2 MONTHS , ALTERNATE DAYS LECTURES , 2 HOURS OFFICIAL LECTURE DURATION BUT CAN EXTEND UPTO 4 HOURS DEPENDING ON TOPICS. <br><br>
                        <strong class="bold">COURSE MODULES :</strong> ADVANCED LOGIC PRO X, ABLETON LIVE, FOUNDATIONAL MIXING CONCEPTS. <br><br>
                        VARIOUS SPECIALISED FACULTY IS ASSIGNED TO THIS COURSE. <br><br>
                        EACH LECTURES IS WELL PLANNED & COURSE IS PROPERLY STRUCTURED <br><br>
                        EXAMINATION & CRYPTO CIPHER MUSIC PRODUCTION CERTIFICATION <br><br>
                        COURSE FEE : 60,000 + GST 
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 mb-4">
                <div class="slider-header bg-theme px-2 pb-4">
                    <div class="row py-3">
                        <div class="col-md-2 pl-4 col-3">
                            <img class="pr-3 pt-1" src="{{ asset('assets/frontend/img/mix.svg') }}" width="70px">
                        </div>
                        <div class="col-md-10 col-9">
                            <div class="font-medium text-black font-18">
                                Sound Engineering Diploma : Complete Production Course
                            </div>
                        </div>
                    </div>
                    <div class="font-regular text-black font-13 px-2">
                        <strong class="bold">LONG TERM ADVANCE COURSE :</strong> 10 MONTHS , ALTERNATE DAYS LECTURES UPTO 3 MONTHS, TWICE A WEEK ADVANCE LECTURES FOR REST OF THE COURSE, 2 MONTHS PROJECT <br><br>
                        <strong class="bold">COURSE MODULES :</strong> ADVANCED LOGIC PRO X, ABLETON LIVE, RECORDINGS, MUSIC THEORY, MUSIC ARRANGEMENTS, AUDIO UNIT MEASUREMENTS, STUDIO INTERCONNECTIONS, SOUND DESIGN & SYNTHESIS, MIXING & MASTERING, SOUND PROOFING & STUDIO ACOUSTICS,ANALOGUE & DIGITAL MIXERS  <br><br>
                        <strong class="bold">SUBMISSION.</strong> 2 HOURS OFFICIAL LECTURE DURATION BUT CAN EXTEND UPTO 4 HOURS DEPENDING ON TOPICS.  <br><br>
                        VARIOUS SPECIALISED FACULTY IS ASSIGNED TO THIS COURSE.<br>
                        WORKSHOPS, PRACTICALS & HOME EXERCISE WILL BE PROVIDED FOR ALL MODULES.<br>
                        EACH LECTURES IS WELL PLANNED & COURSE IS PROPERLY STRUCTURED EXAMINATION & CRYPTO CIPHER SOUND ENGINEERING DIPLOMA CERTIFICATION <br><br>
                        COURSE FEE : 180,000 + GST
                    </div>
                </div>
            </div>
        </div>
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
<!-- try -->
<div class="demo">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <!-- card1 -->
        <div class="panel panel-default">
            <div class="slider-header bg-theme" role="tab" id="headingOne">
                <h2 class="mb-0 pl-3 py-3 font-regular text-black font-16 pr-90" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Whats the difference in Music Production Course & Sound Engineering Course at Crypto Cipher.
                </h2>
            </div>
            <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body font-regular text-grey2 font-13 px-1 pt-3">
                    A) Crypto Cipher Programmes named Music Production Course & Sound Engineering Diploma both focus on learning Audio Technologies.Crypto Cipher offers basically offers two courses short term course and long term course.
                    Short Term Music Production course covers deep understanding of D.A.W’s ( Logic Pro X & Ableton Live and Its application ) on the other hand long term course
                    Sound Engineering Diploma is more focused on complete education on various domains where sound can exist. Whether it is Acoustic Domain, Electrical Domain or Digital Domain. In long term course you automatically diving deep into advance Music Production Course along with knowledge of behaviour and application of sound in Electrical Domain & Acoustic Domain. Understanding and learning of various digital
                    workstation, arrangements, Music Theory, Sound Design, Synthesis, Mixing & Mastering is just a good beginning. A deep understanding of how sounds behave acoustically and in analogue domain helps a lot in making final product decisions perfect.
                </div>
            </div>
        </div>
        <!-- card2 -->
        <div class="panel panel-default">
            <div class="slider-header bg-theme" role="tab" id="headingTwo">
                <h2 class="mb-0 pl-3 py-3 font-regular text-black font-16 pr-90" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Whats the difference in Music Production Course & Sound Engineering Course at Crypto Cipher.
                </h2>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body font-regular text-grey2 font-13 px-1 pt-3">
                    A) Crypto Cipher Programmes named Music Production Course & Sound Engineering Diploma both focus on learning Audio Technologies.Crypto Cipher offers basically offers two courses short term course and long term course.
                    Short Term Music Production course covers deep understanding of D.A.W’s ( Logic Pro X & Ableton Live and Its application ) on the other hand long term course
                    Sound Engineering Diploma is more focused on complete education on various domains where sound can exist. Whether it is Acoustic Domain, Electrical Domain or Digital Domain. In long term course you automatically diving deep into advance Music Production Course along with knowledge of behaviour and application of sound in Electrical Domain & Acoustic Domain. Understanding and learning of various digital
                    workstation, arrangements, Music Theory, Sound Design, Synthesis, Mixing & Mastering is just a good beginning. A deep understanding of how sounds behave acoustically and in analogue domain helps a lot in making final product decisions perfect.
                </div>
            </div>
        </div>
        <!-- card3 -->
        <div class="panel panel-default">
            <div class="slider-header bg-theme" role="tab" id="headingThree">
                <h2 class="mb-0 pl-3 py-3 font-regular text-black font-16 pr-90" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Whats the difference in Music Production Course & Sound Engineering Course at Crypto Cipher.
                </h2>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body font-regular text-grey2 font-13 px-1 pt-3">
                    A) Crypto Cipher Programmes named Music Production Course & Sound Engineering Diploma both focus on learning Audio Technologies.Crypto Cipher offers basically offers two courses short term course and long term course.
                    Short Term Music Production course covers deep understanding of D.A.W’s ( Logic Pro X & Ableton Live and Its application ) on the other hand long term course
                    Sound Engineering Diploma is more focused on complete education on various domains where sound can exist. Whether it is Acoustic Domain, Electrical Domain or Digital Domain. In long term course you automatically diving deep into advance Music Production Course along with knowledge of behaviour and application of sound in Electrical Domain & Acoustic Domain. Understanding and learning of various digital
                    workstation, arrangements, Music Theory, Sound Design, Synthesis, Mixing & Mastering is just a good beginning. A deep understanding of how sounds behave acoustically and in analogue domain helps a lot in making final product decisions perfect.
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .panel{
        margin-bottom: 20px;
    }
</style>
<!-- try end -->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab2">General Question content.</div>
                        <div role="tabpanel" class="tab-pane" id="tab3">Hostel content.</div>
                        <div role="tabpanel" class="tab-pane" id="tab4">Career content.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


@section('script')
@endsection