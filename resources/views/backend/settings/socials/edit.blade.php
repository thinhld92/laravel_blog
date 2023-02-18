@extends('backend.layouts.master')

@section('content')
<!-- Elements -->
<div class="block block-rounded">
  <div class="block-header block-header-default">
    <h3 class="block-title">Forms</h3>
  </div>
  <div class="block-content">
    <form action="{{route('admin.socials.update')}}" method="POST" enctype="multipart/form-data" >
      @csrf
      @method('PUT')
      <!-- Basic Elements -->
      <h2 class="content-heading pt-0">{{ __('custom.titles.socials_info') }}</h2>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="facebook">{{ __('custom.attributes.socials.facebook') }}</label>
            <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook" placeholder="{{ __('custom.attributes.socials.facebook') }} Input" value="{{old('facebook') ?? $social->facebook}}">
            @error('facebook')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="instagram">{{ __('custom.attributes.socials.instagram') }}</label>
            <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram" placeholder="{{ __('custom.attributes.socials.instagram') }} Input" value="{{old('instagram') ?? $social->instagram}}">
            @error('instagram')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
      </div>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="twitter">{{ __('custom.attributes.socials.twitter') }}</label>
            <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter" placeholder="{{ __('custom.attributes.socials.twitter') }} Input" value="{{old('twitter') ?? $social->twitter}}">
            @error('twitter')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="youtube">{{ __('custom.attributes.socials.youtube') }}</label>
            <input type="text" class="form-control @error('youtube') is-invalid @enderror" id="youtube" name="youtube" placeholder="{{ __('custom.attributes.socials.youtube') }} Input" value="{{old('youtube') ?? $social->youtube}}">
            @error('youtube')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
      </div>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="tiktok">{{ __('custom.attributes.socials.tiktok') }}</label>
            <input type="text" class="form-control @error('tiktok') is-invalid @enderror" id="tiktok" name="tiktok" placeholder="{{ __('custom.attributes.socials.tiktok') }} Input" value="{{old('tiktok') ?? $social->tiktok}}">
            @error('tiktok')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="linkedin">{{ __('custom.attributes.socials.linkedin') }}</label>
            <input type="text" class="form-control @error('linkedin') is-invalid @enderror" id="linkedin" name="linkedin" placeholder="{{ __('custom.attributes.socials.linkedin') }} Input" value="{{old('linkedin') ?? $social->linkedin}}">
            @error('linkedin')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
      </div>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="medium">{{ __('custom.attributes.socials.medium') }}</label>
            <input type="text" class="form-control @error('medium') is-invalid @enderror" id="medium" name="medium" placeholder="{{ __('custom.attributes.socials.medium') }} Input" value="{{old('medium') ?? $social->medium}}">
            @error('medium')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="zalo">{{ __('custom.attributes.socials.zalo') }}</label>
            <input type="text" class="form-control @error('zalo') is-invalid @enderror" id="zalo" name="zalo" placeholder="{{ __('custom.attributes.socials.zalo') }} Input" value="{{old('zalo') ?? $social->zalo}}">
            @error('zalo')
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