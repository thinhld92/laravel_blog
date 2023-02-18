@extends('backend.layouts.master')

@section('content')
<!-- Elements -->
<div class="block block-rounded">
  <div class="block-header block-header-default">
    <h3 class="block-title">Forms</h3>
  </div>
  <div class="block-content">
    <form action="{{route('admin.users.update', $user)}}" method="POST" enctype="multipart/form-data" >
      @csrf
      @method('PUT')
      <!-- Basic Elements -->
      <h2 class="content-heading pt-0">{{ __('custom.titles.user_info') }}</h2>
      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="name">{{ __('custom.attributes.name') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name Input" value="{{old('name') ?? $user->name}}">
            @error('name')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="username">{{ __('custom.attributes.username') }} <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username Input" value="{{old('username') ?? $user->username}}">
            @error('username')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
      </div>
      <div class="row push">
        <div class="col-lg-5 ">
          <div class="mb-2">
            <label class="form-label" for="email">{{ __('custom.attributes.email') }}<span class="text-danger">*</span></label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Emai Input" value="{{old('email') ?? $user->email}}"> 
            @error('email')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror          
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-2">
            <label class="form-label" for="password">{{ __('custom.attributes.password') }} <span class="text-danger">*</span></label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password Input">
            @error('password')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror 
          </div>
        </div>
      </div>
      <div class="row push">
        <div class="col-lg-5 ">
          <div class="mb-2">
            <label class="form-label" for="group_id">{{ __('custom.attributes.group_id') }}</label>
            <select class="form-select @error('group_id') is-invalid @enderror" id="group_id" name="group_id">
              <option >Open this select menu</option>
              @php
                  $group_id = old('group_id') ?? $user->group_id;
              @endphp
              @foreach ($groups as $group)
                <option value="{{$group->id}}" {{$group_id == $group->id ? "selected" : ""}}>{{$group->name}}</option>
              @endforeach
            </select>
            @error('group_id')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="mb-4">
            <label class="form-label" for="profile_description">{{ __('custom.attributes.profile_description') }}</label>
            <textarea class="form-control" id="profile_description" name="profile_description" rows="4" placeholder="{{ __('custom.attributes.profile_description') }} content..">{{old('profile_description') ?? $user->profile_description}}</textarea>
          </div>
        </div>
      </div>

      <div class="row push">
        <div class="col-lg-5">
          <div class="mb-2">
            <label class="form-label" for="avatar">{{ __('custom.attributes.avatar') }}</label>
            <div class="input-group">
              <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-image"></i> Choose
                </a>
              </span>
              <input id="thumbnail" class="form-control {{$errors->has('avatar') ? 'is-invalid' : ''}}" type="text" name="avatar" value="{{old('avatar') ?? $user->avatar}}">
            </div>
            {{-- <input class="form-control {{$errors->has('avatar') ? 'is-invalid' : ''}}" type="file" id="avatar" accept="image/*"> --}}
            @error('avatar')
              <div class="invalid-feedback animated fadeIn">{{$message}}</div>
            @enderror          
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1" id="holder">
          <img style="margin-top:15px;max-height:300px;" src="{{$user->avatar ? $user->avatar : "https://ui-avatars.com/api/?name=". urlencode($user->name)}}">
          {{-- <img id="holder" style="margin-top:15px;max-height:100px;"> --}}
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


