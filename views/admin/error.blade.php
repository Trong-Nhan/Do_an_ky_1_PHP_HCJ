@extends('layouts.master')

@section('title')
    Error 
@endsection


@section('content')
<?php 
  $code = isset($code) ? $code : 404;
  $title = isset($title) ? $title : 'Not Found';
  $message = isset($message) ? $message : 'Page Not Found';
 ?>


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Error</h4>
        </div>
        <div class="card-body">
          <div class="jumbotron">
            <h1 class="display-3">{{$code}}, {{$title}}</h1>
            <p class="lead">
              {{$message}}
            </p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@section('scripts')

@endsection