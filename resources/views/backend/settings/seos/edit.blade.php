@extends('backend.layouts.master')

@section('content')
<!-- Elements -->
<div class="block block-rounded">
  <div class="block-header block-header-default">
    <h3 class="block-title">Forms</h3>
  </div>
  <div class="block-content">
    <form action="{{route('admin.webinfo.update')}}" method="POST" enctype="multipart/form-data" >
      @csrf
      @method('PUT')
      <!-- Basic Elements -->
      <h2 class="content-heading pt-0">{{ __('custom.titles.web_info') }}</h2>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="author">{{ __('custom.attributes.web_info.author') }}</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" placeholder="{{ __('custom.attributes.web_info.author') }} Input" value="{{old('author') ?? $website->author}}">
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="author_description">{{ __('custom.attributes.web_info.author_description') }}</label>
            <input type="text" class="form-control @error('author_description') is-invalid @enderror" id="author_description" name="author_description" placeholder="{{ __('custom.attributes.web_info.author_description') }} Input" value="{{old('author_description') ?? $website->author_description}}">
          </div>
        </div>
      </div>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="meta_title">{{ __('custom.attributes.web_info.meta_title') }}</label>
            <input type="text" class="form-control @error('meta_title') is-invalid @enderror" id="meta_title" name="meta_title" placeholder="{{ __('custom.attributes.web_info.meta_title') }} Input" value="{{old('meta_title') ?? $website->meta_title}}">
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="meta_description">{{ __('custom.attributes.web_info.meta_description') }}</label>
            <input type="text" class="form-control @error('meta_description') is-invalid @enderror" id="meta_description" name="meta_description" placeholder="{{ __('custom.attributes.web_info.meta_description') }} Input" value="{{old('meta_description') ?? $website->meta_description}}">
          </div>
        </div>
      </div>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="meta_keywords">{{ __('custom.attributes.web_info.meta_keywords') }}</label>
            <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror" id="meta_keywords" name="meta_keywords" placeholder="{{ __('custom.attributes.web_info.meta_keywords') }} Input" value="{{old('meta_keywords') ?? $website->meta_keywords}}">
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="meta_robots">{{ __('custom.attributes.web_info.meta_robots') }}</label>
            <input type="text" class="form-control @error('meta_robots') is-invalid @enderror" id="meta_robots" name="meta_robots" placeholder="{{ __('custom.attributes.web_info.meta_robots') }} Input" value="{{old('meta_robots') ?? $website->meta_robots}}">
          </div>
        </div>
      </div>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="meta_type">{{ __('custom.attributes.web_info.meta_type') }}</label>
            <input type="text" class="form-control @error('meta_type') is-invalid @enderror" id="meta_type" name="meta_type" placeholder="{{ __('custom.attributes.web_info.meta_type') }} Input" value="{{old('meta_type') ?? $website->meta_type}}">
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="google_verification">{{ __('custom.attributes.web_info.google_verification') }}</label>
            <input type="text" class="form-control @error('google_verification') is-invalid @enderror" id="google_verification" name="google_verification" placeholder="{{ __('custom.attributes.web_info.google_verification') }} Input" value="{{old('google_verification') ?? $website->google_verification}}">
          </div>
        </div>
      </div>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="google_analytics">{{ __('custom.attributes.web_info.google_analytics') }}</label>
            <textarea class="form-control" id="google_analytics" name="google_analytics" rows="4" placeholder="{{ __('custom.attributes.web_info.google_analytics') }} content..">{{old('google_analytics') ?? $website->google_analytics}}</textarea>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="alexa_analytics">{{ __('custom.attributes.web_info.alexa_analytics') }}</label>
            <textarea class="form-control" id="alexa_analytics" name="alexa_analytics" rows="4" placeholder="{{ __('custom.attributes.web_info.alexa_analytics') }} content..">{{old('alexa_analytics') ?? $website->alexa_analytics}}</textarea>
          </div>
        </div>
      </div>

      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="logo">{{ __('custom.attributes.web_info.logo') }}</label>
            <div class="input-group">
              <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-image"></i> Choose
                </a>
              </span>
              <input id="thumbnail" class="form-control {{$errors->has('logo') ? 'is-invalid' : ''}}" type="text" name="logo" value="{{old('logo') ?? $website->logo}}">
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1" id="holder">
          <img style="margin-top:15px;max-height:300px;" src="{{$website->logo}}">
        </div>
      </div>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="author_image">{{ __('custom.attributes.web_info.author_image') }}</label>
            <div class="input-group">
              <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-image"></i> Choose
                </a>
              </span>
              <input id="thumbnail" class="form-control {{$errors->has('author_image') ? 'is-invalid' : ''}}" type="text" name="author_image" value="{{old('author_image') ?? $website->author_image}}">
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1" id="holder">
          <img style="margin-top:15px;max-height:300px;" src="{{$website->author_image}}">
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