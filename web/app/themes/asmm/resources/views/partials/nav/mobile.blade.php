<div id="menu-mobile" class="hidden">
  <div class="px-2 pt-2 pb-3 space-y-1">
    @foreach($items as $item)
      <a
        href="{{ $item->url }}"
        @if($item->active)
        class="bg-green text-blue-dark block px-3 py-2 rounded-md text-sm font-medium"
        @else
        class="text-gray-300 hover:bg-green-700 hover:text-white block px-3 py-2 rounded-md text-sm font-medium"
        @endif
        aria-current="page"
      >{!! esc_html($item->label) !!}</a>
    @endforeach
  </div>
</div>
