<ul class="flex justify-between">
  @foreach($items as $item)
    @empty($item->children)
      <li class="{{ $loop->first ? '' : 'ml-3' }}">
        <a
          href="{{ $item->url }}"
          @if($item->active)
          class="bg-green text-white px-3 py-2 rounded-md text-sm font-medium"
          @else
          class="text-white hover:bg-green hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors"
          @endif
          aria-current="page"
        >{!! esc_html($item->label) !!}</a>
      </li>
    @else
      <li class="group relative dropdown ml-3">
        <a
          href="{{ $item->url }}"
          @if($item->active)
          class="bg-green text-white px-3 py-2 rounded-md font-medium"
          @else
          class="text-white group-hover:bg-green px-3 py-2 rounded-md text-sm font-medium transition-colors"
          @endif
          aria-current="page"
        >{!! esc_html($item->label) !!}</a>

        <div class="hidden absolute group-hover:block dropdown-menu h-auto shadow w-48 pt-3">
          <ul class="bg-white p-2 rounded">
            @foreach($item->children as $child)
              <li class="font-base">
                <a
                  href="{{ $child->url }}"
                  class="text-sm"
                >{!! esc_html($child->label) !!}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </li>
    @endempty
  @endforeach
</ul>
