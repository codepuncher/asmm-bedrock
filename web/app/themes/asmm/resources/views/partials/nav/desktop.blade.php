<ul class="mb-0 flex list-none justify-between">
  @foreach ($items as $item)
    @empty($item->children)
      <li class="{{ $loop->first ? '' : 'ml-3' }} mb-0">
        <a
          class="{{ $item->classes }}"
          href="{{ $item->url }}"
          aria-current="page"
        >{!! esc_html($item->label) !!}</a>
      </li>
    @else
      <li class="dropdown group relative mb-0 ml-3">
        <a
          class="{{ $item->classes }} hover:before:content-none"
          href="{{ $item->url }}"
          aria-current="page"
        >{!! esc_html($item->label) !!}</a>

        <div class="dropdown-menu absolute hidden h-auto w-48 pt-3 shadow group-hover:block">
          <ul class="mb-0 list-none pl-0">
            @foreach ($item->children as $child)
              <li class="mb-0">
                <a
                  href="{{ $child->url }}"
                  @if ($loop->first && $loop->last) class="{{ $child->classes }} rounded"
                  @elseif($loop->first)
                    class="{{ $child->classes }} rounded-t"
                  @elseif($loop->last)
                    class="{{ $child->classes }} rounded-b"
                  @else
                    class="{{ $child->classes }}" @endif
                >{!! esc_html($child->label) !!}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </li>
    @endempty
  @endforeach
</ul>
