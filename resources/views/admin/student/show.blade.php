@extends('layouts.backend.app')

@section('content')
<style>
  .cross{
    position: absolute;
    right: 3px;
    top: -10px;
    background: transparent;
    border: none;
  }
  .edit{
    position: absolute;
    right: 15px;
    bottom: 0px;
  }
</style>

<div class="row clearfix pt-5">
      <div class="col-lg-12 mb-4 col-md-12 col-sm-12 col-xs-12">
        <div class="pb-3 pt-4 px-4 bg-white" style="border-radius: 5px;border: solid 0.5px #d3d2d8;">
            <img src="{{asset('images/students/')}}/{{$details->image}}" width="150px">
            <h4 class="bold text-dark">Name: {{$user->name}}</h4>
            <h4 class="bold text-dark">Email: {{$user->email}}</h4>
            <h6 class="text-dark">Mobile No.: <a href="tel:{{$user->phone}}">{{$user->phone}}</a></h6>

            <div class="bold text-success font-20">Address :</div>
            <h6 class="text-dark">Course: {{$details->course}}</h6>
            <h6 class="text-dark">Batch: {{$details->batch}}</h6>
            <h6 class="text-dark">Address: {{$details->address}}</h6>
            <h6 class="text-dark">nationality: {{$details->nationality}}</h6>
            <h6 class="text-dark">pincode: {{$details->pincode}}</h6>

            <div class="bold text-success font-20">Personal Details :</div>
            <h6 class="text-dark">Fathers Name: {{$details->fathers_name}}</h6>
            <h6 class="text-dark">Fathers Phone: <a href="tel:{{$details->fathers_phone}}">{{$details->fathers_phone}}</a></h6>
            <h6 class="text-dark">Guardian Name: {{$details->guardian_name}}</h6>
            <h6 class="text-dark">Guardian Occupation: {{$details->guardian_occupation}}</h6>

            <div class="bold text-success font-20">GST Details :</div>
            @if($details->gst == '1')
                <h6 class="text-dark">Gst Applicable: yes</h6>
            @else
                <h6 class="text-dark">Gst Applicable: No</h6>
            @endif
            <h6 class="text-dark">Trade Title: {{$details->trade_title}}</h6>
            <h6 class="text-dark">Trade Address: {{$details->trade_address}}</h6>
            <h6 class="text-dark">Gst Number: {{$details->gst_number}}</h6>


            <!-- <div class="bold text-success font-20">Education :</div> -->
            <!-- <h6 class="text-dark">10th School: {{$details->gst_number}}</h6> -->
        </div>
      </div>
</div>
@endsection
