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
                    <div class="font-regular pb-3 font-13 text-black">
                        This is for beginners wanting to build a solid foundation. The course is about understanding the digital audio and using it for the purpose of producing any genre of music no matter its EDM/ Pop/ Blues/ Rock/ Jazz/ Classical or any other kind of music production.<br><br><span class="bold">Access to -</span> Audio Lab Professional Software and Hardware equipment to mature your music making skills.<br><br><span class="bold">Requirements -</span> Willingness to explore the exciting world of digital audio.
                    </div>
                    <h6 class="font-bold text-green font-14">Course Fee : ₹ 60,000 + GST </h6>
                    <h5 class="font-regular text-black font-14">Thrice A Week <span class="px-2">|</span> 2 months duration</h5>
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
                        <li>Advance Logic Pro X & Ableton Live Course</li>
                        <li>Revision session before examination</li>
                        <li>Inquisitiveness in student required</li>
                        <li>Regular Assignments, Support & Exam based Certification</li>
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
                    <li>We will start with the detailed overview of music production process and develop a logical terrain of how one should approach his knowledge and skill building systematically from start to finish.</li>
                    <li>Setting up your music production space by understanding the fundamentals of digital audio concepts such as “Sampling Rate”, “Bit Depth”, “Buffer Size”, Analog to Digital and Digital to analogue Conversion. Understanding how audio interface cater all these needs of music production process and working with digital audio.</li>
                    <li>Introduction to Digital Audio Workstation and its role in music production process. Understanding its interfaces, setting it up for recording, handling basic tasks like using key commands for easier workflow, what are loops and different types, manipulating and arranging audio and midi apple loops, basics of music arrangement, audio processing, Mixing, balancing and finally exporting your music. Basically getting and idea and starting making music from the first day itself!</li>
                    <li>Signal Chain : Understanding how audio signal travels in a studio and learning to optimise before capturing it. Learning to recognise and choose the best equipment for your workflow.</li>
                    <li>Understanding what is mono and stereo signal and learning various microphone techniques to capture the sounds of musical instruments like drums, bass, guitar, violin, saxophone.</li>
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
                    <li><strong class="uppercase font-bold text-grey2 font-14 lh-2">INTRODUCTION</strong><br> The first class of this course is designed to give the student a customary idea of the DAW. We go over the bare basics of how to get Live up and running and also configure it to work with audio. Students are given in-depth knowledge of using Live’s Browser to accomplish certain functions like importing samples, loops etc. Then the focus shifts to the other panels of Live that will become absolutely imperative in the endeavour of music making. We take a look at a lot of aspects of Live’s Arrangement View where the students will do the most amount of work. Basic Navigation-based information and understanding of the various tools on display are also provided along with getting the students familiar with keyboard shortcuts for working for a much quicker workflow.</li>
                    <li><strong class="uppercase font-bold text-grey2 font-14 lh-2">RECORDING AUDIO</strong><br> The second class of the course starts of with the working of imported and recorded audio in Ableton Live. Important concepts integral to the music making process that are on a more technical level is discussed and explained to the students. In terms of recorded audio, we stress on the understanding of analog to digital conversion and vice-versa of sound pressure waves emitted from an arbitrary source. We go over practical examples of recording both in mono and stereo formats and also the use of multitrack recording in Ableton. This class also deals with saving projects in Ableton and Ableton’s intricate project filing system along with a myriad of variables one needs to be aware of while exporting the recorded audio from Ableton 10.</li>
                    <li><strong class="uppercase font-bold text-grey2 font-14 lh-2">SUMMARY OF THE WHOLE COURSE AND REVISION OF PREVIOUS CLASSES.</strong></li>
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