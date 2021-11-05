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
          class="bg-green text-white px-3 py-2 rounded-md text-sm font-medium"
          @else
          class="text-white group-hover:bg-green px-3 py-2 rounded-md text-sm font-medium transition-colors"
          @endif
          aria-current="page"
        >{!! esc_html($item->label) !!}</a>

        <div class="hidden absolute group-hover:block dropdown-menu h-auto shadow w-48 pt-3">
          <ul>
            @foreach($item->children as $child)
              <li>
                <a
                  href="{{ $child->url }}"
                  @if($loop->first && $loop->last)
                    class="bg-white text-green text-sm block p-3 hover:bg-green hover:text-white transition-colors rounded"
                  @elseif($loop->first)
                    class="bg-white text-green text-sm block p-3 hover:bg-green hover:text-white transition-colors rounded-t"
                  @elseif($loop->last)
                    class="bg-white text-green text-sm block p-3 hover:bg-green hover:text-white transition-colors rounded-b"
                  @else
                    class="bg-white text-green text-sm block p-3 hover:bg-green hover:text-white"
                  @endif
                >{!! esc_html($child->label) !!}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </li>
    @endempty
  @endforeach
</ul>
