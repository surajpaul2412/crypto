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
  .btn:not(.btn-link):not(.btn-circle) span{
    display: none;
  }
</style>

<div class="row clearfix pt-5">    
  <div class="col-lg-12 mb-4 col-md-12 col-sm-12 col-xs-12">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br/>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <div class="pb-3 pt-4 px-4 bg-white" style="border-radius: 5px;border: solid 0.5px #d3d2d8;">
        <form action="{{ route('register.update', $details->id) }}" method="post">
        @csrf
        @method('PATCH')
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

            <div class="bold text-success font-20">Education :</div>
            <h6 class="text-dark">10th School: <?php echo $details['10_school']; ?> </h6>
            <h6 class="text-dark">10th Year: <?php echo $details['10_year']; ?> </h6>
            <h6 class="text-dark">10th Board: <?php echo $details['10_board']; ?> </h6><br>
            <h6 class="text-dark">12th School: <?php echo $details['12_school']; ?> </h6>
            <h6 class="text-dark">12th Year: <?php echo $details['12_year']; ?> </h6>
            <h6 class="text-dark">12th Board: <?php echo $details['12_board']; ?> </h6><br>
            <h6 class="text-dark">Under Graduation School: <?php echo $details['ug_school']; ?> </h6>
            <h6 class="text-dark">Under Graduation Year: <?php echo $details['ug_year']; ?> </h6>
            <h6 class="text-dark">Under Graduation Board: <?php echo $details['ug_board']; ?> </h6><br>
            <h6 class="text-dark">Graduation School: <?php echo $details['g_school']; ?> </h6>
            <h6 class="text-dark">Graduation Year: <?php echo $details['g_year']; ?> </h6>
            <h6 class="text-dark">Graduation Board: <?php echo $details['g_board']; ?> </h6><br>
            <h6 class="text-dark">Post Gradiation School: <?php echo $details['pg_school']; ?> </h6>
            <h6 class="text-dark">Post Gradiation Year: <?php echo $details['pg_year']; ?> </h6>
            <h6 class="text-dark">Post Gradiation Board: <?php echo $details['pg_board']; ?> </h6><br>
            <h6 class="text-dark">Stream: <?php echo $details['stream']; ?> </h6>
            <h6 class="text-dark">Music Background Info: <?php echo $details['music_bg_info']; ?> </h6>
            <h6 class="text-dark">Future Plans: <?php echo $details['plans']; ?> </h6>
            <div class="bold text-success font-20">Payment Structure :</div>
            @if($details->fees_status == 0)
                <h6 class="text-dark">Fees Status: <span class="text-danger">Pending</span> 
                <select class="d-flex" name="fees_status">
                    <option value="{{$details->fees_status}}" selected>-- Change Status --</option>
                    <option value="1">Paid</option>
                    <option value="0">Pending</option>
                    <option value="2">Installment</option>
                </select>
                </h6>
            @elseif($details->fees_status == 1)
                <h6 class="text-dark">Fees Status: <span class="text-success">Paid</span> 
                <select class="d-flex" name="fees_status">
                    <option value="{{$details->fees_status}}" selected>-- Change Status --</option>
                    <option value="1">Paid</option>
                    <option value="0">Pending</option>
                    <option value="2">Installment</option>
                </select>
                </h6>
            @elseif($details->fees_status == 2)
                <h6 class="text-dark">Fees Status: <span class="text-info">Installment</span> 
                <select class="d-flex" name="fees_status">
                    <option value="{{$details->fees_status}}" selected>-- Change Status --</option>
                    <option value="1">Paid</option>
                    <option value="0">Pending</option>
                    <option value="2">Installment</option>
                </select>
                </h6>
            @endif
            <h6 class="text-dark">
            Mode Of Payment (Note*): 
            <input type="text" name="fees_mode_of_payment" class="form-control mt-3" value="{{$details->fees_mode_of_payment}}">
            </h6>

            <button class="btn btn-success" type="submit">Update status</button>
        </form>
    </div>
  </div>
</div>
@endsection
