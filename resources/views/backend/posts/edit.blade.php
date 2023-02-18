@extends('backend.layouts.master')

@section('content')
<!-- Elements -->
<div class="block block-rounded">
  <div class="block-header block-header-default">
    <h3 class="block-title">Forms</h3>
  </div>
  <div class="block-content">
    <form action="{{route('admin.posts.update', $post)}}" method="POST" enctype="multipart/form-data" >
      @csrf
      @method('PUT')
      <!-- Basic Elements -->
      <h2 class="content-heading pt-0">{{ __('custom.titles.post_info') }}</h2>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="title">{{ __('custom.attributes.title') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Title Input" value="{{old('title') ?? $post->title}}">
            @error('title')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="description">{{ __('custom.attributes.description') }}</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Description content..">{{old('description') ?? $post->description }}</textarea>
            @error('description')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
      </div>

      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="image">{{ __('custom.attributes.image') }} <span class="text-danger">*</span></label>
            <div class="input-group">
              <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-image"></i> Choose
                </a>
              </span>
              <input id="thumbnail" class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" type="text" name="image" value="{{old('image') ??  $post->image}}">
            </div>
            @error('image')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror          
          </div>
        </div>
          <div class="col-lg-5 offset-lg-1" id="holder">
            <img src="{{old('image') ?? $post->thumbnail}}" alt="">
          </div>
      </div>

      <div class="row push">
        <div class="col-lg-5 ">
          <div class="mb-2">
            <label class="form-label" for="image_caption">{{ __('custom.attributes.image_caption') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('image_caption') is-invalid @enderror" id="image_caption" name="image_caption" placeholder="Image caption Input" value="{{old('image_caption') ?? $post->image_caption}}"> 
            @error('image_caption')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror          
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="source">{{ __('custom.attributes.source') }}</label>
            <input type="text" class="form-control @error('source') is-invalid @enderror" id="source" name="source" placeholder="Source caption Input" value="{{old('source') ?? $post->source}}"> 
            @error('source')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror          
          </div>
        </div>
      </div>

      <div class="row push">
        <div class="col-lg-5 ">
          <div class="mb-2">
            <label class="form-label" for="category_id">{{ __('custom.attributes.categories.category_id') }} <span class="text-danger">*</span></label>
              @php 
                $category_id = old('category_id') ?? $post->category_id; 
              @endphp
            <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
              <option value="">None</option>
              @foreach ($categories as $item)
                <option value="{{$item->id}}" {{$category_id == $item->id ? 'selected' : ''}}>{{ str_repeat('--/', $item->level) }} {{$item->name}}</option>
              @endforeach
            </select>
            @error('category_id')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          @php
            $status = old('status') ?? strval($post->status);
          @endphp
          <div class="mb-2">
            <label class="form-label">Status  <span class="text-danger">*</span></label>
            <div class="space-x-2">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="status_active" name="status" value="1" checked>
                <label class="form-check-label" for="status_active">Active</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="status_inactive" name="status" value="0" {{$status === '0' ? 'checked' : ''}}>
                <label class="form-check-label" for="status_inactive">Inactive</label>
              </div>
            </div>
          </div>
        </div>
      </div>

       {{-- date --}}
      <div class="row push">
        <div class="col-lg-5 ">
          <div class="mb-2">
            <label class="form-label" for="hot_date">{{ __('custom.attributes.posts.hot_date') }} <span class="text-danger">*</span></label>
            <input type="text" class="js-flatpickr form-control @error('hot_date') is-invalid @enderror" id="hot_date" name="hot_date" placeholder="Y-m-d" value="{{old('hot_date') ?? $post->hot_date}}">
            @error('hot_date')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="new_date">{{ __('custom.attributes.posts.new_date') }} <span class="text-danger">*</span></label>
            <input type="text" class="js-flatpickr form-control @error('new_date') is-invalid @enderror" id="new_date" name="new_date" placeholder="Y-m-d" value="{{old('new_date') ?? $post->new_date}}">
            @error('new_date')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
      </div>

      <div class="row push">
        <div class="col-lg-5 ">
          <div class="mb-2">
            <label class="form-label" for="published_at">{{ __('custom.attributes.posts.published_at') }} <span class="text-danger">*</span></label>
            <input type="text" class="js-flatpickr form-control @error('published_at') is-invalid @enderror" id="published_at" name="published_at" placeholder="Y-m-d" value="{{old('published_at') ?? $post->published_at}}">
            @error('published_at')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          @php
            $selected_tag = old('tags') ?? $old_tags;
          @endphp
          <div class="mb-4">
            <label class="form-label" for="published_at">{{ __('custom.attributes.tags') }}</label>
            <select class="js-select2 form-select" id="tags" name="tags[]" style="width: 100%;" data-placeholder="Choose many.." multiple>
              <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
              @foreach ($tags as $tag)
                <option value="{{$tag->id}}" {{$selected_tag && in_array($tag->id, $selected_tag) ? 'selected' : ''}}>{{$tag->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>

      <div class="row push">
        <div class="col-lg-12">
          <label class="form-label" for="content">{{ __('custom.attributes.posts.content') }} <span class="text-danger">*</span></label>
          <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">{{old('content') ?? $post->content}}</textarea>
          @error('content')
            <div class="invalid-feedback animated fadeIn">{{$message}}</div>
          @enderror 
        </div>

      </div>

      {{-- date --}}
 
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

@section('css')
  <!-- Page JS Plugins CSS -->
  <link rel="stylesheet" href="{{asset('backend/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/js/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/js/plugins/dropzone/min/dropzone.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/js/plugins/flatpickr/flatpickr.min.css')}}">
    
@endsection

@section('script')
  <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
  <script>
    $('#lfm').filemanager('image');
  </script>

  <!-- Page JS Plugins -->
  <script src="{{asset('backend/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/plugins/dropzone/min/dropzone.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/plugins/flatpickr/flatpickr.min.js')}}"></script>

  {{-- <script src="{{asset('backend/assets/js/plugins/ckeditor5-classic/build/ckeditor.js')}}"></script> --}}
  <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Maxlength + Select2 + Ion Range Slider + Masked Inputs + Password Strength Meter plugins) -->
  <script>Dashmix.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-rangeslider', 'jq-masked-inputs', 'jq-pw-strength']);</script>
  <script src="{{asset('backend/assets/js/plugins/ckeditor4/ckeditor.js')}}"></script>

  <!-- Page JS Helpers (CKEditor 5 plugins) -->
  {{-- <script>Dashmix.helpersOnLoad(['js-ckeditor5']);</script> --}}
        <!--
            Uncomment to load the Spanish translation
            <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/translations/es.js"></script>
        -->
  <script>
    var options = {
      filebrowserImageBrowseUrl: '/filemanager?type=Images',
      filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/filemanager?type=Files',
      filebrowserUploadUrl: '/filemanager/upload?type=Files&_token='
    };
  </script>
  <script>
    CKEDITOR.replace('content', options);
  </script>
@endsection


