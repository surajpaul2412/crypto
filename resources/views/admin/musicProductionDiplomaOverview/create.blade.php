@extends('layouts.backend.app')

@section('title','dashboard')

@push('css')
@endpush

@section('content')
<style>
  .card-body {
    padding: 40px;
  }
  .form-control {
    border-bottom: 1px solid #888 !important;
  }
  .heading {
    color: #6bb51e; padding-top: 0px; text-align: center;
  }
</style>

<div class="card uper">
  <div class="card-header">
    <h3 class="heading">Add Module Overview</h3>
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

    <form method="POST" action="{{ route('admin.musicProductionDiplomaOverview.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label class="text-dark" for="content">Content :</label>
        <textarea id="summernote" class="form-control" name="content"></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary">Add Module Overview</button>
    </form>
  </div>
</div>

<script>
  $('#summernote').summernote({
    placeholder: 'Edit content',
    tabsize: 2,
    height: 150,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>
@endsection
