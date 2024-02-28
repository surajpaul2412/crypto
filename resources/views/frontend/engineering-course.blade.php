@extends('layouts.frontend.app')

@section('metas')
<title>Advanced Sound Engineering Course in Delhi, India | Crypto Cipher ®</title>
<meta name="description" content="Diploma Audio Engineering Course & Electronic Music Production Courses in Delhi, India. 
Details of Fees, Duration, Syllabus, Faculty. Advanced Mixing | Mastering | Sound Design | Recordings | Music Theory & Track Arrangements | EDM Production Courses">
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
    b, strong {
        font-weight: 800 !important;
    }
    .box-shadow{
        box-shadow: 2px 2px 4px 0px rgba(50,50,50,0.10), -2px -2px 3px 0px rgba(255,255,255,0.8);
        background-image: linear-gradient(to right, #edeef3 , #f4f5f9);
        border: 5px solid rgba(255,255,255,0.3);
    }
    @media only screen and (min-width: 600px) {
        .pt-md-50{
            padding-top: 55px;
        }
    }
    .Main__Container-sc-1n4ud0o-0 > a, .eapps-widget-toolbar{display: none !important;}
</style>
@endsection

@section('content')
<style>
    b, strong {
        font-weight: 800 !important;
    }
</style>
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0">
            <h1 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title uppercase">Complete Advance Music Production & Audio Engineering</h1>
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
                        <a href="{{url('/register')}}">
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
                        <h6 class="font-black bold font-20"><span><img class="pr-3" src="{{ asset('assets/frontend/img/computer.svg') }}" alt="computer" width="15%"></span>Software Applications</h6>
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
                        <h6 class="font-black bold font-20"><span><img class="pr-3" alt="electronic" src="{{ asset('assets/frontend/img/electronic.svg') }}" width="15%"></span>Hardware Applications</h6>
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
    <section class="container slider-header mt-4 px-3 pt-md-50" id="logicAbleton">
        <!-- title -->
        <div class="px-2 pt-4 pl-0">
            <h4 class="font-black text-black font-18">Logic Pro X & Ableton Live </h4>
        </div>
        <!-- content -->
        <div class="row">
            @if($engineeringCourseLogicAbleton->count())
            @foreach($engineeringCourseLogicAbleton as $row)
            <div class="col-md-12 col-12 mx-2">
                {!! $row->content !!}
            </div>
            @endforeach
            @endif
            <div class="col-md-12 mx-2 pt-4">
                @if($engineeringCourseOverview->count())
                <h4 class="font-black text-black font-18">Overview Of the module</h4>
                <ul class="font-regular text-grey2 font-13 ul-logic">
                    @foreach($engineeringCourseOverview as $row)
                    <li>
                        {!! $row->content !!}
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </section>
    <!-- studio recording -->
    @if($engineeringCourseModule->count())
    @foreach($engineeringCourseModule as $row)
    <section class="container slider-header mt-4" id="{{ str_replace(' ', '', $row->heading) }}">
        <!-- content -->
        <div class="row mx-2 media-mx-0 pt-md-50">
            <div class="col-md-7 col-12 py-4">
                <div class="pb-3">
                    <h6 class="font-black bold font-20"><span><img alt="{{$row->heading}}" class="pr-3 media-studio-img" src="{{env('image_url')}}/module/{{$row->icon}}" width="7%"></span>{{$row->heading}}</h6>
                    <div class="font-regular pb-3 font-13 text-grey2">
                        {!! $row->content !!}
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-12 py-3" align="right">
                <div class="box-shadow">
                    <img src="{{env('image_url')}}/module/{{$row->image}}" alt="{{$row->heading}}" class="media-w-100" width="100%">
                </div>
            </div>
        </div>
    </section>
    @endforeach
    @endif
    <section class="container slider-header mt-4 p-4">
        <h2 class="font-black text-black font-18 pt-3 pb-4" align="center">"Our Students Experience"</h2>
        <div class="row">
            <!-- col 1 -->
            <div class="col-md-4 col-12">
                <!-- card start | new section -->
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/AD5-WCmkWfM4n6WxvL_eN4RgIAcVmQAABqeasWbB81Ah=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">critter purush</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">Honestly speaking, Crypto Cipher offers you much more than you would expect from any place Elsewhere in this Field. Faculty members are so Interactive, Helpful, Knowledgeable and Sincere about their Work that it Exceeded my Expectations. Each and Every single class is taken very seriously and students are there by reminded from time to time not miss any of the classes within this course so that they can learn and understand each and every step of the Process. Not just the Music Production and Mixing-Mastering but you will always get to know and experience much more than the area of knowledge you would expect from an Institution such as this. More or Less this is the Best Place if you are willing to give your Learning the best chance in the field of Audio!</h6>
                        <div class="font-13" align="right">
                            <a href="https://goo.gl/maps/X16euBxkgujfHgNu7" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <!-- card end -->
                <!-- card start -->
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu9cgVET87xgjQpS45lFsyrljbnecJLLDJsM8Jnbl38=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Gaurav Kapoor</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">Crypto Cipher gives you a very wholesome perspective on understanding sound and then music. I have been here for about 3 months now and I must say that each and every module is designed very deeply and accurately. They don’t take too much of your time but make sure to give you good amounts of content to practise. After spending about 3 months here, I personally feel that the course has given me a boost to envision great aspects of sound designing, background film scoring, synthesis and a lot more being taught here in the course.<br><br>The ambience is very professional yet friendly, giving you a good studio, a very good quality of instruments and mics, a comfortable classroom to study. All of this adds to a great sense of professionalism which is extremely important for us students.<br><br>The teachers are humble, supportive and inspiring, they never hesitate to answer your doubts.They are equipped with skills  and believe that “ Knowledge is power”. You get a sense of their warmth right from the first counselling session conducted by Mr Sat Prakash which is a must in my opinion. The session broadly talks about your understanding and expectations with the course and what to expect from the academy, doing this you would know whether this course is for you or not.<br><br>All in all if you are willing to work and love music, then this is the place for you.</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/aTikpi" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <!-- card end -->
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu8P5PxDQjJfH27Ez0c4KtMj4K8P1qe5CaaP61vlBQ=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Nattrasz</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">Most innovative learning experience. Genuine teaching pattern. My personal experience was superb at crypto cipher academy. Teachers are really helpful. They cover each detailed topic of music production and sound engineering. My highly recommendation to all the upcoming music learner’s to just visit the academy once and check the enhance learning environment.<br><br>Thanks Team Crypto Cipher for turning out my inner music soul into a professional music producer.</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/qjxaQS" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu-xokhmo6mQortMln6j4Giv1L4Zx2-y9nUovPTgCw=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Sumit Padmajan</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">I joined crypto cipher 4 months ago and I'm fully satisfied with the kind of knowledge that they are providing there. A must go for everyone who is interested in sound engineering and up for electronic music production course.</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/b7Lt2P" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu-m5lma8B9UQvtnYDM4yYaVn3x8w0eIi0RrwDJ0=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Deepak Singh</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">Crypto cipher is the best platform for all music lovers. Here everyone can explore their creativity and achieve their goals. Here every teachers are well qualified for teaching students. I specially thanks to Sumit sir , Satparkesh sir, Sahitya sir And Rio sir for giving me best knowledge. I am very proud feel to be a part of Crypto cipher Academy 🙂</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/nnRaRB" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col 2 -->
            <div class="col-md-4 col-12">
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu9mqZpRKu3aohiVlWzSOWj5YAQ6BlViAbgIwwxb0A=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">YOGESH VERMA</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">This is the best academy that I have got in for music production. It doesn't limit us in just software but as well as help us to create our own music. It really opened my mind about music production as whole. It really helped me in understanding music production concepts. Sumit sir is very humble and helpful. Crypto cypher is the only academy who make Indian classical softwares. It is only one of its kind in India. I would highly recommend this academy to my friends who want to peruse their career in music production.</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/BbjCB2" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu-1ET09EGdOMRDWtlb40fD098npPf4WduJqbjmMpmM=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Manya Narang</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">Extraordinary Faculty, Extraordinary Experience Of Learning.... Here, the teachers give you the freedom to do mistakes and learn on your own... THE BEST PLACE FOR LEARNING EVER.... What you'll get from here ?? - WINGS TO FLY..!!! 😇 Thank you Sumit Sir and Hemant Sir..!! Can Never Forget What You Taught Me... You Rock !! 🙏.</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/USJSoq" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a/ALm5wu37NldIt0JT9lTmIN-9A4ZJ_ROgxq03o0ButXE-=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Karan Aneja</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">If any music hungry person is watching my comment than I want to tell u that CRYPTO CIPHER ACADEMY is the besssssssssssstesstttttt Place for u.... Even 5 stars are less for it... Honestly saying... It's the best place for a music learner.</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/4PW3XT" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu-hiGY115uBj-8X_NzRlPekE64H5BwQvi3NKGYGG2k=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Shubham Singh Khati</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">The learning curve here is exponential. And all the credit goes to the teachers at the academy who take each student into consideration and give their best to teach us. The course structure is also, designed in a way that'll cover almost everything regarding sound.</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/QME4g6" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu_iKdpf9Pz4JTD9R8y02jD8yv5pslRnXkChWkz0MMw=w45-h45-p-rp-mo-ba2-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Mukul Chaudhary</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">Best place in india for proper education of Music production nd sound engineering. If u wanna do something in Production nd sound stream ..then don't be hesitate to get in touch with crypto cipher.<br><br>Awesome Faculty & Ambiance.👌👍</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/VVNtxD" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu8ouer7I1yseToQwGBt-58TLYZbSTxBi9WWkJtk3g=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Shivajee Pratap</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">Best place in delhi to explore sound & its all aspects. Starting from recording, mixing, mastering to acoustic treatment & wiring you will learn everything here. Trainers are also very friendly.</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/pcN5eQ" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col 3 -->
            <div class="col-md-4 col-12">
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a/ALm5wu3J6kKpsWMNG574vofm9tqkgG5G1P_G74q92ObfgQ=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Diljeet Singh</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">I joined Crypto Cipher Academy in August 2018 for Sound Engineering Course. My experience with the Acadamy is an exceptional one, the faculty here is very helping and does a genuine effort to explain each and every concept in detail and encourage us to ask questions until the concept is cleared.<br><br>They encourage us to be creative and experimental, they teach us to know and understand sound visually and audibly. This opens so many possibilities for using sound of ertistically and expressively.<br><br>In my opinion, this Acadamy is the best place for learning sound, and i would highly recommend Crypto Cipher if you are interested and want to start a career in the industry.</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/PgBbAv" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu9-4RVZOd7aeFelU2h6RqAcPgSUb1UvGcfj9Kxh=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Sagar bankoti</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">This is one of the best institute for sound or music u can find in Delhi , the explanation the staff the comfortness , the way of teaching everything is on top 🔥</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/5dB2zk" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu-tlgOo76qvi__P0HAgphn4RoltMmNT1VRojb2RBA=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Scaria Jacob</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">I got what I was looking for because of an experience I will never forget, and now I am proud to say that I studied cryptocipher, I now work as a music programmer at U S A texas,<br><br>Thank you crypto cipher</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/fhe4MR" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu8xCRWe6l2G_2N6gVxGoawF8FdrTFf_tTZMrBQaNJ0=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">ketox</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">I love this acadmy. If anyone wants to make his career in the field of sound and music production , then don't think so much and join the academy.. The teachers here have more knowledge than the limits. I am having great time in there.</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/7jB3Jb" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
                <div class="card p-4 mb-4" style="border-radius: 15px;">
                    <div class="card-block">
                        <div class="card-text good-review-score float-left">
                            <img src="https://lh3.googleusercontent.com/a-/ACNPEu8z-8Du-XIHnmQeKIczMWUY9fK1MVooc7eVEnKYsg=w45-h45-p-rp-mo-br100">
                        </div>
                        <div class="card-title ml-4 pl-4">
                            <div class="pl-2">Manmohit Shakywar</div>
                            <div class="pl-2" style="margin-top: -5px;">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                                <img src="https://maps.gstatic.com/consumer/images/icons/2x/ic_star_rate_14.png" width="15px">
                            </div>
                        </div>                        
                    </div>
                    <div class="card-block">
                        <h6 class="card-text font-13">Cypto Cipher Academy is a unique institute, where we can learn Music Production and Sound Engineering based on modern aspects of Music Industry. All modules are systematically based on basic knowledge of Music theory, DAW, Sound and live applications of musical skills in various projects. All faculties are with expertise in their subjects and have personal approach to teach and motivate each student.<br><br>To start your musical journey, just join Crypto Cipher Academy.</h6>
                        <div class="font-13" align="right">
                            <a href="https://g.co/kgs/aeVGjj" target="_blank">:Source</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
@endsection
