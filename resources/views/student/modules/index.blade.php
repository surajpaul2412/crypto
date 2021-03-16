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
@if($userModules->count())
<div class="table-responsive px-3 pb-5">
 <table class="table table-striped">
    <thead>
        <tr>
          <th>S. No</th>
          <th>Module Name</th>
          <th>Title</th>
          <th>Description</th>
          <th>View Video</th>
        </tr>
    </thead>
    <tbody>
      @foreach($videos as $key => $video)
          @foreach($video as $index => $row)
          <tr>
            <td>{{$index+$key+1}}.</td>            
            <td class="bold">{{$row->module->name}}</td>            
            <td class="bold">{{$row->title}}</td>
            <td class="bold">{{$row->description}}</td>
            <td>
              <a href="{{ route('student.modules.show',$row->id)}}" target="_blank">
                <i class="material-icons">play_circle_outline</i>
              </a>
            </td>
          </tr>
          @endforeach
      @endforeach
    </tbody>
  </table>
</div>
@else
<h3 class="bold text-dark" align="center">No Modules available now! Ask admin to add some.</h3>
@endif
@endsection
