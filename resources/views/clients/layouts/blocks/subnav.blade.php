@if ($sub_menu->recursiveCategories->count())
  <li class="menu-item-has-children"><a href="{{route('clients.cat_posts', $sub_menu)}}">{{$sub_menu->name}}</a>
    <ul class="sub-menu">
      @foreach ($sub_menu->recursiveCategories as $item)
        @include('clients.layouts.blocks.subnav', ['sub_menu' => $item])
      @endforeach
    </ul>
  </li>
@else
  <li><a href="{{route('clients.cat_posts', $sub_menu)}}">{{$sub_menu->name}}</a></li>
@endif
