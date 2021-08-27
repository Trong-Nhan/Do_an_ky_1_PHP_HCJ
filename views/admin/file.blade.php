@extends('layouts.master')

@section('title')
    Dashboard 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> File Manager</h4>
        </div>
        <div class="card-body">
          <iframe src="{{url('file')}}/dialog.php?akey=wendwebsite" style="width: 100%; height: 500px; border: 0; overflow-y: auto"></iframe>
        </div>
      </div>
    </div>
  </div>

@endsection


@section('scripts')

@endsection