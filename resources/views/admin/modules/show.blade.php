@extends('layouts.backend.app')

@section('content')

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}  
  </div><br/>
@endif
@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
<style>
  th{
    font-size: 13px !important;
    font-weight: bold !important;
    color: #6bb51e;
  }
  td{
    font-size: 13px !important;
  }
  button{
    border: none;
    background: transparent;
  }
</style>
@if($students->count())
<div class="table-responsive px-3 pb-5">
 <table class="table table-striped">
    <thead>
        <tr>
          <th>Name</th>
          <th>hy</th>
        </tr>
    </thead>
    <tbody>
    	
    			<?php
				foreach ($students as $key => $student) {
				?>
				<tr>
					<td>
						<?php
						$userId = $student->user_id;
						$userData = DB::table('users')->where('id', $userId)->get();


            $array = array();
						foreach ($userData as $key => $value) {
							echo $value->name;
              $array[] = $value->id;
						}
						?>
					</td>
          <td>hy</td>
				</tr>


				<?php
				}
				?>
     	

    </tbody>
  </table>







</div>
<!-- <p class="text-dark">{{$students}}</p> -->
<form>
  <select class="">
    <option>-- Select --</option>
    @foreach($users as $user)
    <?php
        $disabled = '';
        if($user->id == 4)
        { $disabled = 'disabled="disabled"';}
    ?>
    <option value="" {{$disabled}}>{{$user->id}}</option>
    @endforeach
  </select>
</form>

@else
<h3 class="bold text-dark" align="center">No student have accessing this module.</h3>
@endif
@endsection
