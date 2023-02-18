@extends('backend.layouts.master')

@section('content')
<!-- Elements -->
<div class="block block-rounded">
  <div class="block-header block-header-default">
    <h3 class="block-title">Forms</h3>
  </div>
  <div class="block-content">
    <form action="{{route('admin.categories.store')}}" method="POST" enctype="multipart/form-data" >
      @csrf
      <!-- Basic Elements -->
      <h2 class="content-heading pt-0">{{ __('custom.titles.category_info') }}</h2>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="name">{{ __('custom.attributes.name') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name Input" value="{{old('name')}}">
            @error('name')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="parent_id">{{ __('custom.attributes.categories.parent_id') }}</label>
              @php 
                $lv=0;
                $parent_id = old('parent_id') ?? 0; 
              @endphp
            <select class="form-select @error('parent_id') is-invalid @enderror" id="parent_id" name="parent_id">
              <option value="">None</option>
              @foreach ($categories as $item)
                <option value="{{$item->id}}" {{$parent_id == $item->id ? 'selected' : ''}}>{{ str_repeat('--/', $item->level) }} {{$item->name}}</option>
              @endforeach
            </select>
            @error('parent_id')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
      </div>

      <div class="row push">
        <div class="col-lg-5 ">
          <div class="mb-2">
            <label class="form-label" for="description">{{ __('custom.attributes.description') }}</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Textarea content..">{{old('description')}}</textarea>
          </div>
          
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="font_icon">{{ __('custom.attributes.font_icon') }}</span></label>
            <input type="text" class="form-control" id="font_icon" name="font_icon" placeholder="{{ __('custom.attributes.font_icon') }} Input" value="{{old('font_icon')}}">
            
          </div>
        </div>
      </div>
      <div class="row push">
        <div class="col-lg-5 ">
          <div class="mb-2">
            <label class="form-label" for="image">{{ __('custom.attributes.image') }}</label>
            <div class="input-group">
              <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-image"></i> Choose
                </a>
              </span>
              <input id="thumbnail" class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" type="text" name="image" value="{{old('image') ?? ''}}">
            </div>
            @error('image')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror          
          </div>
          
        </div>
        <div class="col-lg-5 offset-lg-1" id="holder">
          
        </div>
      </div>

      <!-- END Basic Elements -->
      <h2 class="content-heading">SEO Blocks</h2>
      <div class="row push">
        <div class="col-lg-5 ">
          <div class="mb-2">
            <label class="form-label" for="seo_title">{{ __('custom.attributes.seo_title') }}</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="seo_title" name="seo_title" placeholder="{{ __('custom.attributes.seo_title') }} Input" value="{{old('seo_title')}}">
            @error('seo_title')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="seo_alias">{{ __('custom.attributes.seo_alias') }}</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="seo_alias" name="seo_alias" placeholder="{{ __('custom.attributes.seo_alias') }} Input" value="{{old('seo_alias')}}">
            @error('seo_alias')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
      </div>
      <div class="row push">
        <div class="col-lg-5 ">
          <div class="mb-2">
            <label class="form-label" for="seo_meta_description">{{ __('custom.attributes.seo_meta_description') }}</label>
            <textarea class="form-control" id="seo_meta_description" name="seo_meta_description" rows="4" placeholder="{{ __('custom.attributes.seo_meta_description') }} content..">{{old('seo_meta_description')}}</textarea>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="seo_meta_keywords">{{ __('custom.attributes.seo_meta_keywords') }}</label>
            <textarea class="form-control" id="seo_meta_keywords" name="seo_meta_keywords" rows="4" placeholder="{{ __('custom.attributes.seo_meta_keywords') }} content..">{{old('seo_meta_keywords')}}</textarea>
          </div>
        </div>
      </div>

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

  <script>
    
    $('#name').keyup(function (e) { 
      e.preventDefault();
      changeToSlug('name', 'seo_alias');
      const title = $('#name').val()
      $('#seo_title').val(title);
      
    });

    $('#description').keyup(function (e) { 
      
      const description = $('#description').val()
      $('#seo_meta_description').val(description);
      
    });


  </script>
    
@endsection


