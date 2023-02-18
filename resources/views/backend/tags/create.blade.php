@extends('backend.layouts.master')

@section('content')
<!-- Elements -->
<div class="block block-rounded">
  <div class="block-header block-header-default">
    <h3 class="block-title">Forms</h3>
  </div>
  <div class="block-content">
    <form action="{{route('admin.tags.store')}}" method="POST" enctype="multipart/form-data" >
      @csrf
      <!-- Basic Elements -->
      <h2 class="content-heading pt-0">{{ __('custom.titles.tag_info') }}</h2>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-4">
            <label class="form-label" for="name">{{ __('custom.attributes.name') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name Input" value="{{old('name')}}">
            @error('name')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
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


