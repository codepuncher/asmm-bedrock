<div class="flex space-x-4">
  @foreach($items as $item)
    <a
      href="{{ $item->url }}"
      @if($item->active)
      class="bg-green text-blue-dark px-3 py-2 rounded-md text-sm font-medium"
      @else
      class="text-gray-300 hover:bg-green-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
      @endif
      aria-current="page"
    >{!! esc_html($item->label) !!}</a>
  @endforeach
</div>
