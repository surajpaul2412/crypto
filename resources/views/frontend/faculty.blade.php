@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher</title>
@endsection

@section('css')
<style type="text/css">
    .faculty-btn{
        font-family: 'Roboto-Bold';
        border-radius: 16px;
        font-weight: 400;
        color: #7dc34f;
        padding: 5px 18px;
        font-size: 11px;
        box-shadow: 1px 1px 3px 0px rgba(50,50,50,0.10), -1.8px -1.8px 3px 0px rgba(255,255,255,0.8);
        background-image: linear-gradient(to right, #eeeff4, #f4f5f9);
        border: 1px solid rgba(255,255,255,0.3);
    }
    .faculty-btn:hover{
        background-image: linear-gradient(to bottom right, #f1f2f7, #f2f3f7);
        box-shadow: inset 1px 1px 4px -1px rgba(0,0,0,0.1),
                inset -4px -3px 6px -1px rgba(255,255,255,0.7),
                -0.1px -0.1px 0 rgba(255,255,255,1),
                0.1px 0.1px 0 rgba(0,0,0,0.15),
                0px 12px 10px -14px rgba(0,0,0,0.05);
    }
</style>
@endsection


@section('content')
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0">
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title uppercase">AUDIO FACULTY DEPARTMENTS</h6>
            <h4 class="font-black text-black font-35 marT-10">Meet Faculty, Management & Artist Team</h4>
        </div>
        <!-- content -->
        <div class="row px-3">
            <div class="col-md-4 mt-4 mb-3">
                <div class="slider-header bg-theme" align="center">
                    <img class="d-block mx-auto py-3 pt-4" src="{{ asset('assets/frontend/img/music.svg') }}" width="24%">
                    <div class="about-title px-4 pt-2 bold font-16">Music Production Faculty </div>
                    <div class="about-desc px-3 pt-3 pb-4">Am very intrigued by this ..wishing you the best …” Crypto Cipher products have been used many times on AR Rahman projects , not just this the man himself supported “Crypto Cipher mission to bring rare virtual instruments” and published a tweet in front of millions of his fan following.</div>
                </div>
            </div>
            <div class="col-md-4 mt-4 mb-3">
                <div class="slider-header bg-theme" align="center">
                    <img class="d-block mx-auto py-3 pt-4" src="{{ asset('assets/frontend/img/music.svg') }}" width="24%">
                    <div class="about-title px-4 pt-2 bold font-16">Music Production Faculty </div>
                    <div class="about-desc px-3 pt-3 pb-4">Am very intrigued by this ..wishing you the best …” Crypto Cipher products have been used many times on AR Rahman projects , not just this the man himself supported “Crypto Cipher mission to bring rare virtual instruments” and published a tweet in front of millions of his fan following.</div>
                </div>
            </div>
            <div class="col-md-4 mt-4 mb-3">
                <div class="slider-header bg-theme" align="center">
                    <img class="d-block mx-auto py-3 pt-4" src="{{ asset('assets/frontend/img/music.svg') }}" width="24%">
                    <div class="about-title px-4 pt-2 bold font-16">Music Production Faculty </div>
                    <div class="about-desc px-3 pt-3 pb-4">Am very intrigued by this ..wishing you the best …” Crypto Cipher products have been used many times on AR Rahman projects , not just this the man himself supported “Crypto Cipher mission to bring rare virtual instruments” and published a tweet in front of millions of his fan following.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- team members section -->
    <section class="container slider-header mt-4">
        <!-- title -->
        <div class="px-2 pt-4 pb-4">
            <h6 class="font-regular text-black pl-2 pb-0 font-16 bold">Team Member</h6>
        </div>
        <!-- content -->
        <div class="row px-3">
            <div class="col-md-4 mb-3" style="margin-top: 80px;">
                <div class="slider-header bg-theme" align="center">
                    <img src="{{ asset('assets/frontend/img/about/ar-rehman.png') }}" width="55%" class="mx-auto d-block p-2 bg-theme shadow-round" style="border-radius: 50%;margin-top: -26%">
                    <h6 class="about-name bold pt-4">Aitoreya Mukherjee</h6>
                    <div class="about-title pt-2 font-400">Audio Electronics & Studio Acoustics Faculty</div>
                    <div class="my-4 px-3">
                        <a class="" href="#">
                            <span class="font-regular faculty-btn">See More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3" style="margin-top: 80px;">
                <div class="slider-header bg-theme" align="center">
                    <img src="{{ asset('assets/frontend/img/about/ar-rehman.png') }}" width="55%" class="mx-auto d-block p-2 bg-theme shadow-round" style="border-radius: 50%;margin-top: -26%">
                    <h6 class="about-name bold pt-4">Aitoreya Mukherjee</h6>
                    <div class="about-title pt-2 font-400">Audio Electronics & Studio Acoustics Faculty</div>
                    <div class="my-4 px-3">
                        <a class="" href="#">
                            <span class="font-regular faculty-btn">See More</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3" style="margin-top: 80px;">
                <div class="slider-header bg-theme" align="center">
                    <img src="{{ asset('assets/frontend/img/about/ar-rehman.png') }}" width="55%" class="mx-auto d-block p-2 bg-theme shadow-round" style="border-radius: 50%;margin-top: -26%">
                    <h6 class="about-name bold pt-4">Aitoreya Mukherjee</h6>
                    <div class="about-title pt-2 font-400">Audio Electronics & Studio Acoustics Faculty</div>
                    <div class="my-4 px-3">
                        <a class="" href="#">
                            <span class="font-regular faculty-btn">See More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection


@section('script')
@endsection