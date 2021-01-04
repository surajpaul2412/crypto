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
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title uppercase">Complete Advance Music Production & Audio Engineering</h6>
            <h4 class="font-black text-black font-35 marT-10">Sound Engineering Diploma Course</h4>
        </div>
        <!-- content -->
        <div class="row px-3 media-px-2">
            <div class="col-md-6 my-2">
                <div class="media-px-2" align="left">
                    @if($engineeringCourse->count())
                    @foreach($engineeringCourse as $row)
                        {!! $row->content !!}
                    @endforeach
                    <div class="mobile-center">
                        <a href="">
                            <div class="font-regular mb-2 mt-4 page-12-btn">
                                APPLY NOW
                            </div>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6 my-2 pt-3">
                <div class="slider-header bg-theme p-4" align="left">
                    <h4 class="font-black text-black font-18">Who Can Enroll Sound Engineering Course?</h4>
                    <ul class="font-regular text-black font-13 pl-0 pr-3 pt-2 quick-info">
                        @if($engineeringCourseSound->count())
                        @foreach($engineeringCourseSound as $row)
                            <li>{!! $row->content !!}</li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- s/w and h/w  -->
    <section class="container slider-header mt-4 px-3 media-px-0">
        <!-- content -->
        <div class="row mx-2 media-mx-0">
            <div class="col-md-6 col-12 py-4">
                <div class="slider-header bg-theme py-3 px-4">
                    <div>
                        <h6 class="font-black bold font-20"><span><img class="pr-3" src="{{ asset('assets/frontend/img/computer.svg') }}" width="15%"></span>Software Applications</h6>
                    </div>
                    <ul class="font-regular text-grey2 font-14 pl-0 pr-3 pt-2 quick-info">
                        @if($engineeringCourseSoftware->count())
                        @foreach($engineeringCourseSoftware as $row)
                            <li>
                                <?php
                                    echo htmlspecialchars_decode($row->content);
                                ?>
                            </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-12 py-4">
                <div class="slider-header bg-theme py-3 px-4">
                    <div>
                        <h6 class="font-black bold font-20"><span><img class="pr-3" src="{{ asset('assets/frontend/img/electronic.svg') }}" width="15%"></span>Hardware Applications</h6>
                    </div>
                    <ul class="font-regular text-grey2 font-14 pl-0 pr-3 pt-2 quick-info">
                        @if($engineeringCourseHardware->count())
                        @foreach($engineeringCourseHardware as $row)
                            <li>
                                <?php
                                    echo htmlspecialchars_decode($row->content);
                                ?>
                            </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--  Logic Pro X & Ableton Live  -->
    <section class="container slider-header mt-4 px-3" id="logicAbleton">
        <!-- title -->
        <div class="px-2 pt-4 pl-0">
            <h4 class="font-black text-black font-18">Logic Pro X & Ableton Live </h4>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-md-12 col-12 mx-2">
                <p class="font-regular font-13 text-grey2">
                    This module will come with many excited surprises and candidate will be doing everything within computers and few theory lectures will help candidate in understanding the music production process with a technical aspect. Many Concepts will be revealed using renowned digital audio workstations Logic Pro X & Ableton Live. <br>
                    <span class="bold">Examination Pattern -</span> Practical & Theory Exam
                </p>
                <div class="mobile-center">
                    <a href="">
                        <span class="font-regular mb-2 mt-4 page-10-btn">
                            Logic Pro X  Course Structure
                        </span>
                    </a>
                    <br class="desktop-d-none">
                    <br class="desktop-d-none">
                    <a href="" class="pl-3 media-pl-0">
                        <span class="font-regular mb-2 mt-4 page-10-btn">
                            Ableton Live Course Structure
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-12 mx-2 pt-4">
                <h4 class="font-black text-black font-18">Overview Of the module</h4>
                <ul class="font-regular text-grey2 font-13 ul-logic">
                    <li><strong class="uppercase font-bold text-grey2 font-14 lh-2">Fundamentals of Audio Engineering & Applications</strong><br>Vision & Application Of Module : Practical Application of Studio Recordings using professional equipment and various performance Artist. This module will come with many excited surprises and candidate will be doing everything within computers and few theory lectures will help candidate in understanding the music production process with a technical aspect. Many Concepts will be revealed using renowned digital audio workstations Logic Pro X & Ableton Live. <br><span class="bold">Examination Pattern -</span>  Practical & Theory Exam<br><br>
                        <span class="bold">Logic Pro X  Course Structure</span><br>
                        <span class="bold">Ableton Live Course Structure</span><br><br>
                    We will uncover the Fundamentals of Digital Audio and dig deeper into the concepts such as Sampling Rate, Bit depth, Head Room, Signal to noise ratio, Frequency, Pitch, Amplitude, Volume, Harmonics. Discussion about Analog to digital conversion and vice versa. This will lay the the strong foundation of whatever we will discuss in the course duration.<br>We will discuss about the whole signal chain of the studio and with the strong concepts of digital audio discussed earlier, we will understand how we can practically make clean and professional sounding recordings keeping all the fundamentals of audio in our mind. This will also help to make good decisions when it comes to buying a professional sounding equipment for yourself.
                    </li>
                    <li><strong class="uppercase font-bold text-grey2 font-14 lh-2">Recording/Microphones Techniques</strong><br>Now we are in good shape to understand about Sound Capturing/Recording techniques. We will discuss about various Microphone types, their Polar Patterns, understanding mono and stereo recordings and how they can be done creatively using various microphone techniques to get the desired sound.<br>We will straight jump to practically doing studio recordings of different musical instruments in mono and stereo with different microphone types and techniques.<br>Once we capture our recordings in digital medium, we will deeply analyse what we have recorded and understand how to capture recordings in different frequency ranges, how we can avoid common phase issues during recordings and taking care of other audio related problems. We will uncover various techniques like Layering, Double tracking, Ad-Libs and many other to achieve the desired sound. Mastering all this will gradually get you to produce professional sounding tracks.</li>
                    <li><strong class="uppercase font-bold text-grey2 font-14 lh-2">Audio Editing Techniques</strong><br>While working with audio it is very important that along with relying on ears for editing decisions, as a sound engineer its very important that our two faculties, the power of hearing and viewing audio go hand in hand to make audio editing decisions. In short, we will learn how to view and read audio waveforms.<br>We will understand what is Pre-noise, Transients and Zero crossings and other terms which will help in understanding audio in depth. This knowledge will help one to edit effectively and make good audio editing decisions while working.<br>We will uncover various editing techniques using various advance tools and various audio editing softwares and plugins.</li>
                    <li><strong class="uppercase font-bold text-grey2 font-14 lh-2">The Art and Physics Behind Musical Instrument Development</strong><br>The real power of the Producer/Engineer comes when someone understands deeply about the sound sources he is capturing. We will uncover the art of development of musical instrument.<br>Understanding what Intonations are. Exploring the differences between Equal Temperament Tuning and Natural Tuning of an instrument and how one can build his own instrument with the desired tuning to make music out of it.<br>After expounding on the theory, we will have workshop sessions with renowned musical instrument developer from India who will make you understand how to practically do it.</li>
                    <li><strong class="uppercase font-bold text-grey2 font-14 lh-2">The Power Of MIDI (Musical Instrument Digital Interface)</strong><br>Understanding what is MIDI, The word MIDI programming, Software Instrument and MIDI Interface. We will explore the power of MIDI and its role in the context of producing music.<br>Understanding the MIDI Note Events and Continuous Controller Events and how to use different types of MIDI events while producing music. This knowledge will guide you to make right decisions when it comes to buying the right interface for yourself.<br>Exploring the different ways of Recording and Editing of MIDI performances in DAW. This will uncover various techniques of making music.<br>Using DAW Midi features, we will learn how to program music using different software instruments and getting into the nitty gritty of programming keeping certain intricacies in mind.<br>Learning how to program drums using Ableton Live &  Logic Pro X Drumming technology. This will allow you to Program and produce organic sounding acoustic and electronic drums and beats.<br>Delving into various midi effects like Arpeggiator, Chord Trigger, Modifier, Note Repeater, Randomizer, Scripter, Transposer, Velocity Processor and exploring how we can use them creatively during midi programming.<br>Finally, using all this knowledge we will understand how to record ultra realistic performances from software instruments no matter you want to play simple guitar or Hollywood sounding strings, Epic percussions or anything you can think of in terms of programming.</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- studio recording -->
    <section class="container slider-header mt-4" id="recordings">
        <!-- content -->
        <div class="row mx-2 media-mx-0">
            <div class="col-md-7 col-12 py-4">
                <div class="pb-3">
                    <h6 class="font-black bold font-20"><span><img class="pr-3 media-studio-img" src="{{ asset('assets/frontend/img/record.svg') }}" width="7%"></span>Studio Recordings</h6>
                    <div class="font-regular pb-3 font-13 text-grey2">
                        <span class="bold">Vision -</span> Understanding Sound by practically recording variety of sources in studio environment.<br>
                        <span class="bold">Application -</span> Recording & Dubbing Engineer.<br><br>
                        Learning theory of recording equipments and its signal flow is must but to attain professional recording candidate has to record variety of sources with different microphones with different microphone techniques. Doing this practically also helps in understanding behaviour of sound in acoustic domain, electrical domain as well in digital domain.<br><br>
                        Candidate will learn about rooms, recording precautions, signal flow from source to speakers and to listening perception, candidate will also get exposure to various equipments used in professional recording equipments and how to produce best results within limited amount of decent equipments.<br><br>
                        Candidate will perform Mono recordings, various stereo recordings and also multi-microphone techniques with various performers and sources.
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-12 py-4" align="right">
                <img src="{{ asset('assets/frontend/img/img1.svg') }}" class="media-w-100" width="90%">
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
@endsection
