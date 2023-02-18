@extends('backend.layouts.master')

@section('content')
<div class="block block-rounded">
  <div class="block-header block-header-default">
    <h3 class="block-title">
      Dynamic Table <small>Full pagination</small>
    </h3>
  </div>
  <div class="block-content block-content-full">
    <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
      <thead>
        <tr>
          <th class="text-center" style="width: 80px;">#</th>
          <th>Title</th>
          <th class="d-none d-sm-table-cell" style="width: 30%;">Description</th>
          <th class="d-none d-sm-table-cell" style="width: 15%;">Thumbnail</th>
          <th style="width: 15%;">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td class="text-center">{{$loop->iteration}}</td>
          <td class="fw-semibold"><a href="{{route('admin.posts.show', $post)}}">{{$post->title}}</a></td>
          <td class="d-none d-sm-table-cell">
            {{$post->description}}
          </td>
          <td class="d-none d-sm-table-cell">
            <img class="img-post img-thumb" src="{{$post->thumbnail}}" alt="">
          </td>
          <td class="fw-semibold">
            <a href="{{ route('admin.posts.edit', $post->id) }}"><i class="fa fa-pencil btn btn-warning"></i></a>
            <a href="">
              <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" role="form" style="display:inline">
                  @csrf
                  @method('DELETE')                   
                  <button onclick="return confirm('Are you sure to delete?')" data-toggle="tooltip" data-original-title="Delete group" type="submit" class="fa fa-trash-can btn btn-danger"></button>
              </form>
              
          </a>
            {{-- <i class="fa fa-pencil btn btn-warning"></i> --}}
            {{-- <i class="fa fa-xmark btn btn-danger"></i> --}}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


    
@endsection

@section('css')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{asset('backend/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css')}}">
    
@endsection

@section('script')
<!-- Page JS Plugins -->
<script src="{{asset('backend/assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/datatables-buttons-jszip/jszip.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/datatables-buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/datatables-buttons/buttons.html5.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('backend/assets/js/pages/be_tables_datatables.min.js')}}"></script>
    
@endsection
