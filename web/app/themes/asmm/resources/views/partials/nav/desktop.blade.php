<ul class="flex justify-between">
  @foreach($items as $item)
    @empty($item->children)
      <li class="{{ $loop->first ? '' : 'ml-3' }}">
        <a
          href="{{ $item->url }}"
          class="{{ $item->classes }}"
          aria-current="page"
        >{!! esc_html($item->label) !!}</a>
      </li>
    @else
      <li class="group relative dropdown ml-3">
        <a
          href="{{ $item->url }}"
          class="hover:before:content-none {{ $item->classes }}"
          aria-current="page"
        >{!! esc_html($item->label) !!}</a>

        <div class="hidden absolute group-hover:block dropdown-menu h-auto shadow w-48 pt-3">
          <ul>
            @foreach($item->children as $child)
              <li>
                <a
                  href="{{ $child->url }}"
                  @if($loop->first && $loop->last)
                    class="{{ $child->classes }} rounded"
                  @elseif($loop->first)
                    class="{{ $child->classes }} rounded-t"
                  @elseif($loop->last)
                    class="{{ $child->classes }} rounded-b"
                  @else
                    class="{{ $child->classes }}"
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
