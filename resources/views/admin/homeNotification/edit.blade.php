@extends('layouts.backend.app')

@section('title','dashboard')

@push('css')
@endpush

@section('content')
<style>
  .card-body{
    padding: 40px;
  }
  .form-control{
    border-bottom: 1px solid #888 !important;
  }
  .heading{
    color: #6bb51e;padding-top: 0px;text-align: center;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h3 class="heading">Edit Content</h3>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('admin.homeNotification.update', $homeNotification->id) }}" enctype="multipart/form-data">
          @method('PATCH')
          @csrf
          <div class="form-group">
              <label class="text-dark" for="seat">Seats Available :</label>
              <input type="text" class="form-control" name="seat" value="{{$homeNotification->seat}}" />
          </div>

          <div class="form-group">
              <label class="text-dark" for="date">date :</label>
              <input type="text" class="form-control" name="date" value="{{$homeNotification->date}}" />
          </div>

          <div class="form-group">
              <label class="text-dark" for="batch">batch :</label>
              <input type="text" class="form-control" name="batch" value="{{$homeNotification->batch}}" />
          </div>
          
          <button type="submit" class="btn btn-primary">Edit Content</button>
      </form>
  </div>
</div>
@endsection
