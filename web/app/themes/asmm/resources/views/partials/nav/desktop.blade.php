<div class="flex space-x-4">
  @foreach($items as $item)
    <a
      href="{{ $item->url }}"
      @if($item->active)
      class="bg-green text-white px-3 py-2 rounded-md text-sm font-medium"
      @else
      class="text-white hover:bg-green hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors"
      @endif
      aria-current="page"
    >{!! esc_html($item->label) !!}</a>
  @endforeach
</div>
