@extends('backend.layouts.master')

@section('hero')
<!-- Hero -->
<div class="bg-image" style="background-image: url('{{asset('backend/assets/media/photos/photo22@2x.jpg')}}');">
  <div class="bg-black-75">
    <div class="content content-top content-full text-center">
      <h1 class="fw-bold text-white mt-5 mb-3">
        {{$post->title}}
      </h1>
      {{-- <h2 class="h3 fw-normal text-white-75 mb-5">Building a new web platform.</h2> --}}
      <p>
        <span class="badge rounded-pill bg-primary fs-base px-3 py-2 me-2 m-1">
          <i class="fa fa-user-circle me-1"></i> by {{$post->user ? ucfirst($post->user->username) : ''}}
        </span>
        <span class="badge rounded-pill bg-primary fs-base px-3 py-2 m-1">
          <i class="fa fa-folder-open me-1"></i> {{$post->category->name}}
        </span>
      </p>
    </div>
  </div>
</div>
<!-- END Hero -->
    
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col-sm-8 py-5">
    {!! $post->content !!}
  </div>
</div>
@endsection