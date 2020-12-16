@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher</title>
@endsection

@section('css')
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
        border-right: 5px solid #02BC4D;
        border-radius: 0;
    }
</style>
@endsection


@section('content')
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0">
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title uppercase">STUDENT WORK</h6>
            <h4 class="font-black text-black font-35 marT-10">Student Profile</h4>
        </div>
        <!-- content -->
        <div class="row px-4 pb-2">
            <div class="col-md-4 pl-2">
                <div class="">
                    <!-- try -->
                    <ul id="myTabs" class="nav nav-pills" role="tablist" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#tab1" data-toggle="tab">
                                <div class="row">
                                    <div class="col-md-4 col-5 student">
                                        <img src="{{ asset('assets/frontend/img/Shucker.svg') }}" class="d-block m-auto shadow-round" width="100%">
                                    </div>
                                    <div class="col-md-8 col-7 px-0">
                                        <h6 class="font-11 text-dark font-regular">2015</h6>
                                        <h5 class="bold font-12 text-dark font-regular">Student Name</h5>
                                        <h5 class="font-11 text-dark font-regular">Musician, bollywood</h5>
                                        <h6 class="desktop-d-none">
                                            <button class="page-4-btn font-regular" data-toggle="modal" data-target="#myModal1">
                                                Read More <i class="fas fa-angle-right pl-1"></i>
                                            </button>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab2" data-toggle="tab">
                                <div class="row">
                                    <div class="col-md-4 col-4">
                                        <img src="{{ asset('assets/frontend/img/Shucker.svg') }}" class="d-block m-auto shadow-round" width="100%">
                                    </div>
                                    <div class="col-md-8 col-8 px-0">
                                        <h6 class="font-11 text-dark font-regular">2015</h6>
                                        <h5 class="bold font-12 text-dark font-regular">Student Name</h5>
                                        <h5 class="font-11 text-dark font-regular">Musician, bollywood</h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab2" data-toggle="tab">
                                <div class="row">
                                    <div class="col-md-4 col-4">
                                        <img src="{{ asset('assets/frontend/img/Shucker.svg') }}" class="d-block m-auto shadow-round" width="100%">
                                    </div>
                                    <div class="col-md-8 col-8 px-0">
                                        <h6 class="font-11 text-dark font-regular">2015</h6>
                                        <h5 class="bold font-12 text-dark font-regular">Student Name</h5>
                                        <h5 class="font-11 text-dark font-regular">Musician, bollywood</h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab2" data-toggle="tab">
                                <div class="row">
                                    <div class="col-md-4 col-4">
                                        <img src="{{ asset('assets/frontend/img/Shucker.svg') }}" class="d-block m-auto shadow-round" width="100%">
                                    </div>
                                    <div class="col-md-8 col-8 px-0">
                                        <h6 class="font-11 text-dark font-regular">2015</h6>
                                        <h5 class="bold font-12 text-dark font-regular">Student Name</h5>
                                        <h5 class="font-11 text-dark font-regular">Musician, bollywood</h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tab2" data-toggle="tab">
                                <div class="row">
                                    <div class="col-md-4 col-4">
                                        <img src="{{ asset('assets/frontend/img/Shucker.svg') }}" class="d-block m-auto shadow-round" width="100%">
                                    </div>
                                    <div class="col-md-8 col-8 px-0">
                                        <h6 class="font-11 text-dark font-regular">2015</h6>
                                        <h5 class="bold font-12 text-dark font-regular">Student Name</h5>
                                        <h5 class="font-11 text-dark font-regular">Musician, bollywood</h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 mobile-d-none">
                <div class="">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab1">
                            <div class="row px-3">
                                <div class="col-md-3 py-3">
                                    <img src="{{ asset('assets/frontend/img/Shucker.svg') }}" class="d-block m-auto shadow-round" width="94%">
                                </div>
                                <div class="col-md-9 px-0">
                                    <h1 class="font-regular bold font-13 text-dark">Student Name</h1>
                                    <h2 class="font-regular text-dark font-11">Musician, Bollywood</h2>
                                    <p class="font-regular font-12 text-dark text-justify">
                                        Please note our all admissions happens through this page only ( url ) via online payment gateway and filling the form and paying registration amount confirms your seat. Upload your signatures & parents/guardian signatures after reading all terms & conditions mentioned under this page.
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <ul id="myTabs" class="row navbar navbar-expand-lg shadow-none nav nav-pills1 p-0 main-nav2" role="tablist" data-tabs="tabs" style="list-style: none;text-align: center;display: flex !important;box-shadow: 1px 1px 4px 0px rgba(25,25,25,0.15), -1px -1px 2px 1px rgba(255,255,255,0.8) !important;border: 1px solid rgba(255,255,255,0.3) !important;">
                                        <li class="nav-item border-right-line col-md-6 col-6 py-2">
                                            <a class="nav-link1 active" href="#generalProfile" data-toggle="tab">General Profile</a>
                                        </li>
                                        <li class="nav-item border-right-line col-md-6 col-6 py-2">
                                            <a class="nav-link1" href="#testimonial" data-toggle="tab">Testimonial</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="generalProfile">
                                            <div class="row py-3">
                                                <div class="col-md-12 col-12">
                                                    <h1 class="font-regular bold font-13 text-dark">Student Profile</h1>
                                                    <p class="font-regular font-12 text-dark text-justify">
                                                        Please note our all admissions happens through this page only ( url ) via online payment gateway and filling the form and paying registration amount confirms your seat. Upload your signatures & parents/guardian signatures after reading all terms & conditions mentioned under this page..
                                                    </p>
                                                    <h1 class="font-regular bold font-13 text-dark">Education</h1>
                                                    <p class="font-regular font-12 text-dark text-justify">
                                                        Please note our all admissions happens through this page only ( url ) via online payment gateway and filling the form and paying registration amount confirms your seat. Upload your signatures & parents/guardian signatures after reading all terms & conditions mentioned under this page..
                                                    </p>
                                                    <h1 class="font-regular bold font-13 text-dark">Interest</h1>
                                                    <p class="font-regular font-12 text-dark text-justify">
                                                        Please note our all admissions happens through this page only ( url ) via online payment gateway and filling the form and paying registration amount confirms your seat. Upload your signatures & parents/guardian signatures after reading all terms & conditions mentioned under this page..
                                                    </p>
                                                    <h1 class="font-regular bold font-13 text-dark">Work Professional</h1>
                                                    <p class="font-regular font-12 text-dark text-justify">
                                                        Please note our all admissions happens through this page only ( url ) via online payment gateway and filling the form and paying registration amount confirms your seat. Upload your signatures & parents/guardian signatures after reading all terms & conditions mentioned under this page..
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="testimonial">Student Testimonial.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab2">Tab 2 edit dummy text.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- momdal details in mobile -->
<div class="desktop-d-none">
    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ asset('assets/frontend/img/Shucker.svg') }}" class="d-block m-auto shadow-round" width="60%">
                    <h1 class="font-regular bold font-13 text-dark">Student Name</h1>
                    <h2 class="font-regular text-dark font-11">Musician, Bollywood</h2>
                    <p class="font-regular font-12 text-dark text-justify">
                        Please note our all admissions happens through this page only ( url ) via online payment gateway and filling the form and paying registration amount confirms your seat. Upload your signatures & parents/guardian signatures after reading all terms & conditions mentioned under this page.
                    </p>
                    <div class="col-md-12">
                        <ul id="myTabs" class="row navbar navbar-expand-lg shadow-none nav nav-pills1 p-0 main-nav2" role="tablist" data-tabs="tabs" style="list-style: none;text-align: center;display: flex !important;box-shadow: 1px 1px 4px 0px rgba(25,25,25,0.15), -1px -1px 2px 1px rgba(255,255,255,0.8) !important;border: 1px solid rgba(255,255,255,0.3) !important;">
                            <li class="nav-item border-right-line col-md-6 col-6 py-2">
                                <a class="nav-link1 active" href="#generalProfileModal" data-toggle="tab">General Profile</a>
                            </li>
                            <li class="nav-item border-right-line col-md-6 col-6 py-2">
                                <a class="nav-link1" href="#testimonialModal" data-toggle="tab">Testimonial</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="generalProfileModal">
                                <div class="row py-3">
                                    <div class="col-md-12 col-12">
                                        <h1 class="font-regular bold font-13 text-dark">Student Profile</h1>
                                        <p class="font-regular font-12 text-dark text-justify">
                                            Please note our all admissions happens through this page only ( url ) via online payment gateway and filling the form and paying registration amount confirms your seat. Upload your signatures & parents/guardian signatures after reading all terms & conditions mentioned under this page..
                                        </p>
                                        <h1 class="font-regular bold font-13 text-dark">Education</h1>
                                        <p class="font-regular font-12 text-dark text-justify">
                                            Please note our all admissions happens through this page only ( url ) via online payment gateway and filling the form and paying registration amount confirms your seat. Upload your signatures & parents/guardian signatures after reading all terms & conditions mentioned under this page..
                                        </p>
                                        <h1 class="font-regular bold font-13 text-dark">Interest</h1>
                                        <p class="font-regular font-12 text-dark text-justify">
                                            Please note our all admissions happens through this page only ( url ) via online payment gateway and filling the form and paying registration amount confirms your seat. Upload your signatures & parents/guardian signatures after reading all terms & conditions mentioned under this page..
                                        </p>
                                        <h1 class="font-regular bold font-13 text-dark">Work Professional</h1>
                                        <p class="font-regular font-12 text-dark text-justify">
                                            Please note our all admissions happens through this page only ( url ) via online payment gateway and filling the form and paying registration amount confirms your seat. Upload your signatures & parents/guardian signatures after reading all terms & conditions mentioned under this page..
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="testimonialModal">Student Testimonial.</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection