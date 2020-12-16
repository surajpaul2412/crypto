@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher</title>
@endsection

@section('css')
<style>
    .btn-reset{
        background: transparent;
        outline: none;
        border: none;
    }
    button[type="submit"]{
        background: #02BC4D;
        color: #fff;
        font-family: 'Roboto-Regular';
        font-size: 12px;
        text-transform: capitalize;
        padding: 9px 40px;
        box-shadow: none;
        font-weight: bold;
    }
    button[type="submit"]:hover{
        color: #fff;
        box-shadow: none;
    }
    button[type="submit"]:disabled {
        background: #A0A3A9;
    }
    label{
        font-size: 13px !important;
        font-family: 'Roboto-Regular';
    }
    form input[type="radio"]:checked {
        background-color: yellow;
    }
    .avatar-upload {
      position: relative;
      max-width: 205px;
      margin: 0px auto;
    }
    .avatar-upload .avatar-edit {
      position: absolute;
      right: 12px;
      z-index: 1;
      top: 10px;
    }
    .avatar-upload .avatar-edit input {
      display: none;
    }
    .avatar-upload .avatar-edit input + label {
      display: inline-block;
      width: 34px;
      height: 34px;
      margin-bottom: 0;
      border-radius: 100%;
      background: #FFFFFF;
      border: 1px solid transparent;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
      cursor: pointer;
      font-weight: normal;
      transition: all 0.2s ease-in-out;
    }
    .avatar-upload .avatar-edit input + label:hover {
      background: #f1f1f1;
      border-color: #d6d6d6;
    }
    .avatar-upload .avatar-edit input + label:after {
      color: #757575;
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      text-align: center;
      margin: auto;
    }
    .fa-upload{
        position: absolute;
        left: 30%;
        top: 23%;
    }
    .avatar-upload .avatar-preview {
      width: 192px;
      height: 192px;
      position: relative;
      border: 6px solid #F8F8F8;
      box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }
    .avatar-upload .avatar-preview > div {
      width: 100%;
      height: 100%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }
    .quick-info{
        list-style: none;
    }
    .quick-info li {
        background:url('{{ asset('assets/frontend/img/Ellipse.png') }}') no-repeat 0px 5px;
        background-size: 8px;
        padding-left: 18px;
        padding-bottom: 0px;
    }
    #myButton{
        margin-top: -3px;
    }
</style>
@endsection


@section('content')
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0">
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title uppercase">Course registration</h6>
            <h4 class="font-black text-black font-35 marT-10">Admission Procedure</h4>
        </div>
        <!-- content -->
        <div class="row px-3">
            <div class="col-md-12 my-2">
                <div class="" align="left">
                    <div class="font-regular pb-3 font-13 text-grey2 px-3 media-px">
                        Please note our all admissions happens through this page only ( url ) via online payment gateway and filling the form and paying registration amount confirms your seat.<br>
                        <span class="bold">01.</span> Upload your signatures & parents/guardian signatures after reading all terms & conditions mentioned under this page.<br>
                        <span class="bold">02.</span> You ll receive the confirmation of your seat just after filling the form and paying registration amount of <span class="bold">₹ 11800.</span> Your Registration amount is part of your total fees.<br>
                        <span class="bold">03.</span> Incase you need any support or have any queries then don’t hesitate and contact at <a class="text-grey2 bold font-regular" href="callto:9910092983">9910092983</a> or email us at <a class="text-grey2 bold font-regular" href="mailto:academy@cryptocipher.in">academy@cryptocipher.in</a>
                    </div>
                    <div class="font-medium text-black font-12 px-3 media-px">
                        Fill The Form ( Select Your Batch & Fill all your personal details )
                    </div>
                    <div class="slider-header bg-theme1 mx-3 mt-4 media-mx">
                        <form class="px-4 pt-4 pb-3 register-form" method="post" action="">
                            @csrf
                            @method('POST')
                            <!-- Application Form -->
                            <h5 class="font-medium text-black font-14">Application Form</h5>
                            <div class="row">
                                <div class="col-md-8">
                                    <span class="font-regular font-12 text-grey2">Registration Date</span>
                                    <h5 class="font-medium text-black font-14 pt-1">Crypto Cipher</h5>
                                    <div class="md-form mt-0 w-100">
                                        <input type="text" class="form-control" id="output" disabled/>
                                    </div>
                                    <span class="font-regular font-12 text-grey2">Select Course</span>
                                    <div class="mobile-d-grid">
                                        <span>
                                            <input type="radio" id="music" name="course" value="Music Production">
                                            <label class="pl-2" for="music">Music Production</label>
                                        </span>
                                        <span class="pl-3 media-pl-0">
                                            <input type="radio" id="sound" name="course" value="Sound Engineering">
                                            <label class="pl-2" for="sound">Sound Engineering</label>
                                        </span>
                                    </div>
                                    <span class="font-regular font-12 text-grey2">Batch Commencement</span>
                                    <div class="mobile-d-grid">
                                        <span>
                                            <input type="radio" id="april" name="batch" value="30th April 2020">
                                            <label class="pl-2" for="april">30th April 2020</label>
                                        </span>
                                        <span class="pl-3 media-pl-0">
                                            <input type="radio" id="may" name="batch" value="10th May 2020">
                                            <label class="pl-2" for="may">10th May 2020</label>
                                        </span>
                                        <span class="pl-3 media-pl-0">
                                            <input type="radio" id="jun" name="batch" value="1st Jun 2020">
                                            <label class="pl-2" for="jun">1st Jun 2020</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- upload image -->
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageUpload"><i class="fa fa-upload"></i></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview" style="background-image: url('{{ asset('assets/frontend/img/profile.jpg') }}');">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Student Details -->
                            <h5 class="font-medium text-black font-14 pt-3">Student Details</h5>
                            <div class="md-form mt-0 w-100">
                                <input type="text" class="form-control">
                                <label>Student Name</label>
                            </div>
                            <!-- phone number -->
                            <div class="md-form mt-0 w-100">
                                <input type="number" class="form-control">
                                <label>Phone Number</label>
                            </div>
                            <!-- email -->
                            <div class="md-form mt-0 w-100">
                                <input type="email" class="form-control">
                                <label>Email ID</label>
                            </div>
                            <!-- Address -->
                            <div class="md-form mt-0 w-100">
                                <input type="text" class="form-control">
                                <label>Address</label>
                            </div>
                            <!-- Address -->
                            <div class="md-form mt-0 w-100 form-row">
                                <div class="col-6 pr-3">
                                    <input type="text" class="form-control pr-3">
                                    <label class="pr-3 pl-1">Nationality</label>
                                </div>
                                <div class="col-6 pl-3">
                                    <input type="text" class="form-control pl-3">
                                    <label class="pl-3">Pincode</label>
                                </div>
                            </div>
                            <!-- DOB -->
                            <div class="md-form mt-0 w-100">
                                <input type="text" class="form-control">
                                <label>Father's/Guardian Name</label>
                            </div>
                            <!-- parents details -->
                            <div class="md-form mt-0 w-100">
                                <input type="tel" class="form-control">
                                <label>Father's/Guardian Mobile Number</label>
                            </div>
                            <div class="md-form mt-0 w-100">
                                <input type="text" class="form-control">
                                <label>Mother's/Guardian Name</label>
                            </div>
                            <div class="md-form mt-0 w-100">
                                <input type="tel" class="form-control">
                                <label>Mother's/Guardian Mobile Number</label>
                            </div>
                            <div class="md-form mt-0 w-100">
                                <input type="text" class="form-control">
                                <label>Father's Occupation</label>
                            </div>
                            <!-- GST info. -->
                            <h5 class="font-medium text-black font-14 pt-3">GST Information</h5>
                            <div>
                                <span>
                                    <input type="radio" id="yes" name="applicable" value="0">
                                    <label class="pl-2" for="yes">Applicable</label>
                                </span>
                                <span class="pl-3">
                                    <input type="radio" id="no" name="applicable" value="1">
                                    <label class="pl-2" for="no">Not Applicable</label>
                                </span>
                            </div>
                            <div class="md-form mt-0 w-100">
                                <input type="text" class="form-control">
                                <label>Trade/Business Title</label>
                            </div>
                            <div class="md-form mt-0 w-100">
                                <input type="text" class="form-control">
                                <label>Trade/Business Address</label>
                            </div>
                            <div class="md-form mt-0 w-100 form-row">
                                <div class="col-12 col-md-6 pr-3">
                                    <input type="text" class="form-control pr-3">
                                    <label class="pr-3 pl-1">GST Number</label>
                                </div>
                                <div class="col-12 col-md-6 pl-3 media-pl-0">
                                    <input type="text" class="form-control pl-3 media-pl-1">
                                    <label class="pl-3 media-pl-1">Trade/Business Address</label>
                                </div>
                            </div>
                            <!-- Academic Details -->
                            <h5 class="font-medium text-black font-14 pt-3">Academic Details:</h5>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <label class="pl-3">SSC (10th)</label>
                                    </div>
                                </div>
                                <div class="col-md-4 media-pt-4">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <input type="text" class="form-control pl-3">
                                        <label class="pl-3">Name of School / College</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="md-form mt-0 w-100 form-row px-2">
                                        <input type="text" class="form-control px-2">
                                        <label class="px-2">Year</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <input type="text" class="form-control pl-3">
                                        <label class="pl-3">Board / University</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <label class="pl-3">HSC (12th)</label>
                                    </div>
                                </div>
                                <div class="col-md-4 media-pt-4">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <input type="text" class="form-control pl-3">
                                        <label class="pl-3">Name of School / College</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="md-form mt-0 w-100 form-row px-2">
                                        <input type="text" class="form-control px-2">
                                        <label class="px-2">Year</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <input type="text" class="form-control pl-3">
                                        <label class="pl-3">Board / University</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <label class="pl-3">Undergraduate</label>
                                    </div>
                                </div>
                                <div class="col-md-4 media-pt-4">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <input type="text" class="form-control pl-3">
                                        <label class="pl-3">Name of School / College</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="md-form mt-0 w-100 form-row px-2">
                                        <input type="text" class="form-control px-2">
                                        <label class="px-2">Year</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <input type="text" class="form-control pl-3">
                                        <label class="pl-3">Board / University</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <label class="pl-3">Graduate</label>
                                    </div>
                                </div>
                                <div class="col-md-4 media-pt-4">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <input type="text" class="form-control pl-3">
                                        <label class="pl-3">Name of School / College</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="md-form mt-0 w-100 form-row px-2">
                                        <input type="text" class="form-control px-2">
                                        <label class="px-2">Year</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <input type="text" class="form-control pl-3">
                                        <label class="pl-3">Board / University</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <label class="pl-3">Post Graduate</label>
                                    </div>
                                </div>
                                <div class="col-md-4 media-pt-4">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <input type="text" class="form-control pl-3">
                                        <label class="pl-3">Name of School / College</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="md-form mt-0 w-100 form-row px-2">
                                        <input type="text" class="form-control px-2">
                                        <label class="px-2">Year</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="md-form mt-0 w-100 form-row">
                                        <input type="text" class="form-control pl-3">
                                        <label class="pl-3">Board / University</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Academic Details -->
                            <h5 class="font-medium text-black font-14 pt-3">Education Stream</h5>
                            <div class="mobile-d-grid">
                                <span>
                                    <input type="radio" id="fruit1" name="stream" value="Science">
                                    <label class="pl-2" for="fruit1">Science</label>
                                </span>
                                <span class="pl-3 media-pl-0">
                                    <input type="radio" id="fruit4" name="stream" value="Arts">
                                    <label class="pl-2" for="fruit4">Arts</label>
                                </span>
                                <span class="pl-3 media-pl-0">
                                    <input type="radio" id="fruit4" name="stream" value="Commerce">
                                    <label class="pl-2" for="fruit4">Commerce</label>
                                </span>
                                <span class="pl-3 media-pl-0">
                                    <input type="radio" id="fruit4" name="stream" value="Other">
                                    <label class="pl-2" for="fruit4">Other</label>
                                </span>
                            </div>
                            <div class="md-form mt-0 w-100">
                                <input type="text" class="form-control">
                                <label class="bold">Music/Audio Background Information:</label>
                            </div>
                            <div class="md-form mt-0 w-100">
                                <input type="text" class="form-control media-pt-20px">
                                <label class="bold">What are your future plans related to Audio Industry?</label>
                            </div>
                            <div class="md-form mt-0 w-100">
                                <input type="text" class="form-control">
                                <label class="bold">Any Health Problem</label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="bold">Parent's Signature</label><br>
                                    <div id="parent_sign" class="border">
                                        <parent_sign class="pointer"></parent_sign>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="bold">Student's Signature</label><br>
                                    <div id="student_sign" class="border">
                                        <student_sign class="pointer"></student_sign>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a type="button" class="print">
                                    <div class="font-bold mt-3 page-12-btn uppercase">
                                        download form
                                    </div>
                                </a>
                                <button type="reset" class="pl-4 font-bold font-13 text-grey2 mt-2 btn-reset">
                                    <div class="font-bold pt-1 mt-1">
                                        <img class="pr-2 pb-1" src="{{ asset('assets/frontend/img/reset.svg') }}"> Reset
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="font-regular pb-2 font-13 text-grey2 px-3">
                        <h5 class="font-medium text-black font-16 pt-5 pb-3">Terms and Conditions</h5>
                        The Terms & Conditions envisaged herein are integral to, and candidates applying for the admission in Crypto Cipher Academy are advised to go through the Terms and Conditions carefully, understand the same, and thereafter apply for the admission.
                        <div class="font-regular bold text-grey2 font-14 pt-2">Registration</div>
                        <ul class="font-regular text-grey2 font-13 pl-0 pt-2 quick-info">
                            <li>Candidates need to ensure that the information submitted by them is correct in all aspects.</li>
                            <li>Only one registration can be made in a particular batch by a candidate. Duplicate registrations are liable to be rejected and fee forfeited.</li>
                            <li>Candidates are required to upload their original photographs / Parents Signature as per the specification provided in this admission form. Failing to do so, they will be disallowed to take admission.</li>
                        </ul>
                        <div class="font-regular bold text-grey2 font-14">In Case of Cancellation of Registration</div>
                        <div class="pt-2">
                            The cancellation of registration hold back someone who is willing to take admission in the batch as there are limited number of seats and disturbs the overall arrangement.<br>It is advisable to make sure within you that you want study before registering yourself. However, in case of unavoidable circumstances, if a cancellation of registration is indispensable to be done, it will be carried out under three limitations:
                        </div>
                        <ul class="font-regular text-grey2 font-13 pl-0 pt-2 quick-info">
                            <li>If the candidate cancels his registration two weeks before the batch commencement date, he will get refund of 50 percent of registration amount excluding GST. B)</li>
                            <li>If the candidate inform and cancel his seat within the period of two weeks prior to batch commencement date, there will be no refund given back. C) </li>
                            <li>If the candidate don’t get in touch with the academy after registration and don’t show up in the first class, his/her seat will be cancelled with no refund. </li>
                        </ul>
                        <div class="font-regular bold text-grey2 font-14">Seat Cancellation Procedure</div>
                        <div class="pt-2">
                            Write an application signed by candidate and one of the parents stating clearly the reason for the cancellation of registration and submit to the office to initiate the process.
                        </div>
                        <div class="font-regular bold text-grey2 font-14 pt-2">How to Submit my Fee</div>
                        <ul class="font-regular text-grey2 font-13 pl-0 pt-2 quick-info">
                            <li>Students must pay their payable installment of fee within awarded time limit. Any delay in due payment (full or partial), beyond the contracted period, may payoff into the cancellation of seat with "no refund" at all.</li>
                            <li>No grace period will be offered for payment of installment.</li>
                            <li>Once commencement of batch is instituted, no fee will be refunded for any reason e.g. inability to attend classes due to health problems, change of mind, relocation to a new residence place or class schedule timings incompatibility etc.</li>
                        </ul>
                        <div class="font-regular bold text-grey2 font-14">Maintaining Classroom Discipline</div>
                        <ul class="font-regular text-grey2 font-13 pl-0 pt-2 quick-info">
                            <li>The classes will be scheduled in the morning and daytime according to modules. It is advisable to attend classes timely.</li>
                            <li>There will be no repetition of missed or absent classes/lectures due to logical complexity of course.</li>
                            <li>The language used by the teachers to teach will be a mix of Hindi and English. (Candidate must speak one out of two and be able to understand both.) </li>
                            <li>Any form of recording/capturing of lectures using any kind of A/V recording equipment is strictly prohibited as this is the intellectual property of the academy. Any failure in complying of this instruction in letter and spirit may results in confiscation of equipment and/or cancellation of registration.</li>
                            <li>Any act, willingly/unwillingly, within the academy premises, causing disturbance of academy environment, may lead to immediate cancellation of registration without any kind of refund. </li>
                        </ul>
                        <div class="font-regular bold text-grey2 font-14">Certification</div>
                        <div class="pt-2">
                            Certificates will only be issued after satisfying all the requirements related to exam modules and projects submission, within set deadlines, in maximum of 3 attempts.
                        </div>
                        <div class="font-regular bold text-grey2 font-14 pt-2">Health Advisory</div>
                        <div class="pt-2">
                            *Academy cares for the health of every student but will not be responsible for any ill-health situation/medical issue faced by candidate during the entire course duration, within or outside the premises. 
                        </div>

                        <h5 class="font-medium text-black font-16 pt-4">Undertaking</h5>
                        <div class="pt-2">
                            I/ We (The Student and/or Parents/Guardian) have completely read and understood the Terms and Conditions for admission as well as commencement of classes in the Crypto Cipher Academy. * <br>
                            I/ We also promise to abide by these rules and regulations. If found impeached, academy has right to take a disciplinary or legal action against us, and we will not challenge their decision in any court of law. * In case of any query/question/complaint or suggestion, you can access the management of academy by the following methods: 
                        </div>
                        <div class="pt-2">
                            <span class="bold">For Physical Access :</span> CRYPTO CIPHER Space No: 1, Second Floor DA - Block Market (Ramji Lal Commercial Shopping Complex) Shalimar Bagh, New Delhi – 110088. 
                        </div>
                        <div class="py-3">
                            <span>
                                <a href="tel:9910092983" class="font-bold text-dark font-22"><img class="pb-1" src="{{ asset('assets/frontend/img/call.svg') }}" width="22px"> Call US 9910092983</a>
                            </span>
                            <span class="pl-4">
                                <a href="mailto:academy@cryptocipher.in" class="font-bold text-dark font-22"><img src="{{ asset('assets/frontend/img/mailGrey.svg') }}" width="26px"> academy@cryptocipher.in</a>
                            </span>
                        </div>
                            
                        <div class="py-3">
                            <label class="bold font-regular font-13" for="myCheckbox">
                                <input id="myCheckbox" type="checkbox" class="pl-2" />
                                I Have Read and Understood all the Terms and Conditions and I Promise to Abide by all these Terms and Conditions and also those Implemented Further by Academy From Time to Time in Future. I also Certify that all the Information provided in this Admission form is Correct Best Extent to my Knowledge.
                            </lable>
                        </div>

                        <span class="font-bold font-14 text-black pr-3">Registration Fee : ₹ 11,800</span>
                        <button id="myButton" type="submit" class="btn btn-mt-2" disabled>Pay Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
<!-- currenmt date -->
<script type="text/javascript">
    var today = new Date();
    var day = today.getDate();
    var month = today.getMonth() + 1;
    var year = today.getFullYear();
    if (day < 10) {
      day = '0' + day
    }
    if (month < 10) {
      month = '0' + month
    }
    var out = document.getElementById("output");
    out.value = day + "/" + month + "/" + year;


    // preview image
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });

    //check to pay
    $(document).ready(function () {
        $('#myCheckbox').click(function () {
        $('#myButton').prop("disabled", !$("#myCheckbox").prop("checked")); 
        })
    });
</script>


<!-- image preview via vuejs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.3/vue.min.js"></script>
<script type="text/javascript">
Vue.component('parent_sign', {
  template: `
  <span @click="openUpload">
    <img ref="preview" :src="showImage" style="cursor:pointer;width:100%;">
    <input ref="input" @change="previewImage" type="file" id="file-field" accept="image/*" style="display: none" name="parent_sign"/>
  </span>`,
  data: () => { return {
    showImage: 'https://getstamped.co.uk/wp-content/uploads/WebsiteAssets/Placeholder.jpg'
  }},
  methods: {
    openUpload () {
      this.$refs.input.click()      
    },
    previewImage () {
      var reader = new FileReader()
      reader.readAsDataURL(this.$refs.input.files[0])
      reader.onload = e => {
        this.showImage = e.target.result
      } 
    }
  }
});

new Vue({
  el: '#parent_sign'
})

Vue.component('student_sign', {
  template: `
  <span @click="openUpload">
    <img ref="preview" :src="showImage" style="cursor:pointer;width:100%;">
    <input ref="input" @change="previewImage" type="file" id="file-field" accept="image/*" style="display: none" name="student_sign"/>
  </span>`,
  data: () => { return {
    showImage: 'https://getstamped.co.uk/wp-content/uploads/WebsiteAssets/Placeholder.jpg'
  }},
  methods: {
    openUpload () {
      this.$refs.input.click()      
    },
    previewImage () {
      var reader = new FileReader()
      reader.readAsDataURL(this.$refs.input.files[0])
      reader.onload = e => {
        this.showImage = e.target.result
      } 
    }
  }
});

new Vue({
  el: '#student_sign'
})
</script>

<!-- download form -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.3.3/jQuery.print.min.js"></script>
<script src="https://allurewebsolutions.com/allure.js"></script>
<script>
$('.print').on('click', function() {
    $.print(".register-form");
});
</script>
@endsection