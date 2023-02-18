@extends('backend.layouts.master')

@section('content')
<!-- Elements -->
<div class="block block-rounded">
  <div class="block-header block-header-default">
    <h3 class="block-title">Forms</h3>
  </div>
  <div class="block-content">
    <form action="{{route('admin.groups.store')}}" method="POST" enctype="multipart/form-data" >
      @csrf
      <!-- Basic Elements -->
      <h2 class="content-heading pt-0">Thông tin nhóm người dùng</h2>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name Input" value="{{old('name')}}">
            @error('name')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="description">Description </label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="description Input" value="{{old('description')}}">
            @error('description')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
      </div>
      <!-- END Basic Elements -->

      <div class="row items-push">
        <div class="col-lg-2 mt-4">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>

    </form>
  </div>
</div>
<!-- END Elements -->


    
@endsection

@section('script')
  <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
  <script>
    $('#lfm').filemanager('image');
  </script>
    
@endsection


