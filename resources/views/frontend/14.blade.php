@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher</title>
@endsection

@section('css')
<style>
    .hw-flex a div{
        font-family: 'Roboto-Bold';
        color: #5B5E65;
        font-size: 13px;
        text-transform: uppercase;
        cursor: pointer;
        box-shadow: 2px 2px 4px 0px rgba(50,50,50,0.10), -2px -2px 3px 0px rgba(255,255,255,0.8);
        background-image: linear-gradient(to right, #edeef3 , #f4f5f9);
        border: 1px solid rgba(255,255,255,0.3);
    }
    .hw-flex a div:hover{
        background-image: linear-gradient(to bottom right, #f1f2f7, #f2f3f7);
        box-shadow: inset 1px 1px 4px -1px rgba(0,0,0,0.1),
                inset -4px -3px 6px -1px rgba(255,255,255,0.7),
                -0.1px -0.1px 0 rgba(255,255,255,1),
                0.1px 0.1px 0 rgba(0,0,0,0.15),
                0px 12px 10px -14px rgba(0,0,0,0.05);
    }
    .hw-flex a{
        padding: 0px 3px;
    }
    .hw-flex a div{
        padding: 6px 0px;
    }
</style>
@endsection

@section('content')
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0">
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title uppercase">Studio Equipments & Gallery</h6>
            <h4 class="font-black text-black font-35 marT-10">Crypto Cipher Studio Equipments</h4>
        </div>
        <!-- content -->
        <div class="row px-3">
            <!-- hardware App-->
            <div class="col-md-12 my-2">
                <h6 class="font-medium text-black bold font-20 pb-2"><span><img class="pr-3 mobile-hw-img" src="{{ asset('assets/frontend/img/Path215.svg') }}" width="6%"></span>Hardware Equipments</h6>
                <div class="mt-1 media-mt-0">
                    <div class="d-flex hw-flex">
                        <a align="center" class="flex-fill"><div>Sound Proof recording rooms</div></a>
                        <a align="center" class="flex-fill"><div>Acoustically Treated Control Rooms</div></a>
                        <a align="center" class="flex-fill"><div>Sound Proof Classrooms & Labs</div></a>
                        <a align="center" class="flex-fill"><div>RME FIREFACE</div></a>
                    </div>
                </div>
                <div class="mt-1 media-mt-0">
                    <div class="d-flex hw-flex">
                        <a align="center" class="flex-fill"><div>UAD APOLLO 16X</div></a>
                        <a align="center" class="flex-fill"><div>UAD PREAPMS</div></a>
                        <a align="center" class="flex-fill"><div>ANALOGUE RUPERT NEVE SUMMING MIXERS</div></a>
                        <a align="center" class="flex-fill"><div>VARIOUS FOCALS MONITORS SETS</div></a>
                    </div>
                </div>
                <div class="mt-1 media-mt-0">
                    <div class="d-flex hw-flex">
                        <a align="center" class="flex-fill"><div>RUPERT NEVER PREAMPS</div></a>
                        <a align="center" class="flex-fill"><div>ALLEN & HEATH DIGTAL MIXERS</div></a>
                        <a align="center" class="flex-fill"><div>SOUNDCRAFT HYBRID MIXER</div></a>
                        <a align="center" class="flex-fill"><div>AKG PREAMPS</div></a>
                    </div>
                </div>
                <div class="mt-1 media-mt-0">
                    <div class="d-flex hw-flex">
                        <a align="center" class="flex-fill"><div>KRK MONITOR SETS</div></a>
                        <a align="center" class="flex-fill"><div>ALLEN & HEATH DIGTAL MIXERS</div></a>
                        <a align="center" class="flex-fill"><div>UAD PREAPMS</div></a>
                        <a align="center" class="flex-fill"><div>BEHRINGER & ART PRO</div></a>
                        <a align="center" class="flex-fill"><div>UAD APOLLO 16X</div></a>
                    </div>
                </div>
                <div class="row mt-3 px-2">
                    <div class="col-md-3 px-1">
                        <div>
                            <a href=""><img src="{{ asset('assets/frontend/img/square.png') }}" width="100%"></a>
                        </div>
                    </div>
                    <div class="col-md-3 px-1">
                        <div>
                            <a href=""><img src="{{ asset('assets/frontend/img/square.png') }}" width="100%"></a>
                        </div>
                    </div>
                    <div class="col-md-3 px-1">
                        <div>
                            <a href=""><img src="{{ asset('assets/frontend/img/square.png') }}" width="100%"></a>
                        </div>
                    </div>
                    <div class="col-md-3 px-1">
                        <div>
                            <a href=""><img src="{{ asset('assets/frontend/img/square.png') }}" width="100%"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- software App -->
            <div class="col-md-12 my-3">
                <h6 class="font-medium text-black bold font-20 pb-2"><span><img class="pr-3 mobile-hw-img" src="{{ asset('assets/frontend/img/computerGrey.svg') }}" width="6%"></span>Software Applications</h6>
                <div class="mt-1 media-mt-0">
                    <div class="d-flex hw-flex">
                        <a align="center" class="flex-fill"><div>Sound Proof recording rooms</div></a>
                        <a align="center" class="flex-fill"><div>Acoustically Treated Control Rooms</div></a>
                        <a align="center" class="flex-fill"><div>Sound Proof Classrooms & Labs</div></a>
                        <a align="center" class="flex-fill"><div>RME FIREFACE</div></a>
                    </div>
                </div>
                <div class="mt-1 media-mt-0">
                    <div class="d-flex hw-flex">
                        <a align="center" class="flex-fill"><div>UAD APOLLO 16X</div></a>
                        <a align="center" class="flex-fill"><div>UAD PREAPMS</div></a>
                        <a align="center" class="flex-fill"><div>ANALOGUE RUPERT NEVE SUMMING MIXERS</div></a>
                        <a align="center" class="flex-fill"><div>VARIOUS FOCALS MONITORS SETS</div></a>
                    </div>
                </div>
                <div class="mt-1 media-mt-0">
                    <div class="d-flex hw-flex">
                        <a align="center" class="flex-fill"><div>RUPERT NEVER PREAMPS</div></a>
                        <a align="center" class="flex-fill"><div>ALLEN & HEATH DIGTAL MIXERS</div></a>
                        <a align="center" class="flex-fill"><div>SOUNDCRAFT HYBRID MIXER</div></a>
                        <a align="center" class="flex-fill"><div>AKG PREAMPS</div></a>
                    </div>
                </div>
                <div class="mt-1 media-mt-0">
                    <div class="d-flex hw-flex">
                        <a align="center" class="flex-fill"><div>KRK MONITOR SETS</div></a>
                        <a align="center" class="flex-fill"><div>ALLEN & HEATH DIGTAL MIXERS</div></a>
                        <a align="center" class="flex-fill"><div>UAD PREAPMS</div></a>
                        <a align="center" class="flex-fill"><div>BEHRINGER & ART PRO</div></a>
                        <a align="center" class="flex-fill"><div>UAD APOLLO 16X</div></a>
                    </div>
                </div>
                <div class="row mt-3 px-2">
                    <div class="col-md-3 px-1">
                        <div>
                            <a href=""><img src="{{ asset('assets/frontend/img/square.png') }}" width="100%"></a>
                        </div>
                    </div>
                    <div class="col-md-3 px-1">
                        <div>
                            <a href=""><img src="{{ asset('assets/frontend/img/square.png') }}" width="100%"></a>
                        </div>
                    </div>
                    <div class="col-md-3 px-1">
                        <div>
                            <a href=""><img src="{{ asset('assets/frontend/img/square.png') }}" width="100%"></a>
                        </div>
                    </div>
                    <div class="col-md-3 px-1">
                        <div>
                            <a href=""><img src="{{ asset('assets/frontend/img/square.png') }}" width="100%"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Crypto Cipher Studio & Lab -->
            <div class="px-3 pb-2">
                <h4 class="mt-3 font-black text-black font-35">Crypto Cipher Studio & Lab</h4>
                <div class="row px-2">
                    <div class="col-md-3 px-2 my-2">
                        <div class="gallery-wrapper">
                            <a href="#image1" class="item"><img src="{{ asset('assets/frontend/img/Mask Group 45.png') }}" width="100%"></a>
                            <div class="lightbox short-animate" id="image1">
                                <img src="{{ asset('assets/frontend/img/Mask Group 45.png') }}" class="long-animate"/>
                            </div>
                            <div class="short-animate" id="close-wrapper">
                                <a href="#!" id="close-lightbox" class="long-animate"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 px-2 my-2">
                        <div class="gallery-wrapper">
                            <a href="#image2" class="item"><img src="{{ asset('assets/frontend/img/Mask Group 47.png') }}" width="100%"></a>
                            <div class="lightbox short-animate" id="image2">
                                <img src="{{ asset('assets/frontend/img/Mask Group 47.png') }}" class="long-animate"/>
                            </div>
                            <div class="short-animate" id="close-wrapper">
                                <a href="#!" id="close-lightbox" class="long-animate"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-2 my-2">
                        <div class="gallery-wrapper">
                            <a href="#image3" class="item"><img src="{{ asset('assets/frontend/img/Mask Group 46.png') }}" width="100%"></a>
                            <div class="lightbox short-animate" id="image3">
                                <img src="{{ asset('assets/frontend/img/Mask Group 46.png') }}" class="long-animate"/>
                            </div>
                            <div class="short-animate" id="close-wrapper">
                                <a href="#!" id="close-lightbox" class="long-animate"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row px-2">
                    <div class="col-md-6 px-2 my-2">
                        <div class="gallery-wrapper">
                            <a href="#image4" class="item"><img src="{{ asset('assets/frontend/img/Mask Group 48.png') }}" width="100%"></a>
                            <div class="lightbox short-animate" id="image4">
                                <img src="{{ asset('assets/frontend/img/Mask Group 48.png') }}" class="long-animate"/>
                            </div>
                            <div class="short-animate" id="close-wrapper">
                                <a href="#!" id="close-lightbox" class="long-animate"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 px-2 my-2">
                        <div class="gallery-wrapper">
                            <a href="#image5" class="item"><img src="{{ asset('assets/frontend/img/Mask Group 49.png') }}" width="100%"></a>
                            <div class="lightbox short-animate" id="image5">
                                <img src="{{ asset('assets/frontend/img/Mask Group 49.png') }}" class="long-animate"/>
                            </div>
                            <div class="short-animate" id="close-wrapper">
                                <a href="#!" id="close-lightbox" class="long-animate"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 px-2 my-2">
                        <div class="gallery-wrapper">
                            <a href="#image6" class="item"><img src="{{ asset('assets/frontend/img/Mask Group 50.png') }}" width="100%"></a>
                            <div class="lightbox short-animate" id="image6">
                                <img src="{{ asset('assets/frontend/img/Mask Group 50.png') }}" class="long-animate"/>
                            </div>
                            <div class="short-animate" id="close-wrapper">
                                <a href="#!" id="close-lightbox" class="long-animate"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- lightbox try -->
<style>
.short-animate {
     transition: 0.5s ease-in-out;
}
 .long-animate {
     transition: 0.5s 0.5s ease-in-out;
}
 .lightbox {
     position: fixed;
     top: -100%;
     bottom: 100%;
     left: 0;
     right: 0;
     background: #2f3332;
     z-index: 9999 !important;
     opacity: 0;
}
 .lightbox img {
     position: absolute;
     margin: auto;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     max-width: 0%;
     max-height: 0%;
}
 .lightbox:target {
     top: 0%;
     bottom: 0%;
     opacity: 1;
}
 .lightbox:target img {
     max-width: 100%;
     max-height: 100%;
}
 .lightbox:target ~ #close-wrapper {
     top: 0;
}
 .lightbox:target ~ #close-wrapper #close-lightbox:after {
     width: 50px;
}
 .lightbox:target ~ #close-wrapper #close-lightbox:before {
     height: 50px;
}
 .lightbox:target ~ #next-wrapper {
     right: 0;
}
 .lightbox:target ~ #prev-wrapper {
     left: 0;
}
 #close-wrapper {
     position: fixed;
     top: -70px;
     right: 0;
     height: 70px;
     width: 70px;
     z-index: 9999;
     background: rgba(0, 0, 0, 0.1);
}
 #close-wrapper #close-lightbox {
     display: block;
     position: absolute;
     overflow: hidden;
     height: 50px;
     width: 50px;
     right: 10px;
     top: 10px;
     transform: rotate(45deg);
}
 #close-wrapper #close-lightbox:before, #close-wrapper #close-lightbox:after {
     content: "";
     display: block;
     position: absolute;
     background: #dfecee;
     border-radius: 2px;
}
 #close-wrapper #close-lightbox:before {
     height: 0;
     width: 3px;
     left: 24px;
     top: 0;
     transition: 0.5s 1s ease-in-out;
}
 #close-wrapper #close-lightbox:after {
     width: 0;
     height: 3px;
     top: 24px;
     left: 0;
     transition: 0.5s 1.5s ease-in-out;
}
 #next-wrapper {
     position: fixed;
     top: 40%;
     right: -70px;
     height: 70px;
     width: 70px;
     z-index: 9999;
     background: rgba(0, 0, 0, 0.1);
}
 #next-wrapper #next-lightbox {
     display: flex;
     align-items: center;
     justify-content: center;
     overflow: hidden;
     height: 50px;
     width: 50px;
}
 #next-wrapper #next-lightbox:before, #next-wrapper #next-lightbox:after {
     border-right: 3px solid #dfecee;
     content: "";
     display: block;
     height: 16px;
     position: absolute;
     background: #dfecee;
     border-radius: 2px;
     transform: rotate(-135deg);
     left: 45%;
     top: 45%;
     width: 0;
}
 #next-wrapper #next-lightbox:after {
     margin-top: -10px;
     transform: rotate(-45deg);
}
 #prev-wrapper {
     position: fixed;
     top: 40%;
     left: -70px;
     height: 70px;
     width: 70px;
     z-index: 9999;
     background: rgba(0, 0, 0, 0.1);
}
 #prev-wrapper #prev-lightbox {
     display: flex;
     align-items: center;
     justify-content: center;
     overflow: hidden;
     height: 50px;
     width: 50px;
}
 #prev-wrapper #prev-lightbox:before, #prev-wrapper #prev-lightbox:after {
     border-right: 3px solid #dfecee;
     content: "";
     display: block;
     height: 16px;
     position: absolute;
     background: #dfecee;
     border-radius: 2px;
     transform: rotate(135deg);
     left: 45%;
     top: 45%;
     width: 0;
}
 #prev-wrapper #prev-lightbox:after {
     margin-top: -10px;
     transform: rotate(45deg);
}
</style>
<!-- lightbox try end -->
        </div>
    </section>
</div>
@endsection


@section('script')
<script>
    //lightbox
    'use strict';
    let link;
    let imageCount = 4;
    let regExDigit = /\d+/;
    function imageLink() {
        let regExImage = /#image\d+/;
        let image = location.href;
        link = regExImage.exec(image)[0];
        link = regExDigit.exec(link)[0];
    }
    let next = document.getElementById('next-lightbox');
    let prev = document.getElementById('prev-lightbox');
    next.addEventListener('click', evt => {
        evt.preventDefault();
        imageLink();
        let newLink = Number(link) + 1;
        if (newLink > imageCount) newLink = 1;  
        location.href = location.href.replace(regExDigit, newLink);
    });
    prev.addEventListener('click', evt => {
        evt.preventDefault();
        imageLink();
        let newLink = Number(link) - 1;
        if (newLink < 1) newLink = imageCount;
        location.href = location.href.replace(regExDigit, newLink);
    });
</script>
@endsection